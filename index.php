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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="projects.php">Launched products</a></li>
            <li><a href="services.php">Product reviews</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
          <ul class="probootstrap-right-nav hidden-xs">
			
			<li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#signup"><b>Signup</b></button></a></li>
			 
			  <li><a <button type="button" class="btn btn-link" data-toggle="modal" data-target="#login"><b>Login</b></button></a></li>
			  
          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
           <h5>Address:</h5>
            <p>Military Institute of Science and Technology (MIST)<br/> Mirpur Cantonment, Dhaka.</p>
			  
		
			  
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/start1.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Know The New Products!<br/> Share Your Experience!<br/><br/></h2>
				<div class="col-md-12 text-center">
		 <a class="ct-btn-scroll ct-js-btn-scroll" href="#section2"><img src="img/down.png" style="width: 10%; display: block;
    margin-left: auto;
    margin-right: auto;"></a>
  </div>
  <div class="container" id="section2">
  </section>
  <!-- END: slider  -->

  <section class="probootstrap-section">
   
    <div class="container">
      <div class="row overlap">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">

            <div class="icon">
              <i class="icon-laptop3"></i>
            </div>
            <div class="text">
             <h3 class="heading"><b>Consumer</b></h3>
              <p>Share your experience and write review about the products you like/dislike. <br/>Learn about the newly launched products and deliver your suggestions. <br/>Let's help the companies to improve their product quality. </p>
              <!--<p><a href="single-page.php">Learn more</a></p>-->
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-presentation"></i>
            </div>
            <div class="text">
              <h3 class="heading"><b>Company</b></h3>
              <p>Learn about the consumer's views and opinions about the existing products. <br/>Let the consumers know about the plan of improvement. <br/>Let's advertise about the newly launched products and get suggestions from the consumers. </p>
              <!--<p><a href="single-page.php">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-wallet2"></i>
            </div>
            <div class="text">
              <h3 class="heading"><b>Local Seller</b></h3>
              <p>Do not worry about contacting with suppliers/companies. <br/>Submit your monthly report about the products quality, quantity, public opinion and consumption status online. <br/>Let's maintain monthly schedule for report submission.  </p>
              <!--<p><a href="single-page.php">Learn more</a></p>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <div class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>View of This Website</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

          <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h3 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    Developer's View
                  </a>
                </h3>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>As there are no quality assurance for Bangladeshi products, consumers of this country are much attracted to foreign products. From this point of view, the developers of this site wanted to create such a platform where the consumers will be able to share their experience about a product and also submit suggestions. Also for the companies, they will be notified about the short-comings and fault in quality assurance. Thus the companies will no how and where to improve. And so, maybe someday, all our countries product will improve to export quality and number of consumers of our own product will increase too. </p>

                  
                </div>
              </div>
            </div>
            <!--<div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    WordPress Integration
                  </a>
                </h3>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    SEO &amp; Ranking
                  </a>
                </h3>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
              </div>
            </div>-->
          </div>
          <!-- END panel-group -->
        </div>
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">
          <p><img src="img/p4.jpg" alt="Free HTML Bootstrap Theme by uicookies.com" class="img-responsive"></p>
        </div>
      </div>
    </div>
  </div>
  <!-- END section -->

  <!--<section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Watch Video</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 probootstrap-animate" data-animate-effect="fadeIn">
          <figure>
            <div class="probootstrap-video">
              <a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play overlay"><span><i class="icon-play3"></i></span></a>
              <img src="img/slider_3.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
            </div>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <!--<section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Recent Work</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="single-page.php"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Vokalia and Consonantia</h2>
              <p class="category">Design</p>
              <p><a href="single-page.php">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="single-page.php"><img src="img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Live the Blind Texts</h2>
              <p class="category">Model</p>
              <p><a href="single-page.php">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="single-page.php"><img src="img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Behind the Word Mountains</h2>
              <p class="category">Website</p>
              <p><a href="single-page.php">View details</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <!--<section class="probootstrap-section probootstrap-section-lighter">
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
            <h4 class="heading">About পণ্য আলাপ (Ponno Alap)</h4>
            <p>See what consumers are reviewing about different products. <br/><br/> See what the companies are attempting to improve their products. <br/><br/> Easy submission option for local seller's monthly reports. <br/> </p>
			
            
          </div>
        </div>
        <div class="col-md-3">
        
      </div>
      
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-social">
            
			  
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