<html>
<head>
<?php
error_reporting(0);
include 'db_conn.php';

$id = $_POST['id'];
$name = $_POST['user'];
$pass = $_POST['pass'];
$sql = "UPDATE loginform SET User='$name', Password='$pass' WHERE ID='$id'";

if($_POST['submit'])
{
	if(empty($id) || empty($name) || empty($pass))
	{
		echo "<b>All fields must be filled</b><br/><br/>";
	}
	else
	{
		$x = mysqli_query($conn, $sql);
		if($x==1)
		{
			echo "<b>Successfully Updated</b><br/><br/>";

		}
		else
		{
			echo "<b>Something went wrong:(</b><br/><br/>";
		}
	}
}
?>

<style>
#btn{
	background-color: #00BFFF;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin: 20px;
}
</style>
</head>

<body>
<form action="update.php" method="POST">
  ID <input type="number" name="id"><br/><br/>
  User Name <input type="text" name="user"><br/><br/>
  Password <input type="password" name="pass"><br/><br/>
	<input id="btn" type="submit" name="submit" value="send info">
	<button id="btn"><a href="adminpanel.php">Admin Panel</a></button>
</form>

</body>
</html>
