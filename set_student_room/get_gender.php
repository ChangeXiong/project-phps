<?php
include("../connect_db.php");
$number = $_POST['number'];
$sql = mysqli_query($connect,"select gender from student_biography where dents_id='$number'");
$show_get = mysqli_fetch_array($sql);
if($show_get){
    echo $show_get[0];
}else{
    echo"ລະຫັດນີ້ບໍມີເພດ..!";
}
?>