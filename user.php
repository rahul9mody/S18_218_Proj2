<?php   

    session_start();

   $x = isset($_SESSION['fname']);

   if(!$x)
   {

    header("signin.php");
    
   }

    include ("view/header.php") ;
    include("../model/database.php"); 

?>

<meta name = "viewport" content = "width=device-width, initial-scale=1">
    
    <style>
        .jumbotron{
            background-color: #395DFF;
            text-align: center;
            color: white;
            padding: 5px;
        }
        
        #hello{
            text-align: center;
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
        </div>
        
        <div class = "container-fluid" id = "main_container">
            <div class = "row" id = "row1">
                <div class = "col-md-12" id = "hello">
                    <!--<h2>Welcome, User</h2> -->
                    	<h2>Welcome, <?php echo $_SESSION['fname'], ' ', $_SESSION['lname'];?></h2>
                </div>
            </div>
        </div>
        
        <button type="button" class="btn btn-success"><a href = "add.php" >ADD</a></button>
        <table class="table">
            <thead class = "thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Check</th>
                    <th scope="col">Task</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Current Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th></th>
                    <td><input type="checkbox" checked="checked"></td>
                    <td><?php foreach ($results as $result){
                        echo ($result['owneremail']);
                    }?></td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-primary"><a href = "edit.php">Edit</a></button></td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>                
            </tbody>
        </table>
       
<?php include ("view/footer.php") ; ?>