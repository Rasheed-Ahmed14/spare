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
	<link href="css/checkout.css" rel="stylesheet">
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
	  <h3 class="mgt">Checkout</h3>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="center_shop_1r text-right clearfix">
	  <h5><a class="col_2" href="#">Home</a> / <span>Checkout</span></h5>
	 </div>
	</div>
   </div>
 </div>
</div>
</section>

<section id="checkout" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="checkout_1 clearfix">
    <div class="col-sm-8">
	  <div class="checkout_1l clearfix">
	   <h3 class="mgt">Make Your Checkout Here</h3>
	   <p>Please register in order to checkout more quickly</p>
	  </div><br>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>First Name <span class="col_1">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Last Name <span class="col_1">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Email Address <span class="col_1">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Phone Number <span class="col_1">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Country <span class="col_1">*</span></h5>
		<select class="form-control">
				 <option>India</option>
				 <option>Paksitan</option>
				 <option>Russia</option>
				 <option>England</option>
				 <option>Nepal</option>
			 </select>
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>State / Divition <span class="col_1">*</span></h5>
		<select class="form-control">
				 <option>UP</option>
				 <option>MP</option>
				 <option>Bihar</option>
				 <option>Delhi</option>
				 <option>Jharkhand</option>
			 </select>
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Address Line 1 <span class="col_1">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Address Line 2 <span class="col_1">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Postal Code <span class="col_1">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Company <span class="col_1">*</span></h5>
		<select class="form-control">
				 <option>Microsoft</option>
				 <option>Xaiomi</option>
				 <option>Apple</option>
				 <option>Samsung</option>
				 <option>Motorola</option>
			 </select>
	   </div>
	  </div>
	  <div class="checkout_1l clearfix">
	   <p><input type="checkbox"> Create an account?</p>
	  </div>
	</div>
	 <div class="col-sm-4">
       <div class="checkout_1r clearfix">
	     <h4 class="mgt">CART TOTALS</h4>
	     <hr class="hr_1">
		<h5>Sub Total <span class="pull-right">$230.00</span></h5>
		<h5>(+) Shipping <span class="pull-right">$20.00</span></h5>
		<hr class="hr_2"> 
		<h5>Total <span class="pull-right">$250.00</span></h5><br>
		 <h4>PAYMENTS</h4>
	     <hr class="hr_1">
		 <p><input type="radio"> <span>Check Payments</span></p>
		 <p><input type="radio"> <span>Cash On Delivery</span></p>
		 <p><input type="radio"> <span>PayPal</span></p><br>
		 <h6><a class="button" href="#">PROCEED TO CHECKOUT</a></h6>
	   </div>
	  </div>
   </div>
  </div>
 </div>
</section>

<?php include('includes/footer.php');?>