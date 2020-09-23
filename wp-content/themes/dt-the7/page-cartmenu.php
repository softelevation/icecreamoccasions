<?php

defined( 'ABSPATH' ) || exit;

$config = presscore_config();
$config->set( 'template', 'page' );
$mailCheck = false;
get_header();
?>
<style>
.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
.ice-text input.inputNmber {
    float: none;
    width: auto;
    display: table;
    margin: 0px auto;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-text label {
    float: left;
    margin-left: 0;
    width: 100%;
}
.ice-text label input.customeChk {
    width: 50px !important;
    height: 18px !important;
}
.ice-text p input.inputNmber {
    width: 56%;
    float: none;
    display: table;
    margin: 0px auto;
}
.ice-text p {
    float: left;
    width: 100%;
    text-align: center;
    font-size: 16px;
    min-height: 60px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list li {
    float: left;
    width: 23% !important;
    text-align: center;
    list-style-type: none;
    min-height: 500px !important;
    max-height: 600px !important;
    margin-bottom: 0 !important;
    padding: 0 10px;
}
.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}
.ice-cream-list li {
    float: left;
    width: 25%;
    text-align: center;
    list-style-type: none;
    min-height: 400px;
    max-height: 400px;
    margin-bottom:40px
  
}
.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
input.form-control {
    border: none;
    float: right;
  
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}

.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

}
.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}.ice-cream-list hr {
    margin-bottom: 20px;
    border-bottom: 1px solid #cccccc;
    background: transparent;
    border-top: none;
}
h1.vc_custom_heading.ice-menu-heading-1 {
    background: #a88399 !important;
    padding-top: 35px;
    padding-bottom: 10px;
}
.ice-cream-list {
    width: 1300px;
    padding: 20px 50px 10px;
    margin: 0px auto;
   
    display: table;
}
 input.wpcf7-form-control.wpcf7-submit {
    text-align: center;
    display: table;
    margin: 0px auto;
    background: #f2c821 none repeat center center;
    font-size: 22px;
    padding: 0 20px;
    font-weight: 400;
    line-height: 40px;
}
.ice-cream-list span.wpcf7-list-item-label {
    float: left;
    font-size: 20px;
    font-weight: 400;
    font-style: normal;
    font-family: Oswald;
    color: #000;
    margin-right: 10px;
}
h1.vc_custom_heading.ice-menu-heading-1.color-1 {
    background: #420f00 !important;
}
.ice-cream-list .ice-text input[type="checkbox"] {
   
    margin-top: 10px;
}
.ice-img {
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.ice-text span.wpcf7-list-item {
    margin: 0;
}

.ice-cream-list ul {
    width: 100%;
    float: left;
}



/************ Mail Css ***************/

table {
   
    border-spacing: 0px;
}
	
	
		/* Linked Styles */
		body { background:#000; padding:0 !important; margin:0 !important; display:block !important; -webkit-text-size-adjust:none; background-image:url(images/t1_free_bg.jpg); background-repeat:no-repeat repeat-y; background-position:0 0 }
		a { color:#e85853; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }

				
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }

			.text-header,
			.m-center { text-align: center !important; }
			.holder { padding: 0 10px !important; }
			.ribbon { font-size: 18px !important; }
			.center { margin: 0 auto !important; }
			.td { width: 100% !important; min-width: 100% !important; }
				
			.text-header .link-white { text-shadow: 0 3px 4px rgba(0,0,0,09) !important; }

			.m-br-15 { height: 15px !important; }
			.bg { height: auto !important; } 


			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }
			.m-block { display: block !important; }

			.p30-15 { padding: 30px 15px !important; }
			.p15-15 { padding: 15px 15px !important; }
			.p30-0 { padding: 30px 0px !important; }
			.p0-0-30 { padding: 0px 0px 30px 0px !important; }
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }
			.p0-15 { padding: 0px 15px 0px 15px !important; }
			.mp0 { padding: 0px !important; }
			.mp20-0-0 { padding: 20px 0px 0px 0px !important }
			.mp30 { padding-bottom: 30px !important; }
			.container { padding: 20px 0px !important; }
			.outer { padding: 0px !important }
			.h0 { height: 0px !important; }
			.brr0 { border-radius: 0px !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-top,
			.column-dir,
			.column-empty,
			.column-empty2,
			.column-empty3,
			.column-bottom,
			.column-dir-top,
			.column-dir-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 10px !important; }
			.column-empty2 { padding-bottom: 25px !important; }
			.column-empty3 { padding-bottom: 45px !important; }

			.content-spacing { width: 15px !important; }
			.content-spacing2 { width: 25px !important; }
		}

