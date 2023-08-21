<?php
session_start();
require_once("connect.php");
$order_id=$_REQUEST["value"];
$type=$_REQUEST["type"];
if(isset($_SESSION["auth"])){
    $auth=$_SESSION["auth"];
}
if($type=="order_item"){
    $sql="delete from biling_details where order_id='$order_id' and auth='$auth'";
    $res=mysqli_query($con,$sql);
    if($res){
        $sql="delete from biling_dish_inc where order_id='$order_id'  and auth='$auth'";
        $res=mysqli_query($con,$sql);
        if($res){
            echo "success";
        }
       
    }
}

  



?>