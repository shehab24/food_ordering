<?php
require_once("header.php");
?>


<?php
$msg="";
if(isset($_REQUEST["cata_id"])){
    $cata_id=$_REQUEST["cata_id"];
    $sql="select * from catagory where id='$cata_id'";
    $res=mysqli_query($con,$sql);
    if($res){
        $data=mysqli_fetch_assoc($res);
        $cata_name=$data["catagory_name"];
    }
}

if(isset($_REQUEST["submit"])){
    $cat_name=$_REQUEST["cat_name"];
    $sql="select * from catagory where catagory_name='$cat_name'";
    $res=mysqli_query($con,$sql);
    if($res){
        $check=mysqli_num_rows($res);
        if($check>0){
            $msg="<b class='text-danger'>Data already exist</b>";
        }else{
            $sql="update catagory set catagory_name='$cat_name' where id='$cata_id'";
            $res=mysqli_query($con,$sql);
            if($res){  ?>
                <script>
                window.location.href="catagory.php";
                </script>
      <?php  }
        }
    }
}

?>


        <div class="row">
			<h1 class="card-title ml10">Basic form elements</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Catagory</label>
                      <input type="text" class="form-control" name="cat_name" id="exampleInputName1" value="<?php echo $cata_name ?>" placeholder="Catagory" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Update</button>
                     <a href="catagory.php" class="btn btn-danger">Cancel</a>
                  </form>
                  <div class="mt-3">
                    <p>
                     <?php echo $msg?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
		 </div>


<?php
require_once("footer.php");
?>