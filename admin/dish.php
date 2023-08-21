<?php
require_once("header.php");
?>


<div class="card">
            <div class="card-body">
              <h2 class="">Dish table</h2>
              <h4 class=""><a href="add_dish.php">Add dish</a></h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th style="width:5%">Sirial #</th>
                            <th style="width:12%"> Catagory</th>
                            <th style="width:13%">Dish</th>
                            <th style="width:10%">Price</th>
                            <th style="width:15%">Image</th>
                            <th style="width:15%">Added on</th>
                            <th style="width:30%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>

               <?php
               $sql="select dish.* ,catagory.catagory_name  from dish,catagory where dish.catagory_id=catagory.id  order by dish.id asc ";
              $res=mysqli_query($con,$sql);
              if($res){
                $i=1;
                while($row=mysqli_fetch_assoc($res)){
              $cata=$row["catagory_id"];
              $dish=$row["dish"];
              $dish_price=$row["dish_price"];
              $image=$row["image"];
              $added=$row["added_on"];
              $action=$row["status"]; 
              $catagory_name=$row["catagory_name"]; 
              $id=$row["id"];
              ?>
                    <tr>
                            <td><?php echo $i++?></td>
                            <td><?php echo $catagory_name?></td>
                            <td><?php echo $dish?></td>
                            <td><?php echo $dish_price?></td>
                            <td>
                           <img src="upload/<?php echo $image?>" alt=""> 
                            </td>
                            <td><?php echo $added ?></td>          
                            <td>
                              <?php
                             if($action>0){
                             echo " <a href='up_status.php?dish_id=$id&status=1&type=dish' class='btn btn-outline-primary'>Active</a>";
                             } else{
                              echo "<a href='up_status.php?dish_id=$id&status=2&type=dish' class='btn btn-outline-warning'>Dective</a>";
                             }
                              ?>

                              <a  href="edit_dish.php?dish_id=<?php echo $id?>" class="btn btn-outline-success">Edit</a>
                              <a href="delete_core.php?dish_id=<?php echo $id?>&type=dish" onclick='return confirm("Are you sure ?")'  class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
          
          
          <?php }
              } 
               ?>
                
                      </tbody>
                    </table>
                  </div>
                  
				</div>
              </div>
             
            </div>
          </div>
         
<?php
require_once("footer.php");
?>
