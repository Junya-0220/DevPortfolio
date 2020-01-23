<?php
    include 'classes/sql.php';

    $postid = $_GET["postid"];
    $edit = new SQL;

    $result = $edit->getSearchPost($postid);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <title>変更する</title>
</head>
<body>
<div id="wrap">
<div id="head">
<h1>変更する</h1>
</div>


<div id="content">
    <form action="action.php" method="post">
    <dl>
		<dt>タイトル</dt>
		<dd>
            <input type="text" name="title" value="<?php echo $result['title']; ?>"><br>
		</dd>
		<dt>投稿内容</dt>
		<dd>
            <textarea type="text" name="post" size="35" rows="6" cols="70"><?php echo $result['post']; ?></textarea><br>
		</dd>
    </dl>
    <input type="hidden" name="postid" value="<?php echo $postid; ?>"><br>
    <input type="submit" name="upgrade" value="Update post">
    </form>
</div>
<a href="index.php">← トップページに戻る</a>
<a href="logout.php">ログアウトする</a>

    
</body>
</html>
