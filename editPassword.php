<?php $pageTitle = "Saarkoth - Account"; include_once 'includes/header.php'; include_once 'includes/dbh.inc.php'; ?>

<main class="container">
<?php
$seshID = $_SESSION['u_id'];
$sql = "SELECT * FROM users WHERE user_id=$seshID;";
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

  <div class="row">
      <div class="col s6 center-align">
          <h2>User ID: <em><?php echo $u_id; ?></em></h2>
          <h2>First name: <em><?php echo $u_first; ?></em></h2>
          <h2>Last name: <em><?php echo $u_last; ?></em></h2>
          <h2>Email: <em><?php echo $u_email; ?></em></h2>
          <h2>Username: <em><?php echo $u_uid; ?></em></h2>
          <h2>Address: <em><?php echo $u_address; ?></em></h2>
          <h2>City: <em><?php echo $u_city; ?></em></h2>
          <h2>Post Code: <em><?php echo $u_postcode; ?></em></h2>
      </div>

      <form class="col s6" action="includes/editPass.inc.php" method="post">
          <div class="center-align">
              <h1>Change Password</h1>
              <div class="input-field col s11">
                  <input id="old_pass" name="old_pass" type="password" class="validate">
                  <label for="old_pass">Old Password</label>
              </div>
              <div class="input-field col s11">
                  <input id="new_pass" name="new_pass" type="password" class="validate">
                  <label for="new_pass">New Password</label>
              </div>
              <div class="input-field col s11">
                  <input id="conf_pass" name="conf_pass" type="password" class="validate">
                  <label for="conf_pass">Confirm Password</label>
              </div>
              <form action="includes/editPass.inc.php" method="POST">
                <button type="submit" name="submit" class="btn waves-effect waves-light right">Change Password</button>
              </form>
          </div>
      </form>
  </div>



<?php include_once 'includes/footer.php'; ?>
