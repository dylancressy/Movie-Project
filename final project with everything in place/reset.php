<?php

// Connect to MySQL
    $username = "liafx"; 
    $password = "tournaments"; 
    $host = "localhost"; 
    $dbname = "liafx"; 
try {
$conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
}
catch(PDOException $ex) 
    { 
        $msg = "Failed to connect to the database"; 
    } 
    
if (isset($_POST["ResetPasswordForm"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$hash = $_POST["q"];

	// Use the same salt from the forgot_password.php file
	$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

	// Generate the reset key
	$resetkey = hash('sha512', $salt.$email);

	if ($resetkey == $hash)
	{
		if ($password == $confirmpassword)
		{
			//hash and secure the password
			$password = md5($password);

				$query = $conn->prepare('UPDATE users SET user_pass = :password WHERE user_email = :email');
				$query->bindParam(':password', $password);
				$query->bindParam(':email', $email);
				if ( ! $query->execute() )
					die("password not updated");
				$conn = null;
				
			echo "Your password has been successfully reset.";
		}
		else
			echo "Your password's do not match.";
	}
	else
		echo "Your password reset key is invalid.";
}

?>

