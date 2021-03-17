<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Leuke plekken in Europa" ,
                        $subtitle = "Tips voor citytrips voor vrolijke vakantiegangers!" );

PrintNavbar();

// een bevestiging na het registreren
if(isset($_SESSION["msgs"]))
{
    echo"<div class='alert alert-success' role='alert'>
            <strong>Bedankt!</strong> U bent geregistreerd.
         </div>";
    unset($_SESSION["msgs"]);
}

?>

<div class="container">
    <div class="row">

<?php
    //get data
    $data = GetData( "select * from images" );

    //get template
    $template = file_get_contents("templates/column.html");

    //merge
    $output = MergeViewWithData( $template, $data );
    print $output;
?>

    </div>
</div>

</body>
</html>