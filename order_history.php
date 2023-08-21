<?php
require_once("header.main.php");

?>
		<div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Your Order items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th style="width:20%;">Order No</th>
                                            <th style="width:10%;">Total Bil</th>
                                            <th style="width:15%;">Address</th>
                                            <th style="width:10%;">Zip</th>
                                             <th style="width:15%;">Order status</th>
                                            <th style="width:15%;">Payment status</th>
                                            <th style="width:15%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(isset($_SESSION["auth"])){
                                            $auth=$_SESSION["auth"];
                                        }
                                        $sql="select * from biling_details where auth='$auth'";
                                        $res=mysqli_query($con,$sql);
                                        if($res){
                                            $check=mysqli_num_rows($res);
                                            if($check==0){ ?>
                                                <script>
                                                window.location.href="shop.php";
                                                </script>
                                      <?php      }
                                            while($row=mysqli_fetch_assoc($res)){
                                                 $order_id=$row["order_id"];
                                                 $total_bil=$row["total_bil"];
                                                 $ship_bill=$row["ship_bill"];
                                                 $full_total=$total_bil + $ship_bill ;
                                                 $address=$row["address"];
                                                 $zip=$row["zip"];
                                                 $order_status=$row["order_status"];
                                                 $payment_status=$row["payment_status"];
                                                  ?>
                                    
                                       <tr id="order_row_<?php echo $order_id ?>">
                                      
                                            <td class="product-thumbnail">
                                                <a href="order_details.php?order_id=<?php echo $order_id ?>" class="btn btn-primary" title="Click here to show order details"><?php echo $order_id ?></a>
                                              <a href="download_pdf.php?order_id=<?php echo $order_id ?>" title="Download pdf"><img width="23px" style="cursor:pointer;"  src="assets/img/icon-img/pdf.png" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="javascript:void(0)"><?php echo $full_total ?></a></td>
                                            <td class="product-price-cart">
                                            <span class="amount"><?php echo $address ?></span>                                  
                                          </td>                                
                                            <td class="product-price-cart">
                                            <span class="amount"><?php echo $zip ?></span>                                  
                                          </td>                                
                                            <td class="product-price-cart">
                                            <span class="amount"><?php echo $order_status ?></span>                                  
                                          </td>                                
                                            <td class="product-price-cart">
                                            <span class="amount"><?php echo $payment_status ?></span>                                  
                                          </td>                                
                                            <td class="product-remove">
                                            <a href="javascript:void(0)" id="" onclick="delete_order_item('<?php echo $order_id ?>')" title="Delete history" ><i class="fa fa-times"></i></a>
                                            <input type="hidden" name="" id="delete_order_item_<?php echo $order_id ?>" value="<?php echo $order_id ?>">
                                           </td>
                                           
                                        </tr>  

                                        




                                       <?php     }
                                        }
                                        
                                        ?>
                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="shop.php">Continue Shopping</a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
       



<?php
require_once("footer.main.php");
?>