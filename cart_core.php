<?php
session_start();
require_once("connect.php");
   $image_name=$_REQUEST["image_name"];
   $dish_name=$_REQUEST["dish_name"];
  $dish_price=$_REQUEST["dish_price"];
  $status=$_REQUEST["status"];
   $catagory_id=$_REQUEST["catagory_id"];
   $dish_id=$_REQUEST["dish_id"];
   $qty_select=$_REQUEST["qty_select"];
   $subtotal=$qty_select*$dish_price;
   if(isset($_SESSION["auth"])){
       $auth=$_SESSION["auth"];
   }
   $sql="select * from cart where dish_id='$dish_id' and auth='$auth'";
   $res=mysqli_query($con,$sql);
   if($res){
       $count=mysqli_num_rows($res);
       if($count>0){
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
         $arr=array('status'=>'info','msg'=>'Product already added.','total_bil'=>$total_bil);
       }else{
        $sql="insert into cart (dish_id,catagory_id,qty,subtotal,dish_name,dish_image,dish_price,status,auth) values('$dish_id','$catagory_id','$qty_select','$subtotal','$dish_name','$image_name','$dish_price','$status','$auth')";
        $res=mysqli_query($con,$sql);
        if($res){
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
         $arr=array('status'=>'success','msg'=>'Product add successfully.','total_cart'=>$check,'total_bil'=>$total_bil,'image_name'=>$image_name,'dish_name'=>$dish_name,'qty'=>$qty_select,'subtotal'=>$subtotal,'dish_id'=>$dish_id);
        }else{
         $arr=array('status'=>'error','msg'=>'Product add unsuccessfull.');
        }



       }
   }



   echo json_encode($arr);
?>