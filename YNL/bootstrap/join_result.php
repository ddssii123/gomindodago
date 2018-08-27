<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
    if(isset($_GET[userid]) && isset($_GET[pwd]) ){
      echo "<p> name : $_GET[userid] </p> ";
      echo "<p> pwd : $_GET[pwd] </p> ";
    }else{
      echo "<h1> input name and age </h1>";
    }

    ?>
</body>
</html>
