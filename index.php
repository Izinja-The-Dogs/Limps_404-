<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title> Home Page</title>
    <link rel="stylesheet" href="css/index_style.css?v=1.1">
  </head>
  <body>
    
    <div class="wrapper">
      <br><br><br>
      <h1 class="portal-name">Wits Career Portal</h1>
      <div class="login">
        <h1>Sign in</h1>
        <form action="php/Login.inc.php" method="post">
          <input type="text" name="username" placeholder="Email">
          <input type="password" name="pwd" placeholder="Password">
          <input type="submit" name="login_submit" value="LOGIN">
          <span id="error_password" style="color: red; display: none; font-size: 10px;">Please fill in password *</span>
          <span id="error_email_password" style="color: red; display: none; font-size: 10px;">Incorrect email or Password *</span>

          <?php
            if (isset($_GET["newpwd"])) {
              if ($_GET["newpwd"] == "passwordupdated") {
                echo '<p class="success-reset">Your password has been reset successfully!</p>';
              }
            }
          ?>

          <a href="pages/ResetPassword.php" style="color: #003b5c; font-size: 16px; font-weight: bold;">Forgot your password?</a><br><br>
          <span  style="color: white; font-size: 16px">Need an account? <a class="sign-up-link" href="pages/SignUp.php">Sign up now!</a></span>

          
        </form>
      </div>
    </div>

  </body>
</html>