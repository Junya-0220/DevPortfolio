<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>商品登録</title>

	<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div id="wrap">
<div id="head">
<h1>商品登録</h1>
</div>

<div id="content">
<p>次のフォームに必要事項をご記入ください。</p>
<form action="action.php" method="post" enctype="multipart/form-data">
	<dl>
		<dt>商品名</dt>
		<dd>
			<input type="text" name="product" size="35" maxlength="255" value="" />

		</dd>
		<dt>価格</dt>
		<dd>
        	<input type="text" name="price" size="35" maxlength="255" value="" />
        </dd>
		<dt>写真</dt>
		<dd>
        	<input type="file" name="picture" size="35" maxlength="255" value="" />
        </dd>
	</dl>
	<div><input type="submit" name="save" value="商品を追加する" /></div>
</form>
</div>
<a href="index.php">← トップページに戻る</a>
<a href="posts.php">← お知らせページへ行く</a>
<a href="user.php">← 新しいお知らせを書く</a>
<a href="logout.php">ログアウトする</a>
</body>
</html>

