<?php

  // Create database connection
  
  $db = mysqli_connect("localhost", "root", "", "bismillah");
  
    session_start();
     $uid1=$_SESSION['email'];
	 $cm_name1 = $_SESSION['user_name'];
	 $type = $_SESSION['type'];
	 
 //$new = $_SESSION['dateposted'];
   //  echo $uid1;
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
  $result = mysqli_query($db, "SELECT * FROM advertise  order by dateposted desc" );
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
    <title>Review Management</title>
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
        <a href="index_cn.php" class="probootstrap-logo">পণ্য আলাপ</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="index_cn.php">Launched products</a></li>
            <li><a href="projects_cn.php">Product reviews</a></li>
            <li><a href="services_cn.php">Profile</a></li>
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
  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/c4.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Stay Updated!</h2>
				  <p>Be the first -> know about -> upcoming products, sales, offers</p>
				<p>Share your thought to the world, make products better! </p>

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
          <h2>New Launched products</h2>
        </div>
      </div>
	  

	  
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
					echo '<img class="card-img-top" src="img/ruchi.png" width=10%>';
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
				
					
					echo '<h1>Submit your thoughts about this product</h1>';
                        echo'<div class="comment-form-container">';
                        echo'<form id="frm-comment">';
                        echo   '<div class="input-row">';
                        echo   '<input type="hidden" name="comment_id" id="commentId"
                                         />';
                       echo '</div>';
					   

					   
					   
                       echo '<div class="input-row">';
                       echo   '<textarea class="input-field" type="text" name="comment"
                                               id="comment" placeholder="Add a Comment">  </textarea>';
                     echo'</div>';
                      echo'<div>';
                      echo '<input type="button" class="btn-submit" id="submitButton"
                                    value="Publish" />';
					
					  //echo'<div id="comment-message">Comments Added Successfully!</div>';
                   echo'</div>';

                     echo'</form>';
                   echo'</div>';
	                 echo'<div id="output"></div>';
					 
					 
					
                           
              
					 
					
				}
				
				else if($row['vdo_name']!=null)
				{   
			    echo' <div class="probootstrap-video">';
					echo'<div class="embed-responsive embed-responsive-16by9">';
					// echo'<a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play //overlay"><span><i class="icon-play3"></i></span></a>
					//echo '<iframe class="embed-responsive-item" src="videos/'.$row['vdo_name'].'" allowfullscreen>';
					//echo'</iframe>';
					//echo "<p>".$row['vdo_name']."</p>";
					//echo $row['vdo_type'];
					/*<div class="row">
        <div class="col-md-12 probootstrap-animate" data-animate-effect="fadeIn">
          <figure>
            <div class="probootstrap-video">
              <a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play overlay"><span><i class="icon-play3"></i></span></a>
              <img src="img/slider_3.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
            </div>
          </figure>
        </div>*/
					
					echo '<video class="embed-responsive-item" id="backgroundvid" width=100% controls >';
					//echo '<source src="videos/'.$row['vdo_name'].'" type="video/mp4"  position="relative">';
					echo '<source src="videos/'.$row['vdo_name'].'" type="video/webm" codecs="vp8.0, vorbis">';
					echo '<source src="videos/'.$row['vdo_name'].'" type="video/ogg" codecs="theora, vorbis">';
					echo '<source src="videos/'.$row['vdo_name'].'" type="video/mp4" codecs="avc1.4D401E, mp4a.40.2">';
					echo '</video>'; 
					echo '</div>';echo '</div>';
				    
					
					echo '<div class="probootstrap-card-text">';
					echo '<h2 class="probootstrap-card-heading mb0">';
					echo '<div class="Row">';
					/*echo '<img class="card-img-top" src="img/ruchi.png" width=10%>';*/
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

					
					
					   echo '<h4>Submit your thoughts about this product</h4>';
                       echo'<div class="comment-form-container">';
                       echo'<form id="frm-comment">';
                       echo   '<div class="input-row">';
                       echo   '<input type="hidden" name="comment_id" id="commentId"
                                       />';
										
										
										
										
										
                       echo '</div>';
                       echo '<div class="input-row">';
                       echo '<textarea class="input-field" type="text" name="comment"
                                         id="comment" placeholder="Add a Comment">  </textarea>';
                        echo'</div>';
                        echo'<div>';
                        echo '<input type="button" class="btn-submit" id="submitButton"
                                                 value="Publish" />';
					    echo'<div id="comment-message">Comments Added Successfully!</div>';
                        echo'</div>';

                       echo'</form>';
                       echo'</div>';
	                   echo'<div id="output"></div>';
					 
	
					
				}
	
		        
                  echo '</div>';
				  echo '</div>';
					
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



