<!DOCTYPE html>
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

    </body>
</html>
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
        echo '<table>';
        echo '
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Quantity</th>
                </tr>';
        while(($row = $result->fetch_assoc()) != FALSE) {
            //  $row = $result->fetch_assoc();
            echo '<tr>';
            echo '<td>' . $row['pro_id'] . '</td>';
            echo '<td>' . $row['pro_name'] . '</td>';
            echo '<td>' . $row['pro_price'] . '</td>';
            echo '<td>' . $row['typeid'] . '</td>';
            echo '<td>' . $row['quanttiy'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
     } else echo 'There are currently no products!';

    $result->close();
    $mysqlconn->close();

?>
