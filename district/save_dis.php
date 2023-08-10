<?php
include("../connect_db.php");
$dis_id = $_POST['dis_id'];
$dis_name = $_POST['dis_name'];
$pro_id = $_POST['pro_id'];
$remark = $_POST['remark'];
$sql = mysqli_query($connect,"update district set
dis_name = '$dis_name',
pro_id = '$pro_id',
remark = '$remark' where dis_id='$dis_id'
");
if($sql){
    echo"<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'ແກ້ໄຂຂໍ້ມູນສຳເລັດ..',
        showConfirmButton: false,
        timer: 2500,
    })
    window.setTimeout(function(){
        location='select_district.php';
    },1500);
    </script>";
}else{
    echo"
    <script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: ລົ້ມເຫຼວ..',
        showConfirmButton: false,
        timer: 2500,
    })
    window.setTimeout(function(){
        location='select_district.php';
    },1500);
    </script>";
}
?>