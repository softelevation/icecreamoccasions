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


</style>
<?php

defined( 'ABSPATH' ) || exit;

$config = presscore_config();
$config->set( 'template', 'page' );

get_header();
$userEmail = isset($_GET['em'])?$_GET['em']:'';
if($userEmail){
	$results = $wpdb->get_row( "SELECT * FROM wp_wap_nex_forms_entries WHERE saved_user_email_address='".$userEmail."' order by id DESC LIMIT 1");

	$cartData = $wpdb->get_results( "SELECT * FROM wp_cartUsersProduct WHERE email='".$userEmail."' AND is_payment=0");

	$res = json_decode($results->form_data);
	$pckg = explode('|',$res[1]->field_value);

?>
<div class="stripe stripe-style-5 bg-fixed" style="background-color: rgb(244, 244, 244); background-image: url(&quot;http://142.93.153.236/wp-content/uploads/2020/09/icecream_services.png&quot;); background-position: center bottom; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; padding-top: 50px; padding-bottom: 50px; margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
   <div class="vc_row wpb_row vc_row-fluid bg-section" style="">
      <div class="wpb_column vc_column_container vc_col-sm-3">
         <div class="vc_column-inner">
            <div class="wpb_wrapper">
               <div class="wpb_text_column wpb_content_element ">
                  <div class="wpb_wrapper">
                     <h3 class="oreder-class" style="text-align: left; color:#fff;">Order Number : 3323</h3>
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
                        <input type="hidden" name="discount_price" id="disPrice">
                        <input type="hidden" name="discount_total_price" id="disTotalPrice">
                        <input type="submit" name="send_cart" value="Send Cart" class="Send-button button-1"> 
                     </form> 
                     <a class="req-button button-1" href="#">Req Payment </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


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
                           $totalCart = 0;
                           $count = 0;
                           $actualPrice = 21;//@$pckg[1]; 
                           $amt = 0;
                        
                           foreach ($cartData as $key => $value) {
                            
                           	$amt += floatval($value->price); 
                           		if($amt > $actualPrice ){
                           			$count++;
                                 }
                                 
                           }
                           echo "<pre>";print_R($count);"</br>";die;
                          
                              
                        ?>
                        <?php 
                           foreach ($cartData as $key => $value) {

                           	$amt .=$value->price+$amt;
                              
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

                     	$totalCart += $value->price; } 
                     ?>
                       
                        <tr>
                           <th class="column-top" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;" width="100%">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-left: 1px solid #ccc; border-bottom: 1px solid #ccc;"></td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; border-right: 1px solid #ccc; padding: 10px; border-bottom: 1px solid #ccc;">Subtotal</td>
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$<?php $sbtotl = preg_replace('/[^0-9-.]+/', '', $pckg[1]); echo $totalCart?></td>
                                       <input type="hidden" value="<?php  echo $totalCart?>" class="pkgPrice">
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
                                       <td class="h3 center pb10" style="color: #000; width: 33%; font-family: arial; font-size: 16px; border-right 1px solid #ccc; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;"><input id="price" class="form-control" type="text" placeholder="%"></td>
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
                                       <td class="h3 center pb10 totalAmt" style="color: #000; width: 33%; font-family: arial; font-size: 16px; line-height: 20px; font-weight: bold; text-align: center; padding: 10px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;">$<?php echo $totalCart?></td>
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
               <div class="wpb_wrapper">
                  <p style="text-align: center;"><a class="edit-button button-1" href="#">Make Payment</a></p>
               </div>
            </div>
            <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
         </div>
      </div>
   </div>
</div>
<?php echo do_shortcode("[asp_product id='57409']"); ?>
<?php } ?>

<?php get_footer(); ?>