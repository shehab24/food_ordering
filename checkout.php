<?php
require_once("header.main.php");
?>


 
<div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="shop.php">Home</a></li>
                        <li class="active"> Checkout </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- checkout-area start -->
        <div class="checkout-area pb-80 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                          
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>2.</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">Other information</a></h5>
                                    </div>
                                    <div id="payment-2" class="panel-collapse collapse show ">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                            <?php
                                            if(isset($_SESSION["auth"])){
                                                $auth=$_SESSION["auth"];
                                            }else{ ?>

                                            <script>
                                            window.location.href="shop.php";
                                            </script>
                                           
                                         <?php   }
                                            $sql="select * from user where auth='$auth' ";
                                            $res=mysqli_query($con,$sql);   
                                            if($res){
                                                $row=mysqli_fetch_assoc($res);
                                                $name=$row["name"];
                                                $email=$row["email"];
                                                $mobile=$row["mobile"];
                                            }                                         
                                            
                                            ?>
                                             <form action="cod.php" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                           
                                                            <label>First Name</label>
                                                            <input type="text" name="name" value="<?php echo $name ?>"  readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Email Address</label>
                                                            <input type="email" name="email" value="<?php echo $email ?>"  readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Mobile</label>
                                                            <input type="text" name="mobile" value="<?php echo $mobile ?>"  readonly>
                                                        </div>
                                                    </div>
													<div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Zip/Postal Code</label>
                                                            <input type="text" name="zip" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Address</label>
                                                            <input type="text" name="address" required >
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="ship-wrapper">
                                                    <div class="single-ship">
                                                        <input type="radio" id="cod" name="payment_type" value="cod" required >
                                                        <label for="cod" >Cash on Delivery(COD)</label>
                                                    </div>
                                                    <div class="single-ship">
                                                        <input type="radio" id="other" name="payment_type" value="other" required>
                                                        <label for="other" >Payment different process </label>
                                                    </div>
                                                </div>
                                                <div class="billing-back-btn">
                                                    <div class="billing-btn">
                                                        <button type="submit" name="submit" >Place Your Order</button>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                       
                                    </div>
                                </div>
                                
						   </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="checkout-progress">
                            <div class="shopping-cart-content-box">
								<h4 class="checkout_title">Cart Details</h4>
								<ul>
                                <?php
                                 $sql="select * from cart  where auth='$auth'";
                                 $res=mysqli_query($con,$sql);
                                 if($res){
                                     $total=0;
                                     while ($row=mysqli_fetch_assoc($res)) {
                                         $dish_image=$row["dish_image"];
                                         $dish_name=$row["dish_name"];
                                         $qty=$row["qty"];
                                         $subtotal=$row["subtotal"];
                                         $total=$total + $subtotal;
                                         ?>

                                        	<li class="single-shopping-cart mt-3">
										<div class="shopping-cart-img">
											<a href="#"><img style="width:85px;" alt="" src="admin/upload/<?php echo $dish_image ?>"></a>
										</div>
										<div class="shopping-cart-title">
											<h4><a href="#"><?php echo $dish_name ?> </a></h4>
											<h6>Qty: <?php echo $qty ?></h6>
											<span>৳ <?php echo $subtotal ?></span>
										</div>
										
									</li>

                                  <?php   }
                                 }
                                ?>
								</ul>
								<div class="shopping-cart-total ">
									<h4 class="mt-4">Cart Total : <span class="shop-total">৳<?php echo $total ?></span></h4>
									<h4 class="mt-4">Shipping : <span class="shop-total">৳100</span></h4>
									<h4 class="mt-4">Total : <span class="shop-total">৳ <?php echo $total + 100 ?></span></h4>
                                    <input type="hidden" name="total_bil" value="<?php echo $total   ?>">
								</div>
								
							</div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if($total==0){ ?>
           <script>
           window.location.href="shop.php";
           </script>
    <?php    }
        
        ?>






<?php
require_once("footer.main.php");
?>