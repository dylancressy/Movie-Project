<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FlixPix - Forgot Password</title>
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
			#feature {
				height: 100px;
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
				<li><a href="flixpix.php">Home</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="">Bookmarks</a></li>
				<?php
					if ( !isset( $_SESSION['userSession'] ) ) {
						echo '<li><a href="index.php">Log In</a></li>';
					} else {
						echo '<li><a href="logout.php">Log Out</a></li>';
					}
				?>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
			<div id="feature">
     		 	<h3>Forgot Your Password?</h3>
     		 	<?php 
					echo '
					<form action="change.php" method="post">
						Email Address: <input type="text" name="email" size="20" />
						<input type="submit" name="ForgotPassword" value="Request Reset" />
					</form>';
				?>
			</div>
		<div id="footer">
			<p>&copy; Copyright 2016 - <a href="">Subscribe to Newsletter</a></p>
		</div>
	</body>
</html>

