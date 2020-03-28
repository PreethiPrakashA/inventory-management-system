<?php
    $mysqlconn = new mysqli('localhost','root','','inventory');
    if ($mysqlconn->connect_error) {
        die("Connection failed: " . $mysqlconn->connect_error);
    }
    //echo "Connected successfully";

     $result = $mysqlconn->query("SELECT * FROM products");
     if($result->num_rows!=0) {

      //  $row = 'A';
        //  WHILE($row!=FALSE)
        while(($row = $result->fetch_assoc()) != FALSE) {
            //  $row = $result->fetch_assoc();
                  echo $row['pro_id'] .'&emsp;';
                  echo '<b>';  echo $row['pro_name']."&emsp;"; echo'</b>';
                  echo $row['pro_price']."&emsp;";
                  echo $row['typeid']."&emsp;";
                  echo $row['quanttiy']."&emsp;";
                 echo '<br>';
                }
     }

    $result->close();
    $mysqlconn->close();

?>
