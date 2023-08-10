<?php
include_once "../connect_db.php";
$laguage = $_POST['laguage'];
$literature = $_POST['literature'];
$mathermatics = $_POST['mathermatics'];
$it = $_POST['it'];
$fnaural = $_POST['fnaural'];
$society = $_POST['society'];
$population = $_POST['population'];
$art = $_POST['art'];
$mission = $_POST['mission'];
$english = $_POST['english'];

$total = $laguage + $literature + $mathermatics + $it + $fnaural + $society + $population + $art + $mission + $english;
echo $total/10;
?>