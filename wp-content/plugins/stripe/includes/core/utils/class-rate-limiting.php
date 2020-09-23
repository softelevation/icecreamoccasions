<?php
/**
 * Rate Limiting
 *
 * @package SimplePay\Core\Utils
 * @copyright Copyright (c) 2020, Sandhills Development, LLC
 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since 3.9.5
 */

namespace SimplePay\Core\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Rate Limiting
 *
 * @since 3.9.5
 */
class Rate_Limiting {

	/**
	 * Is the file writable.
	 *
	 * @var bool
	 */
	public $is_writable = true;

	/**
	 * The rate limiting log file.
	 *
	 * @var string
	 */
	private $filename = '';

	/**
	 * The file path to the log file.
	 *
	 * @var string
	 */
	private $file = '';

	/**
	 * Register any actions we need to use.
	 *
	 * @since 3.9.5
	 */
	public function init() {

		// Setup the log file.
		add_action( 'plugins_loaded', array( $this, 'setup_log_file' ), 11 );

		// Determines if the current rate limit has been exceeded.
		//
		// Note: Using this inside REST API permission checks means that it is called an additional
		//       time for the first permission check which is why the default is somewhat high.
		//
		//       https://github.com/WP-API/WP-API/issues/2400#issuecomment-202620551
		add_filter( 'simpay_has_exceeded_rate_limit', array( $this, 'has_hit_limit' ) );
	}

	/**
	 * Sets up the log file if it is writable
	 *
	 * @since 3.9.5
	 */
	public function setup_log_file() {
		$upload_dir       = wp_upload_dir();
		$this->filename   = wp_hash( home_url( '/' ) ) . '-wpsp-rate-limiting.log';
		$this->file       = trailingslashit( $upload_dir['basedir'] ) . $this->filename;

		if ( ! is_writeable( $upload_dir['basedir'] ) ) {
			$this->is_writable = false;
		}
	}

	/**
	 * Checks if the current IP address has hit the rate limit.
	 *
	 * @since 3.9.5
	 *
	 * @return bool
	 */
	public function has_hit_limit() {
		if ( ! $this->rate_limiting_enabled() ) {
			return false;
		}

		$count = $this->increment_rate_limit_count();

		$blocking_id = $this->get_rate_limit_id();
		$entry       = $this->get_rate_limiting_entry( $blocking_id );
		$expiration  = ! empty( $entry['timeout'] ) ? $entry['timeout'] : 0;

		// Previous request limit expiration has passed. Start fresh.
		if ( $expiration < time() ) {
			$this->remove_log_entry( $this->get_rate_limit_id() );
			return false;
		}

		$max_rate_count = 20;

		/**
		 * Filters the number of times the endpoint can be hit within the specified time period (1 hour).
		 *
		 * @since 3.9.5
		 *
		 * @param bool $max_error_count The maximum failed checkouts before blocking future attempts. Default 5.
		 */
		$max_rate_count = apply_filters( 'simpay_rate_limiting_max_rate_count', $max_rate_count );

		return $count >= $max_rate_count;
	}

	/**
	 * Remove an entry from the rate limiting log.
	 *
	 * @since 3.9.5
	 *
	 * @param string $blocking_id The blocking ID for the rate limiting.
	 */
	public function remove_log_entry( $blocking_id = '' ) {
		$current_logs = $this->get_decoded_file();
		unset( $current_logs[ $blocking_id ] );

		$this->write_to_log( $current_logs );
	}

	/**
	 * Get a specific entry from the rate limiting log.
	 *
	 * @since 3.9.5
	 *
	 * @param string $blocking_id The blocking ID to get the entry for.
	 * @return array
	 */
	public function get_rate_limiting_entry( $blocking_id = '' ) {
		$current_logs = $this->get_decoded_file();
		$entry = array();

		if ( array_key_exists( $blocking_id, $current_logs ) ) {
			$entry = $current_logs[ $blocking_id ];
		}

		return $entry;
	}


