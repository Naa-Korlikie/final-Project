<?php
include("../functions/product_function.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <meta name="viewport">
  <link rel="stylesheet" href="../css/register.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <title>FitX | Home</title>
</head>

<body>
  <!-- top nav bar -->

  <?php
  // Showing alerts after register
  include("../functions/showAlerts.php");

  showRegisterAlert();


  ?>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-dark" href="../view/home.php">FitX</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <?php
          if (logged_in() == true) {
            $user_role = check_user_role();
            //$new=cart_count();
            if ($user_role == 1) {
              echo "<li class='nav-item'>
                <a class='nav-link text-dark' href='../admin/brand.php'>Brands</a>
                </li>";
              echo "<li class='nav-item'>
                <a class='nav-link text-dark' href='../admin/category.php'>Categories</a>
                </li>
                <li class='nav-item'>
              <a class='nav-link text-dark' href='../admin/product.php'>Add Products</a>
               </li>";
            }
            echo "
              
               <li class='nav-item'>
                 <a class='nav-link text-dark' href='cart.php'>Cart ()</a>
               </li>
                  <li>
                <a class='nav-link text-dark' href='orders.php' >My Orders</a>
              </li>
              <li class='nav-item' style='padding-top:10px;'>
              <span class='dropdown' >
            <a class='nav-link text-dark' data-toggle='dropdown'>Customer Care
            <span class='caret'></span></a>
            <ul class='dropdown-menu bg-dark'>
              <span ><p class='text-light' style='padding-left:30px; padding-top:10px;'>For help Call: 0552540289</p></span>
            </ul>
            </span>
          </li> 
              <li class='nav-item'>
               <a class='nav-link text-dark' href='../login/logout.php'>Logout</a>
             </li> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              
             </ul>";
          } else {
            echo '
              <li class="nav-item">
               <a class="nav-link text-dark" href="../login/login.php">Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-dark" href="../login/register.php">Register</a>
             </li> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
             </ul>';
          }
          ?>

          <form class="d-flex" role="search" name="form3" action="../view/search_results.php" method="POST" onsubmit="need()" style="padding-top:10px;" ;>
            <input class="form-control me-2" type="search" name="find" placeholder="Search by name" aria-label="Search"> &nbsp
            <button class="btn bg-dark text-light" name="submit" type="submit">Search</button>
          </form>
      </div>
    </div>

  </nav>


  <h1>Register</h1>
  <p>Please fill in this form to create an account.</p>
  <form class="regform" method="POST" action="./register_process.php" id="regis_form" enctype="multipart/form-data">
    <label for="firstname"><b>Firstname</b></label></br>
    <input type="text" placeholder="Enter firstname" name="customer_name" required id="first_name"></br></br>
    <div id="error_msg_name"></div>


    <label for="email"><b>Email</b></label></br>
    <input type="text" placeholder="Enter Email" name="customer_email" required id="regis_email"></br></br>
    <div id="error_msg"></div>


    <label for="psw"><b>Password</b></label></br>
    <input type="password" placeholder="Enter Password" name="customer_pass" required id="regis_password"></br></br>
    <div id="error_msg"></div>


    <label for="country"><b>Country</b></label></br>
    <input type="text" placeholder="country" name="customer_country" required id="country"></br></br>
    <div id="error_msg_country"></div>

    <label for="city"><b>City</b></label></br>
    <input type="text" placeholder="city" name="customer_city" required id="city"></br></br>
    <div id="error_msg_city"></div>

    <label for="contact"><b>Contact</b></label></br>
    <input type="text" placeholder="contact" name="customer_contact" required id="contact"></br></br>
    <div id="error_msg_contact"></div>

    <label for="profile"><b>Profile picture</b></label></br>
    <input type="file" name="img" /></br></br>

    <button type="submit" class="registerbtn" name="submit">Register</button>
  </form>
  <div>Already have an account? | <a href="register.php">Log In</a></div>
  <script src="../js/app.js"></script>
</body>

</html>