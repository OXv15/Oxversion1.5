<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $db = 'ox';
// $connect = mysql_connect($host, $user, $pass, $db);
// if (!$connect) {
// 	die('Faild to connect with the database' .mysql_error());
// }
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ox';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
?>

?>