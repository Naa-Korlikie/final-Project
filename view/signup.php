<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="bg">
    
</div>

<form action="../actions/signup_action.php" method="POST">
    <h2>SIGNUP</h2>
    <!-- Name field -->
  <div class="form-field">
    <input type="text" name="customer_name" placeholder="Name" required/>
  </div>

  <!-- Email field -->
  <div class="form-field">
    <input type="email" name="customer_email" placeholder="Email" required/>
  </div>

  <!-- Password field -->
  <div class="form-field">
    <input type="password" name="customer_pass" placeholder="Password" required/>
  </div>


  <!-- Country field -->
  <div class="form-field">
    <input type="text" name="customer_country" placeholder="Country" required/>
  </div>

  <!-- City field -->
  <div class="form-field">
    <input type="text" name="customer_city" placeholder="City" required/>
  </div>
  
  <!-- Contact field -->
  <div class="form-field">
    <input type="text" name="customer_contact" placeholder="Contact" required/>                        
  </div>

  <!-- <input type="hidden" name="userrole"  value="1"/>  -->

  <!-- Terms & Privacy -->
  <hr>
  <h3><p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p></h3>
  
    <!-- Submit button -->
  <div class="form-field">
    <button class="btn" type="submit" name="submit" value="Signup">Signup</button>
  </div>

  <h3>Already registered? <a href="login.php">Login</a></h3> 

  <center><h3><a href="../index.php">&#xab;GO BACK</a></h3></center>

</form>
</body>
</html>