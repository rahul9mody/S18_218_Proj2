<?php
	
	session_start();

   if(isset($_SESSION['fname']))
   {
    	header('Location: user.php');
   }

	else 
	{
		header('Location: signin.php');
	}

?>