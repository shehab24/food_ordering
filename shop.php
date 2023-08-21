<?php
require_once("header.main.php");
?>

<div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Shop Grid Style </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-page-area pt-100 pb-100">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="banner-area pb-30">
                            <a href="javascript:void(0)"><img alt="" src="assets/img/banner/banner-49.jpg"></a>
                        </div>
                        
                        <div class="grid-list-product-wrapper">
                            <div class="product-grid product-view pb-20">
                                <div class="row">
                                    <?php
                                    if(isset($_REQUEST["cata_id"])){
                                        $getid=$_REQUEST["cata_id"];
                                        $sql="select * from dish where catagory_id='$getid' and  status=1";
                                    }else{
                                        $sql="select * from dish where status=1";
                                    }
                                    $res=mysqli_query($con,$sql);
                                    if($res){
                                        while($row=mysqli_fetch_assoc($res)){
                                            $dish_name=$row["dish"];
                                            $id=$row["id"];
                                            $dish_image=$row["image"];  
                                            $dish_price=$row["dish_price"]; 
                                            $status=$row["status"]; 
                                            $catagory_id=$row["catagory_id"]; 
                                             ?>



                                  <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                      <form method="post" id="frmProfile_<?php echo $id?>">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="admin/upload/<?php echo $dish_image ?>" alt="">
                                                    <input type="hidden" name="image_name" value="<?php echo $dish_image ?>" id="image_<?php echo $id ?>">
                                                </a>
                                            </div>
                                            <div class="product-content" style="display:flex;justify-content:space-between;">
                                                <h4>
                                                    <a href="product-details.html"><?php echo $dish_name ?> </a>
                                                    <input type="hidden" name="dish_name" value="<?php echo $dish_name ?>" id="name_<?php echo $id ?>">
                                                    <br>
                                                    <br>
                                                    <span>৳<?php echo $dish_price ?></span>
                                                    <input type="hidden" name="dish_price" value="<?php echo $dish_price ?>" id="price_<?php echo $id ?>">
                                                    <input type="hidden" name="status" value="<?php echo $status ?>" id="status_<?php echo $id ?>">
                                                    <input type="hidden" name="catagory_id" value="<?php echo $catagory_id ?>" id="catagory_<?php echo $id ?>">
                                                    <input type="hidden" name="dish_id" value="<?php echo $id ?>" id="dishid_<?php echo $id ?>">
                                                </h4>
                                               
                                                <div class="qty_box">
                                                <select name="qty_select" id="qty_select_<?php echo $id ?>" class="" style="border:1px solid #242424;height:22px;width:60px;color:#242424">
                                                    <option>Qty</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                </div>
                                                <div class="cart_box">
                                                <i class="fa fa-cart-plus cart_icon" style="font-size:24px;cursor:pointer;" onclick="cart_func('<?php echo $id ?>')" aria-hidden="true"></i>
                                                </div>
                                          
                                            </div>
                                          
                                        </div>
                                        </form>
                                    </div>








                                 <?php       }
                                    }
                                    
                                    ?>

                          

								
						


								</div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar-wrapper gray-bg-7 shop-sidebar-mrg">
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Shop By Categories</h4>
                                <div class="shop-catigory">
                                    <ul id="faq">
                                    <li> <a href="shop.php">All</a> </li>
                                        <?php
                                        $sql="select * from catagory where status=1";
                                        $res=mysqli_query($con,$sql);
                                        if($res){
                                            while($row=mysqli_fetch_assoc($res)){
                                                    $cata_id=$row["id"];
                                                    $cata_name=$row["catagory_name"];   ?>


                                                    <li> <a href="shop.php?cata_id=<?php echo $cata_id ?>"><?php echo $cata_name ?></a> </li>

                                  <?php          }
                                        }
                                        ?>
                                        
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php
require_once("footer.main.php");
?>
