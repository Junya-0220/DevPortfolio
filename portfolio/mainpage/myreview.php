<?php
    include 'classes/sql.php';

    $loginid = $_SESSION["loginid"];
    $show = new SQL;

    $result = $show-> displayReview2($loginid);
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

    マイレビューページです<br>
    <?php foreach($result as $row){
        echo $row['name'].'<br>';
        $picture = $row['picture'];
        echo "<img src='upload/$picture' class='menu-item-image'>";
        
        }
        ?>
  </div>
</div>

   
</body>
</html>