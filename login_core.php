<?php
session_start();
require_once("connect.php");
if(isset($_REQUEST["login"])){
    $username=$_REQUEST['user-name'];
    $password=$_REQUEST['user-password'];
    $remember=$_REQUEST['remember'];
    $auth=$username.$password;
    $encrip_auth=md5(sha1($auth));
    $sql="select * from user where email='$username' and password='$password' and auth='$encrip_auth'";
    $res=mysqli_query($con,$sql);
    if($res){
        $check=mysqli_num_rows($res);
        if($check>0){ 
              $row=mysqli_fetch_assoc($res);
              $_SESSION["login"]="yes";
              $_SESSION["current_user_name"]=$row["name"];
              $_SESSION["auth"]=$encrip_auth;
            if(isset($_REQUEST["remember"])){
                setcookie("currentusr", $encrip_auth, time() + (86400 * 7));
            }
            header("location:shop.php");
        }else{
            header("location:login.php?wrong");
        }

    }
}
?>