</style>

<?php 

//echo "<pre>";print_r($_POST);die("kk");
  $row1_array = [
    [
       "id"=> "1",
       "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/8.5BB_LoaddSundaes_BunnyTracks_NEW-245x300.png",
       "title" =>"Bunny Tracks"
    ],
    [
        "id"=> "2",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/8.5BB_LoaddSundaes_CkCrnhFdg_NEW-254x300.png",
        "title" =>"Cookie Crunch 'N Fudge"
    ],
    [
        "id"=> "3",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/8.5BB_LoaddSundaes_StrawShrtkck_NEW-253x300.png",
        "title" =>"Strawberry Shortcake"
    ],
     [
        "id"=> "4",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/8.5BB_LoaddSundaes_SltCarmPecan_NEW-256x300.png",
        "title" =>"Salted Caramel pecan"
    ]
    
];

$row2_array = [
    [
       "id"=> "5",
       "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/A-117x300.jpg",
       "title" =>"Magnum Almond Milk Chocolate Vanilla Bar"
    ],
    [
        "id"=> "6",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/B-1-117x300.jpg",
        "title" =>"Magnum Double Caramel Ice Cream Bar"
    ],
    [
        "id"=> "7",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/C-117x300.jpg",
        "title" =>"Magnum Double Chocolate Vanilla Ice Cream Bar"
    ],
     [
        "id"=> "8",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/C1-1-117x300.jpg",
        "title" =>"King Size Brownie Sundae Cone"
    ]
    
];

$row3_array = [
    [
       "id"=> "9",
       "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/BB_C-Store_BigICS_DoubleStrawberry-300x209.png",
       "title" =>"Big Double Strawberry Sandwich"
    ],
    [
        "id"=> "10",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/BB_C-Store_BigICS_Mississippi-300x209.png",
        "title" =>"Big Mississippi Mud Sandwich"
    ],
    [
        "id"=> "11",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/BB_C-Store_BigICS_Neopolitan-300x209.png",
        "title" =>"Big Neapolitan Sandwich"
    ],
     [
        "id"=> "12",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/BB_C-Store_BigICS_Vanilla-300x209.jpg",
        "title" =>"Big Vanilla Sandwich"
    ]
    
];


$row4_array = [
    [
       "id"=> "13",
       "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/3.0oz-BRC-Orange-Dream-Bar-152x300.png",
       "title" =>"Orange Cream Bar"
    ],
    [
        "id"=> "14",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/05/BRC-Fudge-Bar-137x300.png",
        "title" =>"Fudge Bar"
    ],
    [
        "id"=> "15",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/06/Blue-157x300.jpg",
        "title" =>"Bobble Gum Snow Cone"
    ],
     [
        "id"=> "16",
        "img"=> "http://142.93.153.236/wp-content/uploads/2020/06/Blue-157x300.jpg",
        "title" =>"Jolly Rancher Snow Cone"
    ]
    
];

$posts =  $wpdb->get_results("SELECT * FROM wp_cartmenu where status = 1",ARRAY_A);
$posts1 = $wpdb->get_results("SELECT * FROM wp_cartmenu where status = 2",ARRAY_A);
$posts2 = $wpdb->get_results("SELECT * FROM wp_cartmenu where status = 3",ARRAY_A);
$posts3 = $wpdb->get_results("SELECT * FROM wp_cartmenu where status = 4",ARRAY_A);

$final_array = array_merge($posts,$posts1,$posts2,$posts3);

$userEmail = isset($_GET['em'])?$_GET['em']:'';
$results = $wpdb->get_row( "SELECT * FROM wp_wap_nex_forms_entries WHERE saved_user_email_address='".$userEmail."' order by id DESC LIMIT 1");
$res = json_decode($results->form_data);
//echo "<pre>";print_r($res);die("jjj");


