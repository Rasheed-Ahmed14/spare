<?php session_start();?>
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

<section id="header">
 <div class="container">
  <div class="row">
   <div class="header_1 clearfix">
    <div class="col-sm-3">
	 <div class="header_1l clearfix">
	  <h2 class="mgt"><a href="index.php"><i class="fa fa-wrench"></i> <span class="col_1">RN</span> Customes</a></h2>
	 </div>
	</div>
	
	<div class="header_1r clearfix">
	  <ul class="nav navbar-nav mgt navbar-right">
				<li><a class="tag_m1" href="admin/">Admin</a></li>
				<li><a class="tag_m1" href="index.php">Login</a></li>
				<li><a class="tag_m1" href="register.php">Register</a></li>
			    </ul>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="contact" class="clearfix">
 <div class="container">
  <div class="row">
    <div class="contact_1  clearfix">
    <div class="col-sm-3"></div>
	<form method="post">
	 <div class="col-sm-6">
	  <div class="contact_1lm clearfix">
	  <div class="contact_1l clearfix">
	   <h4 class="col_1 mgt text-center">Sign-Up</h4>
	   <h3 class="text-center">Login here</h3>
	  </div><br>
	  <div class="checkout_1l1 clearfix">       
	   <div class="col-sm-12 space_left">
	    <h5>Email ID <span class="col_3">*</span></h5>
		<input class="form-control" type="email" name="email">
	   </div>	   
	   <div class="col-sm-12 space_left">
	    <h5>Password <span class="col_3">*</span></h5>
		<input class="form-control" type="password" name="pas1">
	   </div>	   
	   <div class="col-sm-12 space_center">	    
		<input class="form-control btn btn-danger" type="submit" name="login" value="Login">
	   </div>
	   <?php require "includes/connection.php";
                                if(isset($_POST['login'])){
                                    $pas1=$_POST['pas1'];
									$email=$_POST['email'];
                                    $pas=md5($pas1);
                                    $str="select * from user where email_id='$email' and password='$pas'";
                                    $res=mysqli_query($con,$str);
                                    if(mysqli_num_rows($res)>0)
                                    {
                                        $_SESSION['user_email']=$email;
                                        echo "<script>alert('Login successful');</script>";
                                        echo "<script>location.href='home.php';</script>";
                                    }else{
                                        echo "<script>alert('Invalid Credentials');</script>";
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

<script>
$(document).ready(function(){
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
		$(window).on('scroll', function(){
			if($(window).scrollTop() > secondaryNavTopPosition ) {
				secondaryNav.addClass('is-fixed');	
			} else {
				secondaryNav.removeClass('is-fixed');
			}
		});	
		
});
</script>

</body>
 
</html>
