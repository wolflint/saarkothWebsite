<?php $pageTitle = "Saarkoth - Account"; include_once 'includes/header.php'; include_once 'includes/dbh.inc.php'; ?>

<main class="container">
<?php
$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $u_id = $row['user_id'];
    $u_first = $row['user_first'];
    $u_last = $row['user_last'];
    $u_email = $row['user_email'];
    $u_uid = $row['user_uid'];
    $u_address = $row['user_address'];
    $u_city = $row['user_city'];
    $u_postcode = $row['user_postcode'];  }
}


?>
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
    <form action="includes/logout.inc.php" method="POST">
      <button type="submit" name="submit" class="btn waves-effect waves-light right">Logout<i class="material-icons right">send</i></button>
    </form>
  </div>
</main>

<?php include_once 'includes/footer.php'; ?>
