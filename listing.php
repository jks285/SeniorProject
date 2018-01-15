<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Jon's To Do list</title>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<meta name="viewport" content= "width=device-width,initial-scale=1.0">

	</head>

	<body>
		<div class="list">
			<h1 class="header"> Jons To Do List.</h1>
		<ul class="tasks">
					<span class="task"><?php
					require_once('../scripts/todoList.php'); 
					$statusSelected = $_REQUEST['status'];
					$sql = "SELECT * FROM todo WHERE Status='$statusSelected'";
					$result = $db_connect->query($sql);
					if($result->num_rows == 0){
							echo "No tasks entered.";}
					elseif($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							echo "<li>".$row['Task']." ".$row['DueDate']." ".$row['Status']. "</li>";
							}
						} ?></form></span>
		</ul>
		<form action="index.php" method="submit">
				<input type="submit" value="Return" class="submit">
	</form>
	</div>
	
</body>
</html>