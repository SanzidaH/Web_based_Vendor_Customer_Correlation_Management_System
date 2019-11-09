
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review management </title>
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
	
	<script src="scroll-down.js"></script>


    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	
	
  </head>
  <body>
  
  
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index_cn.php" class="probootstrap-logo">পণ্য আলাপ</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index_cn.php">Launched products</a></li>
            <li class="active"><a href="projects.php">Product reviews</a></li>
            <li><a href="services_cn.php">Profile</a></li>
            <li><a href="about_cn.php">Add review</a></li>
            
          </ul>
          <ul class="probootstrap-right-nav hidden-xs">

			
			<li><a href="logout.php"<button type="button" class="btn btn-link" ><b>Log out</b></button></a></li>
			
				<!-- inser more links here -->
				
				
			  
			  
			
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
      <li style="background-image: url(img/c3.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Product reviews</h2>
				<div class="col-md-12 text-center">
		 <a class="ct-btn-scroll ct-js-btn-scroll" href="#section2"><img src="img/down.png" style="width: 10%; display: block;
    margin-left: auto;
    margin-right: auto;"></a>

                <p></p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->
  
    
<section class="probootstrap-section">

      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate" id="section2">
          <h2>Your Reviews</h2>
        </div>
      </div>
	  
      
  
<?php 

    // Create database connection
  
  $db = mysqli_connect("localhost", "root", "", "bismillah");
  
    session_start();
     $uid1=$_SESSION['email'];
	 $name1 = $_SESSION['user_name'];
	 $type = $_SESSION['type'];
	 
	 	// echo $uid1;
	    // echo $name1;
	 


  /*$result = mysqli_query($db, "SELECT * FROM report where cm_id='".$cm_name1."' ORDER BY UNIX_TIMESTAMP(date) DESC");*/
  
  $result = mysqli_query($db, "SELECT * FROM review where reviewer_id='".$name1."' ORDER BY UNIX_TIMESTAMP(date) DESC");

 echo '<div class="row">';
    while ($row = mysqli_fetch_array($result)) 
  {
	
	  echo '<div class="container-fluid">';
	                
					echo '<div class="card" style="width: 70rem;">';
					echo '<div class="card-body">';
					echo '<div class="col-xs-6 col-sm-4 probootstrap-animate">';
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
					
					/*echo '<img class="card-img-top" src="img/ruchi.png" width=10%>';*/
				
				
					echo '</h2>';
					
					
					
					
					echo '<p class="category">';
					echo "post date: ".$row['date']."<br>";
					echo '</p>';
					
					
					echo '<p class="card-text">';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo '<i>Company: </i>';
					echo '</h2>';
					echo "<strong><p>".$row['company_sel']."</p></strong>";
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
				 echo "</div>";
				 echo '</div>';
				 echo "</div>";
  
  
  }
  echo "</div>";
  
?>  
  
       
    
  </section>
  


  <!-- END section -->

  

  <!-- END section -->
  
  
  

<?php
 include('bar.php'); 
?>
  


  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  
</body>


  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  

  


  </body>
</html>




