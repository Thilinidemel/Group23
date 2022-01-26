<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User'])) {





?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <h1>Hello, <?php echo $_SESSION['User']; ?></h1><br>
    <a href="logout.php">Logout</a>
  </body>
</html>

<?php
}else{
  header("Location: index.php");
  exit();
}
?>
