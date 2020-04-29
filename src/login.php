 <?php
    session_start();
    if(isset($_SESSION['logged_in'])){
        header("Location: dashboard.php");//if session variable is set
        //page will be redirected to header..
        echo "You are already logged in ";

    }
    /*else {

        $_SESSION['logged_in'] = 1;
    }*/
//id shud be set only after a user is logged in

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inventory Management System - Login </title>
        <link rel ="stylesheet" href = "css_inven/styles.css">
    </head>

    <body>
        <form action= "post.php" method = "post">

            <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
            <label>Username: </label>
            <input type ="text" name = "name" size ="15" placeholder = "Enter username" value = ""/>
            </div>
            <br />
            <br />

            <div class="textbox">
            <label>Password:</label>
            <input type = "password"  align ="center" name = "pass" size = "15" maxlength = "8" placeholder = "Enter password" value = ""/>
            </div>
            <br />
            <br />

            <input type = "Submit" align = "center" value= "Submit"/>
            </div>
        </form>

    </body>
</html>
