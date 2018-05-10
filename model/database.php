

<?php

    $dsn = 'mysql:host=sql2.njit.edu;dbname=rrm43';
    $username = 'rrm43';
    $password = 'rmody1996';

    try 
    {
        $db = new PDO($dsn, $username, $password);
        
    } 
    catch (PDOException $e) 
    {
        $error_message = $e->getMessage();
        
        exit();
    }
    
    

?>