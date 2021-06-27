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
	<link href="css/detail.css" rel="stylesheet">
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
	  <h3 class="mgt">Product Details</h3>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="center_shop_1r text-right clearfix">
	  <h5><a class="col_2" href="#">Home</a> / <a class="col_2" href="#">Shop</a> / <span>Product Details</span></h5>
	 </div>
	</div>
   </div>
 </div>
</div>
</section>

<section id="shop_detail">
<div class="container">
 <div class="row">
   <div class="shop_detail_1 clearfix">
    <div class="col-sm-6">
	 <div class="center_detail_2_left clearfix">
		   <div class="carousel slide article-slide" id="article-photo-carousel">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner cont-slider">
		
			<div class="item active">
			  <div class="mag">
                <div class="magnify"><div class="magnify"><img data-toggle="magnify" src="img/34.jpg" alt=""><div class="magnify-large" style="background: url(&quot;img/53.jpg&quot;) no-repeat;"></div></div><div class="magnify-large"></div></div>
            </div>
			</div>			
		  </div>
		  <!-- Indicators -->		  
        </div>
		 </div>
	</div>
	<div class="col-sm-6">
	 <div class="center_detail_2_right clearfix">
		 <h3 class="mgt"> Nulla quis sem at nibh imperdiet</h3>		 
		<h4><span class="span_2 col_1">$60.00</span></h4>
		<p>Eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<hr>
		<h4>Available Options</h4>		
		 <h5>Quantity:</h5>
		 <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>			</div>
		 <div class="pd_n1 clearfix">		  		
		        <h4><a class="button_1" href="#"> ADD TO CART</a></h4>
		</div>		
    </div>
	</div>
   </div>   
 </div>
</div>
</section>

<section id="sell_n">
 <div class="container">
  <div class="row">
      <div class="sell_1_o clearfix">
            <div class="col-sm-5 space_left sell_1_ol">
               <h2 class="mgt">Hot Deals</h2>
			   <hr>
            </div>
            <div class="col-sm-7 space_left">
                <!-- Controls -->
               <div class="clearfix sell_1_or text-right">
			    
			   </div>
            </div>
        </div>
	  <div class="sell_o_1 clearfix">
                        <div class="col-sm-3 space_left">
                            <div class="arriv_2m clearfix">
							  <div class="arriv_2m1 clearfix">
								<a href="#"><img src="img/20.jpg" alt="abc"  height="200rem" width="278rem"></a>
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
</section>

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

<script>
	/*
Credits:
https://github.com/marcaube/bootstrap-magnify
*/


!function ($) {

    "use strict"; // jshint ;_;


    /* MAGNIFY PUBLIC CLASS DEFINITION
     * =============================== */

    var Magnify = function (element, options) {
        this.init('magnify', element, options)
    }

    Magnify.prototype = {

        constructor: Magnify

        , init: function (type, element, options) {
            var event = 'mousemove'
                , eventOut = 'mouseleave';

            this.type = type
            this.$element = $(element)
            this.options = this.getOptions(options)
            this.nativeWidth = 0
            this.nativeHeight = 0

            this.$element.wrap('<div class="magnify" \>');
            this.$element.parent('.magnify').append('<div class="magnify-large" \>');
            this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");

            this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
            this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
        }

        , getOptions: function (options) {
            options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

            if (options.delay && typeof options.delay == 'number') {
                options.delay = {
                    show: options.delay
                    , hide: options.delay
                }
            }

            return options
        }

        , check: function (e) {
            var container = $(e.currentTarget);
            var self = container.children('img');
            var mag = container.children(".magnify-large");

            // Get the native dimensions of the image
            if(!this.nativeWidth && !this.nativeHeight) {
                var image = new Image();
                image.src = self.attr("src");

                this.nativeWidth = image.width;
                this.nativeHeight = image.height;

            } else {

                var magnifyOffset = container.offset();
                var mx = e.pageX - magnifyOffset.left;
                var my = e.pageY - magnifyOffset.top;

                if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                    mag.fadeIn(100);
                } else {
                    mag.fadeOut(100);
                }

                if(mag.is(":visible"))
                {
                    var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;
                    var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;
                    var bgp = rx + "px " + ry + "px";

                    var px = mx - mag.width()/2;
                    var py = my - mag.height()/2;

                    mag.css({left: px, top: py, backgroundPosition: bgp});
                }
            }

        }
    }


    /* MAGNIFY PLUGIN DEFINITION
     * ========================= */

    $.fn.magnify = function ( option ) {
        return this.each(function () {
            var $this = $(this)
                , data = $this.data('magnify')
                , options = typeof option == 'object' && option
            if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
            if (typeof option == 'string') data[option]()
        })
    }

    $.fn.magnify.Constructor = Magnify

    $.fn.magnify.defaults = {
        delay: 0
    }


    /* MAGNIFY DATA-API
     * ================ */

    $(window).on('load', function () {
        $('[data-toggle="magnify"]').each(function () {
            var $mag = $(this);
            $mag.magnify()
        })
    })

} ( window.jQuery );
	</script>
	
<script>
	$(document).on('click', '.number-spinner button', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});
	</script>

</body>
 
</html>
