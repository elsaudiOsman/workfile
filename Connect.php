<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'workfile';
$conn = new mysqli($servername, $username, $password, $dbName );
$conn -> set_charset('utf8');
    if($conn -> connect_error){
        die ("خطأ");
    };
  //echo "تم الاتصال";
