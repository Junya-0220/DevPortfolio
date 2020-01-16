<?php

    include 'classes/sql.php';

    $s = new SQL();

    if(isset($_POST['save'])){
        $product = $_POST["product"];
        $price = $_POST["price"];
        $picture = $_FILES['picture']['name'];

        $target_dir = "upload/"; //folder in your computer where you will place the picture
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);

        $ans = $s->insertToTable($product, $price,$picture);

    if($ans == 1){
        // Upload file
        move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
        //move_uploaded_file ~~~ transfers the picture from one location
        // to another location
        header("Location: index.php");
    }else{
        echo "Error";
    }
    }else if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = md5($_POST["password"]);

        $s->insetIntologintTable($name,$email,$pass);

    }else if(isset($_POST["login"])){
        $email = $_POST["email"];
        $pass = md5($_POST["password"]);
    
        $s->checkUserLogin($email,$pass);

    }else if(isset($_POST["addpost"])){
        $title = $_POST["title"];
        $post = $_POST["post"];
        $loginid = $_POST["loginid"];
    
        $s->insetIntpostToTable($title,$post,$loginid);

    }else if(isset($_POST["review"])){
        $post = $_POST["post"];
        $productid = $_POST["productid"];
        $loginid = $_SESSION["loginid"];

        
        $s->insetIntoreviewtTable($post,$productid,$loginid);

    }else if($_GET['actiontype'] == 'delete'){
        $postid = $_GET['postid'];

        $s->deletePost($postid);

    }else if(isset($_POST["upgrade"])){
        $title = $_POST["title"];
        $post = $_POST["post"];
        $postid = $_POST["postid"];

        $s->updatePost($title,$post,$postid);

    }else if(isset($_POST["upgrade"])){
        $title = $_POST["title"];
        $post = $_POST["post"];
        $postid = $_POST["postid"];

        $s->updatePost($title,$post,$postid);

    }
    

    
?>