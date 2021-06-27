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
    <div class="col-sm-2"></div>
	 <div class="col-sm-8">
	 <form method="post">
	  <div class="contact_1lm clearfix">
	  <div class="contact_1l clearfix">
	   <h4 class="col_1 mgt text-center">Register</h4>
	   <h3 class="text-center">Create New Account</h3>
	  </div><br>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Your Name <span class="col_3">*</span></h5>
		<input class="form-control" type="text" name="name">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Email ID <span class="col_3">*</span></h5>
		<input class="form-control" type="email" name="email">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Mobile Number <span class="col_3">*</span></h5>
		<input class="form-control" type="number" name="mobile">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Address <span class="col_3">*</span></h5>
		<input class="form-control" type="text" name="addr">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Password <span class="col_3">*</span></h5>
		<input class="form-control" type="password" name="pas1">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Confirm Password <span class="col_3">*</span></h5>
		<input class="form-control" type="password" name="pas2">
	   </div>
	   <div class="col-sm-12 space_center">	    
		<input class="form-control btn btn-danger" type="submit" name="register" value="Register">
	   </div>
	   <?php require "includes/connection.php";                                   
                                if(isset($_POST['register'])){
                                    $name=$_POST['name'];
                                    $pas1=$_POST['pas1'];
                                    $pas2=$_POST['pas2'];
                                    $mobile=$_POST['mobile'];
									$email=$_POST['email'];
                                    $address=$_POST['addr'];
                                    if(!preg_match("/^([a-zA-Z' ]+)$/",$name))
                                    {
                                        echo "<script>alert('Invalid Name!. Name should not conatain numbers and special characters.');</script>";
                                    }else if(!preg_match("/^([0-9]+)$/",$mobile) or strlen((string)$mobile)!=10){
                                        echo "<script>alert('Invalid Mobile Number!. Mobile Number should not conatain only numbers and length should ne equal to 10.');</script>";
                                    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                        echo "<script>alert('Invalid Email ID!.');</script>";
                                    }else if($pas1!=$pas2)
                                    {
                                        echo "<script>alert('Password doesn't match!.');</script>";
                                    }else if(strlen($pas1)<=6 or strlen($pas1)>=10)
                                    {
                                        echo "<script>alert('Password should contain atleast 6 characters and atmost 10 characters.');</script>";
                                    }else{                                
                                        $str="select * from user where email_id='$email'";
                                        $res=mysqli_query($con,$str);
                                        if(mysqli_num_rows($res)>0)
                                        {
                                            echo "<script>alert('user with email id ".$email." already exist.');</script>";
                                        }else{ 
                                            $pas=md5($pas1);
                                            $str="insert into user values('$name','$email',$mobile,'$address','$pas')";
                                            if(mysqli_query($con,$str))
                                            {                                                
                                                echo "<script>location.href='index.php';</script>";
                                            }                                        
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
