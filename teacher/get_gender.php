<?php
include_once "../connect_db.php";
$t_id = $_POST['t_id'];
$mysql = mysqli_query($connect,"select gender from tea_history where t_id='$t_id' ");
$show = mysqli_fetch_array($mysql);
if($show){
    echo $show[0];
}else{
    echo "ຄົ້ນຫາບໍພົບ..";
}
?>