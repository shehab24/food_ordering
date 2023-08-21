<?php
require_once("header.main.php");
?>
	<div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">My Account </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
        if(isset($_SESSION["auth"])){
            $setauth=$_SESSION["auth"];
            $sql="select * from user where auth='$setauth'";
            $res=mysqli_query($con,$sql);
            if($res){
                $row=mysqli_fetch_assoc($res);
                $name=$row["name"];
                $email=$row["email"];
                $mobile=$row["mobile"];
                $password=$row["password"];
                $id=$row["id"];
            }
        }
        
        
        ?>
        <!-- my account start -->
        <div class="myaccount-area pb-80 pt-100">
            <div class="container">
                <div class="row">
                    <div class="ml-auto mr-auto col-lg-9">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Edit your account information </a></h5>
                                    </div>
                                    <div id="my-account-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="account-info-wrapper">
                                                    <h4>My Account Information</h4>
                                                    <h5>Your Personal Details</h5>
                                                </div>
                                                <form action="account_core.php" method="post">
                                                <div class="row">
                                                
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>First Name</label>
                                                            <input type="text" name="name" value="<?php echo $name ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Email</label>
                                                            <input type="email" name="email" value="<?php echo $email ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Mobile</label>
                                                            <input type="text" name="mobile" value="<?php echo $mobile ?>">
                                                        </div>
                                                    </div>                    
                                                  
                                                </div>
                                                <div class="billing-back-btn">
                                                    <div class="billing-back">
                                                        <a href="shop.php"><i class="ion-arrow-up-c"></i> back</a>
                                                    </div>
                                                    <div class="billing-btn">
                                                        <button type="submit" name="submit">Update</button>
                                                        <input type="hidden" name="type" value="account_update">
                                                        <input type="hidden" name="auth" value="<?php echo $setauth ?>">
                                                        <input type="hidden" name="password" value="<?php echo $password ?>">
                                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-2">Change your password </a></h5>
                                    </div>
                                    <div id="my-account-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="account-info-wrapper">
                                                    <h4>Change Password</h4>
                                                    <h5>Your Password</h5>
                                                </div>
                                                <form action="account_core.php" method="post">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Password</label>
                                                            <input type="password" name="up_password">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Password Confirm</label>
                                                            <input type="password" name="confrim_password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="billing-back-btn">
                                                    <div class="billing-back">
                                                        <a href="shop.php"><i class="ion-arrow-up-c"></i> back</a>
                                                    </div>
                                                    <div class="billing-btn">
                                                        <button type="submit" name="submit">Update</button>
                                                        <input type="hidden" name="type" value="password_update">
                                                        <input type="hidden" name="auth" value="<?php echo $setauth ?>">
                                                        <input type="hidden" name="email" value="<?php echo $email ?>">
                                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="msg">
                    <p>
                    <?php
                    if(isset($_REQUEST["success"])){
                        $msg=$_REQUEST["success"];
                        if($msg=="account"){
                            echo "<b style='color:green;'>Account update successfull</b>";
                        }elseif($msg=="password"){
                            echo "<b style='color:green;'>Password update successfull</b>";
                        }
                    }elseif(isset($_REQUEST["wrong"])){
                        echo "<b style='color:red;'>Password doesn,t match please enter same password </b>";
                    }
                    
                    ?>
                    
                    
                    </p>
                    </div>
                    </div>
                   
                </div>
            </div>
        </div>


<?php
require_once("footer.main.php");
?>