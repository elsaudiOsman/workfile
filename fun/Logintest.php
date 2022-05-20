<?php
include ('../connect.php');
$n1=$_GET['n1'];
$n2=$_GET['n2'];
$sql="SELECT * FROM users WHERE username='$n1' AND password= '$n2'";
$result = $conn -> query($sql);
while($row = $result -> fetch_assoc()){
    $count = $result ->num_rows;
}
if($count > 0){
    session_start();
    $_SESSION['userNameWorkfile']=$n1;
header('Location:http://localhost/workfile/index.php');
}
else{
header('Location:http://localhost/workfile/Login.php');
}
         
