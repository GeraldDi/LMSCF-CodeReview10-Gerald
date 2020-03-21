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
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title >Edit Media</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body style="background-image: url('https://cdn.urlaubsguru.at/wp-content/uploads/2018/06/shutterstock_659133262.jpg')">

<fieldset>
   <legend class="text-white">Update media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0" class="text-white">
           <tr>
               <th>First Name</th>
               <td><input type="text"  name="title" placeholder ="title" value="<?php echo $data['title'] ?>"  /></td>
           </tr >    
           <tr>
               <th>Image</th>
               <td><input type= "text" name="image"  placeholder="image" value ="<?php echo $data['image'] ?>" /></td >
           </tr>
           <tr>
               <th>Author firstname</th>
               <td><input type ="text" name= "author_firstname" placeholder= "firstname" value= "<?php echo $data['author_firstname'] ?>" /></td>
           </tr>
           <tr>
               <th>Author lastname</th>
               <td><input type ="text" name= "author_lastname" placeholder= "lastname" value= "<?php echo $data['author_lastname'] ?>" /></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type ="text" name= "ISBN" placeholder= "ISBN" value= "<?php echo $data['ISBN'] ?>" /></td>
           </tr>
           <tr>
               <th>Short description</th>
               <td><input type ="text" name= "short_description" placeholder= "short description" value= "<?php echo $data['short_description'] ?>" /></td>
           </tr>
           <tr>
               <th>Publish date</th>
               <td><input type ="text" name= "publish_date" placeholder= "publish date" value= "<?php echo $data['publish_date'] ?>" /></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input type ="text" name= "type" placeholder= "type" value= "<?php echo $data['type'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher name</th>
               <td><input type ="text" name= "publisher_name" placeholder= "name" value= "<?php echo $data['publisher_name'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher address</th>
               <td><input type ="text" name= "publisher_address" placeholder= "publisher address" value= "<?php echo $data['publisher_address'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher size</th>
               <td><input type ="text" name= "publisher_size" placeholder= "size" value= "<?php echo $data['publisher_size'] ?>" /></td>
           </tr>
           <tr>
               <th>Status</th>
               <td><input type ="text" name= "status" placeholder= "size" value= "<?php echo $data['status'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit" class="bg-success">Save Changes</button ></td>
               <td><a href= "index.php"><button type="button" class="bg-primary">Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>