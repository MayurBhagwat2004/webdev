<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <title>Login Page</title>
</head>
<body>
  <div class="main-div">
    <div class="login-div">
      <div class="email">
        <p class="input-text">Email:</p>
        <input type="email" id="email" placeholder="Email" class="input-text">
      </div>
      <div class="pass">
        <p class="input-text">Password:</p>
        <input type="text" name="" id="pass" placeholder="Password" class="input-text">
      </div>
      <div class="btn">
        <button onclick="verify()" class="btn-text">Login</button>
      </div>
      <div class="create-acc-div">
        <a href="http://localhost/Restaurant/Restaurant/php/register_page.php">Don't have a account? create one</a>
      </div>
    </div>
  </div>

  <script src="../js/login.js"></script>
</body>
</html>