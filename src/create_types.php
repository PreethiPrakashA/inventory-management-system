<!DOCTYPE html >
<?php
    session_start();
    if(!isset($_SESSION['logged_in'])) {
        header("Location: index.php");
    }
    elseif(($_SESSION['logged_in'] !== 0) && ($_SESSION['logged_in'] !== 1)) {
        die("ERROR : You do not have sufficient
         privelege to access this");
    }
 ?>

<html lang="en" dir="ltr">
    <head>
        <style>
         body {
           background-color: #aeefec;
         }
         a:active {
           color: #ff926b;
         }
       </style>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action ="create_types_post.php" method ="POST">
            <label>Type Name </label>
            <input type ="text" name ="typename" size ="25" placeholder ="Enter the typename"/>
            <br />
            <br />

            <input type ="submit" value ="Submit" align ="center"/>
        </form>
    </body>
</html>
