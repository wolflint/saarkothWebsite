//ALT FOR MERCH.PHP


<div class="col s4 m3" >
	<form method="post" action="merch.php?action=add&id=<?php echo $product['product_id']; ?>">
		<div class="products">
			<img src="assets/merch/<?php echo $product['product_id']; ?>.png" class="img-responsive" />
			<h4 class="text-info"><?php echo $product['product_name']; ?></h4>
			<h4>$ <?php echo $product['product_price']; ?></h4>
			<input type="text" name="quantity" class="form-control" value="1" />
			<input type="hidden" name="name" value="<?php echo $product['product_name']; ?>" />
			<input type="hidden" name="price" value="<?php echo $product['product_price']; ?>" />
			<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
				   value="Add to Cart" />
		</div>
	</form>
</div>

<div class="col m4">
   <form method="post" action="merch.php?action=add&id=<?php echo $product['product_id']; ?>">
	   <div class="card">
		   <div class="card-image">
			   <img class="materialboxed" src="./assets/merch/<?php echo $product['product_id']; ?>.png" alt="">
		   </div>
		   <div class="card-content grey darken-4">
			   <!-- <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
					  value="Add to Cart"/> -->

			   <span class="card-title"><?php echo $product['product_name']; ?></span>
			   <span class="card-title">£<?php echo $product['product_price']; ?></span>
			   <p><?php echo $product['product_name']; ?></p>
		   </div>
		   <div class="card-action grey darken-4">
			   <p class="range-field"><input name="quantity" type="range" id="test5" min="0" max="10" value="1" /></p>
			   <input type="hidden" name="name" value="<?php echo $product['product_name']; ?>" />
			   <input type="hidden" name="price" value="<?php echo $product['product_price']; ?>" />
			   <p ><button type="submit" name="add_to_cart" class="btn"><i class="material-icons">add_shopping_cart</i></button></p>

		   </div>
	   </div>
   </form>
</div>


<?php
	$pageTitle = "Saarkoth - Music";
	include_once 'includes/header.php';
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
