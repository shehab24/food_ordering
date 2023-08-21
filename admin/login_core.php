<?php
session_start();
require_once("connect.php");
$user=$_REQUEST["username"];
$pass=$_REQUEST["password"];
$sql="SELECT * FROM  `admin`  WHERE  email='$user' AND pwd='$pass'";
$run=mysqli_query($con,$sql);
if($run){
$check=mysqli_num_rows($run);
if($check>0){
    header("location:dashboard.php");
    $_SESSION["loged"]="yes";
}else{
    header("location:index.php?wrong");
}
}

?>