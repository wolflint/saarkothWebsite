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
				<li><a class="waves-effect waves-light btn modal-trigger" href="#login">Login</a></li>
				</ul>

				<!-- MOBILE NAV-MENU -->
				<ul class="side-nav" id="mobile-demo">
				<?php include('includes/nav.php'); ?>
				</ul>

			</div>
		</nav>

<!-- MODAL -->
		<div id="login" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

	<script type="text/javascript">
	$(document).ready(function(){
// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
$('.modal').modal();
});
	</script>
		<!-- END NAVIGATION -->
	</header>
