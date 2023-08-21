<?php
require_once("header.main.php");

?>
		<div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Your order details items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(isset($_SESSION["auth"])){
                                            $auth=$_SESSION["auth"];
                                        } if(isset($_REQUEST["order_id"])){
                                            $order_id=$_REQUEST["order_id"];
                                        }
                                        $sql="select * from biling_dish_inc where  order_id='$order_id' and auth='$auth'";
                                        $res=mysqli_query($con,$sql);
                                        if($res){
                                            $check=mysqli_num_rows($res);
                                            if($check==0){ ?>
                                                <script>
                                                window.location.href="shop.php";
                                                </script>
                                      <?php      }
                                      $total=0;
                                            while($row=mysqli_fetch_assoc($res)){
                                                 $image_name=$row["dish_image"];
                                                 $dish_name=$row["dish_name"];
                                                 $dish_price=$row["dish_price"];
                                                 $subtotal=$row["subtotal"];
                                                 $dish_id=$row["dish_id"];
                                                 $qty=$row["qty"];
                                                 $total=$total+$subtotal;
                                                  ?>
                                    
                                       <tr id="order_details_item_<?php echo $order_id ?>">
                                      
                                            <td class="product-thumbnail">
                                                <a href="#"><img style="width:85px;" src="admin/upload/<?php echo $image_name ?>" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="javascript:void(0)"><?php echo $dish_name ?></a></td>
                                            <td class="product-price-cart">
                                            <span class="amount">৳<?php echo $dish_price ?></span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box"  id="up_val_<?php echo $dish_id ?>"  type="text" name="qtybutton" value="<?php echo $qty ?>" disabled> 
                                                </div>
                                            </td>
                                            <td class="product-subtotal" id="subtotal_<?php echo $dish_id?>">৳<?php echo $subtotal ?>
                                            
                                            <input type="hidden" name="" id="order_details_<?php echo $order_id ?>" value="<?php echo $order_id ?>">
                                                <input type="hidden" name="" id="order_details_dish_<?php echo $order_id ?>" value="<?php echo $dish_id ?>">
                                            </td>
                                            
                                           
                                        </tr>  

                                        




                                       <?php     }
                                        }
                                        
                                        ?>
                        
                                    </tbody>
                                    <tfoot >
                                    <tr style="border-top:1px solid #ddd;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><h5>Total</h5></td>
                                    <td><h6>৳<?php echo $total ?></h6></td>
                                    <td></td>
                                    </tr>
                                    </tfoot>
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