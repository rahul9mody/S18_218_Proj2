<?php   
    
session_start();
    
   $x = isset($_SESSION['email']);
   
   if(!$x)
   {

    header("Location: signin.php");

   }
    include ("view/header.php");
    include("model/database.php");
    include("model/accounts.php");
    include("model/todos.php");

    $email = $_SESSION['email'];
    echo "email = $email";
    $results = show_not_done_tasks($email);
    $count = 0;

    foreach($results as $row)
    {
        $count += 1;
    }

    echo "count = $count";

?>


    
    <style>
        .jumbotron{
            background-color: #395DFF;
            text-align: center;
            color: white;
            padding: 5px;
        }
        
        #welcome{
            text-align: center;
        }

        #logout{
            text-align: right;
        }
        
        table{
            border: 2px solid black;
            border-radius: 5px;
        }
        
        button a{
            color: white;
        }
        
        .footer {
            position: fixed;
            height: 100px;
            bottom: 0;
            width: 100%;
            background-color: #395DFF;
            text-align: center;
            color: white;
            font-size: 25px;
            
        }


        
        button{
        }
    </style>

<body>

    <div class = "jumbotron">
            <h1>Todos by Rahul</h1>
            <form action="logout.php" method="POST" >
                <input type="submit" class="btn-danger" value="Logout" >
            </form>
    </div>
        
    <div class="container">

        <h2 id="welcome">Welcome, <?php echo $_SESSION['fname'], ' ', $_SESSION['lname'];?></h2>
            
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Task.</th>
                    <th scope="col">Created Date.</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $row): ?>
                <tr>
                    <th scope="row">1</th>
                    <td> <?php echo $row['message']; ?> </td>
                    <td> <?php echo $row['createddate']; ?> </td>
                    <td> <?php echo $row['duedate']; ?> </td>
                    <td><button type="button" class="btn btn-primary"><a href = "edit.php">Edit</a></button></td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>


    </div>

    

 <br>
 <br>   
<?php include ("view/footer.php") ; ?>









































