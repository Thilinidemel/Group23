<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User'])) {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="stylec.css"/>
  </head>

  <body>
    <div class="header">

      <div class="header_left">
        <img class="header_left_img" src="logo.jpg" alt="Shop"/>
        <div class="header_input">
          <span class="material-icons"> search </span>
          <input type="text" placeholder="Search">
        </div>
      </div>

      <div class="header_middle">
        <div class="header_option">
          <abbr title="Home"><a href="home.php"><span class="material-icons"> home </span></a></abbr>
        </div>
        <div class="header_option">
          <abbr title="Female Clothings"><a href="women.php"><span class="material-icons"> girl </span></a></abbr>
        </div>
        <div class="header_option">
          <abbr title="Male Clothings"><a href="men.php"><span class="material-icons"> boy </span></a></abbr>
        </div>
        <div class="header_option">
          <abbr title="Kids Section"><a href="kids.php"><span class="material-icons"> child_friendly </span></a></abbr>
        </div>
        <div class="header_option">
          <abbr title="Accessories"><a href="accessories.php"><span class="material-icons"> auto_awesome </span></a></abbr>
        </div>
        <div class="header_option active">
          <abbr title="Cart"><a href="cart.php"><span class="material-icons"> shopping_cart </span></a></abbr>
        </div>
      </div>

      <div class="header_right">
        <div class="header_info">
          <img class="user_avatar" src="avatar2.png" alt="Hi,"/>
          <h4><?php echo $_SESSION['User']; ?></h4>
        </div>
        <abbr title="See Profile"><span class="material-icons"> add </span></abbr>
        <abbr title="Comment"><span class="material-icons"> forum </span></abbr>
        <abbr title="Notifications"><span class="material-icons"> notifications </span></abbr>
        <abbr title="More"><span class="material-icons"> expand_more </span></abbr>
      </div>
    </div>
    <br>
    <div class="main">
      <div class="cart_status">
        <h1 class="title">Your Cart is Empty</h1>
      </div>
      <br>
      <div class="cart_message">
        <h3 class="message">The price and availability of items are subject to change. The Cart is a temporary place to store a list of your items and reflects each item's most recent price.</h3>
      </div>
      <br>
      <div class="signin_option">
      <div class="signin">
        <h4 class="sign">If you don't have an account sign up now!</h4>
      </div>
      <br>
      <div>
        <button class="button" type="button" name="button"><a class="a_butt" href="index.php">Sign Up</a></button>
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
