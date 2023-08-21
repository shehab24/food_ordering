<?php
session_start();
require_once("connect.php");
$dish_id=$_REQUEST["dish_id"];
$sql="delete  from cart where dish_id='$dish_id'";
$res=mysqli_query($con,$sql);
if($res){
    if(isset($_SESSION["auth"])){
        $auth=$_SESSION["auth"];
    }
    $sql="select * from cart where auth='$auth'";
    $res=mysqli_query($con,$sql);
    if($res){
        $check=mysqli_num_rows($res);
        $total_bil=0;
        while($row=mysqli_fetch_assoc($res)){
            $subtotal=$row["subtotal"];
            $total_bil=$total_bil+$subtotal;
            

        }
    }
    $arr=array('status'=>'success','total_bil'=>$total_bil,'total_cart'=>$check);
    echo json_encode($arr);
}

?>