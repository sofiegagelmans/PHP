<?php

include_once "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Leuke plekken in Antwerpen</h1>
            <p>Tips voor citytrips voor vrolijke vakantiegangers</p>
        </div>

        <div class="container">
            <div class="row">

                <?php

                $rows = GetData("SELECT * FROM images");

                //loop over de afbeeldingen
                foreach ($rows as $row) {
                    echo "<div class='col-sm-4'>";
                    echo "<h3>". $row[img_title] ."</h3>";
                    echo "<p>". $row[img_width] ." x ". $row[img_height] ." pixels</p>";
                    echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>";
                    echo "<p>Porro inventore voluptas nihil soluta consequuntur quis voluptatum, at quis.</p>";
                    echo "<img class=img-fluid src=img/". $row[img_filename] .">";
                    //echo '<img src="./img/' . $row[img_filename] . '" width="350">';
                    echo "</div>";
                }

                ?>

            </div>
        </div>
    </body>
</html>