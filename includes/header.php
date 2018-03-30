<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $pageTitle; ?>
    </title>
    <link rel="stylesheet" href="css/myStyle.css" type="text/css">
    <link rel="icon" href="./assets/favicon.png">
</head>

<body>

    <header>

      <div class="navbar-fixed">
        <nav>
          <form class="nav-wrapper" action="includes/login.inc.php" method="post">
            <!-- NAV BRAND-LOGO and MOBILE NAV-MENU BUTTON -->
            <a href="index.php" class="brand-logo center">SAARKOTH</a>
            <a href="#" data-activates="mobile-demo" class="right button-collapse">
            <i class="material-icons">menu</i>
            </a>
            <!-- LEFT OF BRAND-LOGO -->
            <ul class="left hide-on-med-and-down">
            <?php include('includes/nav.php'); ?>
            </ul>
            <ul id="right-nav" class="right hide-on-med-and-down">
            <?php

            if (!(isset($_SESSION['u_id']))) {
                echo "<li style=\"padding-left:10px; padding-right:10px; width:200px;\"><input style=\"text-align: center;\" type=\"text\" name=\"uid\" placeholder=\"Username/Email\"></li>";
                echo "<li style=\"padding-left:10px; padding-right:10px; width:200px;\"><input style=\"text-align: center;\" type=\"password\" name=\"pwd\" placeholder=\"Password\"></li>";
                echo "<li style=\"padding-left:10px; padding-right:10px;\"><button class=\"btn\" type=\"submit\" name=\"submit\">Login</button></li>";
                echo "<li style=\"padding-left:10px; padding-right:10px;\"><a href=\"../signup.php\">Register</li>";
            }

             ?>
         </ul>
        </form>
          </nav>
          </div>

            <!-- MOBILE NAV-MENU -->
            <ul class="side-nav" id="mobile-demo">
              <?php include('includes/nav.php');
              if (isset($_SESSION['u_id']))
              {
              echo
              "
              <li><a href=\"account.php\">Account</a></li>
              <li><a href=\"merch.php#ShoppingCart\"><i class=\"material-icons\">shopping_cart</i></a></li>
              ";
              }
              else
              {
              echo "
              <li><a href=\"login.php\">Log in</a></li>
              <li><a href=\"signup.php\">Sign up</a></li>
              ";
              }
              ?>
            </ul>


        <script type="text/javascript">
            $(document).ready(function() {
                // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
            });

        </script>
        <!-- END NAVIGATION -->
    </header>
