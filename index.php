<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="css/new.css">
    <?php
        error_reporting(0);
        include 'Connect.php';
        session_start();
        if (isset($_SESSION['userNameWorkfile'])) {
        $n1 =$_SESSION['userNameWorkfile'];
        $sql="SELECT * FROM users WHERE username='$n1' ";
        $result = $conn -> query($sql);
        while($row = $result -> fetch_assoc()){
        $status = $row['status'];
        echo 'مرحبابك السيد  ' . $row['username'];
}
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><img src="img/5.png" alt=""><a href="#">Landing page</a></div>
            <nav>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="header-content">
        <div class="container">
            <h1>Landing page Layout</h1>
            <a href="#">Learn more</a>
        </div>
    </div>
    <div class="services-cont">
        <div class="container">
            <h2>services</h2>
            <div class="servies">
                <img src="img/1.png" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc ex, rutrum ac consectetur quis, bibendum et mi.
                </p>
            </div>
            <div class="servies">
                <img src="img/2.png" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc ex, rutrum ac consectetur quis, bibendum et mi.
                </p>
            </div>
            <div class="servies">
                <img src="img/3.png" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc ex, rutrum ac consectetur quis, bibendum et mi.
                </p>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <h2>Blog</h2>
            <div class="post">
                <img src="img/lotka.jpg" alt="">
                <h3>Mauris pharetra nunc non pharetra efficitur.</h3>
                <p class="date">20.08.2020</p>
                <p>Aliquam erat volutpat. Vivamus auctor vulputate nulla et dignissim. Praesent posuere egestas quam aliquet facilisis. Duis pharetra eleifend nunc nec facilisis. Phasellus gravida gravida pharetra. Ut pharetra placerat leo, id mattis felis feugiat consequat. Mauris dictum erat et lacus ultrices, condimentum pulvinar libero dapibus.</p>
            </div>
            <div class="post">
                <img src="img/dom.jpg" alt="">
                <h3>Curabitur lacinia libero risus...</h3>
                <p class="date">19.11.2020</p>
                <p>Mauris ac tempor est. Mauris luctus sit amet massa eget placerat. Integer vitae nisl lacus. Donec ut diam aliquet, blandit eros sit amet, suscipit nunc. Aenean consequat mauris at neque porta cursus vel in dolor. Nam accumsan nunc vitae mi faucibus commodo. Proin vestibulum, lectus non varius pellentesque, neque ipsum luctus metus, vel semper mauris ipsum quis sem.</p>
            </div>
        </div>
    </div>
    <article>
                <button><a href="
                  <?php if ($status == 'مستخدم'):?> us/us.php <?php endif ?>
                  <?php if ($status == 'مدير'):?> ad/ad.php <?php endif ?>       
                  <?php if ($status == 'موظف'):?> em/em.php <?php endif ?>            
                ">الصفحه الشخصيه</a>
                </button>

              <button><a href="Login.php?q1=">تسجيل خروج</a></button>
              <button><a href="adduser.php?q1=">الصفحه الرئيسيه</a></button>
        <?php }else { ?>
              <button><a href="adduser.php?q1=">تسجيل</a></button>                
              <button><a href="Login.php?q1=">دخول</a></button>
       <?php } ?>
        
       </article>
    <br>
    <footer>
        <div class="container">
        <h2>Project Name</h2>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p class="copyright">© 2021 All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>