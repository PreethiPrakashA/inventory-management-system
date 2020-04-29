<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['logged_in'])) {
        header("Location : index.php");
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
    <form action = "create_products_post.php" method ="POST">
      <label>Product name</label>
      <input type ="text" size ="30" name ="pro_name" placeholder="Enter the product name" />
      <br>
      <br>

      <label>Type</label>
      <select name ="product_type">
          <?php

            $conn = new mysqli('localhost', 'root', '', 'inventory');
            if ($conn->connect_error) {
               die("Connection error " . $conn->connect_error);
            }
            $res =  $conn->query("SELECT * FROM types ORDER BY typeid asc");

            while( ($row = $res->fetch_assoc()) != FALSE) {
                  echo  '<option>' .  $row['typeid'] . '-' . $row['typename'] . ' </option>' ;
            }

            $res->close();
            $conn->close();

           ?>
       </select>
      <label>Product price</label>
      <input type = "number" size = "30" name ="pro_price" placeholder="Enter the product price" />
      <br>
      <br>

      <label>Quantity </label>
      <input type ="number" size ="30" name ="quantity" placeholder="Enter the quantity"/>
      <br>
      <br>
      <input type="submit" value="ADD ITEM" />

    </form>


  </body>
</html>
