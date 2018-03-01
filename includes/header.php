<?php
session_start();
?>
<header>
    <!-- NAVIGATION -->
    <nav>
        <div class="nav-wrapper">

            <!-- NAV BRAND-LOGO and MOBILE NAV-MENU BUTTON -->
            <a href="index.php" class="brand-logo center">SAARKOTH</a>
            <a href="#" data-activates="mobile-demo" class="right button-collapse">
					<i class="material-icons">menu</i>
				</a>

            <!-- LEFT OF BRAND-LOGO -->
            <ul class="left hide-on-med-and-down">
                <?php include('includes/nav.php'); ?>
            </ul>
            <!-- RIGHT OF BRAND-LOGO -->
            <ul class="right hide-on-med-and-down">
                <li><a href="login.php">Log in</a></li>
                <li><a href="signup.php">Sign up</a></li>
            </ul>

            <!-- MOBILE NAV-MENU -->
            <ul class="side-nav" id="mobile-demo">
                <?php include('includes/nav.php'); ?>
            </ul>

        </div>
    </nav>

    <script type="text/javascript">
        $(document).ready(function() {
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });

    </script>
    <!-- END NAVIGATION -->
</header>
