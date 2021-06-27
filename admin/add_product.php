<?php include('includes/header.php'); ?>
<?php include('includes/topbar.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/connection.php'); ?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->           
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">                    
                    <!-- Column -->
                    <div class="col-lg-2 col-xlg-9 col-md-12"></div>
                    <div class="col-lg-8 col-xlg-9 col-md-12">                    
                        <div class="card">
                        <div class="card-header">
                        <h3>Add New Product</h3>
                        </div>
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                    <div class="row">   
                                    <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Product Type</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <select class="form-control border-0" aria-label="Default select example" name="type">
                                                        <option value="" selected>Select Product Type</option>
                                                        <option value="In Stock">In Stock</option>
                                                        <option value="Out of Stock">Out of Stock</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Product Name</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control p-0 border-0" name="name" required> </div>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12">                                 
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Description</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <textarea name="desc" id="" cols="30" rows="5" class="form-control p-0 "></textarea>
                                                </div>
                                            </div> 
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="example-email" class="col-md-12 p-0">Product Price</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="number" class="form-control p-0 border-0" name="price" required>
                                                </div>
                                            </div> 
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Product Staus</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <select class="form-control border-0" aria-label="Default select example" name="status">
                                                        <option value="" selected>Select Status</option>
                                                        <option value="In Stock">In Stock</option>
                                                        <option value="Out of Stock">Out of Stock</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="example-email" class="col-md-12 p-0">Product Image</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="file" class="form-control p-0 border-0" name="image" required>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <?php 
                                        if(isset($_POST['update']))
                                            {	
                                            require "includes/connection.php";										                
                                            $name=$_POST['name'];                                            
                                            $mobile=$_POST['phno'];
                                            $email=$_POST['email'];
                                            if (!preg_match("/^([a-zA-Z' ]+)$/",$name))
                                            {                                                
                                                echo "<script>alert('Name should contain Only letters and white space');</script>";
                                            }
                                            else if (!preg_match("/^([0-9]+)$/",$mobile))
                                            {                                                
                                                echo "<script>alert('Mobile Number Should contain only Numbers');</script>";
                                            }else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                                            {												                                                
                                                echo "<script>alert('Invalid Email ID');</script>";
                                            }
                                            else{
                                                        $str="update admin set name='$name',mobile_number='$mobile',email_id='$email' where username='$username'";
                                                        if(mysqli_query($con,$str))
                                                        {
                                                            echo "<script>alert('Profile Updated Successfully');</script>";
                                                            echo "<script>location.href='profile.php';</script>";
                                                        }else{
                                                            echo "<script>alert('Some Error! Please try again later');</script>";
                                                        }
                                            }
                                        }
                                       ?>                                  
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit" name="update">Add Product</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Expenseoo
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
<?php include('includes/footer.php');?>      