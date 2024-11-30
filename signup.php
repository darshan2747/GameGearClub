<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
    }
    .signup-container {
      width: 300px;
      margin: auto;
    }
    .signup-input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }
    .signup-button {
      padding: 10px 20px;
    }
  </style>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="signup-container">
    <h2>Signup</h2>
    <form action="signup_process.php" method="post">
      <input type="text" name="email" placeholder="Email" class="signup-input" required><br>
      <input type="password" name="password" placeholder="Password" class="signup-input" required><br>
      <input type="submit" value="Signup" class="signup-button">
    </form>
  </div>
</body>
</html>
