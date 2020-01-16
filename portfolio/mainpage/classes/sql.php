<?php
    session_start();
    include 'connection.php';

    class SQL extends Database{
        public function insertToTable($product, $price,$picture){
            $sql= "INSERT into product(name, price,picture) VALUES('$product', '$price','$picture')";

            if($this->conn->query($sql)){
                //successful in inserting the picture
                return 1;
            }else{
                echo "Not saved " .$this->conn->error;
                return 0;
            }
        }

        public function showAllImages(){
            $sql = "select * from product";

            $rows = array();
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }

                return $rows;
            }
        }

        public function searchSpecificImage($productid){
            $sql = "SELECT * FROM  product WHERE productid = '$productid'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            return $row;
        }
        function insetIntologintTable($name,$email,$pass){
            $sql = "INSERT INTO login(username,address,password)
                    VALUES('$name','$email','$pass')";

            if($this->conn->query($sql)){
                echo "Record inserted successfully";
            }else{
                echo "Error in inserting the record to the employee table." .$this->conn->error;
            }   
        }
        function checkUserLogin($email,$pass){
    
            $sql ="SELECT * FROM login WHERE address = '$email' AND password ='$pass'";
            $result = $this->conn->query($sql);
            
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['loginid'] = $row["loginid"];
                    $_SESSION['status'] = $row["status"];
    
                    if($row["status"] == "A"){
                        header("Location: admin.php");
                    }else{
                        header("Location: index.php");
                    }
    
                }
            }else{
                echo "Email and password error";
            }
        }
        function insetIntpostToTable($title,$post,$loginid){
            $sql = "INSERT INTO post(title,post,loginid)
                    VALUES('$title','$post','$loginid')";

            if($this->conn->query($sql)){
                header("Location: user.php");
            }else{
                echo "Error in inserting the record to the post table." .$this->conn->error;
            }   
        }

        function getPost(){

            $sql ="SELECT * FROM post";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        function insetIntoreviewtTable($post,$productid,$loginid){
            $sql = "INSERT INTO review(post,productid,loginid)
                    VALUES('$post','$productid','$loginid')";

                   

            if($this->conn->query($sql)){
                header("Location: show.php?puroductid=$productid");
            }else{
                echo "Error in inserting the record to the review table." .$this->conn->error;
            }
        }
        public function displayReview($productid){
            $sql = "SELECT * FROM review INNER JOIN product ON review.productid = product.productid
                    WHERE product.productid = '$productid'";
            $result2 = $this->conn->query($sql);

            $rows = array();

            while($row = $result2->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
            }
            public function getPosts(){
                $sql ="SELECT * FROM post";
                $result = $this->conn->query($sql);
                $rows = array();

                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }
            public function deletePost($postid){
                $sql = "DELETE from post where postid='$postid'";
            
                if($this->conn->query($sql)){
                    header("Location: posts.php");
                }else{
                    echo "Error in deleting." .$this->conn->error;
                }
            }
            public function getSearchPost($postid){
                $sql = "SELECT * FROM post WHERE postid = '$postid'";
                $result = $this->conn->query($sql);

            $row = $result->fetch_assoc();

            return $row;
            } 
            public function updatePost($title,$post,$postid){
                $sql = "UPDATE post SET 
                title = '$title',
                post = '$post'
                WHERE postid = '$postid'";
            
            if($this->conn->query($sql)){
                header("Location: posts.php");
            }else{
                echo "Error in updating." .$this->conn->error;
            }

    }
    

    }
?>