<?php
// MUTE NOTICES
error_reporting(E_ALL & ~E_NOTICE);
 
// DATABASE SETTINGS - CHANGE THESE TO YOUR OWN

	define('HOSTNAME', 'localhost');
	define('DBNAME', 'progpresent');
	define('DB_CHARSET', 'utf8');
	define('HOSTUSER', 'root');
	define('HOSTPASSWORD', '');
	
	

	define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);
?>