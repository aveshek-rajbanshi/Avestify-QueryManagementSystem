<?php 

   include("config/connection.php");


         //SECURE METHOD TO STORED DATA IN MYSQL DATABASE-02
      if (isset($_POST['register'])) {
        
        // Retrieve user inputs
        $fullname = $_POST['fullname'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

        // HASHING THE PASSWORD.
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the statement
        // Directly inserting user input into your SQL query can lead to SQL injection attacks. Use prepared statements to avoid this vulnerability.
      $stmt = $conn->prepare("INSERT INTO `users` (`full_name`, `email`, `password`) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $fullname, $email, $hashedPassword);

      if ($stmt->execute()) {
          echo "<script>
                  alert('Data Inserted into Database.');
                </script>";
      } else {
          echo "<script>
                  alert('Data not Inserted into Database.');
                </script>";
      }

      // Close the statement
      $stmt->close();
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styling/form.css">
</head>
<body>
  <div id="main-container">
      <div class="logo"><h3>Avestify</h3></div>
      <div id="actionBtn">
      <a href="landingpage.php"><img src="images/close.png" alt="closeBtn"></a>
      </div>
      <div class="formregister-main-container">
        <div class="form-title">
            <h3>Create an Account.</h3>
        </div>
        <form class="form" action="#" method="POST">

          <div class="inputBox">
            <!-- <label for="Name">Name</label> -->
            <input type="text" id="Name" name="fullname" required="required" autocomplete="off">
            <label>Full-Name</label>
          </div>

          <div class="inputBox">
            <input type="text" id="Email" name="email" required="required" autocomplete="off">
            <label for="Email">Email</label>
          </div>

          <div class="inputBox">
            <input type="password" id="Password" name="password" required="required" autocomplete="off">
            <label for="Password">Password</label>
            <div id="toogle-password">
                <div id="password-icons">
                  <img src="images/hide.png" alt="hide" class="passwordImg" id="hide" onClick="showHide();">
                  <img src="images/show.png" alt="show" class="passwordImg" id="show" onClick="showHide();">
                </div>
            </div>
          </div>

          <div class="submitBox">
            <input type="submit" value="Sign Up" name="register" autocomplete="off">
          </div>

          <div class="questionBox">
            <span>Already have an account? <a href="login.php">Login</a></span>
          </div>
          

        </form>
      </div>
    </div>

    
    <script src="scripting/hide&show.js"></script>
</body>
</html>