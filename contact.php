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
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="probootstrap-right-nav hidden-xs">
     
          
		  <li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#signup"><b>Signup</b></button></a></li>
			 
			  <li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#login"><b>Login</b></button></a></li>
		  </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
			  
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
      <li style="background-image: url(img/slider_1.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Contact</h2>
                <p>Free HTML5 Template by <a href="https://uicookies.com/" target="_blank">uicookies.com</a>. Far far away, behind the word mountains, far from the countries.</p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 probootstrap-animate overlap">
          <form action="#" method="post" class="probootstrap-form probootstrap-form-box mb60">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1 probootstrap-animate">
          <h4>Contact Details</h4>
          <ul class="with-icon colored">
            <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
            <li><i class="icon-mail"></i><span>info@domain.com</span></li>
            <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
          </ul>

          <h4>Feedback</h4>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <p><a href="#">Learn More</a></p>
        </div>
      </div>
    </div>
  </section>  
  <!-- END section -->
  <div class="container mb50 probootstrap-animate">
    <div id="map"></div>
  </div>

  <section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>People Says...</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="img/person_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>John Doe <span>Designer at uicookies.com</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="img/person_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>John Doe <span>Designer at uicookies.com</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="img/person_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>John Doe <span>Designer at uicookies.com</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- END section -->
  

  <footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Virb.</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#">Read more...</a></p>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
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
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
			  
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
  
   /* Signup bootstrap form html */
  
<div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 align="center" class="text-primary">Signup </h3>
        </div>
		<div class="modal-body">
		<div class="row">	
		    <form  method="post" action="" role="form" class="form-horizontal">	
			
			<div class="form-group">
			<label class="control-label col-md-3">Username :</label>
			<div class="col-md-9">
			<input type="text" class="form-control" name="username" value="" placeholder="Please Enter Your Name" required>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Email :</label>
			<div class="col-md-9">
			<input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">Password :</label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="password_1" value="" placeholder="Please Enter Your password" required>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">Confirm Password :</label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="password_2" value="" placeholder="Please Retype Your password" required>
			</div></div>
			
			<div class="modal-body">
			<br><br><label class="form-control-label col-md-3">   Sign Up as :</label>
			
			<div class="modal-body">
			<div class="btn-group">
			<div class="col-sm-offset-2  col-sm-10">
			
			<label class="radio">
            <input class="form-check-input" type="radio"  name="radio" value="Consumer">Consumer<br>
            
            <input class="form-check-input" type="radio"  name="radio" value="Company">Company<br>
           
            <input class="form-check-input" type="radio"  name="radio" value="Local Seller">Local Seller</label>
            </div>		
			</div>
            </div>	
			</div>
			
			
			
			
			
			<div class="form-group">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<input type="submit" name="reg_user" value="Signup Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default"> 
			</div>
			
			</div>	
			</form>					
                </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>
  </div>
/* Login bootstrap form html */
   <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 align="center" class="text-primary">Login</h3>
        </div>
		<div class="modal-body">
		<div class="row">	
		    <form  method="post" action="" role="form" class="form-horizontal">		
			<div class="form-group">
			<label class="control-label col-md-3">Email :</label>
			<div class="col-md-9">
			<input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">Password :</label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
			</div>
			</div>	
			<div class="form-group">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<input type="submit" name="login_user" value="Login Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default"> 
			</div>	
			</div>	
			</form>					
                </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>

  <script src="js/custom.js"></script>

  </body>
</html>