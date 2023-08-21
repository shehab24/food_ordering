<br/><br/><center><font size="13pt"><b>Thank You Payment Successfully Received</b></font></center>
                   
<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $pay_status=$_POST['pay_status'];
    $amount=$_POST['amount'];
    $pg_txnid=$_POST['pg_txnid'];
    $mer_txnid=$_POST['mer_txnid'];
    $store_id=$_POST['store_id'];
    $currency=$_POST['currency'];
    $currency_merchant=$_POST['currency_merchant'];
    $convertion_rate=$_POST['convertion_rate'];
    $store_amount=$_POST['store_amount'];
    $pay_time=$_POST['pay_time'];
    $bank_txn=$_POST['bank_txn'];
    $card_number=$_POST['card_number'];
    $card_holder=$_POST['card_holder'];
    $card_type=$_POST['card_type'];
    $opt_a=$_POST['opt_a'];
    $opt_b=$_POST['opt_b'];
    $opt_c=$_POST['opt_c'];
    $opt_d=$_POST['opt_d'];
    $ip_address=$_POST['ip_address'];
    $reason=$_POST['reason'];
    $other_currency=$_POST['other_currency'];
    $success_url=$_POST['success_url'];
    $fail_url=$_POST['fail_url'];
    $pg_service_charge_bdt=$_POST['pg_service_charge_bdt'];
    $pg_service_charge_usd=$_POST['pg_service_charge_usd'];
    $pg_card_bank_name=$_POST['pg_card_bank_name'];
    $pg_card_bank_country=$_POST['pg_card_bank_country'];
    $pg_card_risklevel=$_POST['pg_card_risklevel'];
    $pg_error_code_details=$_POST['pg_error_code_details'];
    
    //you can get all parameter from post request
    print_r($_POST);
}
?>
                    <table border="0" cellpadding="5" cellspacing="5">
                   <tr><td>pay_status: <?php echo $pay_status; ?></td></tr>
                    <tr><td>amount: <?php echo $amount; ?></td></tr>
                    <tr><td>epw_txnid: <?php echo $pg_txnid; ?></td></tr>
                    <tr><td>mer_txnid: <?php echo $mer_txnid; ?></td></tr>
                    <tr><td>store_id: <?php echo $store_id; ?></td></tr>
                    <tr><td>currency: <?php echo $currency; ?></td></tr>
                    <tr><td>currency_merchant: <?php echo $currency_merchant; ?></td></tr>
                    <tr><td>convertion_rate: <?php echo $convertion_rate; ?></td></tr>
                    <tr><td>store_amount: <?php echo $store_amount; ?></td></tr>
                    <tr><td>pay_time: <?php echo $pay_time; ?></td></tr>
                    <tr><td>bank_txn: <?php echo $bank_txn; ?></td></tr>
                    <tr><td>card_number: <?php echo $card_number; ?></td></tr>
                    <tr><td>card_holder: <?php echo $card_holder; ?></td></tr>
                    <tr><td>card_type: <?php echo $card_type; ?></td></tr>
                    <tr><td>opt_a: <?php echo $opt_a; ?></td></tr>
                    <tr><td>opt_b: <?php echo $opt_b; ?></td></tr>
                    <tr><td>opt_c: <?php echo $opt_c; ?></td></tr>
                    <tr><td>opt_d: <?php echo $opt_d; ?></td></tr>
                    <tr><td>ip_address: <?php echo $ip_address; ?></td></tr>
                    <tr><td>reason: <?php echo $reason; ?></td></tr>
                    <tr><td>other_currency: <?php echo $other_currency; ?></td></tr>
                    <tr><td>success_url: <?php echo $success_url; ?></td></tr>
                    <tr><td>fail_url: <?php echo $fail_url; ?></td></tr>
                    <tr><td>epw_service_charge_bdt: <?php echo $pg_service_charge_bdt; ?></td></tr>
                    <tr><td>epw_service_charge_usd: <?php echo $pg_service_charge_usd; ?></td></tr>
                    <tr><td>epw_card_bank_name: <?php echo $pg_card_bank_name; ?></td></tr>
                    <tr><td>epw_card_bank_country: <?php echo $pg_card_bank_country; ?></td></tr>
                    <tr><td>epw_card_risklevel: <?php echo $pg_card_risklevel; ?></td></tr>
                    <tr><td>epw_error_code_details: <?php echo $pg_error_code_details; ?></td></tr>
                    </table>
                    
                   