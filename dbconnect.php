<?php

	 $DB_host = "localhost";
	 $DB_user = "liafx";
	 $DB_pass = "tournaments";
	 $DB_name = "liafx";
	 
	 $MySQLi_CON = @mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name) or
			die( "Connect failed: ". mysqli_connect_error() ); 
    
     

?>