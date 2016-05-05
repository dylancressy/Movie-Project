<?php
session_start();

include_once 'dbconnect.php';

if( !isset ($_SESSION['userSession'] ) )
{
	header("Location: index.php");
}


//check if recieved ID is valid
if( isset( $_GET['user_id'] ) ){
		
	
		//remove user
		$uid = $_GET['user_id'];
		$del = "DELETE FROM users WHERE user_id =" . $uid;
		$query = $MySQLi_CON->query($del);
		
		if( isset( $query ) ){
			header("location:admin123.php");
			}
			
		else{
			echo mysql_error();
			}
	
	
}

else if( isset ($_GET['c_id'] ) ){

	
		//remove user's comment 
		$cid= $_GET['c_id'];
		$del_c = "DELETE FROM comments WHERE c_id =" . $cid;
		$query = $MySQLi_CON->query($del_c);
		
		if( isset( $query ) ){
			header("location:admin123.php");
			}
			
		else{
			echo mysql_error();
			}
	
	
} //end if


?>