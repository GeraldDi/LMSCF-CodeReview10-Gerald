<?php 

require_once 'db_connect.php';

if ($_POST) {
   $title = $_POST['title'];
   $image = $_POST['image'];
   $author_firstname = $_POST[ 'author_firstname'];
   $author_lastname = $_POST[ 'author_lastname'];
   $ISBN = $_POST['ISBN'];
   $short_description = $_POST['short_description'];
   $publish_date = $_POST['publish_date'];
   $publisher_name = $_POST['publisher_name'];
   $type = $_POST['type'];
   $status = $_POST['status'];
   $publisher_address = $_POST['publisher_address'];
   $publisher_size = $_POST['publisher_size'];

   $sql = "INSERT INTO media (title, image, author_firstname,author_lastname,ISBN,short_description,publish_date,publisher_name,type,status,publisher_address,publisher_size) VALUES ('$title', '$image', '$author_firstname','$author_lastname','$ISBN','$short_description','$publish_date','$publisher_name','$type','$status','$publisher_address','$publisher_size')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>