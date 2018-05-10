<?php

include("model/database.php");
include("model/accounts.php");
include("model/todos.php");

session_start();

 
if(isset($_POST["signin"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];

  $isUser = sign_in($username, $password);

  if($isUser == 1)
  {

    $first = get_fname($username);
    $last = get_lname($username);

    $_SESSION['email'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['fname'] = $first;
    $_SESSION['lname'] = $last;

    //echo "first is $first<br>";
    //echo "last is $last<br>";
    // $_SESSION['todos'] = show_not_done_tasks($username);
    header("Location: user.php");
  }

  else{
    header("Location: signin.php");
  }


}

else if(isset($_POST["signup"]))
{

    print"Lets Sign up <br>";
    $fname = $_POST["fname"];  
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    add_user($fname,$lname, $email, $phone, $birthday, $gender, $password);
    
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['birthday'] = $birthday;
    $_SESSION['password'] = $password;

    //$_SESSION['todos'] = show_not_done_tasks($email);

    header("Location: user.php");
  }

?>
