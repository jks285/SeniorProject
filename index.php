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
					$sql = "SELECT Task, DueDate, Status FROM todo";
					$result = $db_connect->query($sql);
					if($result->num_rows == 0){
							echo "No tasks entered.";}
					elseif($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							echo "<li>".$row['Task']." ".$row['DueDate']." ".$row['Status']. "</li>";
							}
						} ?></form></span>
						
		</ul>
			<form action="addToDo.php" method="post">
				<input type="text" name="task" placeholder="Task to do"
				class="input" autocomplete="off" required>
				<input type="date" name="due_date" placeholder="Due Date"
				class="input" required>
				<input type="submit" value="Add" class="submit">
			</form>
			<form action="delete.php" method="submit">
				<input type="text" name="task" placeholder="Task to Delete"
				class="input" autocomplete="off">
				<input type="submit" value="Delete" class="submit">
				<form action=<?php
				$mysql = "DELETE FROM todo";
				mysqli_query($db_connect, $mysql);
				?> method="submit">
				<input type="submit" value="Delete All" class="submit">
			</form>
			<form action="listing.php" method="submit">
				<input type="text" name="status" placeholder="Status to Sort By(Pending, Due, Past Due)"
				class="input" autocomplete="off">
				<input type="submit" value="Sort" class="submit">
			</form>
		</div>



	</body>




</html>