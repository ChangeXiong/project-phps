<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$r_id = $_GET['r_id'];
$sql = mysqli_query($connect,"DELETE FROM r_class WHERE r_id='$r_id'");
if($sql){
    echo"
        <div class='alert alert-success' role='alert'>
        ລົບຂໍ້ມູນສຳເລັດແລ້ວ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='select_r.php';
        },1500);
        </script>
        ";
}else{
    echo"
    <div class='alert alert-danger' role='alert'>
    ບໍ່ສຳເລັດ..!
    </div>
    <script>
        window.setTimeout(function(){
            location='select_r.php';
        },1500);
        </script>
    ";
}
?>