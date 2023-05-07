<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display sample api</title>
</head>
<body>
<?php include './randomuser.php' ?>

<?php
echo '<pre>';
print_r($data); 
echo '</pre>';
 ?>

<ul>

   <?php 
   foreach  ($data['results'] as $results) {
    echo '<li>' . $results['name']['first'] . '</li>' ;
   }
   ?>
</ul>
   
</body>
</html>