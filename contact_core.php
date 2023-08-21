<?php
require_once("connect.php");
if(isset($_REQUEST["contact"])){
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $subject=$_REQUEST["subject"];
    $message=$_REQUEST["message"];
    $mobile=$_REQUEST["mobile"];
    $sql="insert into contact_us (email,name,mobile,sub,msg) values('$email','$name','$mobile','$subject','$message')";
    $res=mysqli_query($con,$sql);
    if($res){
        header("location:contact.php?success");
    }else{
        header("location:contact.php?unsuccess");
    }
}
?>