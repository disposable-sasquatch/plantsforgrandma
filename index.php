<?php

/**
 * @author Lilfaen
 */

require "views/header.php";

$dir = "data";
$files = array_diff(scandir($dir), array('.', '..'));

?>

    <div class="plant-list-container">

        <?php
        foreach($files as $file):
            $filecontent = file_get_contents($dir . "/" . $file);
            $filecontent = explode("\n", $filecontent);
            ?>

            <div class="plant-list-item">
                <h2><?php echo $filecontent[0] ?></h2>
                <p><?php echo $filecontent[1] ?></p>
            </div>

        <?php
        endforeach;
        ?>

    </div>

<?php
require "views/footer.php";