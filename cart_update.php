<?php
session_start();
require_once("connect.php");
if(isset($_SESSION["auth"])){
    $auth=$_SESSION["auth"];
}
$dish_id=$_REQUEST["dish_id"];
$val=$_REQUEST["value"];
$type=$_REQUEST["type"];
$dish_price=$_REQUEST["dish_price"];


if($type=="plus"){
    $newval=$val+1;
    $newsubtotal=$newval*$dish_price;
    $sql="update cart set qty='$newval',subtotal='$newsubtotal' where dish_id='$dish_id' and  auth='$auth' ";
    $res=mysqli_query($con,$sql);
    if($res){
        $sql="select * from cart where auth='$auth'";
        $res=mysqli_query($con,$sql);
        if($res){
            $check=mysqli_num_rows($res);
            $total_bil=0;
            while($row=mysqli_fetch_assoc($res)){
                $subtotal=$row["subtotal"];
                $qty=$row["qty"];
                $total_bil=$total_bil+$subtotal;
                
 
            }
        }
        $arr=array('status'=>'success','qty'=>$qty,'subtotal'=>$newsubtotal,'total_bil'=>$total_bil,'total_cart'=>$check);
    }
}
if($type=="minus"){
    $newval=$val-1;
    $newsubtotal=$newval*$dish_price;
    $sql="update cart set qty='$newval',subtotal='$newsubtotal' where dish_id='$dish_id' and auth='$auth' ";
    $res=mysqli_query($con,$sql);
    if($res){
        $sql="select * from cart where auth='$auth'";
        $res=mysqli_query($con,$sql);
        if($res){
            $check=mysqli_num_rows($res);
            $total_bil=0;
            while($row=mysqli_fetch_assoc($res)){
                $subtotal=$row["subtotal"];
                $qty=$row["qty"];
                $total_bil=$total_bil+$subtotal;
                
 
            }
        }
        $arr=array('status'=>'success','qty'=>$qty,'subtotal'=>$newsubtotal,'total_bil'=>$total_bil,'total_cart'=>$check);
    }
}
echo json_encode($arr);
?>