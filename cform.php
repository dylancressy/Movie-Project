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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment System</title>
</head>

<body>


<h1>Leave a comment:</h1>
<div>
<form method= "POST" id = "comment">


Name: </br><input type = "text" name = "name" required/></br></br></br>
Comment: </br><textarea name = "comment" required></textarea> </br></br></br>

<input type="submit" name = "submit" value = "Comment"/></br></br></br></br>


</form>
</div>

</body>
</html>

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