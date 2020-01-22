<?php
    include 'classes/sql.php';

    $loginid = $_SESSION["loginid"];
    $show = new SQL;

    $result = $show-> displayReview2($loginid);
    $userNames = $show -> getUser($loginid);
?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>レビュー一覧</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      </head>
<body>
    
    <h1>こんにちは
    <?php foreach($userNames as $userName){
      echo $userName['username'];
      }?>さん
      マイレビューページです</h1><br>
        <table class="table table-hover">
          <th class="text-center">商品名</th>
          <th class="text-center">写真</th>
          <th class="text-center">あなたのコメント</th>
          <th class="text-center">投稿日</th>
          <?php foreach($result as $row){
            $picture = $row['picture'];
            echo
            "<tr><td class='text-center'>".$row['name']."</td>",
            "<td><img src='upload/$picture' class='d-block mx-auto menu-item-image'width='128' height='128'></td>",
            "<td class='text-center'>".$row['post']."</td>",
            "<td class='text-center'>".$row['date']."</td><tr>";
            }

            ?>
          </table>

   
</body>
</html>