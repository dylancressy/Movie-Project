
<!DOCTYPE html>
<html>
	<head>
		<title>FlixPix - About</title>
		<style type="text/css">
			* {
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				color: Crimson;
				text-align: center;}
			body {
				width: 1200px;
				margin: 0 auto;}
			#nav, #footer {
				margin: 1%;}
			li {
				display: inline;
				padding: 30px;}
			#nav li:hover { 
   				 background-color: white;}
			#nav, #footer {
				background-color: #efefef;
				padding: 0.5px;
  				border-style: solid;}
			table, th, td {
     			padding: 15px;
     			border-bottom: 1px solid #ddd;
     			color: black;
     			text-align: center;}
     		table{
     			float: center;
     			width: 100%}
     		th{
     			color: crimson}
  	</style>
	</head>
	<body>
		<div id="header">
			<img src="http://i67.tinypic.com/311w0m0.png" alt="logo" height="200" width="800" />
		</div>			
		<div id="nav">
			<ul>
				<li><a href="flixpix.php">Home</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="">Bookmarks</a></li>
				<li><a href="">Log In</a></li>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="footer">
			<p>&copy; Copyright 2016 - <a href="">Subscribe to Newsletter</a></p>
		</div>
		
<?php
$servername = "localhost";
$username = "liafx";
$password = "tournaments";
$dbname = "liafx";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT user_id, user_name, user_email, user_pass FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "<table>
     <tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Action</th></tr>\n";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo " <tr><td>" . $row["user_id"]. "</td><td>" . $row["user_name"]. "</td><td>" 
         . $row["user_email"] . "</td><td>" . $row["user_pass"] . "</td><td>" 
         . "<a href='delete.php?user_id=" . $row['user_id'] . "'>Delete</a>" . "</td></tr>\n";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$sql2 = "SELECT c_id, name, comment FROM comments";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
     echo "<table><tr><th>Name</th><th>Comment</th><th>Action</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["name"]. "</td><td>" . $row["comment"] . "</td><td>" . "<a href='delete.php?c_id=" . $row['c_id'] . "'>Delete</a>" . "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$conn->close();
?>  

</body>
</html>

