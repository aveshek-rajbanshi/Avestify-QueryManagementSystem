<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "avestify";

  //   CREATE CONNECTION.
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  //   CHECKING THE CONNECTION.
  if(!$conn){
    die("Connection to the Mysql Database failed.".mysqli_connect_error());
  }else{
    // echo "Connection to the Mysql Database.";
  }

?>