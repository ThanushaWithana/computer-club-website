<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  </head>
  <body>

  <?php 
        include 'db_connect.php'
  ?>

    <div class="form-container sign-in-form">
      
        <div class="form-box sign-in-box">
          <h2>Login</h2>
          <form action="">

              <div class="filed">
                <i class="uil uil-at"></i>
                <input type="email" placeholder="Email ID" required>
              </div>

              <div class="filed">
                <i class="uil uil-lock-alt"></i>
                <input class="password-input"type="password" placeholder="password" required>
                <div class="eye-btn"><i class="uil uil-eye-slash"></i></div>
              </div>

              
              <div class="forgot-link">
                <a href="">Forgot Password?</a>
              </div>

              <input class="submit-btn"type="submit" value="Login">

          </form>

          <div class="login-option">
            <p class="text">or, login with...</p>
            <div class="other-logins">
              <a href=""><img src="../images/google.png" alt=""></a>
              <a href=""><img src="../images/facebook.png" alt=""></a>
              <a href=""><img src="../images/apple.png" alt=""></a>
            </div>
          </div> 




  <?php 
      include 'db_close.php'
  ?>
  </body>
</html>