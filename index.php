<?php

/**
 * @author Lilfaen
 */
include('src/parsedown.php');
require "src/views/header.php";

$dir = "data/de_DE";
$files = array_diff(scandir($dir), array('.', '..'));

?>

    <div class="plant-list-container">

        <?php
        foreach($files as $file):
            $contents = file_get_contents($dir . "/" . $file);
            $parsedown = new Parsedown();
            echo $parsedown->text($contents);
        endforeach;
        ?>

    </div>

<?php
require "src/views/footer.php";
