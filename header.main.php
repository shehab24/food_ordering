<?php
session_start();
require_once("connect.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Billy - Food & Drink eCommerce Bootstrap4 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- header start -->
        <header class="header-area">
            <div class="header-top black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                            <div class="welcome-area">
                                <p>Default welcome msg! </p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12 col-sm-8 ">
                            <div class="account-curr-lang-wrap f-right">
                                <ul>
                                    
                                    
                                    <li class="top-hover"><a href="#" >Welcome
                                        <?php
                                        if(isset($_SESSION["current_user_name"])){
                                            echo $_SESSION["current_user_name"];
                                        }else{ ?>

                                           
                                            <i class="icon-user icons"></i>
                                       

                                    <?php    }
                                        ?>
                                    
                                    <i class="ion-chevron-down"></i></a>
                                        <ul class="dorp_box" >
                                            <?php
                                            if(!isset($_SESSION["login"])){ ?>

                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="register.php">Register</a></li>
                                             
                                          <?php  }
                                            ?>
                                            <?php
                                            if(isset($_SESSION["login"])){ ?>

                                            <li><a href="account.php">my account</a></li>
                                            <li><a href="order_history.php">order history</a></li>
                                            <li><a href="logout.php">logout</a></li>
                                             
                                          <?php  }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                            <div class="logo">
                                <a href="shop.php">
                                    <img alt="" src="assets/img/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 col-sm-8">
                            <div class="header-middle-right f-right">
                                <div class="header-login">
                                </div>
                                <div class="header-wishlist">
                                   &nbsp;
                                </div>
                                <div class="header-cart">
                                    <a href="#">
                                        <div class="header-icon-style" onclick="show_all_cart()">
                                            <i class="icon-handbag icons"></i>
                                            <span class="count-style" id="cart_count">
                                                <?php
                                                 if(isset($_SESSION["auth"])){
                                                  $auth=$_SESSION["auth"] ;
                                                
                                                $sql="select * from cart where auth='$auth'";
                                                $res=mysqli_query($con,$sql);
                                                if($res){
                                                    $check=mysqli_num_rows($res);
                                                    echo $check ; 
                                                    $total_bil=0;
                                                    while($row=mysqli_fetch_assoc($res)){
                                                        $subtotal=$row["subtotal"];
                                                        $total_bil=$total_bil+$subtotal ;
                                                    }
                                                    if($check==0){
                                                        $class="d-none";
                                                    }else{
                                                        $class="";
                                                    }
                                                    
                                                }
                                            }else{
                                                echo 0;
                                            }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="cart-text">
                                            <span class="digit">My Cart</span>
                                            <span class="cart-digit-bold" id="bill_box"><?php
                                            if(isset($_SESSION["auth"])){
                                             echo "৳".$total_bil ;
                                            }
                                             ?></span>
                                        </div>
                                    </a>
                              
                                    <div class="shopping-cart-content <?php echo $class ?>"  id="cart_content">
                                        <ul id="append">
                                        <?php
                                        if(isset($_SESSION["auth"])){
                                            $auth=$_SESSION["auth"] ;
                                        }
                                        $sql="select * from cart where auth='$auth'";
                                        $res=mysqli_query($con,$sql);
                                        if($res){
                                            $total_bil=0;
                                            while($row=mysqli_fetch_assoc($res)){
                                                $dish_id=$row["dish_id"];
                                                $image_name=$row["dish_image"];
                                                $dish_name=$row["dish_name"];
                                                $qty=$row["qty"];
                                                $subtotal=$row["subtotal"];  
                                                $total_bil=$total_bil+$subtotal;
                                               ?>

                                                 <li class="single-shopping-cart" id="cart_list_<?php echo $dish_id?>">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img style="width:82px;" alt="" src="admin/upload/<?php echo $image_name ?>"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#"><?php echo $dish_name ?></a></h4>
                                                    <h6 >Qty: <?php echo $qty ?></h6>
                                                    <span >৳<?php echo $subtotal ?></span>
                                                </div>
                                                <div class="shopping-cart-delete" onclick="delete_cart('<?php echo $dish_id?>')">
                                                    <a href="#"><i class="ion ion-close" ></i></a>
                                                </div>
                                            </li>


                                           <?php     
                                         
                                      


                                           }
                                        }
                                        
                                        ?>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>৳১০০/-</span></h4>
                                            <h4>Total : <span class="shop-total" id="show_total">৳<?php echo $total_bil ?></span></h4>
                                        </div>
                                        <div class="shopping-cart-btn ">
                                            <a href="view_cart.php" onclick="return window.location.href='view_cart.php'">view cart</a>
                                            <a href="checkout.php" onclick="return window.location.href='checkout.php'" >checkout</a>
                                        </div>                           
                                    </div>
                               
							   </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="contact.php">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-start -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul class="menu-overflow" id="nav">
							            <li><a href="shop.php">Shop</a></li>
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="contact.php">contact us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
        </header>