<!DOCTYPE html>
<html>
<head>
<title>Fiyo Agatha Putra | Profile </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>

	<link rel="shortcut icon" type="x-icon" href="imagesv/logo2.png">

<body>
<div class="header" id="head">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				<a href="#"><p class="title">Welcome to My Profile Website,</p></a>
			 </div>
		   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
			 	<nav class="cl-effect-5">
				<li><a class="active" href="#"><span data-hover="Home">Home</span></a></li>
				<li><a href="#about" class="scroll"><span data-hover="About">About</span></a></li>
				<li><a href="#work" class="scroll"><span data-hover="Certificate"><span>Certificate</span></a></li>
				<li><a href="#services" class="scroll"><span data-hover="Education">Education</span></a></li>
				<li><a href="#contact" class="scroll"><span data-hover="contact">contact</span></a></li>
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			<div class="clearfix"></div>
		 </div>  
		  <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       	<div class="banner_center">
				   		 		<h1>Selamat datang,</h1> 
				   		 		<h2>di <span>website portfolio</span></h2>
				   		 		<h2>Fiyo agatha putra</h2>
				   		 		</div>
				   		 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	   	<div class="banner-wrap">
				   	      <div class="banner_center">
				   		 		<h1>web ini menampilkan,</h1> 
				   		 		<h2><span>data diri dan kontak</span> saya</h2>
				   		 		</div>
				   		  </div>
				 </div>
				
            </div>
            <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
	 </div>     
	</div>

	@yield('content')
		

	<div class="footer-section" id="contact" id="contact">
			<div class="container"> 
			<div class="contact-header">
				<h3> contact</h3>
					<p>Berikut adalah kontak saya yang dapat dihubungi dan beberapa sosial media saya untuk dapat menjalin kerjasama dengan saya</p>
			</div>
			<div class="social-icon">
				<a href="https://twitter.com/FiyoAgatha" target="_new"><i class="icon1"></i></a>
				<a href="https://www.facebook.com/fiyo.putra.5" target="new"><i class="icon2"></i></a>
				<a href="https://mail.google.com/mail/?to=fiyoagatha98@gmail.com&bcc=fiyoagatha98@gmail.com&subject=Hey#compose" target="_new"><i class="icon3"></i></a>
				<a href="https://www.youtube.com/channel/UCrDyMmQ7T7qiMOEawCpZsYg" target="_new"><i class="icon4"></i></a>





					</div>
					<script type="text/javascript">
						$(document).ready(function() {

							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

		</div>		
	</div>
	
	
</body>
</html>