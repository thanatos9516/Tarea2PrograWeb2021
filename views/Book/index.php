<!DOCTYPE html>
<!-- file: views/book.php -->
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
      <tr><th>Name</th><th>Author</th>
          <th>Publisher</th></tr>
       <?php foreach ($books as $bok) { ?>
      <tr><td><a href="book/<?php echo $prof['id'] ?>"/>
          <?php echo $bok['name'] ?></a></td>
          <td><?php echo $bok['author'] ?></td>
          <td><?php echo $bok['publisher'] ?></td>
       <?php } ?>
     </table>
    </div>
   </div>
 </div>
</body>
