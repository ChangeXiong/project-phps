<?php
include("../connect_db.php");
$pro_id = $_POST['pro_id'];
$pro_name = $_POST['pro_name'];
$remark = $_POST['remark'];
$sql = mysqli_query($connect,"update province set
pro_name = '$pro_name',
remark = '$remark' where pro_id='$pro_id'
");
if($sql){
    echo" <script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'ແກ້ໄຂຂໍ້ມູນສຳເລັດແລ້ວ..!',
        showConfirmButton: false,
        timer: 1500,
    })
    window.setTimeout(function(){
        location='select_province.php';
    },1500);
    </script>";
}else{
    echo" <script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'ບໍ່ສຳເລັດ..!',
        showConfirmButton: false,
        timer: 1500,
    })
    window.setTimeout(function(){
        location='select_province.php';
    },1500);
    </script>";
}
?>