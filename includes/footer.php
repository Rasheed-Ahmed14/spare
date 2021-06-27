<section id="footer" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="footer_1 clearfix">
    <div class="col-sm-3">
	 <div class="footer_1l clearfix">
	   <h2 class="mgt"><a href="#"><span class="col_1">Tool</span> Store</a></h2>
	   <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart...</p>
	   <div class="footer_1li cleafix">
	    <span class="col_1"><i class="fa fa-headphones"></i></span>
		<h5>Customer Support</h5>
		<h4><a href="#">(00) 123 456 789</a></h4>
	   </div>
	 </div>
	</div>
	<div class="col-sm-5">
	 <div class="footer_1m clearfix">
	  <h4>Subscribe Newsletter To Get Updated</h4><br>
	  <div class="header_1m clearfix">
	  <div class="input-group">
					<input type="text" class="form-control" placeholder="Search">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button">
							Subscribe</button>
					</span>
				 </div>
	 </div>
	  <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart...</p>
      <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="footer_1r clearfix">
	  <h4>Information</h4>
	  <ul>
	   <li><a href="#">Delivery <span class="pull-right">Legal Notice</span></a></li>
	   <li><a href="#">About Us <span class="pull-right">Secure payment</span></a></li>
	   <li><a href="#">Contact Us <span class="pull-right">Sitemap</span></a></li>
	   <li><a href="#">Stores <span class="pull-right">My Account</span></a></li>
	  </ul>
	 </div>
	</div>
   </div>
   <div class="footer_2 text-center clearfix">
    <div class="col-sm-12">
	 <p class="mgt">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_1" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
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
