<!DOCTYPE html>
<head>

</head>
<body>

<div>
<legend>Create Group Mail</legend>
<form action="" method="post">
Subject: <input type="text" name="subject" required><br>
Message:<br><textarea rows="5" name="message" cols="30" required></textarea><br>
Mail Password: <input type="password" name="password" required><br>
<input type="submit" name="submit" value="Submit"> <br>

</form>
<a href= admin123.php>Back to Admin Page</a>
</div>
</body>
</html> 


<?php


include_once 'dbconnect.php';

$query = $MySQLi_CON->query("SELECT user_email FROM users");

$recipients = array();

while( $row = $query->fetch_array() ) {
	
    $recipients[] = $row['user_email'];
    
}

if( isset( $_POST['submit'] ) ){
	$to = implode(', ', $recipients);
	$subject = $_POST['subject'];
	$body = $_POST['message'];
	$mailpass = 'tournaments';
	$confirmpass = $_POST['password'];
	$headers = 'From: charleslilcl@gmail.com';

	if ( mail( $to, $subject, $body, $headers ) && $mailpass == $confirmpass){
		echo " Mail was sent $to, $subject, $body, $headers ";
		}
		
	else{
		echo " Mail was NOT sent ";
		}


}


?>