if(isset($_POST['checkbox_cart']) && !empty($_POST['checkbox_cart'])){
    //$headers = array('Content-Type: text/html; charset=UTF-8');
  // echo "<pre>";print_R($_POST);die;
    $urlEmail = @$_GET['em'];
    // $headers = 'From: '. @$urlEmail . "\r\n" .
    //     'Content-Type: text/html; charset=UTF-8'.
    //     'Reply-To: ' . @$urlEmail . "\r\n";

    $headers = array(
        "From: $urlEmail",
        'Content-Type:text/html;charset=UTF-8',
        "Reply-To: $urlEmail"
    );
    $headers = implode("\r\n", $headers);
    $total_price = 0;

    foreach ($final_array as $key => $val) {
        foreach($_POST['checkbox_cart'] as $keys=>$value){
            if (@$val['id'] == @$value['chk']) {
                $price = (@$value['qty']*@$value['price']);

                global $wpdb;
                $table = 'wp_cartUsersProduct';
                $data = array('r_id' => $val['id'], 'price'=>@$price, 'qty'=>@$value['qty'], 'name' =>esc_sql($val['name']),'image' => $val['image'],'email' => @$urlEmail ,'status' => $val['status']);
           
              //  $format = array('%s','%d');
                $wpdb->insert($table,$data);
            }
        }
    };
   
    $html = '<strong>Customer has selected the ice-creams from the menu. Please check the updated cart by clinking on the below link.<strong><br>';
    $html .= '<a href="http://142.93.153.236/payement-stripedemo/?em='.$urlEmail.'">http://142.93.153.236/payement-stripedemo/?em='.$urlEmail.'</a>';
    $html .='<table width="100%" cellpadding="10" cellspacing="0" style="border-top:1px solid #ddd;border-right:1px solid #ddd;border-left:1px solid #ddd">
   <tbody>
      <tr>
         <td valign="top" style="padding-top:10px;padding-bottom:10px;border-bottom:1px solid #ddd;background-color:#f9f9f9" colspan="2"><strong>ICE CREAM Cart</strong></td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Orderid</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$results->Id.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Please select the package type</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[1]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Full name</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[2]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Phone</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[3]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Email</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top"><a href="mailto:amar@mailinator.com" target="_blank">'.$res[4]->field_value.'</a></td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Event address</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[5]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>City</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[6]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Zip code</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[7]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Est no of guest</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[8]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Event date</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[9]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Budget</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[10]->field_value.'</td>
      </tr>
      <tr></tr>
      <tr>
         <td width="30%" valign="top" style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;background-color:#f5f5f5"><strong>Brief description of your event</strong></td>
         <td width="70%" style="border-bottom:1px solid #ddd" valign="top">'.$res[11]->field_value.'</td>
      </tr>
      <tr>
      </tr>
   </tbody>
</table>';
																						
    
    //echo "<pre>";print_r($html);die("kk");
    $admin = get_option('admin_email');

    if(wp_mail($admin, 'Ice Cream Occasions', $html, $headers) )
    {
        echo "<div class='sucess-message'><p>CUSTOM INQUIRY | ICE CREAM COOLER BOX </p>
<p>Thank you for placing your order with Ice Cream Occasions, please allow us to review your request and we will get back to you ASAP, feel free to contact us anytime by dialing 1-800-900-7917 </p>

</div> ";
$mailCheck = true;
    } else {
        echo "mail not sent";
    }

    //echo  $html;
    //die;
}   

