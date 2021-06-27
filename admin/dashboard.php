<?php include('includes/header.php'); ?>
<?php include('includes/topbar.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/connection.php'); ?>
        <div class="page-wrapper">            
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="white-box analytics-info">                        
                            <h3 class="box-title">Total Admins</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div><i class="fa fa-user fa-4x"></i>
                                    </div>
                                </li>
                                <?php 
                                $str="select * from admin";
                                $res=mysqli_query($con,$str);
                                ?>
                                <li class="ms-auto"><span class="counter text-success"><?php echo mysqli_num_rows($res);?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Users</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div><i class="fa fa-users fa-4x"></i>
                                    </div>
                                </li>
                                <?php 
                                $str="select * from users";
                                $res=mysqli_query($con,$str);
                                ?>
                                <li class="ms-auto"><span class="counter text-success"><?php echo mysqli_num_rows($res);?></span></li>
                            </ul>
                        </div>
                    </div>                   
                </div>
                <!-- ============================================================== -->
<?php include('includes/footer.php');?>