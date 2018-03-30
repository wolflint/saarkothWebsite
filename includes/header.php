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
            <?php
            if (isset($_SESSION['u_id'])) {
                echo "<form action=\"includes/logout.inc.php\" method=\"POST\">";
            }   elseif (!(isset($_SESSION['u_id']))) {
                echo "<form class=\"nav-wrapper\" action=\"includes/login.inc.php\" method=\"post\">";
            }
             ?>
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
            $page = $_SERVER['PHP_SELF'];
            if (!(isset($_SESSION['u_id']))) {
                echo "<li style=\"padding-left:10px; padding-right:10px; width:200px;\"><input style=\"text-align: center; font-size:16px;\" type=\"text\" name=\"uid\" placeholder=\"Username/Email\"><input hidden name=\"page\" value=\"$page\"></li>";
                echo "<li style=\"padding-left:10px; padding-right:10px; width:200px;\"><input style=\"text-align: center; font-size:16px;\" type=\"password\" name=\"pwd\" placeholder=\"Password\"></li>";
                echo "<li style=\"padding-left:10px; padding-right:10px;\"><button class=\"btn cyan darken-4\" type=\"submit\" name=\"submit\">Login</button></li>";
                echo "<li style=\"padding-left:10px; padding-right:10px;\"><a href=\"signup.php\">Register</a></li>";
            } elseif (isset($_SESSION['u_id'])) {
                echo "<li style=\"padding-left:10px; padding-right:10px; font-size:1.5rem;\">" . $_SESSION['u_uid'] . "</li>";
                echo "<li style=\"padding-left:10px; padding-right:10px;\"><input hidden name=\"page\" value=\"$page\"><button class=\"btn cyan darken-4\" type=\"submit\" name=\"submit\">Logout</button></li>";
                echo "<li><a href=\"account.php\">Account</a></li><li><a href=\"merch.php#ShoppingCart\"><i class=\"material-icons\">shopping_cart</i></a></li>";
            }

             ?>
         </ul>
        </form>
          </nav>
          </div>

            <!-- MOBILE NAV-MENU -->
            <?php
            if (isset($_SESSION['u_id'])) {
                echo "<form action=\"includes/logout.inc.php\" method=\"POST\">";
            }   elseif (!(isset($_SESSION['u_id']))) {
                echo "<form class=\"nav-wrapper\" action=\"includes/login.inc.php\" method=\"post\">";
            }
             ?>
            <ul class="side-nav center-align" id="mobile-demo">
              <?php include('includes/nav.php');
              $page = $_SERVER['PHP_SELF'];
              if (!(isset($_SESSION['u_id']))) {
                  echo "<li style=\"padding-left:10px; padding-right:10px; width:200px;\"><input style=\"text-align: center; font-size:16px;\" type=\"text\" name=\"uid\" placeholder=\"Username/Email\"><input hidden name=\"page\" value=\"$page\"></li>";
                  echo "<li style=\"padding-left:10px; padding-right:10px; width:200px;\"><input style=\"text-align: center; font-size:16px;\" type=\"password\" name=\"pwd\" placeholder=\"Password\"></li>";
                  echo "<li style=\"padding-left:10px; padding-right:10px;\"><button class=\"btn cyan darken-4\" type=\"submit\" name=\"submit\">Login</button></li>";
                  echo "<li style=\"padding-left:10px; padding-right:10px;\"><a href=\"signup.php\">Register</a></li>";
              } elseif (isset($_SESSION['u_id'])) {
                  echo "<li style=\"padding-left:10px; padding-right:10px;\"><input hidden name=\"page\" value=\"$page\"><button class=\"btn cyan darken-4\" type=\"submit\" name=\"submit\">Logout</button></li>";
                  echo "<li><a href=\"account.php\">Account</a></li><li><a href=\"merch.php#ShoppingCart\"><i class=\"material-icons\">shopping_cart</i></a></li>";
              }

               ?>
            </ul>
        </form>

        <!-- END NAVIGATION -->
    </header>
