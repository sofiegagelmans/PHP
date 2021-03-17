<?php

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "pdo.php";


if ($_SERVER['REQUEST_METHOD'] == "POST" AND $_POST["submitButton"] == "OK") {
//    var_dump($_POST);
//    print json_encode($_POST);

global $conn;

$sql = "UPDATE images SET ";
$sql .= "img_title = '". $_POST['img_title'] ."', ";
$sql .= "img_filename = '". $_POST['img_filename'] ."', ";
$sql .= "img_width = '". $_POST['img_width'] ."', ";
$sql .= "img_height = '". $_POST['img_height'] ."' ";
$sql .= "WHERE img_id = '". $_POST['img_id'] ."'; ";

//$result = $conn->query($sql);
$result = ExecuteSQL($sql);

header('location: ../steden2.php');

}

?>
