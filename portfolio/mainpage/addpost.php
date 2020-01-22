<?php session_start();?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>お知らせ</title>

	<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div id="wrap">
<div id="head">
<h1>お知らせ</h1>
</div>

<div id="content">
<p>次のフォームに必要事項をご記入ください。</p>
<form action="action.php" method="post" enctype="multipart/form-data">
	<dl>
		<dt>タイトル</dt>
		<dd>
			<input type="text" name="title" size="35" maxlength="255" value="" />

		</dd>
		<dt>投稿内容</dt>
		<dd>
        	<textarea type="text" name="post" size="35" rows="6" cols="70"></textarea >
        </dd>
	</dl>
			<input type="hidden" name="loginid" size="35" maxlength="255" value="<?php echo $_SESSION['loginid']?>" />
			
	<div><input type="submit" name="addpost" value="追加する" /></div>
</form>
</div>
<a href="index.php">← トップページに戻る</a>
<a href="logout.php">ログアウトする</a>
<a href="posts.php">お知らせページに行く</a>
<a href='admin.php'>アドミンページへ行く</a>
</body>
</html>

