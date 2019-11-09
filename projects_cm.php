<?php

  // Create database connection
  
  $db = mysqli_connect("localhost", "root", "", "bismillah");
  
    session_start();
     $uid1=$_SESSION['email'];
	 $cm_name1 = $_SESSION['user_name'];
	 $type = $_SESSION['type'];

    // echo $uid1;
	// echo $cm_name1;
	

  // Initialize message variable
  $msg = "";
   
  $size = "";
  
  

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
	 $date = date('Y-m-d H:i:s');
    // Get image name
    $image = $_FILES['image']['name'];

    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "image_ad/".basename($image);
	$sql = "INSERT INTO Advertise(company_id,cm_name,image,text_,dateposted) VALUES ('$uid1','$cm_name1','$image', '$image_text', '$date')";
    // execute query
mysqli_query($db, $sql);

    //Targeting Folder for videos
    $video = $_FILES['video']['name'];
    $target1="videos/".basename($video);
   // $target1=$target1.basename($_FILES['video']['name']);
      //Getting Selected video Type
    $type=pathinfo($target1,PATHINFO_EXTENSION);
    // Moving The video file to Desired Directory
    if (move_uploaded_file($_FILES['video']['tmp_name'],$target1)) {
      $msg = "video uploaded successfully";
      $name1=$_FILES['video']['name'];
      $size=$_FILES['video']['size'];
	  $sql = "INSERT INTO Advertise(company_id,cm_name,image,text_,vdo_name,vdo_size,vdo_type,dateposted) VALUES ('$uid1','$cm_name1','$image', '$image_text','$name1','$size','$type','$date')";
    // execute query
mysqli_query($db, $sql);


    }else{
      $msg = "Failed to upload video";
    }
     // $uplaod_success=move_uploaded_file($_FILES['video']['tmp_name'],$target1);
  // if($uplaod_success){
  //  //Getting Selected video Information
     
  //   }

 

 

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
	header('Location: projects_cm1.php');
  }
  $result = mysqli_query($db, "SELECT * FROM advertise where company_id='".$uid1."'");
  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
?>

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
	
	<style type="text/css">

</style>
  </head>
  <body>
  <div id="content">

   
  
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index_cm.php" class="probootstrap-logo">পণ্য আলাপ</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index_cm.php">Reviews</a></li>
            <li class="active"><a href="projects.php">Advertisements</a></li>
            <li><a href="services_cm.php">Profile</a></li>
            <li><a href="about_cm.php">Reports</a></li>
          
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
      <li style="background-image: url(img/p_ad.png);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Reach Millions of People</h2>
                <p>Tell people, Get reviews</p>
				<p>Estimate the success of your product! </p>
				
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
          <h2>Submit Advertisement for your product</h2>
        </div>
      </div>
	  
 <form method="POST" action="projects_cm.php" enctype="multipart/form-data">  
       <input type="hidden" name="size" value="1000000">
	   <label>Add image or video to promote</label>
       <div  class="center">
	   
         <label for="img-upload" class="custom-file-upload">
          <img src="img/quickadd.png" style="width:50px;height:50px; align="middle">
          <labe50dd image</50el>
       </label>
        <input id="img-upload" style="visibility:hidden;" type="file" multiple 
    data-show-upload="true" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." name="image" accept=".gif,.jpg,.png,.tif">
     
    <label for="vdo-upload" class="custom-file-upload">
          <img src="img/Add_Video.png" style="width:50px;height:50px; align="middle">
          <labe50dd image</50el>
    </label>
        <input id="vdo-upload" style="visibility:hidden;" type="file" name="video" id="video" accept=".mp4,.3gp,.avi">
		
		

     </div>
	         <div class="form-group">
             <label for="comment">About your product:</label>

			 <textarea
                class="form-control"			  
				id="text" 
				cols="40" 
				rows="4" 
				name="image_text"  
				placeholder="Say something about your product"></textarea>
			</div>
  
	<div>
  		<button type="submit" class="btn btn-primary btn-block" name="upload">POST ADVERTISEMENT</button>
  	</div>
  </form>
	  
  
	  
<?php
    while ($row = mysqli_fetch_array($result)) 
  {
	   
	  $aid=$row['ad_id'];
	   
	  $vid=$row['vdo_name'];
      
	  echo '<div class="container">';
	                
					echo '<div class="card" style="width: 100rem;">';
					echo '<div class="card-body">';
					echo '<div class="col-md-4 probootstrap-animate">';
				    echo '<div class="probootstrap-card with-hover">';
					echo '<div class="probootstrap-card-media">';
					
				if($row['image']!=null){
				
					echo '<img src="image_ad/'.$row['image'].'" class="img-responsive img-border">';
					
				    echo '<div class="probootstrap-card-text">';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo '<div class="Row">';
				
					echo "<p>".$row['cm_name']."</p>";
					echo '</h2>';
					
					
					
					
					echo '<p class="category">';
					echo "post date: ".$row['dateposted']."<br>";
					//echo " " . date("h:i:sa");
					echo '</p>';
					
					echo '<p class="card-text">';
					echo "<p>".$row['text_']."</p>";
					echo'</p>';
					echo '</div>';
				}
				
				else if($row['vdo_name']!=null)
				{   
			    
					echo'<div class="embed-responsive embed-responsive-16by9">';
					//echo '<iframe class="embed-responsive-item" src="videos/'.$row['vdo_name'].'" allowfullscreen>';
					//echo'</iframe>';
					//echo "<p>".$row['vdo_name']."</p>";
					//echo $row['vdo_type'];
					echo '<video class="embed-responsive-item" id="backgroundvid" width=100% controls >';
					//echo '<source src="videos/'.$row['vdo_name'].'" type="video/mp4"  position="relative">';
					echo '<source src="videos/'.$row['vdo_name'].'" type="video/webm" codecs="vp8.0, vorbis">';
					echo '<source src="videos/'.$row['vdo_name'].'" type="video/ogg" codecs="theora, vorbis">';
					echo '<source src="videos/'.$row['vdo_name'].'" type="video/mp4" codecs="avc1.4D401E, mp4a.40.2">';
					echo '</video>'; 
					echo '</div>';
				    
					
					echo '<div class="probootstrap-card-text">';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo '<div class="Row">';
					
					echo "<p>".$row['cm_name']."</p>";
					echo '</h2>';
					
				
					echo '<p class="category">';
					echo "post date: ".$row['dateposted']."<br>";
					//echo " " . date("h:i:sa");
					echo '</p>';
					
					echo '<p class="card-text">';
					echo "<p>".$row['text_']."</p>";
					echo'</p>';
					echo '</div>';
				}
				
        
				
                  echo '</div>';
				  echo '</div>';
					//echo '  <p><a href="single-page.php">Reply</a></p>';
				echo '</div>';
				echo ' </div>';
				echo '</div>';
			
			 
	/*  echo'<div class="form-control">';
      echo "<p>".$row['text_']."</p>";
	  echo "</div>";
	  
 if($row['image']!=null)
 {  
     
	  echo "<div id='img_div'>";
      echo "<img src='image_ad/".$row['image']."' width=60% position:relative; >";
	  echo "</div>";
 }*/
    
 
   
    //  echo number_format($row['vdo_size']/(1024*1024),2);
     

  
  
     
	  
	  echo "</div>";
  
  
  }
  
?>  
	  

    </div>
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



