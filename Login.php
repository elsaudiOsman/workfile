<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه الدخول</title>
    <style>
        div{
            text-align: center;
            margin-top: 300px;
        }
    </style>
    <?php
        session_start();
        session_unset();
        session_destroy();
    ?>
</head>
<body>
    
<div>
      <form action="fun/Logintest.php" method="get">
        <input type="text" placeholder="userName" name="n1">
        <br>
        <br>
        <input type="text" placeholder="password" name="n2">
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
        <br>
        <br>
    <button><a href="adduser.php">ليس لديك حساب</a></button>
    <button><a href="index.php">رجوع</a></button>
</div>
</body>
</html>