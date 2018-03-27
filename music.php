<?php
	$pageTitle = "Saarkoth - Music";
	include_once 'includes/header.php';

	//select all music from database
	$sql = "SELECT * FROM music ORDER BY album AND track_no;";
	?>

    <!-- SECTIONS -->
    <main class="container">

        <section id="digital">
            <div class="row">

                <div class="col s12">
                    <!-- SECTION TITLE -->
                    <h1>DIGITAL</h1>
                </div>
                <!-- CARDS -->
                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed" src="./assets/news/news3.jpg" alt="">
                            <a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
                        </div>
                        <div class="card-content grey darken-4">
                            <span class="card-title right">£0.99</span>
                            <p>BEYOND THE HORIZON</p>
                        </div>
                    </div>
                </div>

                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed" src="./assets/news/news3.jpg" alt="">
                            <a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
                        </div>
                        <div class="card-content grey darken-4">
                            <span class="card-title right">£0.99</span>
                            <p>AWAKE IN ETERNAL SLEEP</p>
                        </div>
                    </div>
                </div>
                <div class="col m4">

                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed" src="./assets/news/news3.jpg" alt="">
                            <a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
                        </div>
                        <div class="card-content grey darken-4">
                            <span class="card-title right">£0.99</span>
                            <p>THE WONDERER</p>
                        </div>
                    </div>
                </div>
        </section>

        <section id="vinyls">
            <div class="row">

                <div class="col s12">
                    <!-- SECTION TITLE -->
                    <h1>VINYLS &amp; CD
                        <small>s</small>
                    </h1>
                </div>
                <!-- CARDS -->
                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed" src="./assets/music/vinyl.png" alt="">
                            <a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
                        </div>
                        <div class="card-content grey darken-4">
                            <span class="card-title right">£11.99</span>
                            <p>BEYOND THE HORIZON (VINYL SINGLE)</p>
                        </div>
                    </div>
                </div>

                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed" src="./assets/music/vinyl.png" alt="">
                            <a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
                        </div>
                        <div class="card-content grey darken-4">
                            <span class="card-title right">£11.99</span>
                            <p>AWAKE IN ETERNAL SLEEP (VINYL SINGLE)</p>
                        </div>
                    </div>
                </div>

                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed" src="./assets/music/demo.png" alt="">
                            <a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
                        </div>
                        <div class="card-content grey darken-4">
                            <span class="card-title right">£11.99</span>
                            <p>SAARKOTH 2017 DEMO CD</p>
                        </div>
                    </div>
                </div>
        </section>

    </main>

    <?php include('includes/footer.php'); ?>
