<?php
	$pageTitle = "Saarkoth - Sign Up";
	include_once 'includes/header.php';
	?>
<section class="container">
<div class="row center-align">
	<img class="responsive-img" width="750px" src="assets/logo.png" alt="">
	<h1>Sign Up</h1>
    <form action="includes/signup.inc.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <!-- <i class="material-icons prefix">account_circle</i> -->
          <input id="icon_first" type="text" name="first" class="validate">
          <label for="icon_first">First Name</label>
        </div>

				<div class="input-field col s6">
          <input id="icon_last" type="text" name="last" class="validate">
          <label for="icon_last">Last Name</label>
        </div>
      </div>

			<div class="row">
				<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="uid" id="icon_email" class="validate">
						<label for="icon_email">Username</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="text" name="email" id="icon_email" class="validate">
						<label for="icon_email">Email</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
						<i class="material-icons prefix">lock_outline</i>
						<input type="password" name="pwd" id="icon_pwd" class="validate">
						<label for="icon_pwd">Password</label>
				</div>
			</div>
			<button type="submit" name="submit" class="btn waves-effect waves-light right">Submit<i class="material-icons right">send</i></button>
    </form>
  </div>

    <!-- <div>
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div> -->
</section>
<?php include_once 'includes/footer.php'; ?>
