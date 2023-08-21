<?php

require_once("connect.php");
function insertquery($auth){
    global $con;
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
        $sql="delete from cart where auth='$auth'";
        $res=mysqli_query($con,$sql);
      
    }
  
  }
}


?>