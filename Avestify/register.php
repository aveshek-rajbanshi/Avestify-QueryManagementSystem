<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styling/register.css">
</head>
<body>
  <div id="main-container">
      <div class="logo"><h3>Avestify</h3></div>
      <div id="actionBtn">x</div>
      <div id="form-main-container">
        <div id="form-title">
            <h3>Create an Account.</h3>
        </div>
        <form class="form" action="#" method="POST">

          <div class="inputBox">
            <!-- <label for="Name">Name</label> -->
            <input type="text" id="Name" name="name" required="required" autocomplete="off">
            <label>Full-Name</label>
          </div>

          <div class="inputBox">
            <input type="text" id="Email" name="email" required="required" autocomplete="off">
            <label for="Email">Email</label>
          </div>

          <div class="inputBox">
            <input type="text" id="Password" name="password" required="required" autocomplete="off">
            <label for="Password">Password</label>
          </div>

          <div class="submitBox">
            <input type="submit" value="Sign Up" name="signup" autocomplete="off">
          </div>

          <div class="questionBox">
            <span>Already have an account? <a href="login.php">Login</a></span>
          </div>
          

        </form>
      </div>
    </div>

    
</body>
</html>