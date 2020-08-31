'use strict';

jQuery(document).ready(
function()
	{
		
		jQuery(document).on('click','.alert .close',
			function()
				{
				jQuery(this).parent().slideUp('slow')
				}
			);
			
		jQuery(document).on('click','input[name="email_method"]',
			function()
				{
				if(jQuery(this).val()=='smtp')
					jQuery('.smtp_settings').show();
				else
					jQuery('.smtp_settings,.smtp_auth_settings').hide();
				}
			);
		
		jQuery(document).on('click','input[name="smtp_auth"]',
			function()
				{
				if(jQuery(this).val()=='1')
					jQuery('.smtp_auth_settings').show();
				else
					jQuery('.smtp_auth_settings').hide();
				}
			);

		jQuery('#mail_chimp_setup').ajaxForm({
			data: {
			   action: 'save_mc_key'
			},
			beforeSubmit: function(formData, jqForm, options) {
				jQuery('#mail_chimp_setup  button').html('&nbsp;&nbsp;&nbsp;<span class="fa fa-spin fa-spinner"></span>&nbsp;Saving...&nbsp;&nbsp;&nbsp;')
			},
		   success : function(responseText, statusText, xhr, $form) {
			   jQuery('#mail_chimp_setup button').html('&nbsp;&nbsp;&nbsp;Save MailChimp API&nbsp;&nbsp;&nbsp;');
			   Materialize.toast('MailChimp API Saved', 2000, 'toast-success');
			   
			   var data =
					{
					action	 						: 'reload_mc_list',
					reload_mc_list					: 'true',
					};
				jQuery('.mail_chimp_setup').html('<div class="loading">Loading <i class="fa fa-circle-o-notch fa-spin"></i></div>')		
				jQuery.post
					(
					ajaxurl, data, function(response)
						{
						jQuery('.mail_chimp_setup').html(response);
						}
					);
			   
			   
			},
			 error: function(jqXHR, textStatus, errorThrown)
				{
				   console.log(errorThrown)
				}
		});
		
		
		jQuery('#get_response_setup').ajaxForm({
			data: {
			   action: 'save_gr_key'
			},
			beforeSubmit: function(formData, jqForm, options) {
				jQuery('#get_response_setup  button').html('&nbsp;&nbsp;&nbsp;<span class="fa fa-spin fa-spinner"></span>&nbsp;Saving...&nbsp;&nbsp;&nbsp;')
			},
		   success : function(responseText, statusText, xhr, $form) {
			   jQuery('#get_response_setup  button').html('&nbsp;&nbsp;&nbsp;Save GetResponse API&nbsp;&nbsp;&nbsp;');
			   Materialize.toast('GetResponse API Saved', 2000, 'toast-success');
			   
			   var data =
					{
					action	 						: 'reload_gr_list',
					reload_gr_list					: 'true',
					};
				jQuery('.get_response_setup').html('<div class="loading">Loading <i class="fa fa-circle-o-notch fa-spin"></i></div>')		
				jQuery.post
					(
					ajaxurl, data, function(response)
						{
						jQuery('.get_response_setup').html(response);
						}
					);
			   
			   
			},
			 error: function(jqXHR, textStatus, errorThrown)
				{
				   console.log(errorThrown)
				}
		});
		
		
		jQuery('#email_config').ajaxForm({
			data: {
			   action: 'save_email_config'
			},
			beforeSubmit: function(formData, jqForm, options) {
				jQuery('#email_config  button').html('&nbsp;&nbsp;&nbsp;<span class="fa fa-spin fa-spinner"></span>&nbsp;Saving...&nbsp;&nbsp;&nbsp;')
			},
		   success : function(responseText, statusText, xhr, $form) {
			   jQuery('#email_config  button').html('&nbsp;&nbsp;&nbsp;Save Email Setup&nbsp;&nbsp;&nbsp;');
			   Materialize.toast('Email Setup Saved', 2000, 'toast-success');
			   
			},
			 error: function(jqXHR, textStatus, errorThrown)
				{
				   console.log(errorThrown)
				}
		});
		
		
		jQuery('#script_config').ajaxForm({
			data: {
			   action: 'save_script_config'
			},
			beforeSubmit: function(formData, jqForm, options) {
				jQuery('#script_config button').html('&nbsp;&nbsp;&nbsp;<span class="fa fa-spin fa-spinner"></span>&nbsp;Saving...&nbsp;&nbsp;&nbsp;')
			},
		   success : function(responseText, statusText, xhr, $form) {
			   jQuery('#script_config  button').html('&nbsp;&nbsp;&nbsp;Save JS Inclusions&nbsp;&nbsp;&nbsp;');
			   Materialize.toast('JS Includes Saved', 2000, 'toast-success');
			   
			},
			 error: function(jqXHR, textStatus, errorThrown)
				{
				   console.log(errorThrown)
				}
		});
		
		jQuery('#script_config2').ajaxForm({
			data: {
			   action: 'save_script_config2'
			},
			beforeSubmit: function(formData, jqForm, options) {
				jQuery('#script_config button').html('&nbsp;&nbsp;&nbsp;<span class="fa fa-spin fa-spinner"></span>&nbsp;Saving...&nbsp;&nbsp;&nbsp;')
			},
		   success : function(responseText, statusText, xhr, $form) {
			    jQuery('#script_config  button').html('&nbsp;&nbsp;&nbsp;Save JS Inclusions&nbsp;&nbsp;&nbsp;');
			   Materialize.toast('JS Includes Saved', 2000, 'toast-success');
			   
			},
			 error: function(jqXHR, textStatus, errorThrown)
				{
				   console.log(errorThrown)
				}
		});
		
		
		jQuery('#import_form_html').ajaxForm({
			data: {
			   action: 'import_form_html'
			},
			beforeSubmit: function(formData, jqForm, options) {
			},
		   success : function(responseText, statusText, xhr, $form) {
			   
			},
			 error: function(jqXHR, textStatus, errorThrown)
				{
				   console.log(errorThrown)
				}
		});
		
		
		
		jQuery('#style_config').ajaxForm({
			data: {
			   action: 'save_style_config'
			},
			beforeSubmit: function(formData, jqForm, options) {
				jQuery('#style_config button').html('&nbsp;&nbsp;&nbsp;<span class="fa fa-spin fa-spinner"></span>&nbsp;Saving...&nbsp;&nbsp;&nbsp;')
			},
		   success : function(responseText, statusText, xhr, $form) {
			   jQuery('#style_config button').html('&nbsp;&nbsp;&nbsp;Save CSS Inclusions&nbsp;&nbsp;&nbsp;');
			    Materialize.toast('CSS Includes Saved', 2000, 'toast-success');
			   
			},
			 error: function(jqXHR, textStatus, errorThrown)
				{
				   console.log(errorThrown)
				}
		});
		
		
		
		jQuery('#other_config').ajaxForm({
			data: {
			   action: 'save_other_config'
			},
			beforeSubmit: function(formData, jqForm, options) {
				jQuery('#other_config  button').html('&nbsp;&nbsp;&nbsp;<span class="fa fa-spin fa-spinner"></span>&nbsp;Saving...&nbsp;&nbsp;&nbsp;')
			},
		   success : function(responseText, statusText, xhr, $form) {
			  jQuery('#other_config  button').html('&nbsp;&nbsp;&nbsp;Save WP Admin Options&nbsp;&nbsp;&nbsp;');
			  Materialize.toast('Admin option Saved', 2000, 'toast-success');
			   
			},
			 error: function(jqXHR, textStatus, errorThrown)
				{
				   console.log(errorThrown)
				}
		});
		
		jQuery(document).on('click','.send_test_email',
		function()
			{
			var get_btn_text = jQuery('.send_test_email').html();
			jQuery('.send_test_email').html('<span class="fa fa-spinner fa-spin"></span>&nbsp;Sending...');
			var data =
				{
				action			: 'nf_send_test_email',
				email_address  	: jQuery('input[name="test_email_address"]').val()
				};
		jQuery.post
			(
			ajaxurl, data, function(response)
				{
					jQuery('.send_test_email').html('Email Sent')
					Materialize.toast('Email Sent', 2000, 'toast-success');
					setTimeout( function(){ jQuery('.send_test_email').html(get_btn_text); },2000 )
				}
			);
			}
		);
		
	}
);