<html>
<head>
<?php
error_reporting(0);
include 'db_conn.php';

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM loginform WHERE ID='$id'";
	if(empty($id)){
	echo "<b>Provide the ID</b><br/><br/>";	
	}
	else{
	$sq = mysqli_query($conn, $sql);
	if($sq==1){
		echo "<b>Successfully deleted</b><br/><br/>";
	}
	else{
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
<form action="delete.php" method="POST">
  ID <input type="number" name="id"><br/><br/>
	<input id="btn" type="submit" name="submit" value="send info">
	<button id="btn"><a href="adminpanel.php">Admin Panel</a></button>
</form>



</body>
</html>