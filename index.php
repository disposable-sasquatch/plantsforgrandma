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
        $path_parts = pathinfo($dir . '/' . $file);
        ?>

            <div class="plant-list-item">
                <?php
                $parsedown = new Parsedown();
                echo $parsedown->text($contents);
                ?>
                <!--
                <div class="plant-list-img">
                    <img src="<?php echo 'data/img/' . $path_parts['filename'] . 'jpg' ?>" >
                </div>
                -->
            </div>
        <?php
        endforeach;
        ?>

    </div>

<?php
require "src/views/footer.php";