	/**
	 * Retrieves the number of times an IP address has made requests.
	 *
	 * @since 3.9.5
	 *
	 * @return int
	 */
	public function get_rate_count() {
		$blocking_id = $this->get_rate_limit_id();
		$count       = 0;

		$current_blocks = $this->get_decoded_file();

		if ( array_key_exists( $blocking_id, $current_blocks ) ) {
			$count = $current_blocks[ $blocking_id ]['count'];
		}

		return $count;
	}

	/**
	 * Increments the rate limit counter.
	 *
	 * @since 3.9.5
	 *
	 * @return int
	 */
	public function increment_rate_limit_count() {
		$current_count = $this->get_rate_count();
		$blocking_id   = $this->get_rate_limit_id();

		if ( empty( $current_count ) ) {
			$current_count = 1;
		} else {
			$current_count++;
		}

		$this->update_rate_limiting_count( $blocking_id, $current_count );

		return absint( $current_count );
	}

	/**
	 * Update an entry in the rate limiting array.
	 *
	 * @since 3.9.5
	 *
	 * @param string $blocking_id   The blocking ID.
	 * @param int    $current_count The count to update to.
	 */
	protected function update_rate_limiting_count( $blocking_id = '', $current_count = 0 ) {
		$expiration_in_seconds = HOUR_IN_SECONDS * 1.5;

		/**
		 * Filters the length of time before rate limits are reset.
		 *
		 * @since 3.9.5
		 *
		 * @param int $expiration_in_seconds The length in seconds before rate limit counts are reset. Default 60.
		 */
		$expiration_in_seconds = apply_filters( 'simpay_rate_limiting_timeout', $expiration_in_seconds );

		$current_log = $this->get_decoded_file();

		// New entry, add expiration time.
		if ( ! isset( $current_log[ $blocking_id ] ) ) {
			$current_log[ $blocking_id ]['timeout'] = time() + $expiration_in_seconds;
		}

		// Always increment count.
		$current_log[ $blocking_id ]['count'] = $current_count;

		$this->write_to_log( $current_log );
	}

	/**
	 * Determines if we should use rate limiting.
	 *
	 * @since 3.9.5
	 *
	 * @return bool
	 */
	public function rate_limiting_enabled() {
		$rate_limiting_enabled = true;

		/**
		 * Filters if rate limiting should be enabled.
		 *
		 * @since 3.9.5
		 *
		 * @param bool $rate_limiting_enabled Enables or disables rate limiting. Default true, enabled.
		 */
		$rate_limiting_enabled = apply_filters( 'simpay_rate_limiting_enabled', true );

		return true === $rate_limiting_enabled;
	}

	/**
	 * Generates the rate limiting tracking ID.
	 *
	 * @since 3.9.5
	 *
	 * @return string
	 */
	public function get_rate_limit_id() {
		return get_current_ip_address();
	}

	/**
	 * Retrieve the log data
	 *
	 * @since 3.9.5
	 * @return string
	 */
	protected function get_file_contents() {
		return $this->get_file();
	}

	/**
	 * Get the decoded array of rate limiting from the log file.
	 *
	 * @since 3.9.5
	 *
	 * @return array
	 */
	protected function get_decoded_file() {
		$decoded_contents = json_decode( $this->get_file_contents(), true );

		if ( is_null( $decoded_contents ) ) {
			$decoded_contents = array();
		}

		return (array) $decoded_contents;
	}

	/**
	 * Retrieve the file data is written to
	 *
	 * @since 3.9.5
	 *
	 * @return string
	 */
	protected function get_file() {
		$file = json_encode( array() );

		if ( @file_exists( $this->file ) ) {

			if ( ! is_writeable( $this->file ) ) {
				$this->is_writable = false;
			}

			$file = @file_get_contents( $this->file );
		} else {

			@file_put_contents( $this->file, $file );
			@chmod( $this->file, 0664 );
		}

		return $file;
	}

	/**
	 * Write the log message
	 *
	 * @since 3.9.5
	 *
	 * @param array $content The content of the rate limiting.
	 *
	 * @return void
	 */
	public function write_to_log( $content = array() ) {
		$content = json_encode( $content );

		if ( $this->is_writable ) {
			@file_put_contents( $this->file, $content );
		}
	}
}