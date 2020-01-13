<?php include 'classes/sql.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>中華料理店</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>


<body>
  <!--banner-->
  <nav class="navbar  bg-warning">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="join.php">登録する</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">ログインする</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">ログアウトする</a>
      </li>
    </ul>
  </div>
</nav>
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="join.php">登録する</a>
            <a href="login.php">ログイン</a>
            <a href="logout.php">ログアウト</a>
            <a href="#contact">掲示板</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
  </section>

  <!-- / banner -->
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">最近の投稿</h1>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/res02.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                <?php
              $s = new SQL();
              $result = $s->getPost();
               foreach($result as $row){
                    $title = $row["title"];
                    $post = $row["post"];
               }
              ?>
                  <h2><?php echo $title; ?></h2>
                  <p><?php echo $post; ?></p>
                  <a class="btn btn-imfo btn-read-more" href="posts.php">詳しく見る</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">メニュー</h1>
          <p class="header-p">めっちゃ美味い </p>
        </div>
        <?php

              $s = new SQL();
              $result = $s->showAllImages();
              
              foreach($result as $row){
                $picture = $row['picture'];
                $name = $row['name'];
                $price = $row['price'];
                ?>
            <div id="menu-wrapper" class="col-4">
            <div class="breakfast menu-restaurant">
                <span class="clearfix">
                  <a class="menu-title" href="show.php" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $name;?></a>
                  <?php echo "<img src='upload/$picture' class='img-responsive'>";?>
                  <span class="menu-price">¥ <?php echo $price;?></span>
                </span>
            </div>
          </div>
              <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- contact -->
  <section id="contact" class="section-padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">ご意見をお待ちしております</h1>
          <p class="header-p">コメントしてください </p>
        </div>
      </div>
        <div class="row">
          <form action="post.php" method="post" role="form" class="contactForm">
            <div class="col-md-12 btnpad ">
              <div class="contacts-btn-pad">
                <center>
                  <input type="update" value="投稿する" name="update" class="btn btn-warning btn-lg mt-3 mb-3">
                </center>
              </div>
            </div>
          </form>
        </div>
        </div>

  </section>
  <!-- / contact -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
