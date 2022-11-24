<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="bg"></div>

<form action="../actions/login_action.php" method="post">
    <h2>LOGIN</h2>

  <!-- Email field -->
  <div class="form-field">
    <input type="email" name="customer_email" placeholder="Email" required/>
  </div>

  <!-- Password field -->
  <div class="form-field">
    <input type="password" name="customer_pass" placeholder="Password" required/>
  </div>

  
    <!-- Submit button -->
  <div class="form-field">
    <button class="btn" type="submit" name="submit">Log in</button>
  </div>

  <h3>Not a customer yet? <a href="signup.php">Signup</a></h3>
</form>
</body>
</html>