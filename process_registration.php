<?php
include('db_connection.php');

$login = $_POST['login'];
$password = $_POST['password'];

echo "Your account registered success Mr.".$login;


function DB_insert($login, $password, $link){
	$db_insert = 'INSERT INTO users(login, password) VALUES("%s", "%s")';
	$sql = sprintf($db_insert, $login, $password);
	$result = mysqli_query($link, $sql);
	if(!$result){
		echo '/n Something happened';
	}	
	return $result;
}

$db_connect = DB_connection();
DB_insert($login, $password, $db_connect);
mysqli_close($db_connect);

?>
