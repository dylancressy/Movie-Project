<?php
session_start();

if( !isset ($_SESSION['userSession'] ) )
{
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

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