?>
<?php 

    if(!$mailCheck){
?>
<form method="post">
<div class="ice-cream-section">
    <h1 style="color: #ffffff;text-align: center;font-family:Oswald;font-weight:400;font-style:normal"
        class="vc_custom_heading  ice-menu-heading-1">LOAD'D SUNDAES $5</h1>
    <div class="ice-cream-list">
        <ul>
            <?php foreach($row1_array as $key=>$res) { ?>
                <li>
                    <div class="ice-img"><img
                            src="<?php echo $res['img']?>">
                    </div>
                    <div class="ice-text"><label><input name="checkbox_cart[<?=$key+1?>][chk]" type="checkbox" value="<?php echo $key+1; ?>" class="customeChk"  onclick="chkvalidate('<?=$key+1?>')"></label> <p><?php echo $res['title']; ?> </p>
                        <input type="text" readonly class="inputNmber priceInpt_<?=$key+1?>" placeholder="Quantity" name="checkbox_cart[<?=$key+1?>][qty]"> 
                        <input type="hidden" name="checkbox_cart[<?=$key+1?>][price]" value="5">
                     </div>
                </li>
            <?php }  ?>
        </ul>
        
    </div>
    <h1 style="color: #ffffff;text-align: center;font-family:Oswald;font-weight:400;font-style:normal"
        class="vc_custom_heading ice-menu-heading-1 color-1">PREMIUM $4</h1>
    <div class="ice-cream-list">
        <ul>

            <?php
                foreach ($row2_array as $row_2key => $row2_value) {
                
            ?>
            <li>
                <div class="ice-img"><img
                        src="<?php echo $row2_value['img']?>">
                </div>
                <div class="ice-text"><label><input name="checkbox_cart[<?=$row2_value['id']?>][chk]" type="checkbox" value="<?php echo $row2_value['id']; ?>" class="customeChk" onclick="chkvalidate('<?=$row2_value['id']?>')"></label> <p><?php echo $row2_value['title']; ?> </p>
                    <input type="text" readonly name="checkbox_cart[<?=$row2_value['id']?>][qty]" placeholder="Quantity" class="inputNmber priceInpt_<?=$row2_value['id']?>">
                    <input type="hidden" name="checkbox_cart[<?=$row2_value['id']?>][price]" value="4">
                 </div>
            </li>
            <?php } ?>


            
    </div>
    </ul>
    
</div>
<h1 style="color: #ffffff;text-align: center;font-family:Oswald;font-weight:400;font-style:normal"
    class="vc_custom_heading ice-menu-heading-1 color-2">CLASSIC $3</h1>
<div class="ice-cream-list">
    <ul>
        <?php
                foreach ($row3_array as $row_3key => $row3_value) {
                
            ?>
            <li>
                <div class="ice-img"><img
                        src="<?php echo $row3_value['img']?>">
                </div>
                <div class="ice-text"><label><input name="checkbox_cart[<?=$row3_value['id']?>][chk]" type="checkbox" value="<?php echo $row3_value['id']; ?>" class="customeChk" onclick="chkvalidate('<?=$row3_value['id']?>')"></label> <p><?php echo $row3_value['title']; ?> </p>
                    <input type="text" readonly name="checkbox_cart[<?=$row3_value['id']?>][qty]" placeholder="Quantity" class="inputNmber priceInpt_<?=$row3_value['id']?>">
                    <input type="hidden" name="checkbox_cart[<?=$row3_value['id']?>][price]" value="3">
                 </div>
            </li>
            <?php } ?>
    </ul>
    


</div>
<h1 style="color: #ffffff;text-align: center;font-family:Oswald;font-weight:400;font-style:normal"
    class="vc_custom_heading ice-menu-heading-1 color-3">SPECIAL $2</h1>
<div class="ice-cream-list">
    <ul>
    	<?php
                foreach ($row4_array as $row_4key => $row4_value) {
                
            ?>
            <li>
                <div class="ice-img"><img
                        src="<?php echo $row4_value['img']?>">
                </div>
                <div class="ice-text"><label><input name="checkbox_cart[<?=$row4_value['id']?>][chk]" type="checkbox" value="<?php echo $row4_value['id']; ?>" class="customeChk" onclick="chkvalidate('<?=$row4_value['id']?>')"></label> <p><?php echo $row4_value['title']; ?> </p>
                    <input type="text" readonly name="checkbox_cart[<?=$row4_value['id']?>][qty]" placeholder="Quantity" class="inputNmber priceInpt_<?=$row4_value['id']?>">
                    <input type="hidden" name="checkbox_cart[<?=$row4_value['id']?>][price]" value="2">
                 </div>
            </li>
            <?php } ?>
        
    </ul>
    
    

<input type="submit" class="form-control">
</div>

</form>

</div>
<?php } ?>

<script type="text/javascript">

    function chkvalidate(id){
        
        if (jQuery(".customeChk").is(":checked"))
        {
            jQuery(".priceInpt_"+id).attr('readonly',false);
          
        }else{
            jQuery(".priceInpt_"+id).attr('readonly',true);
            
        }
        
    }



    jQuery(document).ready(function () {
      //called when key is pressed in textbox
      jQuery(".inputNmber").keypress(function (e) {
         //if the letter is not digit then display error and don't type anything
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            
            return false;
        }
       });
    });

</script>
<?php get_footer(); ?>
