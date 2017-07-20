<?php
function DB_connection(){
	$server = 'localhost';
	$username ='root';
	$password = '1234';
	$db_name = 'messanger';
	$db_connect = mysqli_connect($server, $username, $password, $db_name);
	return $db_connect;
}
?>
