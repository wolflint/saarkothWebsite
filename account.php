<?php $pageTitle = "Saarkoth - Account"; include_once 'includes/header.php'; ?>

<main class="container">
  <div class="row">
    <form action="includes/acount.inc.php" method="POST">
      <button type="submit" name="submit" class="btn waves-effect waves-light right">Save<i class="material-icons right">send</i></button>
    </form>
  </div>

<div class="row">
  <form action="includes/logout.inc.php" method="POST">
    <button type="submit" name="submit" class="btn waves-effect waves-light right">Logout<i class="material-icons right">send</i></button>
  </form>
</div>
</main>

<?php include_once 'includes/footer.php'; ?>
