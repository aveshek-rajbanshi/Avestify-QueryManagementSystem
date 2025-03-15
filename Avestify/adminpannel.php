<?php
session_start();  // Start the session

// Check if the session for adminRole is set and that the user is an admin
//!isset($_SESSION['adminRole']) || $_SESSION['adminRole'] != "admin"

// Ensure the user is logged in as admin
if (!isset($_SESSION['adminName']) || $_SESSION['adminRole'] != "admin") {
    // If no valid admin session is found, redirect to the login page
    header("Location: login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AdminPannel</title>
   <link rel="stylesheet" href="styling/adminpannel.css">
</head>
<body>

   <div id="main">
      <div id="nav-container">
         <div id="lft-nav">
         <div class="logo"><h3>Avestify</h3></div>
         </div>
         <div id="rght-nav">
            <a href="logout.php" id="logoutBtn">Logout</a>
         </div>
      </div>

      <?php
       echo "<h1>Welcome! ".$_SESSION['adminName'];"</h1>"; 
       echo "<h1>Welcome! ".$_SESSION['adminEmail'];"</h1>"; 
       echo "<h1>Welcome! ".$_SESSION['adminRole'];"</h1>"; 

       ?>

   </div>
   
</body>
</html>
