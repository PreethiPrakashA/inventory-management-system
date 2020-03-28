<?php
    $mysqlconn = new mysqli('localhost','root','','inventory');
    if ($mysqlconn->connect_error) {
        die("Connection failed: " . $mysqlconn->connect_error);
    }
    echo "Added successfully";

    $proname = $_POST['pro_name'];
    $proprice = $_POST['pro_price'];
    $quantity = $_POST['quantity'];
    $mysqlconn->query("INSERT INTO products VALUES(DEFAULT, '$proname', '$proprice', 1 , '$quantity')");
    $mysqlconn->close();

?>
