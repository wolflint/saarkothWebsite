<?php $pageTitle = "Saarkoth - Account"; include_once 'includes/header.php'; include_once 'includes/dbh.inc.php'; ?>

<main class="container">
<?php
//check if user is logged in if not redirect to login screen
if (!isset($_SESSION['u_id'])) {
    header("Location: login.php");
} else {

    //select user infomation from database
$seshID = $_SESSION['u_id'];
$sql = "SELECT * FROM users WHERE user_id=$seshID;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

//if results found set variable values
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $u_id       = $row['user_id'];
    $u_first    = $row['user_first'];
    $u_last     = $row['user_last'];
    $u_email    = $row['user_email'];
    $u_uid      = $row['user_uid'];
    $u_address  = $row['user_address'];
    $u_city     = $row['user_city'];
    $u_postcode = $row['user_postcode'];  }
}
}
?>
    <!-- Display user information  -->
  <div class="row center-align">
    <h2>User ID: <em><?php echo $u_id; ?></em></h2>
    <h2>First name: <em><?php echo $u_first; ?></em></h2>
    <h2>Last name: <em><?php echo $u_last; ?></em></h2>
    <h2>Email: <em><?php echo $u_email; ?></em></h2>
    <h2>Username: <em><?php echo $u_uid; ?></em></h2>
    <h2>Address: <em><?php echo $u_address; ?></em></h2>
    <h2>City: <em><?php echo $u_city; ?></em></h2>
    <h2>Post Code: <em><?php echo $u_postcode; ?></em></h2>
  </div>

  <div class="row">
    <a href="editAccount.php">
      <button type="submit" name="submit" class="btn waves-effect waves-light right">Edit<i class="material-icons right">send</i></button>
    </a>
  </div>

  <div class="row">
    <a href="editPassword.php">
      <button type="submit" name="submit" class="btn waves-effect waves-light right">Change Password<i class="material-icons right">send</i></button>
    </a>
  </div>

  <div class="row">
    <form action="includes/logout.inc.php" method="POST">
      <button type="submit" name="submit" class="btn waves-effect waves-light right">Logout<i class="material-icons right">send</i></button>
    </form>
  </div>

  <div class="row col m10 offset-m1">
      <h1 id="OrderHistory">Order History</h1>
      <table class="responsive-table">
          <thead>
              <td>Order ID</td>
              <td>Date</td>
              <td>Product</td>
              <td>Type</td>
              <td>Price</td>
              <td>Quantity</td>
              <td>Total</td>
          </thead>
          <tbody>
              <?php
              //select all from users, orders and order_products
              $sql = "SELECT * FROM orders a INNER JOIN orders_products b ON a.order_id = b.order_id INNER JOIN products c ON b.product_id = c.product_id WHERE a.users_user_id = '$seshID' ORDER BY a.order_id DESC";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              //if no results display error message
              if ($resultCheck < 1) {
                  echo "FAIL";
              } elseif ($resultCheck > 0) {
                  //clear $overall and $orders
                  $overall = 0;
                  $orders = "";

                  //fetch data from tables and set variables
                  while ($row = mysqli_fetch_assoc($result)) {
                      $orderId = $row['order_id'];
                      $orderDate = $row['order_date'];
                      $productId = $row['product_id'];
                      $productName = $row['product_name'];
                      $productType = $row['product_type'];
                      $price = $row['product_price'];
                      $quant = $row['quantity'];
                      $total = $quant * $price;

                      //add all results to $orders variable
                      $orders .="<tr>
                                    <td>$orderId</td>
                                    <td>$orderDate</td>
                                    <td>$productName</td>
                                    <td>$productType</td>
                                    <td>$price</td>
                                    <td>$quant</td>
                                    <td>$total</td>
                                </tr>
                      ";
                      $overall += $total;
                  }
                  //display $orders and $overall
                  echo $orders;
                  echo "Overall Total: " . $overall;
              }
              ?>
          </tbody>
      </table>

  </div>
</main>

<?php include_once 'includes/footer.php'; ?>
