<?php
session_start();
// connect to the database

$db = mysqli_connect('localhost', 'root', '', 'bismillah');



// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$type = "";





// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $_SESSION['id']=$_POST['email'];
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $type = mysqli_real_escape_string($db, $_POST['radio']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  
  
  if (empty($username)) 
  { 
      echo '<div class="alert alert-warning">';
      echo '<strong>Username is required!</strong>';
      echo '</div>';
      array_push($errors, "Username is required"); 
  }
  if (empty($email)) 
  { 
      echo '<div class="alert alert-warning">';
      echo '<strong>Email is required!</strong>';
      echo '</div>';
      array_push($errors, "Email is required"); 
  }
  if (empty($password_1)) { 
      echo '<div class="alert alert-warning">';
      echo '<strong>Password is required!</strong>';
      echo '</div>';
      array_push($errors, "Password is required"); 
	  }
	  
  if ($password_1 != $password_2) {
	  echo "<div class='alert alert-warning alert-dismissible ' role='alert'>
	          <strong>Warning!</strong> The two passwords do not match!.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
           </div>";
 
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
	  echo '<div class="alert alert-warning">';
      echo '<strong>Username already exists!</strong>';
      echo '</div>';
	  array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
	  echo '<div class="alert alert-warning">';
      echo '<strong>email already exists!</strong>';
      echo '</div>';
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    //$password = md5($password_1);//encrypt the password before saving in the database
     $password = $password_1;
		
				
	  	$image = $_FILES['image']['name'];
  

  	// image file directory
  	$target = "images/".basename($image);
	
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  
	
	 $query = "INSERT INTO `users` (`username`, `email`, `password`, `type`, `uimg`) VALUES ('$username', '$email', '$password', '$type', '$image')";
    mysqli_query($db, $query);

  	
	
				
		

	
	
    $_SESSION['user_name'] = $username;
	$_SESSION['email'] = $email;
	$_SESSION['password']=$password;
	$_SESSION['type']=$type;
	
	// echo $_SESSION['user_name'];
	
    $_SESSION['success'] = "You are now logged in";
    if($type === "Company")
      { header('location: index_cm.php'); }
    elseif($type === "Consumer")
      { header('location: index_cn.php'); }
    else
      {header('location: index_lc.php'); }
    
  }

  
 
}

// ... 





// LOGIN USER
// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'bismillah');

//session_start();
if (isset($_POST['login_user'])) {
if(isset($_POST['email']) && isset($_POST['password']))
{
	 $e=$_POST['email'];
     //$p=md5($_POST['password']);
     $p=$_POST['password'];
	 
	 if(!empty($e) && !empty($p))
	 {
		 $query="select * from users where email='".$e."' && password ='".$p."'";
		 
		 if($res=mysqli_query($db,$query))
		 {
			 $n=mysqli_num_rows($res);
			 
			 if($n==1)
			 {
				 $row=mysqli_fetch_assoc($res);
			 
				  $_SESSION['user_name']=$row['username'];
				  $_SESSION['password']=$row['password'];
				  $_SESSION['email']=$row['email'];
				  $_SESSION['type']=$row['type'];
				  
				//  echo $_SESSION['user_name'];
				 
				  
				 	  if($_SESSION['type'] === "Company")
					{
						header('location:index_cm.php'); 
						
					}
				 elseif($_SESSION['type'] === "Consumer")
				   { 
					   header('location:index_cn.php');
				   }
				 elseif($_SESSION['type'] === "Local Seller")
				   {
					   header('location: index_lc.php'); 
				   }  
				 
			 }
			 else{
				 
				 echo  "<div class='alert alert-warning alert-dismissible' role='alert'>

					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>

					  <strong><center>Warning!User Not Registered.</center></strong>

					</div>";
				 
			 }
			 
			 
  
		 }
		 
		
	 }
	 else{
		 
		  echo  "<div class='alert alert-warning alert-dismissible' role='alert'>

			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>

			  <strong><center>Warning!Plzz Give Correct Username & Password Combination.</center></strong>

			</div>";
	 }
}
}


?>


<!DOCTYPE html>
<html lang="en">
<body>

<script type="text/javascript"> 
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>

  <!-- Signup bootstrap form html-->
  
<div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 align="center" class="text-primary">Signup </h3>
        </div>
		<div class="modal-body">
		<div class="row">	
	
	 <form method="POST" action="" enctype="multipart/form-data" role="form" class="form-horizontal probootstrap-form probootstrap-form-box mb60">
			
			<div class="form-group">
			<label class="control-label col-md-3">Add Profile picture:</label>
			<div class="col-md-9">
	  		 <label class="control-label col-md-3" for="img-upload" class="custom-file-upload">
			   <img src="img/quickadd.png" style="width:50px;height:50px; align="middle">
			   <labe50dd image</50el>
			 </label>
				   
			    <input id="img-upload" style="visibility:hidden;" type="file" name="image" accept=".gif,.jpg,.png,.tif">
			</div>
			</div> 
<!--
		<div  class="Column">
			<label for="img1-upload" class="custom-file-upload">
				<img src="img/file.png" style="width:50px;height:50px; align="middle">
				<labe50dd image</50el>
			</label>
            <input  id="img1-upload" style="visibility:hidden;" type="file" name="img1"  accept=" .pdf, .txt, .mp4,.3gp,.avi, .gif,.jpg,.png,.tif">
        </div>	-->		
			
		
			
			<div class="form-group">
			<label class="control-label col-md-3">Username* :</label>
			<div class="col-md-9">
			<input type="text" class="form-control" name="username" value="" placeholder="Please Enter Your Name" required>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Email* :</label>
			<div class="col-md-9">
			<input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">Password* :</label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="password_1" value="" placeholder="Please Enter Your password" required>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">Confirm Password* :</label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="password_2" value="" placeholder="Please Retype Your password" required>
			</div>
			</div>
			
			
			
			<label class="form-control-label col-md-3">   Sign Up as:</label>
			
			<div class="modal-body">
			<div class="btn-group">
			<div class="col-sm-offset-2  col-sm-10">
			
			<label class="radio">
			 <input class="form-check-input" type="radio"  name="radio" value="Company">Company<br>
            <input class="form-check-input" type="radio"  name="radio" value="Consumer">Consumer<br>
            <input class="form-check-input" type="radio"  name="radio" value="Local Seller">Local Seller</label>
            </div>		
			</div>
            </div>	
			
			<div class="form-group">
		
			<div class="col-md-9">
			<input type="submit" name="reg_user" value="Signup Now" class="btn btn-primary "> <input type="reset" name="Reset" value="Reset" class="btn btn-default"> 
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
<!-- Login bootstrap form html -->
   <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 align="center" class="text-primary">Login</h3>
        </div>
		<div class="modal-body">
		<div class="row">	
		    <form  method="post" action="" role="form" class="form-horizontal probootstrap-form probootstrap-form-box mb60">		
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
			<input type="submit" name="login_user" value="Login Now" class="btn btn-primary"> <input type="reset" name="Reset" value="Reset" class="btn btn-default"> 
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
</body>

</html>