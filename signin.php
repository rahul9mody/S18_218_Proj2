
<!--
differs from sign up in that the form element's id is form1
send colleced data in form.php file located in the same folder.
Headers and footers sorround the form
*Pending CSS*
-->
<?php include ("view/header.php");?>



<body class = "bg-color">
        <div class = "login-page">
            <div class = "form">
                       <form class = "register-form" action = "form.php" method="POST">
                    
                    <h1 id = "header">Todos By Rahul</h1>
                    
                    <div class = "col-lg-6 col-md-6">
                        <div class = "input-group input-group-lg">
                            <span class = "input-group-addon" id = "sizing-addon1"><i class = "glyphicon glyphicon-user"></i></span>
                            <input type="text" name="username" class = "form-control" placeholder="Enter your email" id="username" required="">
                        </div>

                        <div class = "input-group input-group-lg">
                            <span class = "input-group-addon" id = "sizing-addon1"><i class = "glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" class = "form-control" placeholder="Enter your password" id="password" required="">
                        </div>
                    </div>
                    
                    <button id = "btn" type="submit" name="signin" value="signin">Sign In</button>
                    <button class = "button"><a href = "signup.php" >Sign Up</a></button>
                </form>
            </div>
        </div>
<?php include 'view/footer.php';?>