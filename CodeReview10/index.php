<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeReview10 index</title>

   <style type="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }
       body{
        background-image: url('https://cdn.urlaubsguru.at/wp-content/uploads/2018/06/shutterstock_659133262.jpg')
       }

   </style>

</head>
<body>

<div class ="manageBooks text-center ">
  <div class="h1 text-center m-2 text-white">List of all media</div>
   <a href= "create.php"><button type="button" class="ml-5 bg-success">Add new media</button></a>
<!--    Because my list on index.php already has almost all the data for the single types of media, I copied all this functionality to seperate pages instead of only showing the data on the subpages -->
   <a href= "index_books.php"><button type="button" class="ml-5 bg-primary">Show only media books</button></a>
   <a href= "index_cds.php"><button type="button" class="ml-5 bg-primary">Show only media CDs</button></a>
   <a href= "index_dvds.php"><button type="button" class="ml-5 bg-primary">Show only media DVDs</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0" class="bg-white">
       <thead >
           <tr >
               <th>Title</th>
               <th style="width: 20%">Image</th>
               <th>Author firstname</th>
               <th>Author lastname</th>
               <th>ISBN</th>
               <th>Short_description</th>
               <th>Publish date</th>
               <th>Type</th>
               <th>Publisher name</th>
               <th>Publisher address</th>
               <th>Publisher size</th>
               <th class="text-center">Options</th>

           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM media WHERE status = 0";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['title']."</td>
                       <td>" .$row['image']."</td>
                       <td>" .$row['author_firstname']."</td>
                       <td>" .$row['author_lastname']."</td>
                       <td>" .$row['ISBN']."</td>
                       <td>" .$row['short_description']."</td>
                       <td>" .$row['publish_date']."</td>
                       <td>" .$row['type']."</td>
                       <td>" .$row['publisher_name']."</td>
                       <td>" .$row['publisher_address']."</td>
                       <td>" .$row['publisher_size']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button' class='bg-success pr-4'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'class='bg-danger'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

           
       </tbody>
   </table>
</div>

</body>
</html>