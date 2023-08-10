<?php
include("../connect_db.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$pro_id = $_POST['pro_id'];
$dis_id = $_POST['dis_id'];
$vill = $_POST['vill'];
$tel = $_POST['tel'];
$status = $_POST['status'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpass = $_POST['cpass'];
$remark = $_POST['remark'];
if($password <> $cpass){ // ກວດສອບການຢືນຢັນລະຫັດຜ່ານ
    echo"
    <script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'ລະຫັນຜ່ານບໍຖຶກຕ້ອງ..',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
    ";
}else{
    // ກວດສອບຊື່ຜູ້ນຳໃຊ້ ຖ້າມີຢູ່ແລ້ວ ແມ່ນບໍໃຫ້ບັນທຶກອິກ
$chenk_name = mysqli_query($connect,"select username from users where username='$username' ");
$chenk = mysqli_num_rows($chenk_name);
if($chenk <> 0){
    echo"
    <script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'ຊື່ຜູ້ນຳໃຊ້ນີ້ມີຢູ່ແລ້ວ..',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
    ";
}else{
$sql = mysqli_query($connect,"insert into users set
fname = '$fname',
lname = '$lname',
gender = '$gender',
dob = '$dob',
pro_id = '$pro_id',
dis_id = '$dis_id',
vill = '$vill',
tel = '$tel',
status = '$status',
username = '$username',
password = password('$password'),
date = curdate(),
remark = '$remark'
");
if($sql){
    echo"<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'ບັນທຶກຂໍ້ມູນສຳເລັດ..',
        showConfirmButton: false,
        timer: 1500,
    })
    window.setTimeout(function(){
        location.reload();
    },1500);
    </script>";
}else{
    echo"
    <script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'ບໍ່ສຳເລັດ..',
        showConfirmButton: false,
        timer: 1500
    })
    </script>";
}
}
}
