<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Jashon123!');
define('DB_NAME', 'rpgorg');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(link === false){
	die("ERROR: Could Not Connect. " . mysqli_connect_error());
}
?>
