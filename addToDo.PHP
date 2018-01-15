<?php
require_once('../scripts/todoList.php');

if($db_connect->connect_error){
	die("Connection failed ".$db_connect->connect_error);

}

$now = date('m/d/Y');
$test = $_POST['due_date'];

$today = strtotime($now);
$given = strtotime($test);
if($today < $given){
	$status = "Pending";
}elseif($today > $given){
	$status = "Past Due";
}else{
	$status = "Due";
}

$task = trim($_POST['task']);
$insertdate = date("Y-m-d", strtotime($_POST['due_date']));


$stmt = $db_connect->prepare("INSERT INTO todo (Task, DueDate, Status)
		VALUES(?,?,?)");
$stmt->bind_param("sss", $task, $insertdate, $status);
$stmt->execute();

if(mysqli_query($db_connect, $sql)){
	echo "New record created successfully.";
}else{
	echo "Error: " .$sql . "<br>" .mysqli_error($db_connect);
}

$stmt->close();
mysqli_close($db_connect);

header('Location:index.php');
?>