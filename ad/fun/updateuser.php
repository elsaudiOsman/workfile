<?php
include ('../../connect.php');
$status=$_GET['status'];
$id=$_GET['id'];
$sql="UPDATE users SET status = '$status' WHERE id= '$id'";
$result = $conn -> query($sql);
header('Location:http://localhost/workfile/ad/shuser.php?n1=');
