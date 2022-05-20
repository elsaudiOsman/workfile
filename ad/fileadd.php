<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاضافه</title>
</head>
<body>
    <form action="fun/addfile.php" method="POST"> <!--enctype="multipart/form-data"-->
        <lable>النوع</lable><br>
        <select name="type">
            <option value="صادر">صادر</option>
            <option value="وارد">وارد</option>
        </select><br>

        <lable>العنوان</lable><br>
        <input name="title"><br>
        <lable>الموضوع</lable><br>
        <textarea name="subject"></textarea><br>
        <input type="file" name="attachment"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
