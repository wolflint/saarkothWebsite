<?php $pageTitle = "Saarkoth - Login"; include_once 'includes/header.php'; ?>



<?php
if (isset($_SESSION['u_id'])) {
    header("Location: ../account.php")
    /*echo    "You are logged in!";
    echo    '<form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="submit">Logout</button>
            </form>'*/;
}
?>

    <div class="container">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        </form>
    </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
