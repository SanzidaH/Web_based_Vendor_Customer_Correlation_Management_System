<?php
 include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review management</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
	
	
	<link rel="stylesheet" href="bootstrap/4.1.0/css/bootstrap.min.css"/>

	
	<link rel="stylesheet" href="bootstrap-4.1.0-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").slideToggle();
    });
});
</script>


  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.php" class="probootstrap-logo">পণ্য আলাপ</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="projects.php">Launched products</a></li>
            <li><a href="services.php">Product reviews</a></li>
            <li class="active"><a href="about.php">About</a></li>
          </ul>
          <ul class="probootstrap-right-nav hidden-xs">
            <!--<li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>-->
			
			<li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#signup"><b>Signup</b></button></a></li>
			 
			  <li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#login"><b>Login</b></button></a></li>
			  
          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                 <h5>Address:</h5>
            <p>Military Institute of Science and Technology (MIST)<br/> Mirpur Cantonment, Dhaka.</p>
            
			  
			  <li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#signup"><b>Signup</b></button></a></li>
			 
			  <li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#login"><b>Login</b></button></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/dev.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2><b/>About Us</h2>
                <p>WE ARE DREAMERS</p>
		<div class="col-md-12 text-center">
		 <a class="ct-btn-scroll ct-js-btn-scroll" href="#section2"><img src="img/down.png" style="width: 10%; display: block;
    margin-left: auto;
    margin-right: auto;"></a>

  </div>
        </button>
              </div>
            </div>
          </div>
        </div>
      </li>
	  		 <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-chevron-up"></span> 
    </ul>
  </section>
  <!-- END: slider  -->
<!--
  <section class="probootstrap-section">
    <div class="container">
      <div class="row mb50 probootstrap-animate" data-animate-effect="fadeIn">
        <div class="col-md-6">
          <p><img src="img/slider_3.jpg" alt="Free HTML5 Bootstrap Theme by uicookies.com" class="img-responsive"></p>
        </div>
        <div class="col-md-6">
          <h2>How We Started</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
      </div>
      <div class="row probootstrap-animate" data-animate-effect="fadeIn">
        <div class="col-md-6 col-md-push-6">
          <p><img src="img/slider_2.jpg" alt="Free HTML5 Bootstrap Theme by uicookies.com" class="img-responsive"></p>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <h2>Our Philosophy</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
      </div>
    </div>
  </section> -->

  <section class="probootstrap-section">
    <div class="container" id="section2">
      <div class="row">
        <div class="col-md-12 section-heading text-center probootstrap-animate">
          <h2><b/>The Team</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/lipi.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Jeremy Slater</h2>
              <p><small>Farhana Kabir</small></p>
              <p>201514100</p>
              <ul class="probootstrap-social">
               
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/Buri.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Butterly</h2>
              <p><small>Sanzida Hoque</small></p>
              <p>201514114</p>
              <ul class="probootstrap-social">
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/rbt.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Smith</h2>
              <p><small>Sharmin Sultana</small></p>
              <p>201514097</p>
              <ul class="probootstrap-social">
                
              </ul>
            </div>
          </div>
        </div>
      </div>
	  
	        <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/dia.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Jeremy Slater</h2>
              <p><small>Diana Shahrin</small></p>
              <p>201414103</p>
              <ul class="probootstrap-social">
              
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/Anuja.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Butterly</h2>
              <p><small>Lt Anuja Tanu</small></p>
              <p>201514171</p>
              <ul class="probootstrap-social">
               
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/Anjum.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Smith</h2>
              <p><small>Lt Anjum Shushmy</small></p>
              <p>201514148</p>
              <ul class="probootstrap-social">
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->


  </section>

  <!-- END section -->
  

  <footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About পণ্য আলাপ (Ponno Alap)</h4>
            <p>See what consumers are reviewing about different products. <br/><br/> See what the companies are attempting to improve their products. <br/><br/> Easy submission option for local seller's monthly reports. <br/> </p>
          </div> 
        </div>
        <div class="col-md-3">
          <!--<div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Product reviews</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Testimonial</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">More Links</h4>
            <ul class="stack-link">
              <li><a href="#">Projects</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Support Help</a></li>
            </ul>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <p>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Virb</a>. Designed by <a href="https://uicookies.com/">uicookies.com</a> <br> Demo Photos from <a href="https://unsplash.com/">Unsplash</a></p>
          </div>-->
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-social">
              
			  
			  <!-- inser more links here -->
				
				
				<li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#signup"><b>Signup</b></button></a></li>
			 
			  <li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#login"><b>Login</b></button></a></li>
			  
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  


<script src="scroll-down.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>