<?php
// config.php
$dbhost = 'localhost';
$dbuser = 'id21625746_hyujin';
$dbpass = 'Elfajin13*';
$dbname = 'id21625746_elfa';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysqli_select_db($conn, $dbname);
?>
