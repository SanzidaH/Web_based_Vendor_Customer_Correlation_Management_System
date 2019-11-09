<?php
 $db = mysqli_connect("localhost", "root", "", "bismillah");
  
  session_start();
   $cnid = $_SESSION['user_name'];
   //echo  $cnid;
   
   if (isset($_POST['submit']))
	{
		$review = mysqli_real_escape_string($db, $_POST['message']);
		
		$val=$_POST['company_select'];
		$val_product=$_POST['product_select'];
			 
		$reviewtp=$_POST['review_type'];
		
				
		//image
				$image = $_FILES['img1']['name'];
				$target = "download/".basename($image);
				move_uploaded_file($_FILES['img1']['tmp_name'], $target);
				
		
			//video		
				$video = $_FILES['video1']['name'];
				$target1 = "download/".basename($video);
				move_uploaded_file($_FILES['video1']['tmp_name'], $target1);
				
			 $f1type = substr($image, strrpos($image, '.')+1);
			  $f2type = substr($video, strrpos($video, '.')+1);
				
		
		
			$sql4 = "INSERT INTO `review` (`reviewer_id`, `product_sel`, `company_sel`, `type`, `review_text`,`date`,`doc1`,`doc2`,`doc1_t`,`doc2_t`) VALUES ('$cnid','$val_product','$val','$reviewtp','$review',CURRENT_TIMESTAMP,'$image', '$video','$f1type','$f2type')";
		    mysqli_query($db, $sql4);
		
				
			//header('Location: projects_lc1.php');
/*				
		//video		
				$video = $_FILES['video1']['name'];
				$target1 = "download/".basename($video);
		
		  
				if (move_uploaded_file($_FILES['video1']['tmp_name'], $target1))
					{
				$sql1 = "INSERT INTO review(doc2) VALUES ('$video')";
				// execute query
				 mysqli_query($db, $sql1);
				 $msg = "video uploaded successfully";
				}else{
				$msg = "Failed to upload image";
				}
				
		//file  
			  $file = $_FILES['file1']['name'];
			  $target2 = "download/".basename($file);
		 
		 
				if (move_uploaded_file($_FILES['file1']['tmp_name'], $target2)) {
					 $sql2 = "INSERT INTO review(doc3) VALUES ('$file1')";
				// execute query
					 mysqli_query($db, $sql2);
					 $msg = "file uploaded successfully";
				}else{
				  $msg = "Failed to upload image";
				}*/
				
				header('Location: projects_cn.php');
				
	}

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

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	<style>

.Row
{
    display: table;
    width: 10%; /*Optional*/
    table-layout: fixed; /*Optional*/
    border-spacing: 10px; /*Optional*/
}
.Column
{
    display: table-cell;

}
	</style>
	
	
  </head>
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
            <li><a href="projects_cn.php">Product reviews</a></li>
            <li><a href="services_cn.php">Profile</a></li>
            <li class="active"><a href="about_cn.php">Add review</a></li>
            
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
      <li style="background-image: url(img/c2.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Raise the voice, give the review</h2>
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
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate" id="section2">
          <h2>ADD REVIEW</h2>
        </div>
      </div>
  
  	<form method="POST" action="about_cn.php" enctype="multipart/form-data" class="probootstrap-form probootstrap-form-box mb60">  
	
	  <div class="form-group">
	  <label for="sel1">Select Product Catagory (select one):</label>
      <select class="form-control" name="product_select">
  	  <?php 
	  	// $res1 = mysqli_query($db, "SELECT * FROM users where email='".$cn_email."'");
	  $res2 = mysqli_query($db, "SELECT * FROM product");
      while ($row2 = mysqli_fetch_array($res2)) 
     {
	   
	 echo "<option>".$row2['catagory']."</option>";
	  
     }
	  ?>
       
      </select>
     
	 </div>	
	 
	 <div class="form-group">
      <label for="sel1">Select Company(select one):</label>
      <select class="form-control" name="company_select">
	  
	  <?php 
	  	// $res1 = mysqli_query($db, "SELECT * FROM users where email='".$cn_email."'");
	  $res1 = mysqli_query($db, "SELECT * FROM users where type='company'");
      while ($row1 = mysqli_fetch_array($res1)) 
     {
	   
	 // $companies=$row1['username'];
	 // echo $companies;
	 echo "<option>".$row1['username']."</option>";
	  
     }
	  ?>
       
      </select>
	 </div>	
	 
	 <div class="form-group">
      <label for="sel1">Review type(select one):</label>
      <select class="form-control" name="review_type">
        <option>Positive</option>
        <option>Negative</option>
      </select>
	 </div>	
					
							
				
            <div class="form-group">
              <label for="message">Your Review:</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message" placeholder="Share your experience..."></textarea>
            </div>
			
			<div class="form-group">
			 <label for="exampleFormControlFile1">Add relevent documents:</label>
			 
			

	   <!--      
     <div  class="Column">  
			 <label for="img-upload" class="custom-file-upload">
			   <img src="img/file.png" style="width:50px;height:50px; align="middle">
			   <labe50dd image</50el>
			 </label>
				   
			   <input  id="img-upload" style="visibility:hidden;" type="file" multiple 
			data-show-upload="true" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." name="img1" accept=".pdf, .txt, .mp4,.3gp,.avi, .gif,.jpg,.png,.tif">
			
	 </div>-->
	 
	 
    
	 
	 <!--

	
		 -->

<div class="Row">
		 <div  class="Column">
			<label for="vdo-upload" class="custom-file-upload">
			  <img src="img/file.png" style="width:50px;height:50px; align="middle">
			  <labe50dd image</50el>
			</label>
	
			<input  id="vdo-upload" style="visibility:hidden;" type="file" name="video1"  accept=".pdf, .txt, .mp4,.3gp,.avi, .gif,.jpg,.png,.tif">
      	</div>	
		
			<div  class="Column">
			<label for="img1-upload" class="custom-file-upload">
				<img src="img/file.png" style="width:50px;height:50px; align="middle">
				<labe50dd image</50el>
			</label>
            <input  id="img1-upload" style="visibility:hidden;" type="file" name="img1"  accept=" .pdf, .txt, .mp4,.3gp,.avi, .gif,.jpg,.png,.tif">
        </div>
		
	</div>
		
		
    
	 
			  <div class="form-group">
					  <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Review">
			  </div>
	
	</form>
  
  
   </section>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
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
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading text-center probootstrap-animate">
          <h2>The Team</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/person_1.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Jeremy Slater</h2>
              <p><small>Web Designer</small></p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <ul class="probootstrap-social">
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/person_2.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Butterly</h2>
              <p><small>Web Developer</small></p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <ul class="probootstrap-social">
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-github"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/person_3.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Smith</h2>
              <p><small>Web Designer</small></p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <ul class="probootstrap-social">
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="probootstrap-section probootstrap-section-lighter">
  <!--
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
  

 
  <?php
 include('bar.php'); 
?>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  
   <script src="scroll-down.js"></script>

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>