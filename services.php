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
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> -->
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
	
	<style>
	.embed-responsive {

}
	</style>
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
            <li class="active"><a href="services.php">Product reviews</a></li>
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
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/cr3.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Product reviews</h2>
               <p>See what the consumers are saying about your known products <br/><br/><br/><p>
			   <div class="col-md-12 text-center">
		 <a class="ct-btn-scroll ct-js-btn-scroll" href="#section2"><img src="img/down.png" style="width: 10%; display: block;
    margin-left: auto;
    margin-right: auto;"></a>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->
  
  <section class="probootstrap-section">
   </div>
 <div class="container" id="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2><b/>Product Reviews <b/></h2>
        </div>
      </div>
  
<?php 

    // Create database connection
  



  /*$result = mysqli_query($db, "SELECT * FROM report where cm_id='".$cm_name1."' ORDER BY UNIX_TIMESTAMP(date) DESC");*/
  
  $result = mysqli_query($db, "SELECT * FROM review ORDER BY UNIX_TIMESTAMP(date) DESC");


    while ($row = mysqli_fetch_array($result)) 
  {
	   
	  echo '<div class="container">';
	                
					echo '<div class="card" style="width: 70rem;">';
					echo '<div class="card-body">';
					echo '<div class="col-md-4 probootstrap-animate">';
				    echo '<div class="probootstrap-card with-hover">';
					

				if($row['doc1']!=null){
					 echo '<div class="probootstrap-card-media">';
					
					
					if($row['doc1_t']==="pdf")
					{
					echo'<div class="embed-responsive embed-responsive-16by9">';
				
					echo'<object class="embed-responsive-item" data="download/'.$row['doc1'].'" type="application/pdf" internalinstanceid="9" title="" >';
              
                    echo'</object>';
					
					echo '</div>';
					
                   
					}
					
                   elseif($row['doc1_t']==="txt")
					{
						echo'<div class="embed-responsive embed-responsive-16by9">';
					echo'<object class="embed-responsive-item" data="download/'.$row['doc1'].'" type="text/plain" internalinstanceid="9" title="">';
                    echo'</object>';
					echo '</div>';
                    }
					
                    elseif($row['doc1_t']==="mp4")	
					{
					echo' <div class="probootstrap-video">';

					echo '<video class="embed-responsive-item" id="backgroundvid" width=100% controls >';
					
					echo '<source src="download/'.$row['doc1'].'" type="video/webm" codecs="vp8.0, vorbis">';
					echo '<source src="download/'.$row['doc1'].'" type="video/ogg" codecs="theora, vorbis">';
					echo '<source src="download/'.$row['doc1'].'" type="video/mp4" codecs="avc1.4D401E, mp4a.40.2">';
					echo '</video>'; 
					
					echo '</div>';
					}
					
					else  
					{
						echo '<img src="download/'.$row['doc1'].'" class="img-responsive img-border">';
					}
						
				
				    echo'</div>';
					
				} 
		
				
		
				
				if($row['doc2']!=null){
					
					echo '<div class="probootstrap-card-media">';	
					
					if($row['doc2_t']==="pdf")
					{
					echo'<div class="embed-responsive embed-responsive-16by9">';
					echo'<object class="embed-responsive-item" data="download/'.$row['doc2'].'" type="application/pdf" internalinstanceid="9" title="" >';
              
                    echo'</object>';
					 echo'</div>';
                   
					}
					
                    elseif($row['doc2_t']==="txt")
					{
				    echo'<div class="embed-responsive embed-responsive-16by9">';
					echo'<object class="embed-responsive-item" data="download/'.$row['doc2'].'" type="text/plain" internalinstanceid="9" title="">';
                    echo'<p> Your browser is not supporting embedded pdf files. You can download the file
                   <a href="/media/post/bootstrap-responsive-embed-aspect-ratio/example.pdf">here</a>.</p>';
                    echo'</object>';
					 echo'</div>';
                    }
					
                    elseif($row['doc2_t']==="mp4")	
					{
							echo' <div class="probootstrap-video">';
					echo '<video class="embed-responsive-item" id="backgroundvid" width=100% controls >';
					
					echo '<source src="download/'.$row['doc2'].'" type="video/webm" codecs="vp8.0, vorbis">';
					echo '<source src="download/'.$row['doc2'].'" type="video/ogg" codecs="theora, vorbis">';
					echo '<source src="download/'.$row['doc2'].'" type="video/mp4" codecs="avc1.4D401E, mp4a.40.2">';
					echo '</video>'; echo'</div>';
					}
					
					elseif($row['doc2_t']==="png" or $row['doc2_t']==="jpg" or $row['doc2_t']==="JPG" or $row['doc2_t']==="PNG" ) 
					{
						echo '<img src="download/'.$row['doc2'].'" class="img-responsive img-border">';
					}
						
					echo'</div>';	
				}
				
		
			
					
				    echo '<div class="probootstrap-card-text">';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo '<div class="Row">';
					/*echo '<img class="card-img-top" src="img/ruchi.png" width=10%>';*/
				
					echo '<i>Reviewed by: </i>';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo "<strong><p>".$row['reviewer_id']."</p></strong>";
					echo '</h2>';
					echo '</h2>';
					
					
					
					
					echo '<p class="category">';
					echo "post date: ".$row['date']."<br>";
					echo '</p>';
					
					
					echo '<p class="card-text">';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo 'Company: ';
					echo '</h2>';
					echo "<p>".$row['company_sel']."</p>";
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo 'Product catagory: ';
					echo '</h2>';
					echo "<p>".$row['product_sel']."</p>";
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo 'Review type';
					echo '</h2>';
					echo "<p>".$row['type']."</p>";
					echo 'Review';
					echo '</h2>';
					echo "<p>".$row['review_text']."</p>";
					echo'</p>';
					echo '</div>';
					echo '</div>';
				
				
        
				
              
				
				 echo '</div>';
				 echo '</div>';
				 echo '</div>';
				 echo "</div>";
  
  
  }
  
?>  
 </section>
  <!-- END section -->



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
  

  
</body>

  <script src="scroll-down.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  

  


  </body>
</html>
