<?php
require_once 'php/navbar.php'
?>
<div class="balk">
    <ul>
        <?php
        foreach ($menuItems as $menuItem ) {
            echo '<li><a href="index.php?page='.$menuItem[0].'">'.$menuItem[1].'</a></li>';
        }
        ?>
    </ul>
</div>