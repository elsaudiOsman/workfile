<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافه مستخدم</title>
    <style>
        
        div{
            width: 350px;
            height: 100px;
            background: grey;
            margin-left: 620px
            
        }
        h3{color: red}
        form{
            
            text-align: center;
            margin-top: 150px;
            
        }
    </style>
</head>
<body>
    <form action="fun/adduser.php" method="get">
    <label for="">اضافه مستخدم جديد</label><br><br><br>
    
    <?php
    
       $q1 = $_GET['q1'];
        if ( $q1 == 1) {
            echo   "<h3>اسم المستخدم موجود</h3>";     
        }
        if ($q1 == 2) {
            echo "<h3>كلمتي السر غير مطابقين</h3>";
        }
    ?>
   
    <label for="" style="display: inline-block; width: 80px;">تاريخ الميلاد</label>
    <input type="date" name="date"><br><br>

    <label for="" style="display: inline-block; width: 80px;">اسم المستخدم</label>
    <input type="text" name="username"><br><br>

    <label for="" style="display: inline-block; width: 80px;">كلمه السر</label>
    <input type="text" name="password"><br><br>

    <label for="" style="display: inline-block; width: 80px;">اعاده كلمه السر</label>
    <input type="text" name="password2"><br><br>

    <label for="" style="display: inline-block; width: 80px;">الهاتف</label>
    <input type="text" name="tele"><br><br>
    
    <label for="" style="display: inline-block; width: 80px;">الحاله</label>
    <input type="text" name="status"><br><br>
<div>
    <label for="" style="display: inline-block; width: 80px;">الجنس</label><br><br>
    
    <label for="" style="display: inline-block; width: 20px;">ذكر</label>
    <input type="radio" name="sex" value="ذكر">
     
    
    <label for="" style="display: inline-block; width: 20px;">انثى</label>
    <input type="radio" name="sex" value="انثى">
    
</div>
    <label for="" style="display: inline-block; width: 80px;">الدوله</label><br>
    <select name="country">
        <option value="مصر">مصر</option>
        <option value="الاردن">الاردن</option>
        <option value="السعوديه">السعوديه</option>   
    </select><br><br>
   
    
    
    <input type="submit" value="submit">
    </form>
</body>
</html>