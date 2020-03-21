<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title >Add Media</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 0px;
       }
       body{
        background-image: url('https://cdn.urlaubsguru.at/wp-content/uploads/2018/06/shutterstock_659133262.jpg')
       }
   </style>

</head>
<body>

<fieldset >
   <legend class="h2 text-light">Add Media</legend>
   

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="2" class="text-light">
           <tr>
               <th>Title</th>
               <td><input  type="text" name="title"  placeholder="title" /></td >
           </tr> 
           <tr>
               <th>Image</th>
               <td><input  type="text" name="image"  placeholder="image" /></td >
           </tr> 
           <tr>
               <th>Author firstname</th >
               <td><input  type="text" name="author_firstname"  placeholder="title" /></td >
           </tr> 
           <tr>
               <th>Author lastname</th >
               <td><input  type="text" name="author_lastname"  placeholder="title" /></td >
           </tr> 
           <tr>
               <th>ISBN</th >
               <td><input  type="text" name="ISBN"  placeholder="ISBN" /></td >
           </tr>    
           <tr>
               <th>Short description</th>
               <td><input  type="text" name= "short_description" placeholder="short description"/></td>
           </tr>
           <tr>
               <th>Publish date</th>
               <td><input type="text"  name="publish_date" placeholder ="2020-01-01" /></td>
           </tr>
           <tr>
               <th>Publisher name</th >
               <td><input  type="text" name="publisher_name"  placeholder="firstname lastname" /></td >
           </tr> 
           <tr>
               <th>type</th >
               <td><input  type="text" name="type"  placeholder="book" /></td >
           </tr> 
           <tr>
               <th>Status</th >
               <td><input  type="text" name="status"  placeholder="1" /></td >
           </tr> 
           <tr>
               <th>Publisher address</th >
               <td><input  type="text" name="publisher_address"  placeholder="address" /></td >
           </tr> 
           <tr>
               <th>Publisher size</th >
               <td><input  type="text" name="publisher_size"  placeholder="big" /></td >
           </tr>  
           <tr>
               <td><button type ="submit" class="bg-primary">Insert media</button></td>
               <td ><a href= "index.php"><button  type="button" class="bg-warning">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>

