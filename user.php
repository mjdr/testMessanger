<?php
include('db_connection.php');

session_start();

if(isset($_SESSION['id'])){
	$current_user = 'SELECT * FROM users WHERE id = "%s"';
	$user_sql = sprintf($current_user, $_SESSION['id']);
	$link = DB_connection();
	$result = mysqli_query($link, $user_sql);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo 'Hello '.$data['login'];
	//mysqli_close($link);
}
else{
	header('Location: login.php');
}

?>
