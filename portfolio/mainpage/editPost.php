<?php
    include 'classes/sql.php';

    $postid = $_GET["postid"];
    $edit = new SQL;

    $result = $edit->updatePost($postid);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
    title <input type="text" name="title" value="<?php echo $result['title']; ?>"><br>
    post <input type="text" name="post" value="<?php echo $result['post']; ?>"><br>
    <input type="hidden" name="postid" value="<?php echo $postid; ?>"><br>
    <input type="submit" name="upgrade" value="Update post">
    </form>
    
</body>
</html>
