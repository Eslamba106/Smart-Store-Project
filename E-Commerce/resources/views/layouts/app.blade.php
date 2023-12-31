<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>@yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{  asset('css/style.css')  }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{  asset('css/menu.css')  }}" rel="stylesheet" type="text/css" media="all"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
	<div class="wrap">
	  <div class="header">
		  <div class="header_top">
			  <div class="logo">
				  <a href="index.html"><img src="images/logo.png" alt="" /></a>
			  </div>
				<div class="header_top_right">
				  <div class="search_box">
					  <form>
						  <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
					  </form>
				  </div>
				  <div class="shopping_cart">
					  <div class="cart">
						  <a href="#" title="View my shopping cart" rel="nofollow">
							  <strong class="opencart"> </strong>
								  <span class="cart_title">Cart</span>
									  <span class="no_product">(empty)</span>
							  </a>
						  </div>
					</div>
		  <div class="languages" title="language">
			  <div id="language" class="wrapper-dropdown" tabindex="1">EN
						  <strong class="opencart"> </strong>
						  <ul class="dropdown languges">					
							   <li>
								   <a href="#" title="Français">
									  <span><img src="images/gb.png" alt="en" width="26" height="26"></span><span class="lang">English</span>
								  </a>
							   </li>
								  <li>
									  <a href="#" title="Français">
										  <span><img src="images/au.png" alt="fr" width="26" height="26"></span><span class="lang">Français</span>
									  </a>
								  </li>
						  <li>
							  <a href="#" title="Español">
								  <span><img src="images/bm.png" alt="es" width="26" height="26"></span><span class="lang">Español</span>
							  </a>
						  </li>
								  <li>
									  <a href="#" title="Deutsch">
										  <span><img src="images/ck.png" alt="de" width="26" height="26"></span><span class="lang">Deutsch</span>
									  </a>
								  </li>
						  <li>
							  <a href="$" title="Russian">
								  <span><img src="images/cu.png" alt="ru" width="26" height="26"></span><span class="lang">Russian</span>
							  </a>
						  </li>					
					 </ul>
			   </div>
			   <script type="text/javascript">
			  function DropDown(el) {
				  this.dd = el;
				  this.initEvents();
			  }
			  DropDown.prototype = {
				  initEvents : function() {
					  var obj = this;
  
					  obj.dd.on('click', function(event){
						  $(this).toggleClass('active');
						  event.stopPropagation();
					  });	
				  }
			  }
  
			  $(function() {
  
				  var dd = new DropDown( $('#language') );
  
				  $(document).click(function() {
					  // all dropdowns
					  $('.wrapper-dropdown').removeClass('active');
				  });
  
			  });
  
		  </script>
		   </div>
			  <div class="currency" title="currency">
					  <div id="currency" class="wrapper-dropdown" tabindex="1">$
						  <strong class="opencart"> </strong>
						  <ul class="dropdown">
							  <li><a href="#"><span>$</span>Dollar</a></li>
							  <li><a href="#"><span>€</span>Euro</a></li>
						  </ul>
					  </div>
					   <script type="text/javascript">
			  function DropDown(el) {
				  this.dd = el;
				  this.initEvents();
			  }
			  DropDown.prototype = {
				  initEvents : function() {
					  var obj = this;
  
					  obj.dd.on('click', function(event){
						  $(this).toggleClass('active');
						  event.stopPropagation();
					  });	
				  }
			  }
  
			  $(function() {
  
				  var dd = new DropDown( $('#currency') );
  
				  $(document).click(function() {
					  // all dropdowns
					  $('.wrapper-dropdown').removeClass('active');
				  });
  
			  });
  
		  </script>
	 </div>
			 <div class="login">
					<span><a href="login.html"><img src="images/login.png" alt="" title="login"/></a></span>
			 </div>
		   <div class="clear"></div>
	   </div>
	   <div class="clear"></div>
   </div>


   {{-- work --}}
	  <div class="menu">
		<ul id="dc_mega-menu-orange" class="dc_mm-orange">
		   <li><a href="/">Home</a></li>
	  <li><a href="products">Products</a>
	  <ul>
		<li><a href="products.html">Mobile Phones</a>
		  <ul>
			<li><a href="preview-2.html">Product 1</a></li>
			<li><a href="preview-3.html">Product 2</a></li>
			<li><a href="#">Product 3</a></li>
			<li><a href="#">Product 4</a></li>
			<li><a href="preview-6.html">Product 5</a></li>
			<li><a href="#">Product 6</a></li>
		  </ul>
		</li>
		<li><a href="products.html">Desktop</a>
		  <ul>
			<li><a href="preview.html">Product 1</a></li>
			<li><a href="preview-5.html">Product 2</a></li>
			<li><a href="preview-3.html">Product 3</a></li>
			<li><a href="#">Product 4</a></li>
			<li><a href="#">Product 5</a></li>
			<li><a href="#">Product 6</a></li>
		  </ul>
		</li>
		<li><a href="products.html">Laptop</a>
		  <ul>
			<li><a href="preview-2.html">Product 10</a></li>
			<li><a href="preview-5.html">Product 11</a></li>
			<li><a href="#">Product 12</a></li>
			<li><a href="#">Product 13</a></li>
		  </ul>
		</li>
		<li><a href="#">Accessories</a>
		  <ul>
			<li><a href="#">Product 14</a></li>
			<li><a href="#">Product 15</a></li>
		  </ul>
		</li>
		<li><a href="#">Software</a>
		  <ul>
			<li><a href="#">Product 16</a></li>
			<li><a href="#">Product 17</a></li>
			<li><a href="#">Product 18</a></li>
			<li><a href="#">Product 19</a></li>
		  </ul>
		</li>
		 <li><a href="#">Sports & Fitness</a>
		  <ul>
			<li><a href="#">Product 16</a></li>
			<li><a href="#">Product 17</a></li>
			<li><a href="#">Product 18</a></li>
			<li><a href="#">Product 19</a></li>
		  </ul>
		</li>
		 <li><a href="#">Footwear</a>
		  <ul>
			<li><a href="#">Product 16</a></li>
			<li><a href="#">Product 17</a></li>
			<li><a href="#">Product 18</a></li>
			<li><a href="#">Product 19</a></li>
		  </ul>
		</li>
		 <li><a href="#">Jewellery</a>
		  <ul>
			<li><a href="#">Product 16</a></li>
			<li><a href="#">Product 17</a></li>
			<li><a href="#">Product 18</a></li>
			<li><a href="#">Product 19</a></li>
		  </ul>
		</li>
		 <li><a href="#">Clothing</a>
		  <ul>
			<li><a href="#">Product 16</a></li>
			<li><a href="#">Product 17</a></li>
			<li><a href="#">Product 18</a></li>
			<li><a href="#">Product 19</a></li>
		  </ul>
		</li>
		 <li><a href="#">Home Decor & Kitchen</a>
		  <ul>
			<li><a href="#">Product 16</a></li>
			<li><a href="#">Product 17</a></li>
			<li><a href="#">Product 18</a></li>
			<li><a href="#">Product 19</a></li>
		  </ul>
		</li>
		 <li><a href="#">Beauty & Healthcare</a>
		  <ul>
			<li><a href="#">Product 16</a></li>
			<li><a href="#">Product 17</a></li>
			<li><a href="#">Product 18</a></li>
			<li><a href="#">Product 19</a></li>
		  </ul>
		</li>
		 <li><a href="#">Toys, Kids & Babies</a>
		  <ul>
			<li><a href="#">Product 16</a></li>
			<li><a href="#">Product 17</a></li>
			<li><a href="#">Product 18</a></li>
			<li><a href="#">Product 19</a></li>
		  </ul>
		</li>
	  </ul>
	</li>
	<li><a href="products.html">Top Brands</a>
	  <ul>
		<li><a href="products.html">Brand Name 1</a></li>
		<li><a href="products.html">Brand Name 2</a></li>
		<li><a href="products.html">Brand Name 3</a></li>
		<li><a href="#">Brand Name 4</a></li>
		<li><a href="#">Brand Name 5</a></li>
		<li><a href="#">Brand Name 6</a></li>
		<li><a href="#">Brand Name 7</a></li>
		<li><a href="#">Brand Name 8</a></li>
		<li><a href="#">Brand Name 9</a></li>
		<li><a href="#">Brand Name 10</a></li>
	  </ul>
	</li>
	<li><a href="faq.html">Services</a>
	  <ul>
		<li><a href="#">Service 1</a>
		  <ul>
			<li><a href="#">Service Detail A</a></li>
			<li><a href="#">Service Detail B</a></li>
		  </ul>
		</li>
		<li><a href="#">Service 2</a>
		  <ul>
			<li><a href="#">Service Detail C</a></li>
		  </ul>
		</li>
		<li><a href="#">Service 3</a>
		  <ul>
			<li><a href="#">Service Detail D</a></li>
			<li><a href="#">Service Detail E</a></li>
			<li><a href="#">Service Detail F</a></li>
		  </ul>
		</li>
		<li><a href="#">Service 4</a></li>
	  </ul>
	</li>
	<li><a href="about.html">About</a></li>
	 <li><a href="#">Delivery</a></li>
	<li><a href="faq.html">FAQS</a></li>
	<li><a href="contact.html">Contact</a> </li>
	<div class="clear"></div>
  </ul>
  </div>



@yield('cont')




   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="#"><span>Contact Us</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="faq.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html"><span>Site Map</span></a></li>
						<li><a href="preview-2.html"><span>Search Terms</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="faq.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>Compant Name © All rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a> </p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
</body>
</html>

