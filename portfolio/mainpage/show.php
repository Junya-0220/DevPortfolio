<?php
    include 'classes/sql.php';

    $productid = $_GET["puroductid"];
    $loginid = $_SESSION["loginid"];
    $show = new SQL;

    $result = $show->searchSpecificImage($productid);
    $result2 = $show->displayReview($productid);
    $date=date('Y/m/d');

?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>詳細</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      </head>
<body>
<div class="review-wrapper container">
  <div class="review-menu-item">
    <img src="" class="menu-item-image">
    <h3 class="menu-item-name"><?php echo $result['name']; ?></h3>
    <p class="price">¥<?php echo $result['price']; ?></p>
    
    
    <?php 
        $image = $result['picture']; 
        echo "<img src='upload/$image'>";
    ?>

      <p class="menu-item-type"></p>
  </div>
    <form action="action.php" method="post" >
        <p>料理のご感想があればご記入ください</p>
        <textarea name="post"  cols="100" rows="8"></textarea><br>
        <input type="hidden" name="productid" value="<?php echo $productid;?>" >
        <input type="submit" name="review" class="btn btn-warning mt-3" value="送信する">

    </form>

    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
        <h4>レビュー一覧</h4>
        </div>
        <div class="review-list-item">
          <?php foreach($result2 as $row){ 
          echo $row['date'].'<br>';
          echo $row['post'].'<br>';
          echo '<hr>';
        }
          ?>
        </div>
      </div>
    </div>
    <a href="index.php">← メニュー一覧へ</a>
    
  </div>

</body>
</html>