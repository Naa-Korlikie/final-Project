<?php
include ("../Settings/core.php");

include("../controllers/cart_controller.php");
check_login_index();
$c_id= $_SESSION["cid"];
$l_order=recent_order_ctr();

$l_order=$l_order['current'];
  


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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>FitX| Home</title>
</head>
<body >
     <!-- top nav bar -->
  <nav class="navbar navbar-expand-lg bg-light" >
    <div class="container-fluid" >
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
                </li>";
              }
              echo "
              <li class='nav-item'>
              <a class='nav-link text-dark' href='../admin/product.php'>Add Products</a>
               </li>
               <li class='nav-item'>
                 <a class='nav-link text-dark' href='cart.php'>Cart ($new)</a>
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
            }else {
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
        
        <form class="d-flex" role="search" name="form3" action="search_results.php" method="POST" onsubmit="need()" style="padding-top:10px;";>
          <input class="form-control me-2" type="search" name="find" placeholder="Search by name" aria-label="Search"> &nbsp
          <button class="btn bg-dark text-light" name="submit" type="submit" >Search</button>
        </form>
      </div>
    </div>
    
  </nav>
         
          
       <!-- order details -->
       <h4 class="text-success" style="margin-left:150px;"> Payment was successful!</h4>
     <div style=" min-height: 400px; ">
     <div class="container" style="margin-top: 40px;">
        <div class="card" style="box-shadow: 5px 10px 8px #888888;">
          <div class="card-header"><h4>Order Details</h4> </div>
          <div class="card-body">
          <table class="table">
          <thead>
          <tbody>
              <tr>
                <th>Order Id</th>
                <th>Product Name</th>
                <th>quantity</th>
              </tr>
            </thead>
            <?php
            $you=view_last_order_ctr($l_order);
            
           

            foreach($you as $ayou){
              $orderid= $ayou['order_id'];
              $qty = $ayou['qty'];
              $productName = $ayou['product_title'];

              echo "
              
              <tr>
              <td>$orderid</td>
              <td>$productName</td>
              <td>$qty</td>
              
          </tr>
              ";

          }
      

            ?>
            </tbody>
          </table>
          </div> 
          
        </div>
      </div>
     </div>
        </div>
  
</body>
</html>