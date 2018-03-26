<?php
$pageTitle = "Saarkoth - Merch"; include_once 'includes/header.php'; include_once 'includes/dbh.inc.php';

//Cart code
$product_ids = array();
//session_destroy();

//check if Add to Cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){
	if(isset($_SESSION['shopping_cart'])){

		//keep track of how many products are in the shopping cart
		$count = count($_SESSION['shopping_cart']);

		//create sequantial array for matching array keys to products id's
		$product_ids = array_column($_SESSION['shopping_cart'], 'id');

		if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
		$_SESSION['shopping_cart'][$count] = array
			(
				'id' => filter_input(INPUT_GET, 'id'),
				'name' => filter_input(INPUT_POST, 'name'),
				'price' => filter_input(INPUT_POST, 'price'),
				'quantity' => filter_input(INPUT_POST, 'quantity')
			);
		}
		else { //product already exists, increase quantity
			//match array key to id of the product being added to the cart
			for ($i = 0; $i < count($product_ids); $i++){
				if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
					//add item quantity to the existing product in the array
					$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
				}
			}
		}

	}
	else { //if shopping cart doesn't exist, create first product with array key 0
		//create array using submitted form data, start from key 0 and fill it with values
		$_SESSION['shopping_cart'][0] = array
		(
			'id' => $_GET['id'],
			'name' => $_POST['name'],
			'price' => $_POST['price'],
			'quantity' => $_POST['quantity']
			// 'id' => filter_input(INPUT_GET, 'id'),
			// 'name' => filter_input(INPUT_POST, 'name'),
			// 'price' => filter_input(INPUT_POST, 'price'),
			// 'quantity' => filter_input(INPUT_POST, 'quantity')
		);
	}
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
	//loop through all products in the shopping cart until it matches with GET id variable
	foreach($_SESSION['shopping_cart'] as $key => $product){
		if ($product['id'] == filter_input(INPUT_GET, 'id')){
			//remove product from the shopping cart when it matches with the GET id
			unset($_SESSION['shopping_cart'][$key]);
		}
	}
	//reset session array keys so they match with $product_ids numeric array
	$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}
?>



	<!-- SECTIONS -->
	<main class="container">

		<section id="apparel">
			<div class="row">

				<!-- <div class="col s12">
					<h1>APPAREL</h1>
				</div> -->
				<?php
					$sql = "SELECT * FROM products ORDER BY product_id ASC";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						while ($product = mysqli_fetch_assoc($result)) {
				 ?>
				 <div class="col s4 m3" >
				 	<form method="post" action="merch.php?action=add&id=<?php echo $product['product_id']; ?>">
				 		<div class="center-align">
				 			<img src="assets/merch/<?php echo $product['product_id']; ?>.png" class="responsive-img" />
				 			<h4 class="text-info"><?php echo $product['product_name']; ?></h4>
				 			<h4>£ <?php echo number_format($product['product_price'], 2); ?></h4>
							<p class="range-field"><input name="quantity" type="range" id="test5" min="0" max="10" value="1" /></p>
				 			<input type="hidden" name="name" value="<?php echo $product['product_name']; ?>" />
				 			<input type="hidden" name="price" value="<?php echo $product['product_price']; ?>" />
				 			<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
				 				   value="Add to Cart" />
				 		</div>
				 	</form>
				 </div>
			<?php
						}
					} else {
						header("Locarion: merch.php?error=noresults");
					}
			?>

			<div class="row">
				<div class="col s12 ">
					<table class="">
						<thead>
							<tr><th colspan="5"><h3>Order Details</h3></th></tr>
							<tr>
								<th width="40%">Product Name</th>
								<th width="10%">Quantity</th>
								<th width="20%">Price</th>
								<th width="15%">Total</th>
								<th width="5%">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php
								if (!empty($_SESSION['shopping_cart'])){
									$total = 0;

									foreach ($_SESSION['shopping_cart'] as $key => $product){
									 ?>
									 <tr>
										 <td><?php echo $product['name']; ?></td>
										 <td><?php echo $product['quantity']; ?></td>
										 <td>£ <?php echo number_format($product['price'], 2); ?></td>
										 <td>£ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
										 <td>
											 <a class="btn red darken-4" href="merch.php?action=delete&id=<?php echo $product['id']; ?>">
												 Remove
											 </a>
										 </td>
									 </tr>
									 <?php
								 	$total = $total + ($product['quantity'] * $product['price']);
								}
								  	?>
								  <tr>
								  	<td class="right-align">Total</td>
									<td class="right-align">£ <?php echo number_format($total, 2); ?></td>
									<td></td>
								  </tr>
								  <tr>
								  	<td colspan="5">
									<?php
										if (isset($_SESSION['shopping_cart'])){
											if(count($_SESSION['shopping_cart']) > 0){
											 ?>
											 <a href="checkout.php" class="btn blue">Checkout</a>
								 <?php } } ?>
								</td>
							  </tr>
							  <?php
						  } else {
						  	echo "ERROR EMPTY";
						  }
							   ?>

						</tbody>

					</table>
				</div>
			</div>
				<!-- <div class="col m4">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="./assets/merch/t2.png" alt="">
							<a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
						</div>
						<div class="card-content grey darken-4">
							<span class="card-title right">£9.99</span>
							<p>T-SHIRT RED</p>
						</div>
					</div>
				</div>
				<div class="col m4">

					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="./assets/merch/t3.png" alt="">
							<a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
						</div>
						<div class="card-content grey darken-4">
							<span class="card-title right">£9.99</span>
							<p>T-SHIRT BLUE</p>
						</div>
					</div>
				</div>
		</section>

		<section id="posters">
			<div class="row">

				<div class="col s12">
					<h1>POSTERS</h1>
				</div>

				<div class="col m4">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="./assets/merch/p1.png" alt="">
							<a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
						</div>
						<div class="card-content grey darken-4">
							<span class="card-title right">£3.99</span>
							<p>WOODS - ELLIS (24" x 18")</p>
						</div>
					</div>
				</div>

				<div class="col m4">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="./assets/merch/p2.png" alt="">
							<a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
						</div>
						<div class="card-content grey darken-4">
							<span class="card-title right">£3.99</span>
							<p>WOODS - ASA (24" x 18")</p>
						</div>
					</div>
				</div>
				<div class="col m4">

					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="./assets/merch/p3.png" alt="">
							<a class="btn-floating halfway-fab waves-effect waves-light  cyan darken-3">
								<i class="material-icons">add_shopping_cart</i>
							</a>
						</div>
						<div class="card-content grey darken-4">
							<span class="card-title right">£3.99</span>
							<p>WOODS - LEWIS (24" x 18")</p>
						</div>
					</div>
				</div> -->
		</section>

	</main>

<?php include('includes/footer.php'); ?>
