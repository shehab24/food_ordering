<?php
require_once("connect.php");
if(isset($_REQUEST["type"])){
    $type=$_REQUEST["type"];

    if($type=="catagory"){
        if(isset($_REQUEST["cata_id"]) && isset($_REQUEST["status"])){
            $cataid=$_REQUEST["cata_id"];
            $status=$_REQUEST["status"];
            if($status==1){
                $sql="update catagory set  `status`=0 where id='$cataid'";
                $res=mysqli_query($con,$sql);
                if($res){
                    header("location:catagory.php");
                }
            }else{
                $sql="update catagory set  `status`=1 where id='$cataid'";
                $res=mysqli_query($con,$sql);
                if($res){
                    header("location:catagory.php");
                }
            }
        }
    }
    if($type=="dish"){
        if(isset($_REQUEST["dish_id"]) && isset($_REQUEST["status"])){
            $dishid=$_REQUEST["dish_id"];
            $status=$_REQUEST["status"];
            if($status==1){
                $sql="update dish set  `status`=0 where id='$dishid'";
                $res=mysqli_query($con,$sql);
                if($res){
                    header("location:dish.php");
                }
            }else{
                $sql="update dish set  `status`=1 where id='$dishid'";
                $res=mysqli_query($con,$sql);
                if($res){
                    header("location:dish.php");
                }
            }
        }
    }



}


?>