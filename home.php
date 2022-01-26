<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User'])) {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link rel="stylesheet" href="style2.css"/>
  </head>
  <body>
    <div class="header">

      <div class="header_left">
        <img src="i01.jpg" alt="shop">
        <div class="searchbar">
          <img src="search.png" alt="search" />
          <input type="text" placeholder="Search fot items">
        </div>
      </div>

      <div class="header_middle">
        <div class="header_middle_option active">
          <img class="icons" src="home.png" alt="Home" />
        </div>
        <div class="header_middle_option">
          <img class="icons" src="female.png" alt="Friends" />
        </div>
        <div class="header_middle_option">
          <img class="icons" src="male.png" alt="Watch" />
        </div>
        <div class="header_middle_option">
          <img class="icons" src="kids.png" alt="Groups" />
        </div>
        <div class="header_middle_option">
          <img class="icons" src="cart.png" alt="Gaming" />
        </div>
      </div>

      <div class="header_right">
        <div class="header_right_left">
          <div class="header_right_left_info">
            <img class="profilepicture" src="girl.png" alt="Girl">
            <h4><?php echo $_SESSION['User']; ?></h4>
          </div>
        </div>
        <img class="tools" src="menu.png" alt="Menu">
        <img class="tools" src="messenger.png" alt="Messenger">
        <img class="tools" src="notifications.png" alt="Notifications">
        <img class="tools" src="account.png" alt="Account">
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
