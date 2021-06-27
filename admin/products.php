<?php include('includes/header.php'); ?>
<?php include('includes/topbar.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/connection.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <div class="row">
                            <div class="col-md-10">
                                <h3 class="box-title">Products Info</h3>
                            </div>
                            <div class="col-md-2">
                                <a href="add_product.php" class="btn btn-primary">Add</a>
                            </div>
                        </div>
                                                        
                            <div class="table-responsive mt-3">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0"></th> 
                                            <th class="border-top-0">Product Type</th>                                           
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Status</th>                                            
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $str="select * from product";
                                    $res=mysqli_query($con,$str);
                                    if(mysqli_num_rows($res)>0)
                                    {        
                                        for($i=0;$i<mysqli_num_rows($res);$i++)
                                        {                            
                                        $row=mysqli_fetch_assoc($res);
                                        ?>
                                        <tr>
                                            <td><?php echo $i+1;?></td> 
                                            <td></td>                                            
                                            <td><?php echo $row['product_type'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['price'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            <td><?php echo $row['status'];?></td>                                            
                                            <td >                                                   
                                                   <a href="users.php?id=<?php echo $row['id'];?>" class="text-danger"><i class="fa fa-trash" style="font-size:20px"></i></a>                                                   
                                                </td>                                            
                                        </tr>
                                        <?php }} ?>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
            <footer class="footer text-center"> 2021 © RN Customes
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div><?php
        if(isset($_GET['id'])){
        $id=$_GET['id'];
        $str="delete from users where id='$id'";
        if(mysqli_query($con,$str))
        {
            echo "<script> location.href='users.php'; </script>";
        }
    }?>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <?php include('includes/footer.php');?>    