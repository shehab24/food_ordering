<?php
require_once("header.php");
?>
<?php
if(isset($_REQUEST["dish_id"])){
  $dish_id=$_REQUEST["dish_id"];
  $sql="select * from dish where id='$dish_id'";
  $res=mysqli_query($con,$sql);
  if($res){
    $row=mysqli_fetch_assoc($res);
  $get_cata=$row["catagory_id"];
  $dish=$row["dish"];
  $dish_price=$row["dish_price"];
  $type=$row["dish_type"];
  $image=$row["image"];
  $dish_detail=$row["dish_detail"];
}
}
?>


<div class="row">
			<h1 class="card-title ml10">Edit dish</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="edit_dish_core.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Catagory</label>
                       <select name="edit_catagory_id"  class="form-control"  >
                       <option >Select here</option>
                     <?php
                     $sql="select * from  catagory";
                     $res=mysqli_query($con,$sql);
                     if($res){
                       while($row=mysqli_fetch_assoc($res)){
                         $catagory_name=$row["catagory_name"];
                         $cata_id=$row["id"]; 
                         if($cata_id==$get_cata){ ?>
                          <option  value="<?php echo $cata_id ?>" selected > <?php echo $catagory_name  ?></option>
                       <?php  }else{  ?>
                        <option  value="<?php echo $cata_id ?>" > <?php echo $catagory_name  ?></option>
                   <?php    }

                         
                      }
                     }
                     ?>
                       </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Dish</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Dish" name="edit_dish_name" value="<?php echo $dish?>" >
                      <input type="hidden" name="dish_id" value="<?php echo $dish_id?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Dish</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Dish price" name="edit_dish_price" value="<?php echo $dish_price?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Type</label>
                      <select name="edit_dish_type" class="form-control" >
                      <?php
                      $type_arr=array("veg","non-veg");
                     echo ' <option >Select type</option>';
                     foreach($type_arr as $value){
                       if($type=="veg"){
                        echo"<option value='$value' selected >$value</option>";
                       }elseif($type=="non-veg"){
                        echo"<option value='$value' selected >$value</option>";
                       }else{
                        echo"<option value='$value'>$value</option>";
                       }
                     
                     }
                      
                      ?>
                      
                   
                       </select>
                    </div>
               
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="edit_img" class="file-upload-default" id="image"   >
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info"  disabled  placeholder="Upload Image" >
                        <span class="input-group-append">
                          <label for="image" class="file-upload-browse btn btn-primary" type="button">Upload</label>
                        </span>
                      </div>
                    </div>      
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="edit_dish_des"  > <?php echo $dish_detail?></textarea>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary mr-2">Update</button>
                    <a href="dish.php" class="btn btn-danger">cancel</a>
                  </form>
                </div>
                <div>
       <p class="ml-4 text-success" >
       <?php
      if(isset($_REQUEST["success"])){
        echo "Dish edit successfully";
      } 
       ?>
       </p>
       </div>
              </div>
      
            </div>
           
            
		 </div>




<?php
require_once("footer.php");
?>