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
 
<script src="scroll-down.js"></script>
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
        <a href="index_lc.php" class="probootstrap-logo">পণ্য আলাপ</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="index_lc.php">Your reports</a></li>
            <li><a href="projects_lc.php">Add report</a></li>
            <li><a href="services_lc.php">Profile</a></li>
          
          </ul>
          <ul class="probootstrap-right-nav hidden-xs">

		
			
			<li><a href="logout.php"<button type="button" class="btn btn-link" ><b>Log out</b></button></a></li>
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
      <li style="background-image: url(img/p_local.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Send your reports in most easiest way!!</h2>
				 <p>Keep record of your previous reports</p>
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
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate" id="section2">
          <h2>Your Reports</h2>
        </div>
      </div>
  
  <?php 

    // Create database connection
  
  $db = mysqli_connect("localhost", "root", "", "bismillah");
  
    session_start();
     $uid1=$_SESSION['email'];
	 $cm_name1 = $_SESSION['user_name'];
	 $type = $_SESSION['type'];
	 
	 //	 echo $uid1;
	//     echo $cm_name1;
	 


  $result = mysqli_query($db, "SELECT * FROM report where lc_id='".$cm_name1."' ORDER BY UNIX_TIMESTAMP(date) DESC");


    while ($row = mysqli_fetch_array($result)) 
  {
	   
	  echo '<div class="container">';
	                
					echo '<div class="card" style="width: 100rem;">';
					echo '<div class="card-body">';
					echo '<div class="col-md-4 probootstrap-animate">';
				    echo '<div class="probootstrap-card with-hover">';
					echo '<div class="probootstrap-card-media">';
					
                
					
				if($row['file']!=null){
					
					echo'<div class="embed-responsive embed-responsive-16by9">';
					if($row['file_type'=="pdf"])
					{
				
					echo'<object class="embed-responsive-item" data="download/'.$row['file'].'" type="application/pdf" internalinstanceid="9" title="" >';
              
                    echo'</object>';
					
					echo'<a href=".download/'.$row['file'].'">Download </a>';
                   
					}
					
                    if($row['file_type'=="text/plain"])
					{
					echo'<object class="embed-responsive-item" data="download/'.$row['file'].'" type="text/plain" internalinstanceid="9" title="">';
                    echo'<p> Your browser is not supporting embedded pdf files. You can download the file
                   <a href="/media/post/bootstrap-responsive-embed-aspect-ratio/example.pdf">here</a>.</p>';
                    echo'</object>';
                    }
		
				
					/*
					if($row['file_type'==".doc" ||'file_type'==".docx" ||'file_type'==".xlsx" ])
					{
						
						echo '<button';
					echo'<object class="embed-responsive-item" data="download/'.$row['file'].'" type="application/vnd.openxmlformats-officedocument.wordprocessingml.document" internalinstanceid="9" title="">';
                    echo'<p> Your browser is not supporting embedded pdf files. You can download the file
                   <a href="/media/post/bootstrap-responsive-embed-aspect-ratio/example.pdf">here</a>.</p>';
                    echo'</object>';
                    }
					
					if($row['file_type'=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"])
					{
					echo'<object class="embed-responsive-item" data="download/'.$row['file'].'" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" internalinstanceid="9" title="">';
                    echo'<p> Your browser is not supporting embedded pdf files. You can download the file
                   <a href="/media/post/bootstrap-responsive-embed-aspect-ratio/example.pdf">here</a>.</p>';
                    echo'</object>';
                    }
					*/
					
				    echo'</div>';
					
				    echo '<div class="probootstrap-card-text">';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo '<div class="Row">';
					
				
					echo '<i>Submitted by: </i>';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo "<strong><p>".$row['lc_id']."</p></strong>";
					echo '</h2>';
					echo '</h2>';
					
					
					
					
					echo '<p class="category">';
					echo "post date: ".$row['date']."<br>";
					echo '</p>';
					
					echo '<p class="card-text">';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo 'Subject of Report: ';
					echo '</h2>';
					echo "<p>".$row['subject']."</p>";
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo 'Area: ';
					echo '</h2>';
					echo "<p>".$row['area']."</p>";
					echo'</p>';
					echo '</div>';
				}
				
        
				
                 echo '</div>';
				 echo '</div>';
				 echo '</div>';
				 echo ' </div>';
				 echo '</div>';
				 echo "</div>";
  
  
  }
  
?>  


  <!-- END section -->




    </div>
  </section>
  <!-- END section -->
 <?php
 include('bar.php'); 
?>
  



  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  

  
  

  </body>
</html>