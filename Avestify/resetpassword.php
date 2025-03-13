<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-Password</title>
    <link rel="stylesheet" href="styling/form.css">
</head>
<body>
  <div id="main-container">
      <div class="logo"><h3>Avestify</h3></div>
      <div id="actionBtn">
        <a href="login.php"><img src="images/close.png" alt="closeBtn"></a>
      </div>
      <div id="formresetpassword">
        <div class="form-title">
            <h3>Reset Password.</h3>
        </div>
        <form class="form" action="forgetpassword.php" method="POST">

          <div class="inputBox">
            <input type="text" id="Email" name="email" required="required" autocomplete="off">
            <label for="Email">Email</label>
          </div>

          <div class="reset-submitBox">
            <button type="submit" class="resetBtn" name="send-reset-link">Send Link</button>
          </div>

        </form>
      </div>
    </div>

    
</body>
</html>