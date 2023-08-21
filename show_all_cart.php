<?php
session_start();
require_once("connect.php");
   if(isset($_SESSION["auth"])){
       $auth=$_SESSION["auth"];
   }
       $sql="select * from cart where auth='$auth'";
       $res=mysqli_query($con,$sql);
       if($res){
           $check=mysqli_num_rows($res);
           if($check==0){
            $arr=array('total_cart'=>$check,);
           }else{
            $total_bil=0;
            while($row=mysqli_fetch_assoc($res)){
                $subtotal=$row["subtotal"];
                $total_bil=$total_bil+$subtotal;
                $qty=$row["qty"];
                
 
            }
            $arr=array('status'=>'success','msg'=>'Product add successfully.','total_cart'=>$check,'total_bil'=>$total_bil,'qty'=>$qty,'subtotal'=>$subtotal);

           }
       
       }
    

   echo json_encode($arr);
?>