<html>

<head>
<style>







.comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}

.input-row {
	margin-bottom: 20px;
}

.input-field {
	width: 100%;
	border-radius: 2px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 2px;
    cursor:pointer;
}

ul {
	list-style-type: none;
}

.comment-row {
	border-bottom: #e0dfdf 1px solid;
	margin-bottom: 15px;
	padding: 15px;
}

.outer-comment {
	background: #F0F0F0;
	padding: 20px;
	border: #dedddd 1px solid;
}

span.commet-row-label {
	font-style: italic;
}

span.posted-by {
	color: #09F;
}

.comment-info {
	font-size: 0.8em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor:pointer;
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}
</style>

<script src="jquery-3.2.1.min.js"></script>

 </div>
  </section>
  
<?php
 include('bar.php'); 
?>
	  


  <!-- END section -->

  
  <!-- END section -->



  <!-- END section -->
  
    


  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  
  
  
  

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

<script>
	function postReply(commentId) {
		$('#commentId').val(commentId);
		$("#name").focus();
	}

	$("#submitButton").click(function() {
		$("#comment-message").css('display', 'none');
		var str = $("#frm-comment").serialize();

		$.ajax({
			url : "comment-add.php",
			data : str,
			type : 'post',
			success : function(response) {
				var result = eval('(' + response + ')');
				if (response) {
					$("#comment-message").css('display', 'inline-block');
					$("#name").val("");
					$("#comment").val("");
					$("#commentId").val("");
					listComment();
				} else {
					alert("Failed to add comments !");
					return false;
				}
			}
		});
	});

	$(document).ready(function() {
		listComment();
	});

	function listComment() {
		$
				.post(
						"comment-list.php",
						function(data) {
							var data = JSON.parse(data);

							var comments = "";
							var replies = "";
							var item = "";
							var parent = -1;
							var results = new Array();

							var list = $("<ul class='outer-comment'>");
							var item = $("<li>").html(comments);

							for (var i = 0; (i < data.length); i++) {
								var commentId = data[i]['comment_id'];
								parent = data[i]['parent_comment_id'];

								if (parent == "0") {
									comments = "<div class='comment-row'>"
											+ "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>"
											+ data[i]['comment_sender_name']
											+ " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>"
											+ data[i]['date']
											+ "</span></div>"
											+ "<div class='comment-text'>"
											+ data[i]['comment']
											+ "</div>"
											+ "<div><a class='btn-reply' onClick='postReply("
											+ commentId + ")'>Reply</a></div>"
											+ "</div>";

									var item = $("<li>").html(comments);
									list.append(item);
									var reply_list = $('<ul>');
									item.append(reply_list);
									listReplies(commentId, data, reply_list);
								}
							}
							$("#output").html(list);
						});
	}

	function listReplies(commentId, data, list) {
		for (var i = 0; (i < data.length); i++) {
			if (commentId == data[i].parent_comment_id) {
				var comments = "<div class='comment-row'>"
						+ " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>"
						+ data[i]['comment_sender_name']
						+ " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>"
						+ data[i]['date'] + "</span></div>"
						+ "<div class='comment-text'>" + data[i]['comment']
						+ "</div>"
						+ "<div><a class='btn-reply' onClick='postReply("
						+ data[i]['comment_id'] + ")'>Reply</a></div>"
						+ "</div>";
				var item = $("<li>").html(comments);
				var reply_list = $('<ul>');
				list.append(item);
				item.append(reply_list);
				listReplies(data[i].comment_id, data, reply_list);
			}
		}
	}
</script>

 

  </body>
</html>