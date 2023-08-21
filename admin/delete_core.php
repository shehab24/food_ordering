<?php
require_once("connect.php");
if(isset($_REQUEST["type"])){
    $type=$_REQUEST["type"];

    if($type=="catagory"){
        if(isset($_REQUEST["cata_id"])){
            $get_id=$_REQUEST["cata_id"];
            $sql="delete from catagory where id='$get_id'";
            $res=mysqli_query($con,$sql);
            if($res){
                header("location:catagory.php");
            }
        }
    }
    if($type=="dish"){
        if(isset($_REQUEST["dish_id"])){
            $get_id=$_REQUEST["dish_id"];
            $sql="delete from dish where id='$get_id'";
            $res=mysqli_query($con,$sql);
            if($res){
                header("location:dish.php");
            }
        }
    }
    if($type=="contact"){
        if(isset($_REQUEST["del_id"])){
            $get_id=$_REQUEST["del_id"];
            $sql="delete from contact_us where id='$get_id'";
            $res=mysqli_query($con,$sql);
            if($res){
                header("location:contact.php");
            }
        }
    }
    if($type=="user"){
        if(isset($_REQUEST["user_id"])){
            $get_id=$_REQUEST["user_id"];
            $sql="delete from user where id='$get_id'";
            $res=mysqli_query($con,$sql);
            if($res){
                header("location:user.php");
            }
        }
    }



}
?>
