<?php
include("../connect_db.php");
$pro_id = $_GET['pro_id'];
$sql = mysqli_query($connect,"delete from province where pro_id='$pro_id' ");
if($sql){
    echo"
    <script>
    location='select_province.php';
    </script>
    ";
}else{
    echo"ບໍ່ສຳເລັດ";
}
   
?>