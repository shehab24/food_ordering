<?php
require_once("header.php");
if(!isset($_SESSION["loged"])){
  header("location:index.php");
}
?>



<?php
require_once("footer.php");
?>