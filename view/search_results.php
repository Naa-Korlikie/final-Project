<?php

include("../functions/product_function.php");

if (isset($_POST['submit'])) {
    $find= $_POST['find'];
    $searchlist=search_product_ctr($find);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>FitX | Search</title>
</head>
<body style="background-color:#f5f5f5;">
     <!-- top nav bar -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-dark" href="home.php">FitX</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <?php
            if (logged_in()== true) {
              $user_role= check_user_role();
              $new=cart_count();
              if ($user_role==1) {
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
                 <a class='nav-link text-dark' href='cart.php'>Cart ($new)</a>
               </li>
                  <li>
                <a class='nav-link text-dark' href='orders.php' >My Orders</a>
              </li>
              
              <li class='nav-item'>
               <a class='nav-link text-dark' href='../login/logout.php'>Logout</a>
             </li> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              
             </ul>";
            }else {
              echo '
              <li class="nav-item">
               <a class="nav-link text-dark" href="../login/login.php">Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-dark" href="../login/register.php">Register</a>
             </li> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
             </ul>';
            }
          ?>
        
        <form class="d-flex" role="search" name="form3" action="search_results.php" method="POST" onsubmit="need()" ;>
          <input class="form-control me-2" type="search" name="find" placeholder="Search by name" aria-label="Search"> &nbsp
          <button class="btn bg-dark text-light" name="submit" type="submit" >Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- area for products -->
  <div style=" min-height:400px; padding-top:15px; padding-left:15px; ">
  <h4 class='text-dark' style='color:white;'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Search results for ' <?php echo  $find ; ?> '</h4>
    <div class="container">
      <div class='row row-cols-1 row-cols-md-3 g-4' >
          <?php
             if ($searchlist) {
               # code...
             
                foreach ($searchlist as $aproduct) {
                  $product_id = $aproduct['product_id'];
                  $product_title = $aproduct['product_title'];
                  $product_price = $aproduct['product_price'];
                  $product_image = $aproduct['product_image'];
                  if (logged_in()==true) {
                    echo "
                    
                    <div class='card-columns'>
                    
                      <a href='single_product.php?vid=$product_id'  >
                        <div class='card ' style=' width: 300px; margin-top: 40px;margin-left: 30px; text-align:center;  '>
                        <img src=' ../uploads/$product_image' class='card-img-top' style='height: 200px; ' >
                        <div class='card-body style='font-size:20px; ' >
                        <span style='color:black; '>$product_title </span><br>
                        <span style='color:black; '>GHS $product_price </span><br> <br> 
                        <a href='../functions/add_to_cart.php?pid=$product_id' class='btn btn-dark text-light' style='width: 220px;'>Add to Cart</a>
                        
                        </div>
                        
                        </div>
                      
                        </a>
                    </div>
                    
                    ";
                  } else {
                    echo "
                    
                    <div class='card-columns'>
                    
                      <a href='single_product.php?vid=$product_id'  >
                        <div class='card ' style=' width: 300px; margin-top: 40px;margin-left: 30px; text-align:center;  '>
                        <img src=' ../uploads/$product_image' class='card-img-top' style='height: 200px; ' >
                        <div class='card-body style='font-size:20px; ' >
                        <span style='color:black; '>$product_title </span><br>
                        <span style='color:black; '>GHS $product_price </span><br> <br> 
                        <a href='../login/login.php' class='btn btn-dark text-light' style='width: 220px;'>Add to Cart</a>
                        
                        </div>
                        
                        </div>
                      
                        </a>
                    </div>
                    
                    ";
                  }
                }
              }
              else {
                echo "<h4>&nbsp &nbsp &nbsp product not found</h4>";
              }
          ?>
      </div>
      
    </div>
  

  </div>

</body>
</html>

