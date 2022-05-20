<?php
include ('../../connect.php');
$n1=$_GET['n1'];
$sql="DELETE FROM users WHERE id= '$n1' ";
$result = $conn -> query($sql);
header('Location:http://localhost/workfile/ad/shuser.php?n1=');

