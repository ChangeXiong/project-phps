<?php
// session_start();
include("../connect_db.php");
$dis_name = $_POST['dis_name'];
$pro_id = $_POST['pro_id'];
$remark = $_POST['remark'];
// $user_id = $_SESSION['user_id'];
if($dis_name == ""){
    echo"<script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'ປ້ອນຊື່້ເມືອງກ່ອນ..',
        showConfirmButton: false,
        timer: 2500
    })
    </script>";
}else{
$sql = mysqli_query($connect,"insert into district set
dis_name = '$dis_name',
pro_id = '$pro_id',
remark = '$remark'

");
if($sql){
    echo"<div class='alert alert-success' role='alert'><i class='fas fa-check fa-2 animated rotateIn'></i>  ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ..";
    echo"<script>
    window.setTimeout(function(){
        location='select_district.php';
    },1500);
    </script>";
    echo"</div>";
}else{
    echo"<script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'ລົ້ມເເຫຼວ..',
        showConfirmButton: false,
        timer: 2500
    })
    </script>";
}
}
?>