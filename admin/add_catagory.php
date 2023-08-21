<?php
require_once("header.php");
?>
<?php
$msg="";
if(isset($_REQUEST["submit"])){
  $cataname= $_REQUEST["catagory_name"];
  $sql="select * from catagory where catagory_name='$cataname'";
  $res=mysqli_query($con,$sql);
  if($res){
    $check=mysqli_num_rows($res);
    if($check>0){
      $msg="<b class='text-danger'>Data already added </b>";
    }else{
      $sql="insert into catagory (catagory_name,status) values ('$cataname',1)";
      $res=mysqli_query($con,$sql);
      if($res){
        $msg="<b class='text-success'>Data added successfully</b>";
      }
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
                      <input type="text" class="form-control" name="catagory_name" id="exampleInputName1" placeholder="Catagory" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
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