<?php
require_once("header.php");
?>

<div class="row">
			<h1 class="card-title ml10">Add dish</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="add_dish_core.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Catagory</label>
                       <select name="catagory_id"  class="form-control" required >
                       <option value="" >Select here</option>
                     <?php
                     $sql="select * from  catagory";
                     $res=mysqli_query($con,$sql);
                     if($res){
                       while($row=mysqli_fetch_assoc($res)){
                         $catagory_name=$row["catagory_name"];
                         $cata_id=$row["id"]; ?>

                         <option  value="<?php echo $cata_id ?>" > <?php echo $catagory_name  ?></option>
                   <?php    }
                     }
                     ?>
                       </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Dish</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Dish" name="dish_name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Dish Price</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Dish Price" name="dish_price" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Type</label>
                      <select name="dish_type" class="form-control" required>
                       <option >Select type</option>
                       <option value="veg">VEG</option>
                       <option value="non-veg">NON VEG</option>
                       </select>
                    </div>
               
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img" class="file-upload-default" id="image" required>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info"  disabled  placeholder="Upload Image" >
                        <span class="input-group-append">
                          <label for="image" class="file-upload-browse btn btn-primary" type="button">Upload</label>
                        </span>
                      </div>
                    </div>      
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="dish_des" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="dish.php" class="btn btn-danger">cancel</a>
                  </form>
                </div>
                <div>
       <p class="ml-4 text-success" >
       <?php
      if(isset($_REQUEST["success"])){
        echo "Dish add successfully";
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
