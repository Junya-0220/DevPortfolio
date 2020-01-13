<?php
	include 'classes/sql.php';

	$s = new SQL();

	echo "<h3>Display ALL PICTURES FROM DATATASE</h3><br>";
	$result = $s->showAllImages();
	
	foreach($result as $row){
		$picture = $row['picture'];
		// echo $image;
		echo "<img src='upload/$picture'>";
	}

	echo "<hr>";

	echo "<h3>Display SPECIFIC PICTURE </h3> <br>";
	//im going to use ID #2
	$productid = 2;
	$result2 = $s->searchSpecificImage($productid);
	$picture = $result2['picture'];
	echo "<img src='upload/$picture'>";
	

?>