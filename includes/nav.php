<?php 
include('includes/nav-items.php');

foreach ($navItems as $item) {
    echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
}
?>
