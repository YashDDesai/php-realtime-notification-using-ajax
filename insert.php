<?php
//insert.php
if(isset($_POST["subject"]))
{
 include("connect.php");
 $subject = mysqli_real_escape_string($con, $_POST["subject"]);
 $msg = mysqli_real_escape_string($con, $_POST["msg"]);
 $query = "
 INSERT INTO comments(subject, msg)
 VALUES ('$subject', '$msg')
 ";
 mysqli_query($con, $query);
}
?>