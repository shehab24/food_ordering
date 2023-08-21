<?php
require_once("header.php");
?>

<div class="card">
            <div class="card-body">
              <h2 class="">Contact table</h2>
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
                            <th> Subject</th>
                            <th> Message</th>
                            <th> Added on</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql="select *  from contact_us";
                        $res=mysqli_query($con,$sql);
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                          $name=$row["name"];
                          $email=$row["email"];
                          $mobile=$row["mobile"];
                          $sub=$row["sub"];
                          $msg=$row["msg"];
                          $added_on=$row["added_on"]; 
                          $del_id=$row["id"]; ?>

                         <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $mobile ?></td>
                            <td><?php echo $sub ?></td>          
                            <td><?php echo $msg ?></td>          
                            <td><?php echo $added_on ?></td>          
                            <td>
                              <a href="delete_core.php?del_id=<?php echo $del_id?>&type=contact" onclick='return confirm("Are you sure ?")' class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>



                     <?php   }
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