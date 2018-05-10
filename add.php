<?php include("view/header.php");?>

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
        
    </style>

    <body>
        <div class = "jumbotron">
            <h1>ADD TO DO</h1>
        </div>

        <form action="index.php", method="post", >
            <input type="text" name="task" placeholder="Add" id="task" required="">

            <input type="Date" name="duedate" pattern="mms/dd/yyyy" required>

            <button id="btn" type="submit" name="Add" value="add">Add</button>
        </form>

      <?php include("view/footer.php");?>
