<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FlixPix - Contact</title>
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
			.column1, .column2 {
				width: 580px;
				float: left;
				margin: 5px;}
			.column2 {
				margin-right: 0px;}
			#nav li {
				display: inline;
				padding: 30px;
				color: Black}
			#nav li:hover { 
   				 background-color: white;}
			#nav, #footer {
				background-color: #efefef;
				padding: 0.5px;
  				border-style: solid;}
			.column1 {
				height: 500px
				margin-bottom: 1px;
				padding: 5px;
				background-color: #efefef;}
			.column2 {
				height: 500px
				margin-bottom: 1px;
				padding: 5px;
				background-color: #efefef;}
			.column2 p{
				color: Black;
				font-size: 90%;
				text-align: left}		
			.column1 p{
				color: Black;
				font-size: 110%;
				text-align: center}			
			.column1 img{
				padding: 5px;
				float:center;}
			h4{
				color: black;}
			input{
				width: 100%;
				color: black;
 		 		padding: 10px 20px;
 				margin: 8px 0;
				box-sizing: border-box;
				border: 2px solid red;}
 			textarea{
 				text-align:left;
				width: 100%;
				color: black;
 		 		padding: 12px 20px;
 				margin: 8px 0;
				box-sizing: border-box;
				border: 2px solid red;}
			input[type=text]:focus {
			    background-color: khaki;
    		iframe {
    			display: inline;
				padding: 5px;
  				border-style: none;}
  			#spacer p {
  				color: White;}
  			b {
  				font-size: 150%}
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
			<div class="article column1">
				<img src="http://www.sparkpresentations.com/wp-content/uploads/2014/09/boston-college-logo.png" alt="bclogo" width="310" height="100">
				<p><b>Phone</b>
				<br>
				<br>
				(617) 552-8000
				<br>
				<br>
				<b>Email</b>
				<br>
				<br>
				cressyd@bc.edu
				<br>
				<br>
				<b>Address</b>
				<br>
				<br>
				140 Commonwealth Avenue					
				<br>
				<br>
				Chestnut Hill, MA 02467
				</p>					
				<br>
				<br>
				<h3>Follow Us On Socia Media!</h3>
					<a href="https://www.instagram.com"><img src="https://cdn0.iconfinder.com/data/icons/shift-logotypes/32/Instagram-256.png" alt="first" height="60" width="60"/></a>
					<a href="https://www.facebook.com"><img src="http://www.freelargeimages.com/wp-content/uploads/2014/11/Facebook_logo-7.png" alt="second" height="60" width="60"/></a>
					<a href="https://www.twitter.com"><img src="https://g.twimg.com/Twitter_logo_blue.png" alt="third" height="60" width="80"/></a>
				<br>
				<br>
			</div>
		<div class="article column2">
			<h3>Send Us Some Electronic Mail</h3>
			<form method='POST'>
				<p> Name:
				<input type='text' name='your name' size='15' maxlength='30' />
				</p>
				<p> Email Address:
				<input type='text' name='your name' size='15' maxlength='30' />
				</p>
				<p> Phone Number:
				<input type='text' name='your name' size='15' maxlength='30' />
				</p>				
				<p> Message: </p>
				<textarea name='comments' cols='120' rows='10'> Enter your comments...</textarea>
				<br>
				<input type='submit' value='Submit'>
				<input type='reset' value='Reset'>
				<input type='hidden' name='recipient' value='cressyd@bc.edu' />
				<input type='hidden' name='subject' value='FlixPix Form Submission' />
			</form>
		</div>			
		<div id="spacer">
		<p> .
		</p>
		</div>
		<div id="footer">
			<p>&copy; Copyright 2016 - <a href="">Subscribe to Newsletter</a></p>
		</div>
	</body>
</html>
