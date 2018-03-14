<?php $pageTitle = "Saarkoth - Account"; include_once 'includes/header.php'; include_once 'includes/dbh.inc.php';
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

<main class="container">

  <div class="row center-align">
  	<img class="responsive-img" width="750px" src="assets/logo.png" alt="">
  	<h1>Account Info</h1>
      <form action="includes/edit.inc.php" method="POST" class="col s12">
        <div class="row">
          <div class="input-field col s6 offset-s3">
            <!-- <i class="material-icons prefix">account_circle</i> -->
            <i class="material-icons prefix">directions_run</i>
            <input id="icon_first" type="text" name="first" class="validate" value="<?php echo $u_first ?>">
            <label for="icon_first">First Name</label>
          </div>

  				<div class="input-field col s6 offset-s3">
            <i class="material-icons prefix">directions_walk</i>
            <input id="icon_last" type="text" name="last" class="validate" value="<?php echo $u_last ?>">
            <label for="icon_last">Last Name</label>
          </div>
        </div>

  			<div class="row">
  				<div class="input-field col s6 offset-s3">
  						<i class="material-icons prefix">email</i>
  						<input type="text" name="email" id="icon_email" class="validate" value="<?php echo $u_email ?>">
  						<label for="icon_email">Email</label>
  				</div>
  			</div>

  			<!-- <div class="row">
  				<div class="input-field col s6 offset-s3">
  						<i class="material-icons prefix">lock_outline</i>
  						<input type="password" name="pwd" id="icon_pwd" class="validate">
  						<label for="icon_pwd">Password</label>
  				</div>
  			</div> -->

        <div class="row">
  				<div class="input-field col s6 offset-s3">
  						<i class="material-icons prefix">home</i>
  						<input type="text" name="address" id="icon_address" class="validate" value="<?php echo $u_address ?>">
  						<label for="icon_address">Address</label>
  				</div>
  			</div>

        <div class="row">
  				<div class="input-field col s6 offset-s3">
  						<i class="material-icons prefix">location_on</i>
  						<input type="text" name="postcode" id="icon_postcode" class="validate" value="<?php echo $u_postcode ?>">
  						<label for="icon_postcode">Post Code</label>
  				</div>
  			</div>

        <div class="row">
  				<div class="input-field col s6 offset-s3">
  						<i class="material-icons prefix">location_city</i>
  						<input type="text" name="city" id="icon_city" class="validate" value="<?php echo $u_city ?>">
  						<label for="icon_city">City</label>
  				</div>
  			</div>

  			<button style="width:150px;" type="submit" name="submit" class="btn waves-effect waves-light">Submit<i class="material-icons right">send</i></button>
      </form>
    </div>


<div class="row center-align">
    <a href="account.php">
        <button style="width:150px;" type="submit" name="submit" class="btn waves-effect waves-light">Cancel<i class="material-icons right">send</i></button>
    </a>
</div>
</main>

<?php include_once 'includes/footer.php'; ?>
