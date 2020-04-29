<?php
    session_start();
    if(!isset($_SESSION['logged_in'])) {
        header("Location: index.php");
    }
    elseif(($_SESSION['logged_in'] !== 0) && ($_SESSION['logged_in'] !== 1)) {
        die("ERROR : You do not have sufficient
         privelege to access this");
    }

    $mysqlconn = new mysqli('localhost', 'root', '', 'inventory');
    if ($mysqlconn->connect_error) {
        die("Connection failed: " . $mysqlconn->connect_error);
    }
    echo "Added successfully";

    $proname = $_POST['pro_name'];
    $proprice = $_POST['pro_price'];
    $quantity = $_POST['quantity'];
    $mysqlconn->query("INSERT INTO products VALUES(DEFAULT, '$proname', '$proprice', 1, '$quantity')");
    $mysqlconn->close();

?>
