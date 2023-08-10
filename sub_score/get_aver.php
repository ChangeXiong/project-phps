<?php
include_once "../connect_db.php";
$sore_9 = $_POST['sore_9'];
$sore_10 = $_POST['sore_10'];
$sore_11 = $_POST['sore_11'];
$sore_12 = $_POST['sore_12'];
$score = $sore_9 + $sore_10 + $sore_11 + $sore_12;
if($score){
    echo $score/4;
}else{
    echo "ຍັງທັນຄິດໄລ່: ປ້ອນຄະແນນເດືອນ12ກ່ອນ";
}

?>