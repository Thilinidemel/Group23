<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User'])) {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HELP</title>
    <link rel="stylesheet" href="styleh1.css">
  </head>

  <body>
    <div class="search_bar">
      <div class="sb_image">
        <img src="2x.png" alt="">
      </div>
      <div class="sb_ask">
        <h2>How can we help you?</h2>
      </div>
      <div class="sb_search">
        <div class="img_search">
          <img src="search.png" alt="">
        </div>
        <div class="input_search">
          <input class="input_1" type="text" placeholder="Discribe Your Issue" />
        </div>
      </div>
    </div>
    <div class="all_body">
      <div class="help_main">
        <div class="links_header">
          <h3>QUICK LINKS</h3>
        </div>
        <div class="links">
          <div class="link_options">
            <h4><a href="" class="linkpages">Sign in</a></h4>
          </div>
          <div class="link_options">
            <h4><a href="" class="linkpages">Log in</a></h4>
          </div>
          <div class="link_options">
            <h4><a href="" class="linkpages">Your Cart</a></h4>
          </div>
        </div>
      </div>
      <div class="help_Q">
        <div class="links_header">
          <h3>FAQ</h3>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>What is User Name</h4>
          </div>
          <div class="Q_A">
            <h5>User Name is same as the Name that you entered in the registration</h5>
          </div>
        </div>
        <div class="Questions">
          <div class="Q_Q">
            <h4>How to Contact Laura Fashion Help Center?</h4>
          </div>
          <div class="Q_A">
            <h5>Phone: 011-1256987</h5>
            <br>
            <h5>Email: laurafashioncentre@gmail.com</h5>
            <br>
            <h5>Address: No.51, Admiral Clancy Fernando Mawatha, Katubedda, Sri Lanka</h5>
            <br>
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
