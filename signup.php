<?php include_once 'includes/header.php'; ?>
<section>
    <div>
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Sign up</button>            
        </form>
    </div>
</section>