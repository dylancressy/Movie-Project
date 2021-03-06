<?php
session_start();
?>
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
				height: 370px;
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
				<!-- <li><a href="">Bookmarks</a></li> -->
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
     		 	<h3>About Us</h3>
				<p>
				FlixPix was created during the spring of 2016 by Dylan Cressy, Charles Li, and Hao Wu.
				<br>
				<br>
				FlixPix's mission is to be the world's most trusted and authoritative source of movie, TV and celebrity content and to make that content available to the widest audience possible.
				We rely on you, and the millions of people like you, who contribute to FlixPix by adding and correcting data. FlixPix users rely on the data you submit
				 to help them make informed choices about what to see, to discover titles they might not otherwise have found, and to enrich their viewing experiences by providing fascinating extra information and context.
				<br>
				<br>
				We hope that when there is a difference of opinion, contributors also show courtesy and respect during their conversations with each other and with FlixPix staff.
				Thank you for helping to keep FlixPix up to date and comprehensive, and for making it the premier online entertainment destination.
				</p>
     		 	<h4>Follow Us On Socia Media!</h4>
				<p>
				<a href="https://www.instagram.com"><img src="https://cdn0.iconfinder.com/data/icons/shift-logotypes/32/Instagram-256.png" alt="first" height="60" width="60"/></a>
				<a href="https://www.facebook.com"><img src="http://www.freelargeimages.com/wp-content/uploads/2014/11/Facebook_logo-7.png" alt="second" height="60" width="60"/></a>
				<a href="https://www.twitter.com"><img src="https://g.twimg.com/Twitter_logo_blue.png" alt="third" height="60" width="80"/></a>
				</p>
				<br>
				<br>
				<br>
			</div>
		<div id="footer">
			<p>&copy; Copyright 2016 - <a href="">Subscribe to Newsletter</a></p>
		</div>
	</body>
</html>
