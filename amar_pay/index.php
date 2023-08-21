 <?php
// session_start();

// if(isset($_SESSION)){
//   $Full_payment=$_SESSION["total"] +100 ;
//    $name=$_SESSION["name"];
//      $email=$_SESSION["email"];
//      $mobile=$_SESSION["mobile"];
//      $zip=$_SESSION["zip"];
//      $address=$_SESSION["address"];
//      $order_id=$_SESSION["order_id"];
//      $payment_status=$_SESSION["payment_status"];
// }
 ?>

<html><title>Secured Payment Gateway</title>
<head>

</head>
<?php
date_default_timezone_set('Asia/Dhaka');
//Generate Unique Transaction ID
function rand_string( $length ) {
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}
$cur_random_value=rand_string(10);

?>  
  <body>

  
  
  
             
                    <form style='margin:0 auto; text-align:center;' action="https://sandbox.aamarpay.com/index.php" method="post" name="form1">
                    <table border="0" cellpadding="4" cellspacing="2" align="center" style="border-collapse:collapse;">
                    <input type="hidden" name="store_id" value="aamarpaytest">
                    <input type="hidden" name="signature_key" value="dbb74894e82415a2f7ff0ec3a97e4183">
                   
                    </td></tr>
                    <tr><td>Merchant Transaction ID: *</td><td><input type="hidden" name="tran_id" value="WEP-<?php echo "$cur_random_value"; ?>">WEP-<?php echo "$cur_random_value"; ?></td></tr>
                    <tr><td>Pay Amount *</td><td><input type="text" name="amount" value="10"> Taka</td></tr>
                    
                    <input type="text" name="currency" value="BDT">
                    
                    <tr><td>Customer Name: *</td><td><input type="text" name="cus_name" value="Mr. ABC"></td></tr>
                    <tr><td>Customer Email Address: *</td><td><input type="text" name="cus_email" value="test@test.com"></td></tr>
                    <tr><td>Customer Address Line 1: </td><td><input type="text" name="cus_add1" value="Dhaka"></td></tr>
                    <tr><td>Customer Address Line 2: </td><td><input type="text" name="cus_add2" value="Dhaka"></td></tr>
                    <tr><td>Customer City: </td><td><input type="text" name="cus_city" value="Dhaka"></td></tr>
                    <tr><td>Customer State: </td><td><input type="text" name="cus_state" value="Dhaka"></td></tr>
                    <tr><td>Customer Postal: </td><td><input type="text" name="cus_postcode" value="1206"></td></tr>
                    <tr><td>Customer Country: </td><td><input type="text" name="cus_country" value="Bangladesh"></td></tr>
                    <tr><td>Customer Phone: </td><td><input type="text" name="cus_phone" value="010000000"></td></tr>
                    <tr><td>Customer Fax: </td><td><input type="text" name="cus_fax" value="010000000"></td></tr>
                    
                    <tr><td>VAT Ratio: </td><td><input type="text" name="amount_vatratio" value="0"></td></tr>
                    <tr><td>VAT : </td><td><input type="text" name="amount_vat" value="0"></td></tr>
                    <tr><td>TAX Ratio: </td><td><input type="text" name="amount_taxratio" value="0"></td></tr>
                    <tr><td>TAX: </td><td><input type="text" name="amount_tax" value="0"></td></tr>
                    <tr><td>Processing Charge Ratio: </td><td><input type="text" name="amount_processingfee_ratio" value="0"></td></tr>
                    <tr><td>Processing Charge: </td><td><input type="text" name="amount_processingfee" value="0"></td></tr>
                    
                    <tr><td>Product Description: </td><td><input type="text" name="desc" value="Products Name Payment"></td></tr>
                    <input type="hidden" name="success_url" value="http://shehab24.rf.gd/amar_pay/success.php">
                    //  <input type="hidden" name="fail_url" value = "http://localhost/amar_pay/payment_fail_page.php">
                    //  <input type="hidden" name="cancel_url" value = "http://localhost/amar_pay/payment_fail_page.php">
                    
                    
                    
                    <tr><td><input type="submit" class='button' value="Pay Now" name="pay"><br/></td></tr></table>
                    </form></center>
                    
                   
                    
  
   
                    
                    </body></html>