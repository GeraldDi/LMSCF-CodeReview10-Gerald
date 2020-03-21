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

   $id = $_POST['id'];

   $sql = "UPDATE media SET title = '$title', image = '$image', author_firstname = '$author_firstname' , author_lastname = '$author_lastname' , ISBN = '$ISBN', short_description = '$short_description', publish_date = '$publish_date', publisher_name = 'publisher_name', type = '$type', status = '$status', publisher_address = '$publisher_address', publisher_size = '$publisher_size' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>