<style>
.page-title.title-center.solid-bg.page-title-responsive-enabled {
    display: none;
}
div#main {
    padding: 0 !important;
}
.stripe.stripe-style-5.bg-fixed:before {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: #444444c2;
    content: "";
}
.stripe {
    width: 100%;
    padding: 20px 2000px;
    margin-left: -2000px;
    overflow: hidden;
}
.no-cssgridlegacy.no-cssgrid .sidebar-none .content, .sidebar-none .content {
    width: 100%;
}
.button-section a.edit-button.button-1 {
    margin-top: 0;
}
#main:not(.sidebar-none) .wf-container-main {
   
    display:block !important;
}
input.Send-button.button-1 {
    background: #f2c821 !important;
    border: none !important;
    border-radius: 5px !important;
}
a.edit-button.button-1 {
    margin-top: 42px;
}
.vc_col-sm-3 {
    width: 25%;
    float: left;
}
.vc_col-sm-6 {
    width: 50%;
    float: left;
}
.vc_row:after, .vc_row:before {
    content: " ";
    display: table;
}
.vc_row:after {
    clear: both;
}
.stripe.stripe-style-5.bg-fixed {
    position: relative;
}
.stripe.stripe-style-5.bg-fixed p {
    color: #fff;
}
input#price {
    text-align: center;
}
.stripe.stripe-style-5.bg-fixed h3.oreder-class {
    color: #fff;
}
.stripe.stripe-style-5.bg-fixed h3 {
    color: #fff;
}
.button-1 {
    background: #f2c821;
    padding: 0 20px;
   
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    line-height: 40px;
     display:table;
    margin:0 auto;
}
.button-section .button-1 {
    background: #f2c821;
    padding: 0 20px;
   float: left;
   margin-right: 10px; 
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    line-height: 40px;
   
}

.vc_row.wpb_row.vc_row-fluid.bg-section {
    position: relative;
}

.asp_all_buttons_container .asp_product_buy_btn_container button{margin-left:50%;float:inherit !important;}
</style>


<?php

defined( 'ABSPATH' ) || exit;

