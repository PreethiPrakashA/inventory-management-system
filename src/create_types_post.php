<?php

    $mysqlconn = new mysqli('localhost','root','','inventory');
    
    if ($mysqlconn->connect_error) {
        die("Connection failed: " . $mysqlconn->connect_error);
    }
    
    echo "Connected successfully";
    $typnam = $_POST['typename'];
    $mysqlconn->query("INSERT INTO types VALUES(DEFAULT,'$typnam')");
    $mysqlconn->close();

?>
