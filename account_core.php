<?php
session_start();
require_once("connect.php");
if(isset($_REQUEST["submit"])){
    $type=$_REQUEST["type"];
    $auth=$_REQUEST["auth"];
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $id=$_REQUEST["id"];
    // $past_email=$_REQUEST["past_email"];
    $mobile=$_REQUEST["mobile"];
    $password=$_REQUEST["password"];
    $up_password=$_REQUEST["up_password"];
    $confrim_password=$_REQUEST["confrim_password"];
    $new_auth=$email.$password;
    $new_encrip_auth=md5(sha1($new_auth));

    if($type=="account_update"){
        $sql="update user set name='$name',email='$email', mobile='$mobile',auth='$new_encrip_auth' where id='$id' ";
        $res=mysqli_query($con,$sql);
        if($res){
            $_SESSION["auth"]=$new_encrip_auth;
            $_SESSION["current_user_name"]=$name;
            if(isset($_COOKIE["currentusr"])){
                setcookie("currentusr", $new_encrip_auth, time() + (86400 * 7));
            }
            header("location:account.php?success=account");
        }

    
}

if($type=="password_update"){
    if($up_password==$confrim_password){
        $confrim_password=$_REQUEST["confrim_password"];
        $pass_auth=$email.$confrim_password;
        $pass_encrip_auth=md5(sha1($pass_auth));
        $sql="update user set password='$confrim_password', auth='$pass_encrip_auth'  where id='$id' ";
        $res=mysqli_query($con,$sql);
        if($res){
            $_SESSION["auth"]=$pass_encrip_auth;
            if(isset($_COOKIE["currentusr"])){
                setcookie("currentusr", $pass_encrip_auth, time() + (86400 * 7));
            }

            header("location:account.php?success=password");
        }
    }else{
        header("location:account.php?wrong=password");
    }
 
}


}

?>