$config = presscore_config();
$config->set( 'template', 'page' );
$mailCheck = false;
get_header();
$userEmail = isset($_GET['em'])?$_GET['em']:'';
if($userEmail){
	$results = $wpdb->get_row( "SELECT * FROM wp_wap_nex_forms_entries WHERE saved_user_email_address='".$userEmail."' order by id DESC LIMIT 1");

	$cartData = $wpdb->get_results( "SELECT * FROM wp_cartUsersProduct WHERE email='".$userEmail."' AND is_payment=0");


	$discountRow = $wpdb->get_row( "SELECT * FROM wp_cart_discounts WHERE email='".$userEmail."' order by id DESC LIMIT 1");
	//	echo "<pre>";print_r($discountRow);die("ddd");


	$res = json_decode($results->form_data);
	$pckg = explode('|',$res[1]->field_value);
	$urlEmail = @$_GET['em'];
	$quantity = explode(' ', $pckg[0]);
   
//echo "<pre>";print_r($sbtotl);die("dd");
	if(isset($_POST['send_hidden_cart']) && !empty($_POST['send_hidden_cart'])){

		$disPr = ($_POST['discount_price'])?$_POST['discount_price']:'';
		$disTotalPr = ($_POST['discount_total_price'])?$_POST['discount_total_price']:$pckg[1];

    	$disresults = $wpdb->get_results( "SELECT * FROM wp_cart_discounts WHERE email='".$userEmail."'");
    	if(!empty($disresults)){
       	
	       	$table = 'wp_cart_discounts';
	        $wpdb->delete($table, array( 'email' => $userEmail ) );

	        $Disdata = array('discount_price' => $disPr, 'total_price'=>@$disTotalPr, 'email'=>@$userEmail ,'status' => '1');
	   
	      //  $format = array('%s','%d');
	        $wpdb->insert($table,$Disdata);
	    }else{
	    	$table = 'wp_cart_discounts';
	    	$Disdata = array('discount_price' => $disPr, 'total_price'=>@$disTotalPr, 'email'=>@$userEmail ,'status' => '1');
	   
	      //  $format = array('%s','%d');
	        $wpdb->insert($table,$Disdata);
	    }
		
		$admin = get_option('admin_email');
		$headers = array(
	        "From: $admin",
	        'Content-Type:text/html;charset=UTF-8',
	        "Reply-To: $urlEmail"
	    );
	    $headers = implode("\r\n", $headers);
		$html = '<div class="wpb_wrapper">
        <p><strong>In respond to your request, please click on the below link to select the type of ice-creams from the menu cart.</strong></p>
		<a href="http://142.93.153.236/cartmenu?em='.$urlEmail.'">http://142.93.153.236/cartmenu?em='.$urlEmail.'</a> 
   <table border="0" width="100%" cellspacing="0" cellpadding="20px 0">
      <tbody>
         <tr>
            <td>
               <table border="0" width="100%" cellspacing="0" cellpadding="0">
                  <tbody>
                     <tr>
                        <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Name</td>
                                    <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Qty</td>
                                    <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Price</td>
                                 </tr>
                              </tbody>
                           </table>
                        </th>
                        <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                     </tr>
                     <tr>
                        <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">'.$pckg[0].'</td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">1</td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">'.$pckg[1].'</td>
                                   
                                 </tr>
                              </tbody>
                           </table>
                        </th>
                        <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                     </tr>
                     
                     
                     <tr>
                        <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-left: 1px solid #ccc; border-bottom: 1px solid #ccc;"></td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Subtotal</td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">'.$pckg[1].'</td>
                                 </tr>
                              </tbody>
                           </table>
                        </th>
                        <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                     </tr>
                     <tr>
                        <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td class="h3 center pb10" style="border-left: 1px solid #ccc; color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 0px solid #ccc;"></td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Discount</td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; border-right 1px solid #ccc; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">'.$disPr.'</td>
                                 </tr>
                              </tbody>
                           </table>
                        </th>
                        <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                     </tr>
                     <tr>
                        <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; border-left: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;"></td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Total</td>
                                    <td class="h3 center pb10 totalAmt" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$'.$disTotalPr.'</td>
                                 </tr>
                              </tbody>
                           </table>
                        </th>
                        <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
</div>';

	    if(wp_mail($urlEmail, 'Ice Cream Occasions', $html, $headers) )
	    {
	        echo "<div class='sucess-message'><p>Cart link has been sent successfully </p></div>";
	        $mailCheck = true;
	    } else {
	        echo "mail not sent";
	    }
	}


    if(isset($_POST['send_hidden_payment']) && !empty($_POST['send_hidden_payment'])){
         $sbtotMail = preg_replace('/[^0-9-.]+/', '', $pckg[1]);
         $disPr = ($_POST['discount_price'])?$_POST['discount_price']:'';
		$disTotalPr = ($_POST['discount_total_price'])?$_POST['discount_total_price']:$pckg[1];
         $disresults = $wpdb->get_results( "SELECT * FROM wp_cart_discounts WHERE email='".$userEmail."'");
    	if(!empty($disresults)){
       	
	       	$table = 'wp_cart_discounts';
	        $wpdb->delete($table, array( 'email' => $userEmail ) );

	        $Disdata = array('discount_price' => $disPr, 'total_price'=>@$disTotalPr, 'email'=>@$userEmail ,'status' => '1');
	   
	      //  $format = array('%s','%d');
	        $wpdb->insert($table,$Disdata);
	    }else{
	    	$table = 'wp_cart_discounts';
	    	$Disdata = array('discount_price' => $disPr, 'total_price'=>@$disTotalPr, 'email'=>@$userEmail ,'status' => '1');
	   
	      //  $format = array('%s','%d');
	        $wpdb->insert($table,$Disdata);
	    }
        $admin = get_option('admin_email');
        $headers = array(
            "From: $admin",
            'Content-Type:text/html;charset=UTF-8',
            "Reply-To: $urlEmail"
        );
        $headers = implode("\r\n", $headers);
        
        $html ='<p><strong>Thanks for choosing ice-cream occasions.</strong></p>';
        $html .='<p><strong>The final details of the payment of your request has been shown below.</strong></p>';



        $html .='<div class="wpb_text_column wpb_content_element ">
   <div class="wpb_wrapper">
      <table border="0" width="100%" cellspacing="0" cellpadding="20px 0">
         <tbody>
            <tr>
               <td>
                  <table border="0" width="100%" cellspacing="0" cellpadding="0">
                     <tbody>
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Name</td>
                                       <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Qty</td>
                                       <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Price</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">'.$pckg[0].'</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">1</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">'.$pckg[1].'</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>';
                        
                          
                           $qtye = $quantity[0];
                           //echo $qtye;die("hh");
                           $actualPrice = @$quantity[0];// preg_replace('/[^0-9-.]+/', '', $pckg[1]); 
                           $amt = 0;
                        
                           $totalCart = 0;
                                
                           $no=0;

                         
                      
                           foreach ($cartData as $key => $value) {
                                
                                  $amt += floatval($value->qty); 
                                  
                                 
                                if($amt > $actualPrice ){
                                
                                 $n_amt  = floatval($value->qty);
                               
                                   
                     
                    $html .= '<tr>
                        <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">'.$value->name.'</td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">'.$value->qty.'</td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$'.$value->price.'</td>
                                 </tr>
                              </tbody>
                           </table>
                        </th>
                        <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                     </tr>';
                     
                     $totalCart += $value->price;
                         }else{ 

                     $html .= '<tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">'. $value->name.'</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">'. $value->qty.'</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$0</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>';
                        }
                        //$totalCart += $value->price;
                         } 
                     
                       $mailDis = $disPr;//($discountRow->discount_price)?$discountRow->discount_price:'';
                       $mailTotal = ($disTotalPr)?$disTotalPr:($totalCart+$sbtotMail);//($discountRow->total_price)?$discountRow->total_price:($totalCart+$sbtotMail);
                       $html .= '<tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-left: 1px solid #ccc; border-bottom: 1px solid #ccc;"></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Subtotal</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$'.($totalCart+$sbtotMail).'</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="border-left: 1px solid #ccc; color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 0px solid #ccc;"></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Discount</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; border-right 1px solid #ccc; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">'.$mailDis.'%</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; border-left: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;"></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Total</td>
                                       <td class="h3 center pb10 totalAmt" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$'.$mailTotal.'</td>

                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>';

$html .='<p><strong>Please click on the payment link to make the payment.</strong></p>';
$html .= '<a href="http://142.93.153.236/payement-stripedemo?em='.$urlEmail.'">http://142.93.153.236/payement-stripedemo?em='.$urlEmail.'</a>';



























        if(wp_mail($urlEmail, 'Ice Cream Occasions', $html, $headers) )
        {
            echo "<div class='sucess-message'><p>Payemnt Request has been sent successfully </p></div>";
            $mailCheck = true;
        } else {
            echo "mail not sent";
        }
    }

	// $wp_user_search = $wpdb->get_results("SELECT * FROM $wpdb->users ORDER BY ID");
	// $temp = array();
	// foreach ($wp_user_search as $key=>$item){
	// 	array_push($temp, $item->user_email);
	// 	//$temp['adminUser'] = $item->ID;
	// }
        
	//echo "<pre>";print_r($temp);die("kk");
	//if(!in_array($urlEmail, $temp)){
?>
	
<?php //}else{ ?>
	<?php 

	if(!$mailCheck){
?>

<div class="stripe stripe-style-5 bg-fixed" style="background-color: rgb(244, 244, 244); background-image: url(&quot;http://142.93.153.236/wp-content/uploads/2020/09/icecream_services.png&quot;); background-position: center bottom; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; padding-top: 50px; padding-bottom: 50px; margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
   <div class="vc_row wpb_row vc_row-fluid bg-section" style="">
      <div class="wpb_column vc_column_container vc_col-sm-3">
         <div class="vc_column-inner">
            <div class="wpb_wrapper">
               <div class="wpb_text_column wpb_content_element ">
                  <div class="wpb_wrapper">
                     <h3 class="oreder-class" style="text-align: left; color:#fff;">Order Number : <?=$results->Id;?></h3>
                     <p style="text-align: left; color:#fff;"><?php echo $userEmail?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="wpb_column vc_column_container vc_col-sm-6">
         <div class="vc_column-inner">
            <div class="wpb_wrapper">
               <div class="wpb_text_column wpb_content_element ">
                  <div class="wpb_wrapper">
                     <h3 style="text-align: center; color:#fff;"><?php echo $res[2]->field_value?> <?php echo $res[3]->field_value?><br>
                        <?php echo $date = date('F d, Y',strtotime($res[9]->field_value));?>
                        <?php //echo $res[9]->field_value?>-Cart Rental-Corporate<br>
                        <?php echo $pckg[0]?>
                     </h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="wpb_column vc_column_container vc_col-sm-3">
         <div class="vc_column-inner">
            <div class="wpb_wrapper"></div>
         </div>
      </div>
   </div>
</div>
<?php 
//$adminUser = get_option('admin_email');
//echo $adminUser;echo "<pre>";print_r($temp);die("uu");
    //if(in_array($userEmail, $temp)){
      //$urlEmail = @$_GET['em'];
      //$admin_email = get_option('admin_email');
    // if($admin_email && (@$urlEmail != @$admin_email ) ){
      if ( is_user_logged_in() ) {
        
     
?>
<div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
   <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
            <div class="wpb_text_column wpb_content_element ">
               <div class="wpb_wrapper">
                  <div class="button-section">
                     <a class="edit-button button-1" href="#">Edit Cart </a> 
                     <!-- <a class="Send-button button-1" href="#">Send Cart </a> -->
                     <form method="post">
                        <input type="hidden" name="send_hidden_cart" value="1">
                        <input type="hidden" name="discount_price" class="disPrice">
                        <input type="hidden" name="discount_total_price" class="disTotalPrice">
                        <input type="submit" name="send_cart" value="Send Cart" class="Send-button button-1"> 
                     </form> 
                     <form method="post">
                        <input type="hidden" name="send_hidden_payment" value="2">
                         <input type="hidden" name="discount_price" class="disPrice" value="<?=($discountRow->discount_price?$discountRow->discount_price:'')?>">
                        <input type="hidden" name="discount_total_price" class="disTotalPrice" value="<?=($discountRow->total_price?$discountRow->total_price:'')?>">
                        <input type="submit" name="send_payment_req" value="Req Payment" class="Send-button button-1"> 
                     </form>
                    <!--  <a class="req-button button-1" href="#">Req Payment </a> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php } ?>

<div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
<div class="wpb_text_column wpb_content_element ">
   <div class="wpb_wrapper">
      <table border="0" width="100%" cellspacing="0" cellpadding="20px 0">
         <tbody>
            <tr>
               <td>
                  <table border="0" width="100%" cellspacing="0" cellpadding="0">
                     <tbody>
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Name</td>
                                       <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Qty</td>
                                       <td class="h3 center pb10" style="color: #fff; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 15px; border-bottom: 1px solid #ccc; background: #444444;">Price</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;"><?php echo $pckg[0]?></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">1</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;"><?php echo $pckg[1]?></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                        <?php 
                          
                           $qtye = $quantity[0];
                           //echo $qtye;die("hh");
                           $actualPrice = @$quantity[0];// preg_replace('/[^0-9-.]+/', '', $pckg[1]); 
                           $amt = 0;
                        
                           $totalCart = 0;
                                
                           $no=0;

                         
                        ?>
                        <?php 
                           foreach ($cartData as $key => $value) {
                                
                                  $amt += floatval($value->qty); 
                                  
                                 
                                if($amt > $actualPrice ){
                                
                                 $n_amt  = floatval($value->qty);
                               
                                   
                              
                        ?>
                        <tr>
                        <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;"><?php echo $value->name?></td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;"><?php echo $value->qty?></td>
                                    <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$<?php echo $value->price?></td>
                                 </tr>
                              </tbody>
                           </table>
                        </th>
                        <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                     </tr>
                     <?php
                     $totalCart += $value->price;
                         }else{ ?>
                           <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;"><?php echo $value->name?></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;"><?php echo $value->qty?></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$0</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                    <?php     }
                     	 } 
                     ?>
                       
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-left: 1px solid #ccc; border-bottom: 1px solid #ccc;"></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Subtotal</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$<?php $sbtotl = preg_replace('/[^0-9-.]+/', '', $pckg[1]); echo $totalCart+$sbtotl?></td>
                                       <input type="hidden" value="<?php  echo $totalCart+$sbtotl?>" class="pkgPrice">
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="border-left: 1px solid #ccc; color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 0px solid #ccc;"></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Discount</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; border-right 1px solid #ccc; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">
                                        <?php 
                                            if ( is_user_logged_in() ) {
                                            //echo  $discountRow->discount_price?$discountRow->discount_price:'';
                                         ?>
                                        <input id="price" class="form-control" type="text" placeholder="%" value="<?=($discountRow->discount_price)?$discountRow->discount_price:''?>">
                                        <?php }else if ( $discountRow->discount_price!='') {
                                            echo  ($discountRow->discount_price)?$discountRow->discount_price:'';
                                        }else{
                                        	echo  ($discountRow->discount_price)?$discountRow->discount_price:'';
                                        }
                                        ?>

                                       
                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; border-left: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;"></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Total</td>
                                       <td class="h3 center pb10 totalAmt" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$<?=($discountRow->total_price)?$discountRow->total_price:$totalCart+$sbtotl?></td>

                                    </tr>
                                 </tbody>
                              </table>
                           </th>
                           <th class="column-empty2" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;" width="21"></th>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
<div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
   <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
               <!-- <div class="wpb_wrapper">
                  <p style="text-align: center;"><a class="edit-button button-1" href="#">Make Payment</a></p>
               </div> -->
               <?php 
                if ( !is_user_logged_in() ) { 
               ?>
               <div class="wpb_wrapper">
                  <p style="text-align: center;">
                    
                        <?php echo do_shortcode('[asp_product id="57409"  button_text="Make Payment"]'); ?>
                     
                  </p>
               </div>
               <?php 
                }
               ?>
            </div>
            <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
         </div>
      </div>
   </div>
</div>

<?php } } else{ ?>

	<p>Access Denied</p>
<?php } ?>
























<script type="text/javascript">
	jQuery(document).on('blur','#price',function(){
		var per = jQuery(this).val();
		var pkgPrice = jQuery(".pkgPrice").val();
		var PerPrice = (pkgPrice*per)/100;
	
		var lastPrice = pkgPrice-PerPrice
		jQuery(".totalAmt").text('$'+lastPrice);
		jQuery(".disPrice").val(per);
		jQuery(".disTotalPrice").val(lastPrice);
	});


	jQuery(document).ready(function () {
      //called when key is pressed in textbox
      jQuery("#price").keypress(function (e) {
         //if the letter is not digit then display error and don't type anything
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            
            return false;
        }
       });
    });


</script>

<?php get_footer(); ?>