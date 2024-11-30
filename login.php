<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
    }
    .login-container {
      width: 300px;
      margin: auto;
    }
    .login-input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }
    .login-button {
      padding: 10px 20px;
    }
  </style>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
      <input type="text" name="email" placeholder="Email" class="login-input" required><br>
      <input type="password" name="password" placeholder="Password" class="login-input" required><br>
      <input type="submit" value="Login" class="login-button">
      <p>Don't have an account? <a href="signup.php">Signup here</a>.</p>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="admin/login.php">click hear to admin portal</a>
  </div>
</body>
</html>
