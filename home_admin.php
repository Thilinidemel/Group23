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
    <link rel="stylesheet" href="style2.css"/>
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
        <div class="header_option active">
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
        <div class="header_option">
          <abbr title="Cart"><a href="cart.php"><span class="material-icons"> shopping_cart </span></a></abbr>
        </div>
      </div>

      <div class="header_right">
        <div class="header_info">
          <img class="user_avatar" src="avatar2.png" alt="Hi,"/>
          <h4><?php echo $_SESSION['User']; ?></h4>
        </div>
        <abbr title="Admin Page"><a href="adminpanel.php"><span class="material-icons"> add </span></a></abbr>
        <abbr title="Facilities"><a href="facilities.php"><span class="material-icons"> tips_and_updates </span></a></abbr>
        <abbr title="Help"><a href="help.php"><span class="material-icons"> help </span></a></abbr>
      </div>

    </div>

    <div class="main">

      <div class="picture">
        <img class="pic" src="i10.jpg" alt="Check your connection!">
      </div>

      <div class="categories">

        <div class="categories_header">
          <h1>Categories</h1>
        </div>

        <div class="c_c">
          <div class="c_c_header">
            <h3>Women Wear</h3>
          </div>
          <div class="c_c_main">
            <div class="categories_option">
              <img class="cp" src="w01.jpg" alt="01">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="w02.jpg" alt="02">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="w03.jpg" alt="03">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="w04.jpg" alt="04">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="w05.jpg" alt="05">
              <h3></h3>
            </div>
          </div>
        </div>

        <div class="c_c">
          <div class="c_c_header">
            <h3>Men Wear</h3>
          </div>
          <div class="c_c_main">
            <div class="categories_option">
              <img class="cp" src="m01.jpg" alt="01">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="m02.jpg" alt="02">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="m03.jpg" alt="03">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="m04.jpeg" alt="04">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="m05.jpg" alt="05">
              <h3></h3>
            </div>
          </div>
        </div>

        <div class="c_c">
          <div class="c_c_header">
            <h3>Kid's Wear</h3>
          </div>
          <div class="c_c_main">
            <div class="categories_option">
              <img class="cp" src="k01.jpg" alt="01">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="k02.webp" alt="02">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="k03.jpg" alt="03">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="k04.jpg" alt="04">
              <h3></h3>
            </div>
            <div class="categories_option">
              <img class="cp" src="k05.jpeg" alt="05">
              <h3></h3>
            </div>
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
