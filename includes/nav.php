<?php
include('includes/nav-items.php');

//echo each navigation item as <li> with a <a> tag
foreach ($navItems as $item) {
    echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
}
?>
