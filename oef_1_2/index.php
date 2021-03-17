<?php

$images = array("mas.jpg", "brabofontein.jpg", "havenhuis.jpg");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Oefening PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>My First Bootstrap Page</h1>
            <p>Resize this responsive page to see the effect</p>
        </div>

        <div class="container">
            <div class="row">

                <?php

                foreach ($images as $key => $value) {

                    echo '<div class="col-sm-4">';
                    echo "<h3>Column " . ($key + 1) . "</h3>";
                    echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>";
                    echo "<p>Porro inventore voluptas nihil soluta consequuntur quis voluptatum, at quis.</p>";
                    echo '<img src="./img/' . $value . '" width="350">';
                    echo "</div>";
                }

                ?>

            </div>
        </div>
    </body>
</html>
