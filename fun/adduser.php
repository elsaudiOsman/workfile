<?php
include ('../connect.php');
$date=$_GET['date'];
$userName=$_GET['username'];
$sql="SELECT * FROM users WHERE username='$userName'";
$result = $conn -> query($sql);
while($row = $result -> fetch_assoc()){
    $count = $result ->num_rows;
}

if($count > 0){
header('Location:http://localhost/workfile/adduser.php?q1=1');
exit();
}

$password=$_GET['password'];
$password2=$_GET['password2'];
if ($password !== $password2) {
   header('Location:http://localhost/workfile/adduser.php?q1=2');
exit(); 
}
$telefoon=$_GET['tele'];
$status=$_GET['status'];
$sex=$_GET['sex'];
$country=$_GET['country'];
$sql = "INSERT INTO `users`(date, username, password, tele, sex, country, status)
VALUES ('$date', '$userName','$password', '$telefoon', '$sex', '$country', '$status')"; 
$result = $conn-> query($sql);
header('Location:http://localhost/workfile/index.php');
                 


