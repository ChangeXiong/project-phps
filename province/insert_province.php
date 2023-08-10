<?php
// session_start();
include("../connect_db.php");
$province = $_POST['pro_name'];
$remark = $_POST['remark'];
// $user_id = $_SESSION['user_id'];

$insert = mysqli_query($connect,"insert into province set
pro_name = '$province',
remark = '$remark'

");
if($insert){
    echo"<div class='alert alert-success' role='alert'><i class='fas fa-check fa-2 animated rotateIn'></i>  ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ..";
    echo"<script>
    window.setTimeout(function(){
        location='select_province.php';
    },1500);
    </script>";
    echo"</div>";
}else{
    echo"
    <script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'ບໍ່ສຳເລັດ..!',
        showConfirmButton: false,
        timer: 1500,
    })
    window.setTimeout(function(){
        location.reload();
    },1500);
    </script>
    ";
}
?>