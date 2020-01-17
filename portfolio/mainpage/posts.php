<?php 
    include 'classes/sql.php';
    
    $post = new SQL;

    $result = $post->getPosts();
    $status =  $_SESSION['status'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=table, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<section id="event">
    <div class="bg-color" class="">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="">

    <table class="table table-dark">
        <th>TITLE</th>
        <th>POST</th>
        
        <?php 
        if($status == "A"){
        echo
        "<th colspan='2'>ACTION</th>";
        }
        ?>
        <?php

            if($status == "A"){
                echo "$status - admin table";
            }else{
                echo "$status - not admin table";
            }

            foreach($result as $row){
                $postid = $row['postid'];
                echo "<tr>
                            <td> " .$row['title']. "</td>
                            <td> " .$row['post']. "</td>";
                
                if($status == "A"){
                    echo "<td> <a href='editPost.php?postid=$postid'>Update</a> </td>
                    <td> <a href='action.php?actiontype=delete&postid=$postid'> Delete </a></td>";
                }
                echo "</tr>";
                        
                }
        ?>
    </table>
                    </div>
                </div>
            </div>
        </div>
</section>
    <a href="index.php">← トップページに戻る</a>
    <a href="logout.php">ログアウトする</a>
    <?php 
        if(isset($_SESSION['status']) && $_SESSION['status'] == "A"){  
        echo"<a class='nav-link' href='admin.php'>アドミンページへ行く</a>"; 
      }
      ?>


</body>
</html>