<?php
require_once("header.php");
?>


<div class="card">
            <div class="card-body">
              <h2 >Catagory table</h2>
              <h4 > <a href="add_catagory.php">Add catagory</a></h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">

                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th style="width:10%;">Sirial</th>
                            <th style="width:30%;"> Catagory</th>
                            <th style="width:20%;">Added on</th>
                            <th style="width:40%;">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
               <?php
              $sql="select * from catagory";
              $res=mysqli_query($con,$sql);
              if($res){
                $i=1;
                while($row=mysqli_fetch_assoc($res)){
                  $catagory_name=$row["catagory_name"];
                  $added_on=$row["added_on"];
                  $status=$row["status"];
                  $id=$row["id"];
                   ?>

                         <tr>
                            <td style="width:10%;"><?php echo $i++ ?></td>
                            <td style="width:30%;"><?php echo $catagory_name ?></td>
                            <td style="width:20%;"><?php echo $added_on?></td>
                            <td style="width:40%;">
                              <?php
                               if($status>0){
                                 echo "<a href='up_status.php?cata_id=$id&status=1&type=catagory' class='btn btn-outline-primary'>Active</a>";
                               }else{
                                echo "<a href='up_status.php?cata_id=$id&status=2&type=catagory' class='btn btn-outline-danger'>Dective</a>";
                               }
                               
                              ?>
                              <a href="edit_cata_core.php?cata_id=<?php echo $id ?>" class="btn btn-outline-success">Edit</a>
                              <a href="delete_core.php?cata_id=<?php echo $id?>&type=catagory" onclick="return confirm('Are you sure ?')" class="btn btn-outline-danger">Delete</a>
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
require_once("header.php");
?>