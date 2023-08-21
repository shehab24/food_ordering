<?php
session_start();
require_once("connect.php");
if(isset($_REQUEST["submit"])){
  $name=$_REQUEST["name"];
  $email=$_REQUEST["email"];
   $mobile=$_REQUEST["mobile"];
  $zip=$_REQUEST["zip"];
  $address=$_REQUEST["address"];
  $payment_type=$_REQUEST["payment_type"];
  $total=$_REQUEST["total_bil"];
  $order_id=rand();
  $payment_status="1";
  if(isset($_SESSION["auth"])){
    $auth=$_SESSION["auth"];
  
   
  }
    $_SESSION["total"]=$total + 100 ;
    $_SESSION["name"]=$name;
    $_SESSION["email"]=$email;
    $_SESSION["mobile"]=$mobile;
    $_SESSION["zip"]=$zip;
    $_SESSION["address"]=$address;
    $_SESSION["order_id"]=$order_id;
    $_SESSION["payment_status"]=$payment_status;
    $_SESSION["auth"]=$auth;
    $_SESSION["pay_type"]=$payment_type;
}

if($payment_type=="other"){

header("location:SSL/checkout_hosted.php");
}elseif($payment_type=="cod"){
  $sql="select * from cart where auth='$auth'";
  $res=mysqli_query($con,$sql);
  if($res){
    $total_bil=0;
    while ($row=mysqli_fetch_assoc($res)) {
       $dish_id=$row["dish_id"];
       $catagory_id=$row["catagory_id"];
       $qty=$row["qty"];
       $subtotal=$row["subtotal"];
       $total_bil=$total_bil+$subtotal;
       $dish_name=$row["dish_name"];
       $dish_image=$row["dish_image"];
       $dish_price=$row["dish_price"];
       $status=$row["status"];
       $auth=$row["auth"];
       $sql="insert into biling_dish_inc (dish_id,catagory_id,qty,subtotal,dish_name,dish_image,dish_price,status,order_id,auth)values('$dish_id','$catagory_id','$qty','$subtotal','$dish_name','$dish_image','$dish_price','$status','$order_id','$auth')";
       $run=mysqli_multi_query($con,$sql);
       
    }
    
    if($run){
     $shipbill=100;
      $sql="insert into biling_details (name,email,mobile,zip,address,total_bil,ship_bill,payment_type,payment_status,order_id,order_status,auth)values('$name','$email','$mobile','$zip','$address','$total_bil','$shipbill','$payment_type','$payment_status','$order_id','1','$auth')";
      $succes=mysqli_query($con,$sql);
      if($succes){
        $sql="delete from cart where auth='$auth'";
        $res=mysqli_query($con,$sql);
        if($res){
          header("location:invoice.php");
          $_SESSION["order_id"]=$order_id;
        }
      }
    }
  
  }

}

?>