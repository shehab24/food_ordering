<?php
require_once("header.php");
?>

<div class="card">
            <div class="card-body">
              <h2 class="">User table</h2>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sirial #</th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Wallet</th>
                            <th>Added on</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                 <?php
             $sql="select *  from user";
             $res=mysqli_query($con,$sql);
             if($res){
               $i=1;
               while($row=mysqli_fetch_assoc($res)){
                 $name=$row["name"];
                 $email=$row["email"];
                 $mobile=$row["mobile"];
                 $wallet=$row["wallet"];
                 $added_on=$row["added_on"]; 
                 $user_id=$row["id"]; 
                 
                 ?>

                         <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $name?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $mobile ?></td>
                            <td><?php echo $wallet?></td>
                           <td><?php echo $added_on?></td>              
                            <td>
                              <a href="delete_core.php?user_id=<?php echo $user_id?>&type=user" onclick='return confirm("Are you sure ?")'class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>


             <?php  }
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