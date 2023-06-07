<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkbox</title>
</head>
<body>
  <form action="checkbox.php" method="post">
    <input type="checkbox" name="pizza" value="">Pizza</br>
    <input type="checkbox" name="barger" value="">Barger</br>
    <input type="checkbox" name="hotdog" value="">Hotdog</br>
    <input type="checkbox" name="chicken" value="">Chicken</br>
    <input type="submit" name="submit">
  </form>
</body>
</html>

<?php
  if (isset($_POST["submit"])){

    if(isset($_POST["pizza"])){
      echo "yeah you like pizza! </br>";
    }
    if(isset($_POST["barger"])){
      echo "yeah you like Barger! </br>";
    }
    if(isset($_POST["hotdog"])){
      echo "Oh you like Hotdog! </br>";
    }
    if(isset($_POST["chicken"])){
      echo "yeah you like Chicken Masala! Yammi.. </br>";
    }
  }

?>