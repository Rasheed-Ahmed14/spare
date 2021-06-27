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
	<link href="css/shop.css" rel="stylesheet">
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
	  <h3 class="mgt">Products</h3>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="center_shop_1r text-right clearfix">
	  <h5><a class="col_2" href="#">Home</a>/ <span>Products</span></h5>
	 </div>
	</div>
   </div>
 </div>
</div>
</section>

<section id="shop">
<div class="container">
 <div class="row">
   <div class="shop_1 clearfix">
    <div class="col-sm-3">
	  <div class="shop_1lm clearfix">	   
	   <div class="product_1l clearfix">
	   <h4 class="mgt">CATEGORIES</h4>
	   <hr>
	   <h5><a href="detail.html">Catagory (1)</a></h5>
	   <h5><a href="detail.html">Catagory (2)</a></h5>
	   <h5><a href="detail.html">Catagory (3)</a></h5>
	   <h5><a href="detail.html">Catagory (4)</a></h5>
	   <h5><a href="detail.html">Catagory (5)</a></h5>
	  </div>	  
	  <div class="product_1l clearfix">
	   <h4 class="mgt">Recent Sales</h4>
	   <hr>
       <div class="product_1li clearfix">
	    <img src="img/1.jpg" alt="abc">
		<h5 class="mgt"><a href="detail.html">Best Tool</a> <br>$89.00</h5>
		<span>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-o"></i>
		</span>
	   </div>
	   <div class="product_1li clearfix">
	    <img src="img/2.png" alt="abc">
		<h5 class="mgt"><a href="detail.html">Nice tool</a> <br>$69.00</h5>
		<span>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
	   </div>
	   <div class="product_1li border_none pdb clearfix">
	    <img src="img/33.jpg" alt="abc">
		<h5 class="mgt"><a href="detail.html">Good Tool</a> <br>$99.00</h5>
		<span>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
	   </div>
	  </div>
	  </div>
	</div>
	<div class="col-sm-9">
	 <div class="product_1rm clearfix">
	  <div class="product_1r clearfix  text-center">
	          <h5 class="mgt">Showing All Products</h5>
	  </div>
	  <div class="sell_o_1 clearfix">
                        <div class="col-sm-4">
                            <div class="arriv_2m clearfix">
							  <div class="arriv_2m1 clearfix">
								<a href="detail.html"><img src="img/16.jpg" alt="abc" height="200rem" width="250rem"></a>
							  </div>							  
							  <div class="arriv_2m2n clearfix">
							   <h5 class="text-center mgt">Sale</h5>
							  </div>
							  <div class="arriv_2m3 clearfix">
							   <h4 class="bold mgt">PRODUCT</h4>							   
							   <h3 class="normal">							   
							   <span class="span_3 col_1"> $34.00</span> 
							   </h3>
							  </div>
	                        </div>
                        </div>
						<div class="col-sm-4">
                            <div class="arriv_2m clearfix">
							  <div class="arriv_2m1 clearfix">
								<a href="detail.html"><img src="img/16.jpg" alt="abc" height="200rem" width="250rem"></a>
							  </div>							  
							  <div class="arriv_2m2n clearfix">
							   <h5 class="text-center mgt">Sale</h5>
							  </div>
							  <div class="arriv_2m3 clearfix">
							   <h4 class="bold mgt">PRODUCT</h4>							   
							   <h3 class="normal">							   
							   <span class="span_3 col_1"> $34.00</span> 
							   </h3>
							  </div>
	                        </div>
                        </div>                        
                </div>	   
	 </div>
	</div>
   </div>
 </div>
</div>
</section>

<?php include('includes/footer.php');?>