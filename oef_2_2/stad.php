<?php

require_once "connection.php";
require_once "lib/html_components.php";

//include_once "connection.php";
//include_once "lib/html_components.php";

PrintHead();

?>

            <div class="jumbotron text-center">
                <h1>Detail Plaats</h1>
            </div>

            <?php

            $rows = GetData("SELECT * FROM images WHERE img_id=" . $_GET['img_id']);
            $template = file_get_contents("templates/column_detail.html");

                foreach ($rows as $row) {
                    $output = $template;
                    foreach (array_keys($row)as $field) {
                        $output = str_replace("@$field@", $row["$field"], $output);
                    }
                    print $output;
                }

            ?>

            </div>
        </div>
    </body>
</html>
