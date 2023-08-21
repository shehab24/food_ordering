<?php
require_once("header.main.php");

?>
		<div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Your cart items</h3>
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
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(isset($_SESSION["auth"])){
                                            $auth=$_SESSION["auth"];
                                        }
                                        $sql="select * from cart where auth='$auth'";
                                        $res=mysqli_query($con,$sql);
                                        if($res){
                                            $check=mysqli_num_rows($res);
                                            if($check==0){ ?>
                                                <script>
                                                window.location.href="shop.php";
                                                </script>
                                      <?php      }
                                            while($row=mysqli_fetch_assoc($res)){
                                                 $image_name=$row["dish_image"];
                                                 $dish_name=$row["dish_name"];
                                                 $dish_price=$row["dish_price"];
                                                 $subtotal=$row["subtotal"];
                                                 $dish_id=$row["dish_id"];
                                                 $qty=$row["qty"];
                                                  ?>
                                    
                                       <tr id="view_cart_list_<?php echo $dish_id ?>">
                                      
                                            <td class="product-thumbnail">
                                                <a href="#"><img style="width:85px;" src="admin/upload/<?php echo $image_name ?>" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="javascript:void(0)"><?php echo $dish_name ?></a></td>
                                            <td class="product-price-cart">
                                            <span class="amount">৳<?php echo $dish_price ?></span>
                                            <input type="hidden" name="dish_price" id="dish_price_<?php echo $dish_id  ?>" value="<?php echo $dish_price ?>">
                                            </td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                              
                                                     <div class="dec qtybutton" onclick="des('<?php echo $dish_id ?>')">-</div>
                                                    <input class="cart-plus-minus-box"  id="up_val_<?php echo $dish_id ?>"  type="text" name="qtybutton" value="<?php echo $qty ?>" disabled>
                                                    <div class="inc qtybutton" onclick="asc('<?php echo $dish_id ?>')">+</div>
                                                   
                                                </div>
                                            </td>
                                            <td class="product-subtotal" id="subtotal_<?php echo $dish_id?>">৳<?php echo $subtotal ?></td>
                                            <td class="product-remove">
                                                <a href="javascript:void(0)" onclick="delete_cart('<?php echo $dish_id?>')"><i class="fa fa-times"></i></a>
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
                                        <div class="cart-clear">
                                            <a href="checkout.php">Checkout</a>
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