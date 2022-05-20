<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>البحث في المستخدمين</title>
        <style>
            table, tr, th, td{
                border: 1px solid #38404b;
            }
        </style>
    </head>
    <body>
        <form>
        <input type="text" name="n1">
        <input type="submit" name=""><br>
        </form>
        
        <table>
            <tr>
                <th style="color: red;">حذف</th>
                <th>حفظ</th>
                <th>المهنه</th>
                <th>تاريخ الاضافه</th>
                <th>الجنس</th>
                <th>الدوله</th>
                <th>التليفون</th>
                <th>كلمه السر</th>
                <th>اسم المستخدم</th>
                <th>رقم</th> 
            </tr>
            
            <?php
                include ('../connect.php');
                $n1=$_GET['n1'];
                $sql="SELECT * FROM users /*WHERE username like'%$n1%' AND name like'%$n1%'*/";
                $result = $conn -> query($sql);
                while($row = $result -> fetch_assoc()){
            ?>
            <tr>
                <td><a href="fun/deleteuser.php?n1=<?php echo $row['id'] ?>">حذف</a></td>

                <form action="fun/updateuser.php" method="get">
                <td><input type="submit" value="حفظ"></td><br>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <td>
                <select name="status">
                <option value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
                <option value="مستخدم">مستخدم</option>
                <option value="مدير">مدير</option>
                <option value="موظف">موظف</option>   
                </select><br><br>
                </td>
                
                </form>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['sex'];?></td>
                <td><?php echo $row['country'];?></td>
                <td><?php echo $row['tele'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['id'];?></td>
                </tr>
                <?php } ?>
        </table>
            
        </body>
</html>
