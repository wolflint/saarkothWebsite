<?php include_once 'includes/header.php'; ?>
<div class="right hide-on-med-and-down">
                <?php
                    if (isset($_SESSION['u_id'])){
                        echo "You are logged in!";
                        echo '<form action="includes/logout.inc.php" method="POST">
                                <button type="submit" name="submit">Logout</button>
                            </form>';
                    } else {
                       echo '<form action="includes/login.inc.php" method="POST">
                            <input type="text" name="uid" placeholder="Username/e-mail">
                            <input type="password" name="pwd" placeholder="password">
                            <button type="submit" name="submit">Login</button>
                            </form>
                            <a href="signup.php">Sign up</a>';
                    }
                ?>

            </div>