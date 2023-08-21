<?php
require_once("header.main.php");
?>

<div class="p-2  my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="log_box" style="display:flex;text-align:center;align-items:center">
                                <a class="mx-auto"  href="login.php">
                                    <h4 style="text-transform:capitalize;" > login </h4>
                                </a>
                                <a  class="mx-auto" href="register.php">
                                    <h4 style="font-size:2rem;text-transform:capitalize;"> register </h4>
                                </a>
                            </div>


                                <div id="lg2" >
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="register_core.php" method="post">
                                                <input type="text" name="user-name" placeholder="Username" required>
                                                <input type="password" name="user-password" placeholder="Password" required >
                                                <input name="user-email" placeholder="Email" type="email" required>
                                                <input name="user-mobile" placeholder="Mobile" type="number" required   >
                                                <div class="button-box">
                                                    <button type="submit" name="register"><span>Register</span></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-3">
                                            <?php
                                            if(isset($_REQUEST["wrong"])){
                                                $wrong=$_REQUEST["wrong"];
                                                if($wrong=="email"){
                                                    echo "<b class='text-danger'>Email already exist </b>";
                                                }
                                            }elseif(isset($_REQUEST["success"])){
                                                $success=$_REQUEST["success"];
                                                if($success=="register"){
                                                    echo '<b class="text-success"> Register successfully </b>';
                                                }
                                            }
                                            
                                            ?>
                                        </div>
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