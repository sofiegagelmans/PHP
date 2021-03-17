<?php

include_once "connection.php";
include_once "lib/html_components.php";

PrintHead();
PrintJumbo();

?>

        <div class="container">
            <div class="row">

                <?php

                $rows = GetData("SELECT * FROM images");
                $template = file_get_contents("templates/column_steden.html");
                $html = MergeViewWithData($template, $rows);

                print $html;

                ?>

            </div>
        </div>
    </body>
</html>