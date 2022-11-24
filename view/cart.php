<?php
include ("../Settings/core.php");

require('../controllers/cart_controller.php');
$c_id=$_SESSION['cid'];
  $total= cart_quantity_ctr($c_id);
  $total=$total[0];
  $total1=$total['SUM(qty)'];
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
  <title>FitX| Cart</title>
</head>
<body >
     <!-- top nav bar -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-dark" href="home.php">FitX</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link text-dark" href="cart.php">Cart (<?php echo $total1;?>)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="../login/logout.php">Logout</a>
          </li>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          
         
          
        </ul>
        <form class="d-flex" role="search" action="search_results.php" method="POST";>
          <input class="form-control me-2" type="search" name="find" placeholder="Search by name" aria-label="Search"> &nbsp
          <button class="btn bg-dark text-light" name="submit" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>



  <br>
    <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center bg-light mb-5 rounded">
      <h1 class="text-warning">My Cart</h1>
    </div>
    </div>
    </div>

    <div class="container-fluid">
    <div class="row">
    <div class="col">
    <table class="table">
    <thread>
      <tr>
      <th>Product Image</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Quantity</th>
      <th>Total Price</th>
      <th>Update</th>
      <th>Remove</th>
      </tr>

    </thread>



    <tbody>
     <?php
     
     $ip_add=getenv("REMOTE_ADDR");
     $session=$_SESSION["cid"];
     $cart = get_Cartitem();
    
     if (empty($cart)) {
      echo '<div class="Cart-Items"><h5>No product added to cart<h5></div>';
  }else {
    $cart=$cart[0];
    foreach($cart as $value){
      $total = $value['product_price']*$value['qty'];
      $img=$value['product_image'];
       echo "
       <td><img src='../uploads/$img' height=25 width=30></td>
       <td>{$value['product_title']}</td>
       <td>{$value['product_price']}</td>
       <td>{$value['qty']}</td>
       <td>$total</td>
       <td><a href='cart_edit.php?updateProd_ID={$value['p_id']}' class='btn-warning'>Manage Qty</a></td>
       <td><a href='../functions/remove_cart.php?removeProd_ID={$value['p_id']}' class='btn-danger'>Remove</a></td>
       </tr> 
       
         ";
    }
  }
   
     
     ?>

    </tbody>
    </table>
    <br>
    <br>
    <a href="payment.php" class="btn btn-lg btn-primary cart_button_checkout ">Proceed to CheckOut </a>
    <a href="home.php" class="btn btn-lg btn-primary cart_button_checkout ">Continue Shopping </a>
</body>




</body>
</html>