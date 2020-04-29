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
         <body >
                 <?php
                             echo "<ul>\n";
                            session_start();
                            if(!isset($_SESSION['logged_in'])) {
                                die('ERROR : You must be logged in!');
                            }
                            if($_SESSION['logged_in'] === 0) {
                                echo "<li><a href=\"create_user.php\"> Create new user!</a></li>\n";
                            }
                            if($_SESSION['logged_in'] === 1 || $_SESSION['logged_in'] === 0) {
                                echo "<li><a
                                href = \"create_products.php\">Add a brand new product!</a></li>";
                                echo "<li><a
                                href = \"create_types.php\">Create new Product Type</a></li>";
                                echo "<li><a
                                href = \"list_product.php\">List Products</a></li>";
                            }
                            if($_SESSION['logged_in'] === 2 || $_SESSION['logged_in'] === 0) {
                                echo 'Work in progress!';
                            }
                            echo "</ul>\n";
                 ?>

         </body>
 </html>
