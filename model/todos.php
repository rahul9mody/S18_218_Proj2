<?php
// This file will hold the todos table related methods
include("../user.php");


function add_task($email, $task, $duedate, $createdate)
{
	global $db;
	$query = "INSERT INTO todos (owneremail, createdate, duedate, message, isdone) VALUES (:owneremail, :ownerid, :createdate, :duedate, :message, :isdone)";
	$done = 0;

	$statement = $db->prepare($query);
	$statement->bindValue(':owneremail', $email);
	$statement->bindVaue(':createdate', $createdate);
	$statement->bindValue(':duedate', $duedate);
	$statement->bindValue(':message', $message);
	$statement->bindValue(':isdone', $isdone);

	$statement->execute();
	$statement->closeCursor();
}

function show_not_done_tasks($email)
{
	global $db;
	$not = 0;
	$query = "SELECT * FROM todos WHERE owneremail= :email AND isdone= :not";
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':not', $not);
	$statement->execute();

	$results = $statement->fetchAll();
	$statement->closeCursor();

	return results;
}	


//Edit task


//Delete Task


//Update the task as completed

?>