<?php 
 $db = mysqli_connect("localhost", "root", "", "bismillah");
  
    session_start();
     $uid=$_SESSION['email'];
	 $cn_name = $_SESSION['user_name'];
	 $type = $_SESSION['type'];

   

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

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	
	<style>
	
		.column {
    float: left;
    width: 20%;
	padding:5;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}

	.card1 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
	background-color: white;
}

.title1 {
    color: grey;
    font-size: 18px;
}

button1 {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a1 {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button1:hover, a1:hover {
    opacity: 0.7;
}


  .bg-1 { 
       background-color: #1abc9c; /* Green */
        color: #ffffff;
    }
	
	.darken {
  background-image: 
    linear-gradient(
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    ),
    url(img/p7.png);
	
	  position: fixed;
  top: 0;
  left: 0;
}
	
	
	.blur-bgimage {
    overflow: hidden;
    margin: 0;
    text-align: left;
	background: url(img/p7.png);

}
.blur-bgimage:before {
    content: "";
    position: absolute;
    width : 100%;
    height: 100%;
    background: inherit;
    z-index: -1;

    filter        : blur(10px);
    -moz-filter   : blur(10px);
    -webkit-filter: blur(10px);
    -o-filter     : blur(10px);

    transition        : all 2s linear;
    -moz-transition   : all 2s linear;
    -webkit-transition: all 2s linear;
    -o-transition     : all 2s linear;
}
 
</style>
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header darken ">
    <div class="container">
        <a href="index_cm.php" class="probootstrap-logo">পণ্য আলাপ</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
         <li><a href="index_cn.php">Launched products</a></li>
		  <li><a href="projects.php">Product reviews</a></li>
            <li class="active"><a href="services_cn.php">Profile</a></li>
           
            <li><a href="about_cn.php">Add review</a></li>
            
           
       
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
  <!-- END: header 
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/p7.png);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Welcome <?php echo '<h1>'.$cn_name.'</h1>' ;?></h2>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->
  <br> <br> <br> <br> <br>
  
   <section class="probootstrap-section">
    <div class="card1 container">
 <?php 
   $result = mysqli_query($db, "SELECT * FROM users where email='".$uid."'");

    $row = mysqli_fetch_array($result); 
  
	  
echo '<img src="images/'.$row['uimg'].'" alt="Profile picture" class="img-responsive img-border img-thumbnail " style="width:50%">';
  //echo "<img src="images/'.$row['uimg'].'"  style="width:100%">";
  
  echo '<h1>'.$row['username'].'</h1>' ;
  echo '<p class="title1">'.$row['email'].'</p>';
  echo'<p> '.$row['type'].'</p>';
  ?>
  
<div class="form-group">
<!--<p><button class="button1">Contact</button></p>-->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">EDIT</button>
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#confirmDelete">DELETE</button>



<?php

?>

</div> 
</div>
</section>





  <!-- END section -->
  

<?php
 include('bar.php'); 
?>
 
 <!-- delete bootstrap form html-->
<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Delete Parmanently</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure about this ?</p>
      </div>
      <div class="modal-footer">
	    <div class= "row">
		<div class="column">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
		<div class="column">
		 <form method="POST" action="" enctype="multipart/form-data" role="form" class="form-horizontal">
		 <input type="submit" name="del" value="DELETE" class="btn btn-danger ">

		</form>
		</div>
		</div>
<?php
if (isset($_POST['del'])){

$sql=mysqli_query($db, "DELETE FROM `users` WHERE `users`.`email`='".$uid."'");
 if($sql > 0) {
?>

<script> 
window.location.replace("index.php");
</script>

<?php
header('location:index.php');

}
}
?>		

						
		 

      </div>
    </div>
  </div>
</div> 

 <!-- delete bootstrap form html-->

   
    <!-- update bootstrap form html-->
  
<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 align="center" class="text-primary">Update profile</h3>
        </div>
		<div class="modal-body">
		<div class="row">	
	
	 <form method="POST" action="" enctype="multipart/form-data" role="form" class="form-horizontal probootstrap-form probootstrap-form-box mb60">
	 
	<?php $update = true; ?>
			
			<div class="form-group">
			<label class="control-label col-md-3">Add Profile picture:</label>
			<div class="col-md-9">
	  		 <label class="control-label col-md-3" for="img-upload" class="custom-file-upload">
			   <img src="img/quickadd.png" class="img-responsive img-border" style="width:50px;height:50px; align="middle">
			   <labe50dd image</50el>
			 </label>
				   
			    <input id="img-upload" style="visibility:hidden;" type="file" name="image" value="<?php echo $row['uimg']; ?>" accept=".gif,.jpg,.png,.tif">
			</div>
			</div> 
	
		
			
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">



		
			<div class="form-group">
			<label class="control-label col-md-3">Username :</label>
			<div class="col-md-9">
			<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" placeholder="Please Enter Your Name" required>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Email :</label>
			<div class="col-md-9">
			<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" placeholder="Please Enter Your Email" required>
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">New Password :</label>
			<div class="col-md-9">
			<input type="PASSWORD" class="form-control" name="password_1" value="<?php echo $row['password']; ?>" placeholder="Please Enter Your password" required>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">Confirm Password :</label>
			<div class="col-md-9">
			<input type="PASSWORD" class="form-control" name="password_2" value="<?php echo $row['password']; ?>" placeholder="Please Retype Your password" required>
			</div>
			</div>
			
			
			<div class="form-group">
		
			<div class="col-md-9">
			<input type="submit" name="update" value="Update" class="btn btn-primary "> 
			<input type="reset" name="Reset" value="Reset" class="btn btn-default"> 
			</div>
	
<?php
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['username'];
	$email = $_POST['email'];
	$pw = $_POST['password_1'];
	//$password = md5($pw);//encrypt the password before saving in the database
	$password = $pw;//encrypt the password before saving in the database

	$image = $_FILES['image']['name'];
   // image file directory
  	$target = "images/".basename($image);

	
    if($image!=null){
mysqli_query($db, "UPDATE users SET username='$name', email='$email', password='$password', uimg='$image' WHERE id=$id");
	}
	else{
		mysqli_query($db, "UPDATE users SET username='$name', email='$email', password='$password' WHERE id=$id");
	}

	
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
	
	//header('location: services_cm1.php');
	}
	

	
?>

			
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
  

  


  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  
  


  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>


  </body>
</html>