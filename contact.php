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
	  <h3 class="mgt">Contact Us</h3>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="center_shop_1r text-right clearfix">
	  <h5><a class="col_2" href="#">Home</a> / <span>Contact Us</span></h5>
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
	 <div class="col-sm-8">
	  <div class="contact_1lm clearfix">
	  <div class="contact_1l clearfix">
	   <h4 class="col_1 mgt">Get in touch</h4>
	   <h3>Write Us A Message</h3>
	  </div><br>
	  <form method="post">
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Your Name <span class="col_3">*</span></h5>
		<input class="form-control" type="text" name="name" value="<?php echo $user_row['name'];?>" readonly>
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Email ID <span class="col_3">*</span></h5>
		<input class="form-control" type="email" name="email" value="<?php echo $user_row['email_id'];?>" readonly>
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Mobile Number<span class="col_3">*</span></h5>
		<input class="form-control" type="number" name="mobile" value="<?php echo $user_row['mobile_number'];?>" readonly>
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Subject <span class="col_3">*</span></h5>
		<input class="form-control" type="text" name="sub" required>
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
	   <div class="col-sm-12 space_left">
	    <h5>Your Message <span class="col_3">*</span></h5>
		<textarea class="form-control form_1" name="mes"></textarea>
		<h6><button class="button" type="submit" name="send">SEND MESSAGE</button></h6>
	   </div>
	  </div>
	  <?php 
	 	if(isset($_POST['send']))
		{
			$name=$user_row['name'];
			$mobile=$user_row['mobile_number'];
			$email=$user_row['email_id'];
			$sub=$_POST['sub'];
			$mes=$_POST['mes'];
			$str="insert into feedback(name,email_id,mobile_number,subject,message) values('$name','$email',$mobile,'$sub','$mes')";
			if(mysqli_query($con,$str))
			{
				echo "<script>alert('Your Feedback Sent successfully');</script>";
				echo "<script>location.href='contact.php';</script>";
			}
		}
	  ?>
	  </form>
	 </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="contact_1rm clearfix">
	    <div class="contact_1r1 mgt clearfix">
		 <span><i class="fa fa-phone"></i></span>
		 <h4>Call us Now:</h4>
		 <p>+123 456-789-0000</p>
		 <p class="mgt">+123 456-789-0000</p>
		</div>
		<div class="contact_1r1 clearfix">
		 <span><i class="fa fa-envelope"></i></span>
		 <h4>Email:</h4>
		 <p><a href="#">info@gmail.com</a></p>
		 <p class="mgt">info@gmail.com</p>
		</div>
		<div class="contact_1r1 clearfix">
		 <span><i class="fa fa-map-marker"></i></span>
		 <h4>Our Address:</h4>
		 <p>LB-61/1, Travel Agency, 15 Grand</p>
		 <p class="mgt">Central Terminal, London.</p>
		</div>
	  </div>
	 </div>
	</div>
	<div class="contact_2 clearfix">
	  <div class="col-sm-12">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
	  </div>
	 </div>
  </div>
 </div>
</section>

<section id="connect" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 space_all">
    <div class="connect_1 clearfix">
	 <div class="col-sm-3 connect_1m">
	  <div class="connect_1l clearfix">
	    <span><i class="fa fa-truck"></i></span>
	  </div>
	  <div class="connect_1r clearfix">
	   <h4>Free Shipping</h4>
	   <p>Free shipping world wide</p>
	  </div>
	 </div>
	 <div class="col-sm-3 connect_1m">
	  <div class="connect_1l clearfix">
	    <span><i class="fa fa-headphones"></i></span>
	  </div>
	  <div class="connect_1r clearfix">
	   <h4>Support 24/7</h4>
	   <p>Contact us 24 hours a day</p>
	  </div>
	 </div>
	 <div class="col-sm-3 connect_1m">
	  <div class="connect_1l clearfix">
	    <span><i class="fa fa-credit-card"></i></span>
	  </div>
	  <div class="connect_1r clearfix">
	   <h4>Secure Payments</h4>
	   <p>100% payment protection</p>
	  </div>
	 </div>
	 <div class="col-sm-3 connect_1m border_none">
	  <div class="connect_1l clearfix">
	    <span><i class="fa fa-shopping-cart"></i></span>
	  </div>
	  <div class="connect_1r clearfix">
	   <h4>Easy Return</h4>
	   <p>Simple returns policy</p>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<?php include('includes/footer.php');?>