<!-- CREATE CONNECTION TO THE DATABASE -->
 <?
   
   php include("connection.php");


   if(isset($_POST['login'])){
     
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    $userSelectedQuery = "SELECT * FROM `users` WHERE `email`= $userEmail";
    $connectUser = mysqli_query($conn, $userSelectedQuery);

    if(mysqli_num_rows($connectUser) == 1){
      header("Location: landingpage.php");
    }else{
      echo "Invalid user Credientials!";
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
        <a href="register.php"><img src="images/close.png" alt="closeBtn"></a>
      </div>
      <div id="formlogin-main-container">
        <div class="form-title">
            <h3>Login to your Account.</h3>
            <p class="form-title-msg">Inorder to solve your query on Avestify.</p>
        </div>
        <form class="form" action="landingpage.php" method="POST">

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