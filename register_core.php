<?php
session_start();
require_once("connect.php");
if(isset($_REQUEST["register"])){
    $user_name=$_REQUEST["user-name"];
    $user_email=$_REQUEST["user-email"];
    $user_password=$_REQUEST["user-password"];
    $user_mobile=$_REQUEST["user-mobile"];
    $auth=$user_email.$user_password;
    $encrip_auth=md5(sha1($auth));
    $sql="select email from user where email='$user_email'";
    $res=mysqli_query($con,$sql);
    if($res){
        $check=mysqli_num_rows($res);
        if($check>0){
            header("location:register.php?wrong=email");
        }else{
            $sql="insert into  user (email,password,name,mobile,auth) values('$user_email','$user_password','$user_name','$user_mobile','$encrip_auth')";
            $run=mysqli_query($con,$sql);
            if($run){
                header("location:register.php?success=register");
            }
        }
    }
    
}
?>