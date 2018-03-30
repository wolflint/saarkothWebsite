<?php
$pageTitle = "Saarkoth - Add Event"; include_once 'includes/header.php';

if ($_SESSION['u_admin'] < 1) {
    header("Location: news.php?error=nopermission");
}
?>


<!-- SECTIONS -->
<main class="container">
    <div class="row">
        <form class="col s10 offset-s1" action="includes/addEvent.inc.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <h1>Add new event</h1>
                <!-- id 	date 	venue 	address 	price 	href -->

                <div class="input-field">
                    <input type="text" name="date" id="date">
                    <label for="date">Event date (format: yyyy-mm-dd)</label>
                </div>

                <div class="input-field">
                    <input type="text" name="venue" id="venue">
                    <label for="venue">Venue</label>
                </div>

                <div class="input-field">
                    <input type="text" name="address" id="address">
                    <label for="address">Address</label>
                </div>

                <div class="input-field">
                    <input type="text" name="price" id="price">
                    <label for="price">Price (number)</label>
                </div>

                <div class="input-field">
                    <input type="text" name="href" id="href">
                    <label for="href">Link to ticket retailer</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                    <i class="material-icons right">send</i>
                </button>

            </div>
        </form>

    </div>
</main>


<?php include('includes/footer.php'); ?>
