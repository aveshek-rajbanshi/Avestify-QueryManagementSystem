<?php

   session_start();
  
   if(!isset($_SESSION['userName'])){
      // Redirect to the user panel
      header("Location: login.php");
      exit();   // Make sure to exit after header redirection.
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UserPannel</title>
   <link rel="stylesheet" href="styling/userpannel.css">
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

      <?php echo "<h1>Welcome! ".$_SESSION['userName'];"</h1>" ?>

   </div>
   
</body>
</html>