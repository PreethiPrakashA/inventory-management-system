<?php
/*  $name = $_POST['name'];
  $passw = $_POST['pass'];

    echo  $name;
    echo $passw;
  */
/*  if(isset($_POST['name'], $_POST['pass']) == True){
    echo "Succcessful";

  }
  else {
    die(' WARNING!!!Username or Password field cannot be empty');
  }
  */
/*  if(empty($_POST['name'] || empty($_POST['pass']))) {

  echo 'Username / Password not given :(';
} else {<?php
/*  $name = $_POST['name'];
$passw = $_POST['pass'];

echo  $name;
echo $passw;
*/
/*  if(isset($_POST['name'], $_POST['pass']) == True){
echo "Succcessful";

}
else {
die(' WARNING!!!Username or Password field cannot be empty');
}
*/
/*  if(empty($_POST['name'] || empty($_POST['pass']))) {

echo 'Username / Password not given :(';
} else {

echo 'OK';
}
*/
//returns true if all arguments are set;if
//any one is false returns false;


    $mysqlconn = new mysqli('localhost','root','','inventory');//newmysqli
    //returns an object which is stored in variabke $mysqlconn,even 4 argum HaruEncoder
    //optional


    if ($mysqlconn->connect_error) {
        die("Connection failed: " . $mysqlconn->connect_error);
    }
    echo "Connected successfully";


    //  $mysqlconn->query("insert into  users values(1,'Preeps','abc','Preethi','Prakash')");


    //$result =  $mysqlconn->query("SELECT * FROM inventory  WHERE username = '$_POST['name']' AND password =  '$_POST['pass']'");
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $result = $mysqlconn->query("SELECT * from users where username = '$name' and password ='$pass'");

    if( $result->num_rows > 0 ) {
    //=1 is fine too

        $row = $result->fetch_assoc();
        echo "Permission granted";
        echo $row['user_id'];
        echo $row['username'];
        echo $row['firstname'];
        echo $row['lastname'];

    }
    else {

        echo "Permission denied";

    }
    //to execute query-it returns a result by which we cud know if the query
    //was sucessful .
    $result->close();//dealloactiong memory for result set.
    $mysqlconn->close();

?>


  echo 'OK';
}
*/
    //returns true if all arguments are set;if
  //any one is false returns false;


  $mysqlconn = new mysqli('localhost','root','','inventory');//newmysqli
  //returns an object which is stored in variabke $mysqlconn,even 4 argum HaruEncoder
  //optional


  if ($mysqlconn->connect_error) {
      die("Connection failed: " . $mysqlconn->connect_error);
  }
  echo "Connected successfully";


//  $mysqlconn->query("insert into  users values(1,'Preeps','abc','Preethi','Prakash')");


//$result =  $mysqlconn->query("SELECT * FROM inventory  WHERE username = '$_POST['name']' AND password =  '$_POST['pass']'");
$name = $_POST['name'];
$pass = $_POST['pass'];
$result = $mysqlconn->query("SELECT * from users where username = '$name' and password ='$pass'");
if( $result->num_rows > 0 ) {
  //=1 is fine too


$row = $result->fetch_assoc();
echo "Permission granted";
echo $row['user_id'];
echo $row['username'];
echo $row['firstname'];
echo $row['lastname'];


}
else {

echo "Permission denied";

}
//to execute query-it returns a result by which we cud know if the query
//was sucessful .
$result->close();//dealloactiong memory for result set.
   $mysqlconn->close();

  ?>
