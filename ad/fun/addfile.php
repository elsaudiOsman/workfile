<?php
include ('../../connect.php');
$type=$_POST['type'];
session_start();
$user=$_SESSION['userNameWorkfile'];
$time=date('y-m-d');
$title=$_POST['title'];
$subject=$_POST['subject'];
$attachment=$_FILES['attachment']['name'];
$attachmenttmb=$_FILES['attachmenttmb']['tmp_name'];
$upload_file='../file/';

move_uploaded_file($attachmenttmb, $upload_file.$attachment);
$sql = "INSERT INTO file (type, user, time, title, subject, attachment)
VALUES ('$type', '$user','$time', '$title', '$subject', '$attachment')"; 
$result = $conn-> query($sql);
header('Location:http://localhost/workfile/ad/fileadd.php');

