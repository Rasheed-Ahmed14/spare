<?php include('includes/header.php'); ?>
<?php include('includes/topbar.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/connection.php'); ?>
        <div class="page-wrapper">            
            <div class="container-fluid">                
                <div class="row">
                    <div class="col-lg-2 col-xlg-9 col-md-12"></div>
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post">                                    
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">New Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password" class="form-control p-0 border-0" id="example-email"  name="pas1" required>
                                        </div>
                                    </div>                                   
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Confirm Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password" class="form-control p-0 border-0"  name="pas2" required>
                                        </div>
                                    </div>  
                                    <?php 
                                        if(isset($_POST['update']))
                                            {	
                                            require "includes/connection.php";										                
                                            $pas1=$_POST['pas1'];                                            
                                            $pas2=$_POST['pas2'];                                            
                                            if($pas1!=$pas2)
                                            {	
                                                echo "<p class='text-danger'>Password Doesn't Match</p>";                                                
                                            }
                                            else{
                                                        $str="update admin set password='$pas1' where username='$username'";
                                                        if(mysqli_query($con,$str))
                                                        {
                                                            echo "<script>alert('Password Updated Successfully');</script>";
                                                            echo "<script>location.href='dashboard.php';</script>";
                                                        }else{
                                                            echo "<script>alert('Some Error! Please try again later');</script>";
                                                        }
                                            }
                                        }
                                       ?>                                  
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit" name="update">Update Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>               
            </div>           
            <footer class="footer text-center"> 2021 © Expenseoo
            </footer>            
        </div>
<?php include('includes/footer.php');?>      