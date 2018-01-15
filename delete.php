<?php
require_once('../scripts/todoList.php');

if($db_connect->connect_error){
	die("Connection failed ".$db_connect->connect_error);
}

$taskToDelete = $_REQUEST['task'];

$sql = "DELETE FROM todo WHERE Task='$taskToDelete' LIMIT 1";

if(mysqli_query($db_connect,$sql)){
	header('Location:index.php');
}else{
	echo "Error deleting record.";
}

mysqli_close($db_connect);

?>