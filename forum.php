<?php
include_once 'dbconnect.php';
if ( isset ( $_POST["submit"] ) ){
	$name = $_POST['name'];
	$comment =$_POST['comment'];
	if($name && $comment){
		$query = $MySQLi_CON->query("INSERT INTO comments ( name , comment ) VALUES ( '$name', '$comment' )" );
	}
	else{
		echo "Please fill in all fields!";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>FlixPix - Comment</title>
		<style type="text/css">
			* {
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				color: Crimson;
				text-align: center;}
			body {
				width: 1200px;
				margin: 0 auto;}
			#nav, #feature, #footer {
				margin: 1%;}
			li {
				display: inline;
				padding: 30px;}
			#feature p {
				color: Black}
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
     			float: right;
     			width: 70%}
     		th{
     			color: crimson}
			#feature {
				height: 600px;
				margin-bottom: 1px;
				background-color: #efefef;
				padding: 5px;
  				border-style: solid;}
  	</style>
	</head>
	<body>
		<div id="header">
			<img src="http://i67.tinypic.com/311w0m0.png" alt="logo" height="200" width="800" />
		</div>			
		<div id="nav">
			<ul>
				<li><a href="flixpix.html">Home</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="">Bookmarks</a></li>
				<li><a href="">Log In</a></li>
				<li><a href="comment.php">Forum</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
			<div id="feature">
     		 	<h3>Leave a Comment</h3>
				<?php
					$sql = "SELECT name, comment FROM comments";
					$result = $MySQLi_CON->query($sql);
					if ($result->num_rows > 0) {
					     echo "<table><tr><th>Name</th>    <th>Comment</th></tr>";
					     // output data of each row
						     while($row = $result->fetch_assoc()) {
					         echo "<tr><td>" . $row["name"]. "</td><td>" . $row["comment"] . "</td></tr>";
					     }
				     echo "</table>";
				     } else {
     					echo "0 results";
					}
					$MySQLi_CON->close();
				?>
				<br>
				<br>
				<form method= "POST" id = "comment">
					Name: <br><input type = "text" name = "name" required/>
					<br>
					<br>
					<br>
					Comment: <br><textarea name = "comment" required></textarea>
					<br>
					<br>
					<br>
					<input type="submit" name = "submit" value = "Comment" size="20" />
				</form>
			</div>
		<div id="footer">
			<p>&copy; Copyright 2016 - <a href="">Subscribe to Newsletter</a></p>
		</div>
	</body>
</html>
