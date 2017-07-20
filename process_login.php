<?php
session_start();
include('db_connection.php');

function log_in($login, $password, $link){
	$db_get = 'SELECT * FROM users WHERE login = "%s" AND password = "%s"';
	$login_result = sprintf($db_get, $login, $password);
	$result = mysqli_query($link, $login_result);
	$num_rows = mysqli_num_rows($result);
	if($num_rows == 0){
		echo "No such user. Go Home \n";
	}
	else if($num_rows == 1){
		$data = msqli_fetch_array($result, MYSQLI_ASSOC);
		$id = $data['id'];
		echo $id;
		$_SESSION['id'] = $id;
	}		
}

$db_connect = DB_connection();
log_in($_POST['login'], $_POST['password'], $db_connect);
mysqli_close($db_connect);

?>
