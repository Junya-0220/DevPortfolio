
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<title>ログインする</title>
</head>

<body>
<div id="wrap">
  <div id="head">
    <h1>ログインする</h1>
  </div>
  <div id="content">
    <div id="lead">
      <p>メールアドレスとパスワードを記入してログインしてください。</p>
      <p>入会手続きをする</p>
    </div>
    <form action="action.php" method="post">
      <dl>
        <dt>メールアドレス</dt>
        <dd>
          <input type="text" name="email" size="35" maxlength="255" value="">

        </dd>
        <dt>パスワード</dt>
        <dd>
          <input type="password" name="password" size="35" maxlength="255" value="">
        </dd>
      </dl>
      <div>
        <input type="submit" name="login" value="ログインする" />
      </div>
    </form>
  </div>
<a href="index.php">← 戻る</a>
</div>
</body>
</html>


