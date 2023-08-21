<?php
require_once("connect.php");
if(isset($_REQUEST["update"])){
    $get_dish_id=$_REQUEST["dish_id"];
    $edit_cata_id=$_REQUEST["edit_catagory_id"];
    $edit_dish_name=$_REQUEST["edit_dish_name"];
    $edit_dish_price=$_REQUEST["edit_dish_price"];
    $edit_dish_type=$_REQUEST["edit_dish_type"];
   $edit_img=$_FILES["edit_img"]["name"];
    $edit_img_tmp=$_FILES["edit_img"]["tmp_name"];
    $edit_dish_des=$_REQUEST["edit_dish_des"];
    if($edit_img==""){
        $sql="update dish set  catagory_id='$edit_cata_id',dish='$edit_dish_name',dish_price='$edit_dish_price',dish_detail='$edit_dish_des',dish_type='$edit_dish_type',status=1 where id='$get_dish_id'";
    }else{
        $location="upload/";
        $edit_image_name=rand(111111,9999999).'_'.$edit_img;
        $sql="update dish set  catagory_id='$edit_cata_id',dish='$edit_dish_name',dish_price='$edit_dish_price', image='$edit_image_name',dish_detail='$edit_dish_des',dish_type='$edit_dish_type',status=1 where id='$get_dish_id'";
     
    }
    $res=mysqli_query($con,$sql);
    move_uploaded_file($edit_img_tmp,$location.$edit_image_name);
    if($res){
        header("location:edit_dish.php?dish_id=$get_dish_id&success");
    }
}

?>