<?php
require_once("header.main.php");
?>

<div class="login-register-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                        <div class="log_box" style="display:flex;text-align:center;align-items:center">
                                <a class="mx-auto"  href="login.php">
                                    <h4 style="font-size:2rem;text-transform:capitalize;" > login </h4>
                                </a>
                                <a  class="mx-auto" href="register.php">
                                    <h4 style="text-transform:capitalize;"> register </h4>
                                </a>
                            </div>
                          

                                <div id="lg1">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="login_core.php" method="post">
                                             <?php
                                             if(isset($_COOKIE["currentusr"])){
                                                $user=$_COOKIE["currentusr"];
                                                $sql="select * from user where auth='$user'";
                                                $res=mysqli_query($con,$sql);
                                                if($res){
                                                    $row=mysqli_fetch_assoc($res);
                                                    $email=$row["email"];
                                                    $pass=$row["password"];
                                                }
                                                 
                                                 
                                                 ?>

                                                <input type="email" name="user-name" placeholder="Useremail" value="<?php echo $email ?>" >
                                                <input type="password" name="user-password" placeholder="Password" value="<?php echo $pass  ?>">


                                     <?php        }else{  ?>

                                        <input type="email" name="user-name" placeholder="Useremail" >
                                        <input type="password" name="user-password" placeholder="Password">



                                      <?php       }
                                             ?>
                                              
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox" name="remember">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit" name="login"><span>Login</span></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-3">
                                            <?php
                                            if(isset($_REQUEST["wrong"])){
                                                    echo "<b class='text-danger'>Login details are incorrect</b>";
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