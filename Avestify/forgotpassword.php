<?php

  include("config/connection.php");

  if(isset($_POST['send-reset-link'])){

    $query = "SELECT * FROM `user` WHERE `email`=`$_POST[email]`";
    $result = mysqli_query($conn,$query);

    if($result && mysqli_num_rows($result) > 0){
        echo "user found.";
    }else{
        header("Location: login.php");
    }

  }

?>