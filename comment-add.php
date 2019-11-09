<?php
   $conn = mysqli_connect("localhost","root","","bismillah");
   
   //$aid = (int)$_GET['ad_id'];
    $aid=isset($_POST['ad_id']) ? $_POST['ad_id'] : "";
$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
$date = date('Y-m-d H:i:s');

//$sql = "INSERT INTO tbl_comment(comment,date,add_id) VALUES ('" . $comment . "','" . $date . "','" . $aid . "')";




$sql = "INSERT INTO tbl_comment(parent_comment_id,comment,comment_sender_name,date) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $date . "')";



$result = mysqli_query($conn, $sql);

if (! $result) {
    $result = mysqli_error($conn);
}
echo $result;
?>
