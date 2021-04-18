<!DOCTYPE html>
<!-- file: views/author.php -->
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
     <h2><?php echo $title ?></h2>
     <table>
      <tr><th>Name</th><th>Book</th>
          <th>Email</th><th>Publisher</th></tr>
       <?php foreach ($authors as $auth) { ?>
      <tr><td><a href="author/<?php echo $prof['id'] ?>"/>
          <?php echo $auth['name'] ?></a></td>
          <td><?php echo $auth['book'] ?></td>
          <td><?php echo $auth['email'] ?></td>
          <td><?php echo $auth['publisher'] ?></td></tr>
       <?php } ?>
     </table>
    </div>
   </div>
 </div>
</body>
