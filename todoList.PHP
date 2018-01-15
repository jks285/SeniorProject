<?php
DEFINE('DB_USER', 'ToDoWeb');
DEFINE('DB_PASSWORD', 'BorderLands1!');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'tododb');


$db_connect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not Connect: '.mysql_connect_error());




?>