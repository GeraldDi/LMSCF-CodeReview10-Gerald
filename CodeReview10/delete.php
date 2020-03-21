<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete Media</title>
</head>
<body style="background-image: url('https://cdn.urlaubsguru.at/wp-content/uploads/2018/06/shutterstock_659133262.jpg')">

<h3 class="text-white">Do you really want to delete this media?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
   <button type="submit" class="bg-success">Yes, delete it!</button>
   <a href="index.php"><button type="button" class="bg-primary">No, go back!</button></a>
</form>

</body>
</html>

<?php
}
?>