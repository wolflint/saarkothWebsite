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
				<!-- INSERT LOGIN BUTTONS -->
				<li><a href="#">Login</a></li>
				</ul>

				<!-- MOBILE NAV-MENU -->
				<ul class="side-nav" id="mobile-demo">
				<?php include('includes/nav.php'); ?>
				</ul>

			</div>
		</nav>
		<!-- END NAVIGATION -->
	</header>