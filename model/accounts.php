<?php
//This file will hold all the methods pertaining to adding accounts to the table
include("../form.php");
//Add new account
function add_user($fname, $lname, $email, $phone, $birthday, $gender, $password)
{
	global $db;
	$query = "INSERT INTO accounts(fname, lname, email, phone, birthday, gender, password) VALUES (:fname, :lname, :email, :phone, :birthday, :gender, :password)";
    $statement = $db->prepare($query);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
        
}
function sign_in($username, $password)
{
	global $db;
	$query = "SELECT * FROM accounts WHERE email= :username AND password= :password";
	$statement = $db->prepare($query);
	$statement->execute(
		array(
			'username' => $username , 'password' => $password  )
	);
	$results = $statement->rowCount();
	$statement->closeCursor();
	
	if($results > 0)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
function get_fname($username)
{
	global $db;
	$query = "SELECT fname FROM accounts WHERE email= :username";
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	$results = $statement->fetchAll();
	$statement->closeCursor();
	$first; 
	foreach ($results as $result) 
	{
		$first = $result['fname'];
	}
	return $first;
}
function get_lname($username)
{
	global $db;
	$query = "SELECT lname FROM accounts WHERE email= :username";
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	$results = $statement->fetchAll();
	$statement->closeCursor();
	$last; 
	foreach ($results as $result) 
	{
		$last = $result['lname'];
	}
	return $last;
}