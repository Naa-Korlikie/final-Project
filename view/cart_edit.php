<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="CSS/style.css">-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=proxim-nova">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a71e5ce1d6.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
      integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni"
      crossorigin="anonymous"
    />
    <title>Homepage</title>

    <style>
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #111;
        }

        .search-container button {
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
        }

        input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
        }
</style>
</head>
<body>
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
      <th>Remove</th>
      </tr>

    </thread>



    <tbody>
     <?php
     require('../controllers/cart_controller.php');
     $p_id=$_GET['updateProd_ID'];
     $ip_add=getenv("REMOTE_ADDR");

     $cart = select_one_cart_ctr($p_id, $ip_add);
     
     
       $total = $cart['product_price']*$cart['qty'];
       $img=$cart['product_image'];
        echo "
        <tr>
        <td><img src='../uploads/$img' height=25 width=30></td>
        <td>{$cart['product_title']}</td>
		    <td>{$cart['product_price']}</td>
        <td>
        <form method='post' action='../functions/update_cart.php'>
          <input type='number' name='qty' value={$cart['qty']}>
          <input type='hidden' name='p_id' value={$cart['p_id']}>
          <button type='submit' class='btn-success' name='update_cart'>Update</button>
        </form>
        </td>
        <td>$total</td>
        <td><a href='../functions/remove_cart.php?removeProd_ID={$cart['p_id']}' class='btn-danger'>Remove</a></td>
		</tr> 
        
          ";
     
     ?>

    </tbody>
    </table>
    <br>
    <br>
    <a href="payment.php" class="btn btn-lg btn-primary cart_button_checkout ">Proceed to CheckOut </a>
    <a href="home.php" class="btn btn-lg btn-primary cart_button_checkout ">Continue Shopping </a>
</body>
</html>