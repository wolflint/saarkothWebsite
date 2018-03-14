<?php $pageTitle = "Saarkoth - Login"; include_once 'includes/header.php'; ?>



<?php
if (isset($_SESSION['u_id'])) {
    header("Location: account.php")
    /*echo    "You are logged in!";
    echo    '<form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="submit">Logout</button>
            </form>'*/;
}
?>

    <div class="container">

        <div class="row center-align">
            <img class="responsive-img" width="750px" src="assets/logo.png" alt="">

              <form class="col s12" action="includes/login.inc.php" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="uid" id="uid" class="validate">
                        <label for="uid">Username/Email</label>
                    </div>
                  </div>
                

                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" name="pwd" id="pwd" class="validate">
                        <label for="pwd">Password</label>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn waves-effect waves-light right">Submit<i class="material-icons right">send</i></button>
            </form>
          </div>
        </div>

            <!-- <form action="includes/login.inc.php" method="POST">
                            <input type="text" name="uid" placeholder="Username/e-mail">
                            <input type="password" name="pwd" placeholder="password">
                            <button type="submit" name="submit">Login</button>
                            </form>
                            <a href="signup.php">Sign up</a> -->


    <?php include_once 'includes/footer.php'; ?>
