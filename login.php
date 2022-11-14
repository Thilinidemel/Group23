<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $uname = validate($_POST['uname']);
  $pass = validate($_POST['password']);

  if (empty($uname)) {
    header("Location: index.php?error=User Name is Required");
    exit();
  }else if(empty($pass)){
    header("Location: index.php?error=Password is Required");
    exit();
  }else {
    $sql="SELECT * FROM loginform WHERE User='$uname' AND password='$pass'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row=mysqli_fetch_assoc($result);
      if ($row['User']===$uname && $row['Password']===$pass) {
        $_SESSION['User']=$row['User'];
        $_SESSION['ID']=$row['ID'];
		    if($row['user_level']=='0'){
          header("Location: home.php");
          exit();
        }
	      else if($row['user_level']=='1'){
		      header("Location: home_admin.php");
          exit();
	      }
	    }
      else{
        header("Location: index.php?error=Incorrect User Name or Password");
        exit();
      }
    }else{
        header("Location: index.php?error=Incorrect User Name or Password");
        exit();
      }
    }
}
