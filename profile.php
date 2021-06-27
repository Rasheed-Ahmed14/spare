<?php include('includes/log_status.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tool Store</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/contact.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  
<body>

<?php include('includes/navbar.php');?>

<section id="center" class="clearfix center_shop">
<div class="container">
 <div class="row">
   <div class="center_shop_1 clearfix">
    <div class="col-sm-6">
	 <div class="center_shop_1l clearfix">
	  <h3 class="mgt">Your Profile</h3>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="center_shop_1r text-right clearfix">
	  <h5><a class="col_2" href="#">Home</a> / <span>Your Profile</span></h5>
	 </div>
	</div>
   </div>
 </div>
</div>
</section>

<section id="contact" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="contact_1  clearfix">
    <div class="col-sm-2"></div>
	 <div class="col-sm-8">
	 <form method="post">
	  <div class="contact_1lm clearfix">
	  <div class="contact_1l clearfix">
	   <h4 class="col_1 mgt text-center">Profile</h4>	   
	  </div><br>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Your Name <span class="col_3">*</span></h5>
		<input class="form-control" type="text" name="name" value="<?php echo $user_row['name'];?>">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Email ID <span class="col_3">*</span></h5>
		<input class="form-control" type="email" name="email" value="<?php echo $user_row['email_id'];?>" readonly>
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Mobile Number <span class="col_3">*</span></h5>
		<input class="form-control" type="number" name="mobile" value="<?php echo $user_row['mobile_number'];?>">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Address <span class="col_3">*</span></h5>
		<input class="form-control" type="text" name="addr" value="<?php echo $user_row['address'];?>">
	   </div>	   
	   <div class="col-sm-12 space_center">	    
		<input class="form-control btn btn-danger" type="submit" name="update" value="Update">
	   </div>
	   <?php require "includes/connection.php";                                   
                                if(isset($_POST['update'])){
                                    $name=$_POST['name'];                                    
                                    $mobile=$_POST['mobile'];
									$email=$_POST['email'];
                                    $address=$_POST['addr'];
                                    if(!preg_match("/^([a-zA-Z' ]+)$/",$name))
                                    {
                                        echo "<script>alert('Invalid Name!. Name should not conatain numbers and special characters.');</script>";
                                    }else if(!preg_match("/^([0-9]+)$/",$mobile) or strlen((string)$mobile)!=10){
                                        echo "<script>alert('Invalid Mobile Number!. Mobile Number should not conatain only numbers and length should ne equal to 10.');</script>";
                                    }else{                                                                                                                  
                                            $str="update user set name='$name',mobile_number=$mobile,address='$address' where email_id='$email'";
                                            if(mysqli_query($con,$str))
                                            {                                                
                                                echo "<script>alert('Your Profile Updated Successfully');</script>";
                                                echo "<script>location.href='profile.php';</script>";
                                            }                                        
                                        
                                    }
                                }                            
                            ?>	   	   
	  </div>	  
	 </div>
	 </form>
	 </div>	 
	</div>	
  </div>
 </div>
</section>

<?php include('includes/footer.php');?>