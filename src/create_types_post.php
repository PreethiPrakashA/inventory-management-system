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

    echo "Connected successfully";
    $typnam = $_POST['typename'];
    $result = $mysqlconn->query("SELECT * FROM types WHERE typename = '$typnam'");
    if($result->num_rows == 1) {
        echo "The given typename already exists";
    }
    else {
        $mysqlconn->query("INSERT INTO types VALUES(DEFAULT,'$typnam')");
    //why default:current counter is auto-incremented.id is set to 1 by
    //default
    }
    $result->close();
    $mysqlconn->close();

?>
