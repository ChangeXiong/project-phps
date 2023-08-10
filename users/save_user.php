<?php
include("../connect_db.php");
$user_id = $_POST['user_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$pro_id = $_POST['pro_id'];
$dis_id = $_POST['dis_id'];
$vill = $_POST['vill'];
$tel = $_POST['tel'];
$remark = $_POST['remark'];

$sql = mysqli_query($connect,"update users set
fname = '$fname',
lname = '$lname',
gender = '$gender',
dob = '$dob',
pro_id = '$pro_id',
dis_id = '$dis_id',
vill = '$vill',
tel = '$tel',
remark = '$remark' where user_id='$user_id'
");
if($sql){
    echo"<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'ແກ້ໄຂຂໍ້ມູນສຳເລັດ..',
        showConfirmButton: false,
        timer: 1500,
    })
    window.setTimeout(function(){
        location='select_user.php';
    },1500);
    </script>";
}else{
    echo"
    <script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'ບໍ່ສຳເລັດ...',
        showConfirmButton: false,
        timer: 1500
    })
    </script>";

}
?>