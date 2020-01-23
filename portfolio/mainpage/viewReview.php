<?php
    include 'classes/sql.php';

    $review = new SQL;

	
	$reviws = $review -> getReviews();
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
    
    <h1>ユーザー一覧</h1><br>
        <table class="table table-hover">
		  <th class="text-center">ID</th>
		  <th class="text-center">レビュー</th>
		  <th colspan='2'>ACTION</th>
		 
			<?php foreach($reviws as $reviw){
				echo $review['post'];
			}
			?>
          </table>

   
</body>
</html>