<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title> Home Page</title>
    <link rel="stylesheet" href="../css/SignUpStyle.css?v=1.1">
  </head>
  <body>
    
    <div class="wrapper">
      <br><br><br>
      <h1 class="portal-name">Wits Career Portal</h1>

      <div class="sign-up">
        <h1>Sign Up</h1>
        <form action="../php/SignUp.inc.php" method="POST">
          <input type="text" name="company_name" placeholder="Company Name">
          <input type="text" name="username_company" placeholder="Email">
          <input type="password" name="company_password" placeholder="Create Password">
          <input type="password" name="confirm_password" placeholder="Confirm Password">
          <input type="text" name="registration_no" placeholder="Company Registration Number">
          <input type="text" name="vat_no" placeholder="VAT Number">
          <input type="text" name="address1" placeholder="Address1">
          <input type="text" name="address2" placeholder="Address2">
          <input type="text" name="address3" placeholder="Address3">
          <input type="text" name="country_name" placeholder="Country">
          <input type="text" name="country_code" placeholder="Country Code">

          <button type="submit" name="signup_submit">Sign Up</button><br><br>

          <a class="back-to-sign-in" style="color: #fff; font-size: 12px; font-weight: bold;" href="../index.php">Go back to sign in</a>

        </form>
      </div>
     
    </div>

  </body>
</html>