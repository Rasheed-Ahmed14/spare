<?php include('includes/header.php');?>

                                 
        <div class="container-fluid">                            
            <div class="row">                             
                    <!-- Column -->
                    <div class="col-lg-3 col-xlg-9 col-md-12"></div>
                    <div class="col-lg-6 col-xlg-9 col-md-12">                                        
                        <div class="card border-secondary mt-5">
                            <div class="card-body mt-5 bg-light">                                                            
                                    <div class="card" style="width:auto;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Admin Login</h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Login to continue...</h6>
                                            <form action="index.php" method="POST">
                                                <div class="form-group mb-4">
                                                    <label for="username" class="col-md-12 p-0">Username</label>
                                                    <div class="col-md-12 border-bottom p-0">
                                                        <input type="text" placeholder="Your Username" class="form-control p-0 border-0" name="username" id="username" required>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="col-md-12 p-0">Password</label>
                                                    <div class="col-md-12 border-bottom p-0">
                                                        <input type="password" name="password" class="form-control p-0 border-0" placeholder="Password" required>
                                                    </div>
                                                </div>
                                                <?php require "includes/connection.php";
                                                    if(isset($_POST['login']))
                                                    {
                                                        $username=$_POST['username'];
                                                        $pas=$_POST['password'];
                                                        $str="select * from admin where username='$username' and password='$pas'";
                                                        $res=mysqli_query($con,$str);
                                                        if(mysqli_num_rows($res)>0)
                                                        {
                                                            $_SESSION['username']=$username;
                                                            echo "<script> location.href='dashboard.php';</script>";
                                                        }else{
                                                            echo "<script>alert('Invalid credentials');</script>";
                                                            echo "<script> location.href='index.php';</script>";
                                                        }
                                                    }
                                                ?>
                                                <div class="form-group mb-4">
                                                    <div class="col-sm-12 text-center">
                                                        <input type="submit" value="Login" name="login" class="btn btn-success">                                                        
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xlg-9 col-md-12"></div>
                    <!-- Column -->
                             
            </div>                              
        </div>

<?php include('includes/footer.php');?>         