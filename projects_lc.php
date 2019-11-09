<?php
   
   $db = mysqli_connect("localhost","root","","bismillah");
   
   session_start();
   
    $lid = $_SESSION['user_name'];
	$lmail = $_SESSION['email'];
     $val = "";
	 
	// echo $lid;
	//  echo $lmail;
	
   
	if (isset($_POST['upload']))
	{
		//$date = date('Y-m-d H:i:s');
		$area = mysqli_real_escape_string($db, $_POST['area']);
		$sub = mysqli_real_escape_string($db, $_POST['sub']);
		
		  $file = $_FILES['file']['name'];
		 // $ftype=$_FILES['file']['type'];
		  $target = "download/".basename($file);
		  //$ftype= $file['mime'];
		  $ftype = substr($file, strrpos($file, '.')+1);
		  	if (file_exists("download/" . $_FILES["file"]["name"]))
			{
				 echo  "<div class='alert alert-warning alert-dismissible' role='alert'>

			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>

			  <strong><center>File already exist!!</center></strong>

			</div>";
			}
			else
			{
				move_uploaded_file($_FILES['file']['tmp_name'], $target);
			}
			
			 $val=$_POST['company_select'];

		
				$sql = "INSERT INTO report(subject,area,file,date,lc_id,cm_id,lc_mail,file_type) VALUES ('$sub','$area','$file',CURRENT_TIMESTAMP,'$lid','$val','$lmail','$ftype')";

                mysqli_query($db, $sql);
				header('Location: projects_lc1.php');

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
	
	
  </head>
  <body>
  
  
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
            <li><a href="index_lc.php">Your reports</a></li>
            <li class="active"><a href="projects.php">Add report</a></li>
            <li><a href="services_lc.php">Profile</a></li>

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
      <li style="background-image: url(img/p_local.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Submit your local market's report </h2>
				
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
	<div class="form-group">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate" id="section2">
          <h2>Submit your report</h2>
        </div>
      </div>
	  
	  
	  
	  <form method="POST" action="projects_lc.php" enctype="multipart/form-data"> 
			 <table class="table table-bordered">         	
                <tr>
                    <td>	<label for="sub">Subject: </label>	</td>
                    <td>	<input type="text" name="sub" id="sub" class="input-medium"  
					         required autofocus placeholder="Title of the subject"/>	</td>
                </tr>
                <tr>
                    <td valign="top" align="left">Area:</td>
                    <td valign="top" align="left"><input type="text" name="area" cols="50" rows="10" id="pre"  
					placeholder="Area"
					class="input-medium" required></textarea></td>
                </tr>
				       <tr>
					      <div class="form-group">
						 <td> <label for="sel1">Select Company(select one):</label> </td>
						<td>  <select class="form-control" name="company_select">
						  
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
						   
						  </select> </td>
						 </div>	
					  </tr>
						 
								<!-- <div class="form-group">
								  <label for="sel1">Review type(select one):</label>
								  <select class="form-control" name="review_type">
									<option>Weekly</option>
									<option>Monthly</option>
									<option>Yearly</option>
								  </select>
								 </div>	-->
				
                <tr>
                    <td><label for="file">Report:</label></td>
                   <td><input type="file" name="file" id="file" accept=".pdf,.txt" 
                        title="Click here to select file to upload." required /></td>
                </tr>
                <tr>
                  
				   <td colspan="2" align="center">		    
				   <input type="submit" class="btn btn-primary" name="upload" id="upload" 
				   title="Click here to upload the file." value="Upload File" /> </td>
                </tr>
            </table>
			
			
			</form>
			
			
      <div class="row">

        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media"><!--
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

        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media"> 
              <a href="single-page.php"><img src="img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
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
              <a href="single-page.php"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
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
              <a href="single-page.php"><img src="img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Behind the Word Mountains</h2>
              <p class="category">Website</p>
              <p><a href="single-page.php">View details</a></p>
            </div>
          </div>
        </div>
        
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

        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="single-page.php"><img src="img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
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
              <a href="single-page.php"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
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
              <a href="single-page.php"><img src="img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Behind the Word Mountains</h2>
              <p class="category">Website</p>
              <p><a href="single-page.php">View details</a></p>
            </div>
          </div>
        </div>  -->

      </div>
    </div>
  </section>
  <!-- END section -->
<!--
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




