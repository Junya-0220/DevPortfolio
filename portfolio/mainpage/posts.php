<?php  session_start();
include 'classes/sql.php';

$s = new User;

$result = $s->getPost();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=table, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <th>TITLE</th>
        <th>POST</th>
        <th colspan="2">ACTION</th>

        <?php
                    foreach($result as $row){
                    $postid =$row['postid'];
                    echo "<tr>
                                <td>" .$row['title']."</td>
                                <td>" .$row['post']."</td>
                                <td> <a href='editStudent.php?postid=$postid'> Update </a></td>
                                <td> <a href='userAction.php?actiontype=del&id=$postid'>Delete </a></td>
                    </tr>";
                }
        ?>
    </table>
</body>
</html>