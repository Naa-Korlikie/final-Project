<?php
include("../functions/product_function.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="../css/login.css">
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
  <?php
  // Showing alerts after register
  include("../functions/showAlerts.php");

  showLoginAlert();


  ?>
  <!-- top nav bar -->
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
  <form class="logform" action="login_process.php" method="POST" id="login_form">
    <div class="imgcontainer">
      <img src="../images/face-icon-user.png" alt="Avatar" class="avatar">
    </div>


    <label for="email"><b>Email</b></label></br>
    <input type="text" placeholder="Enter email" name="customer_email" required id="email"> </br>
    <div id="error_msg"></div>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="customer_pass" required id="password">
    <div id="error_msg"></div>


    <button class="loginbtn" type="submit" name="submit1">Login</button><br>

  </form>
  <div class="under"> Don't have an account? | <a href="register.php">Sign up</a></div>
  <script src="../js/app.js"></script>

</body>

</html>