<?php

$connection = mysqli_connect('localhost', 'root','', 'bismillah');
/*if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'demo');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}*/

/*if(isset($_POST) & !empty($_POST))
{
	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	if((!isset($name) || empty($name))
	{
		$error[]= "Name is required";
	}
	if(!isset($email) ||  empty($email))
	{
		$error[]= "email is required";
	}
	
	
	if(!isset($subject) ||  empty($subject))
	{
		$error[]= "subject is required";
		
	}
	
	if(!isset($message) ||  empty($message))
	{
		$error[]= "message is required";
		
	}
	
	if(!isset($message) ||  empty($message))
	{
		$error[]= " message is required";
		
	}
	
	if(!isset($error) ||  empty($error))
	{
		$to = "consumer.complainmula2@gmail.com";
	$headers = "From : " . $email;
	
	if( mail($to, $subject, $message, $headers)){
		$query = "INSERT INTO contact(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        if( mysqli_query($connection, $query)){
		echo "E-Mail Sent successfully, we will get back to you soon.";}
	}
		
	}
	print_r($error);
}*/

if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['subject']) && !empty($_POST['subject'])) )
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$to = "sharmee.sharmin@gmail.com,diana.shahrin@gmail.com,sharmin.tanu99@gmail.com,anjum.shusmy@gmail.com,konahoque@gmail.com";
	$headers = "From : " . $email;
	
	if( mail($to, $subject, $message, $headers)){
		$query = "INSERT INTO contact(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        if( mysqli_query($connection, $query)){
		/*echo "E-Mail Sent successfully, we will get back to you soon.";*/}
	}
}

?>

<!DOCTYPE html>

<html>
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
	
</head>
<body>
  <body>
  <footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About পণ্য আলাপ (Ponno Alap)</h4>
             <p>See what consumers are reviewing about different products. <br/><br/> See what the companies are attempting to improve their products. <br/><br/> Easy submission option for local seller's monthly reports. <br/> </p>
          
          </div> 
        </div>
<div class="container">
<div class="row">
 <form class="form-contact" method="POST">
 <br><br><br><br><br><br>
 <br><br><br><br><br><br>
        <div class="form-group">
        <h2 class="form-contact-heading">Contact Us</h2>
		</div>
		<div class="form-group">
        <label for="inputName" class="sr-only">Name</label>
        	<input type="name" name="name" id="inputName" class="form-control" placeholder="Enter your Name" required>
			
		</div>
<div class="form-group">		
        <label for="inputEmail" class="sr-only">E-Mail</label>
        	<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter developer's email" required>
			</div>
			<div class="form-group">
        <label for="inputSubject" class="sr-only">Subject</label>
        	<input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Enter the Subject of email" required>
			</div>
			<div class="form-group">
        <label for="inputMessage" class="sr-only">Message</label>
    		<!--<textarea class="form-control" id="inputMessage" rows="3"  class="form-control" placeholder="Your Subject Line" required></textarea>-->
			<input type="name" name="message" id="inputMessage" class="form-control" placeholder="Enter the Message of email" required>
			</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
      </form>
	  </div>
	  </div>
	  
	        </div>
    </div>
  </footer>
  


  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  
  
  
</body>


  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  
  </body>
 
</html>	  

