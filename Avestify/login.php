<!-- CREATE CONNECTION TO THE DATABASE -->
 <?php
   
   // Include the connection file
   include("config/connection.php");


// Check if the form is submitted
   if(isset($_POST['login'])){
     
      // checking whether email and password are set in the POST data
    if (isset($_POST['email']) && isset($_POST['password'])) {

      $userEmail = $_POST['email'];
      $userPassword = $_POST['password'];

      //Escape the email to prevent SQL injection
      $userEmailV = mysqli_real_escape_string($conn, $userEmail);

      //ACCESSING THE SINGLE USER ONLY.
      $userSelectedQuery = "SELECT * FROM `users` WHERE `email`= '$userEmailV';";
      $connectUser = mysqli_query($conn, $userSelectedQuery);

          // Checking whether if the user exists
      if(mysqli_num_rows($connectUser) == 1){
         $userData = mysqli_fetch_assoc($connectUser);
      }
      

      $adminSelectedQuery = "SELECT * FROM `admin` WHERE `email`='$userEmailV';";
      $connectAdmin = mysqli_query($conn, $adminSelectedQuery);

      if(mysqli_num_rows($connectAdmin) == 1){
      $adminData = mysqli_fetch_assoc($connectAdmin);
      }

      if($userEmailV == "avesh@gmail.com" && password_verify($userPassword, $adminData['password'])){

            // Include the connection file
            session_start();
         
            $_SESSION['adminName'] = $adminData['full_name'];
            $_SESSION['adminEmail'] = $adminData['email'];
            $_SESSION['adminRole'] = $adminData['role'];
            
         // Redirect to the admin panel
            header("Location: adminpannel.php");
            exit();   // Make sure to exit after header redirection.
          
    }else if($userEmailV == $userData['email'] && password_verify($userPassword, $userData['password'])){

           // Include the connection file
            session_start();

            $_SESSION['userName'] = $userData['full_name'];
            $_SESSION['userEmail'] = $userData['email'];
            $_SESSION['Role'] = "user";
          
           // Redirect to the user panel
           header("Location: userpannel.php");
           exit();   // Make sure to exit after header redirection.
    

    }else{
      echo "Invalid user email & password!";
    }
  }else{
    echo "Server Issue!-02";
  }

   }
  


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styling/form.css">
</head>
<body>
  <div id="main-container">
      <div class="logo"><h3>Avestify</h3></div>
      <div id="actionBtn">
        <a href="landingpage.php"><img src="images/close.png" alt="closeBtn"></a>
      </div>
      <div id="formlogin-main-container">
        <div class="form-title">
            <h3>Login to your Account.</h3>
            <p class="form-title-msg">Inorder to solve your query on Avestify.</p>
        </div>
        <form class="form" action="#" method="POST">

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

          <div class="inputBox forgetPassword">
            <a href="resetpassword.php">Forget Password?</a>
          </div>

          <div class="submitBox">
            <input type="submit" value="Login" name="login" autocomplete="off">
          </div>

          <div class="questionBox">
            <span>Don't have an account? <a href="register.php">Sign Up</a></span>
          </div>
          

        </form>
      </div>
    </div>

    <script src="scripting/hide&show"></script>
</body>
</html>