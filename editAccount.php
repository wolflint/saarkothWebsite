<?php $pageTitle = "Saarkoth - Account"; include_once 'includes/header.php';
echo $_SESSION['u_id'];
?>

<main class="container">

  <div class="row center-align">
  	<img class="responsive-img" width="750px" src="assets/logo.png" alt="">
  	<h1>Account Info</h1>
      <form action="includes/account.inc.php" method="POST" class="col s12">
        <div class="row">
          <div class="input-field col s6 offset-s3">
            <!-- <i class="material-icons prefix">account_circle</i> -->
            <i class="material-icons prefix">directions_run</i>
            <input id="icon_first" type="text" name="first" class="validate">
            <label for="icon_first">First Name</label>
          </div>

  				<div class="input-field col s6 offset-s3">
            <i class="material-icons prefix">directions_walk</i>
            <input id="icon_last" type="text" name="last" class="validate">
            <label for="icon_last">Last Name</label>
          </div>
        </div>

  			<div class="row">
  				<div class="input-field col s6 offset-s3">
  						<i class="material-icons prefix">email</i>
  						<input type="text" name="email" id="icon_email" class="validate">
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
  						<input type="text" name="address" id="icon_address" class="validate">
  						<label for="icon_address">Address</label>
  				</div>
  			</div>

        <div class="row">
  				<div class="input-field col s6 offset-s3">
  						<i class="material-icons prefix">location_on</i>
  						<input type="text" name="postcode" id="icon_postcode" class="validate">
  						<label for="icon_postcode">Post Code</label>
  				</div>
  			</div>

        <div class="row">
  				<div class="input-field col s6 offset-s3">
  						<i class="material-icons prefix">location_city</i>
  						<input type="text" name="city" id="icon_city" class="validate">
  						<label for="icon_city">City</label>
  				</div>
  			</div>

  			<button style="width:150px;" type="submit" name="submit" class="btn waves-effect waves-light">Submit<i class="material-icons right">send</i></button>
      </form>
    </div>


<div class="row center-align">
  <form action="includes/logout.inc.php" method="POST">
    <button style="width:150px;" type="submit" name="submit" class="btn waves-effect waves-light">Logout<i class="material-icons right">send</i></button>
  </form>
</div>
</main>

<?php include_once 'includes/footer.php'; ?>
