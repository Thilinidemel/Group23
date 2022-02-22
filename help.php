<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User'])) {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HELP</title>
    <link rel="stylesheet" href="styleh.css">
  </head>

  <body>
    <div class="all_body">
      <div class="help_header">
        <h1>Help</h1>
      </div>
      <div class="help_main">
        <div class="links_header">
          <h3>Quick links</h3>
        </div>
        <div class="links">
          <div class="link_options">
            <h4><a href="">Sign in</a></h4>
          </div>
          <div class="link_options">
            <h4><a href="">Log in</a></h4>
          </div>
          <div class="link_options">
            <h4><a href="">Your Cart</a></h4>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>

<?php
}else{
  header("Location: index.php");
  exit();
}
?>
