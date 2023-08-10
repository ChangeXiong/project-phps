<?php
include_once "../connect_db.php";
$laguage = $_POST['laguage'];
$literature = $_POST['literature'];
$mathermatics = $_POST['mathermatics'];
$it = $_POST['it'];
$PH = $_POST['PH'];
$society = $_POST['society'];
$population = $_POST['population'];
$art = $_POST['art'];
$mission = $_POST['mission'];
$english = $_POST['english'];
$CH = $_POST['CH'];
$BI = $_POST['BI'];

$total = $laguage + $literature + $mathermatics + $it + $PH + $society + $population + $art + $mission + $english + $CH + $BI;
echo $total/12;
?>