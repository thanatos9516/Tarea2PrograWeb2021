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
      <tr><td><a href="author/<?php echo $auth['id'] ?>"/>
          <?php echo $auth['name'] ?></a></td>
          <td><a href="book/<?php echo $auth['id'] ?>"/>
          <?php echo $auth['book'] ?></a></td>
          <td><?php echo $auth['email'] ?></td>
          <td><a href="publisher/<?php echo $auth['id'] ?>"/>
          <?php echo $auth['publisher'] ?></a></td></tr>
       <?php } ?>
     </table>
     <a class="button button-primary" href="/">Back</a>
     <a class="button button-primary" href="/book">Book</a>
     <a class="button button-primary" href="/publisher">Publisher</a>
    </div>
   </div>
 </div>
</body>
