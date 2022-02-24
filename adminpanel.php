 <html>
 <head>
 <title>Admin Panel</title>
 <style>
 body{
	 margin:0px;
	 border:3px;
 }
 #header{
	 width:100%;
	 height:160px;
	 background:black;
	 color:white;
 }

 ul li{
	 padding:20px;
 }
 ul li:hover{
	 background:red;
	 color:white;
 }

 #logo{
	 margin-top: 15px;
	 margin-left:39em;
 }

#btns{
	display:flex;
}
button{
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
 <div id="header">
 <div id="header-content">
 <img src="admin-logo.jpg" id="logo" alt="admin logo">
 <center><h2>Welcome to the Admin Panel</h2></center>
 </div>
 </div>

 <div id="sidebar"><br>
 <h3>&nbsp;&nbsp;&nbsp;This page is for admins to manipulate the database functions</h3>
<p>&nbsp;&nbsp;&nbsp;Use the links below to insert, delete and update user info<p>
 <div id="btns">
 <button style="margin-left:30px"><a href="add.php">Add</a></button>
 <button><a href="delete.php">Delete</a></button>
 <button><a href="update.php">Update</a></button>
 <button><a href="home.php">Home</a></button>
 </div>
 </div>

 








































 </body>
 </html>
