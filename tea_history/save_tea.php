<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$t_id = $_POST['t_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$blod = $_POST['blod'];
$vill = $_POST['vill'];
$dis_id = $_POST['dis_id'];
$pro_id = $_POST['pro_id'];
$nation = $_POST['nation'];
$satus = $_POST['satus'];
$date_D = $_POST['date_D'];
$date_R = $_POST['date_R'];
$date_K = $_POST['date_K'];
$date_B = $_POST['date_B'];
$e_level = $_POST['e_level'];
$degree = $_POST['degree'];
$suject = $_POST['suject'];
$tel = $_POST['tel'];
$remark = $_POST['remark'];
if($fname == ""){
    echo "
    <script>
    Swal.fire({
                position: 'top',
                icon: 'info',
                title: 'ກາລຸນາປ້ອນຊື່ກ່ອນ..',
                showConfirmButton: false,
                timer: 1500
            })
    </script>
    ";
}elseif($lname == ""){
    echo "
    <script>
    Swal.fire({
                position: 'top',
                icon: 'info',
                title: 'ກາລຸນາປ້ອນນາມສະກຸນກ່ອນ..',
                showConfirmButton: false,
                timer: 1500
            })
    </script>
    ";
}elseif($gender == ""){
    echo "
    <script>
    Swal.fire({
                position: 'top',
                icon: 'info',
                title: 'ກາລຸນາເລືອກເພດ..',
                showConfirmButton: false,
                timer: 1500
            })
    </script>
    ";
}else{
    $mysql = mysqli_query($connect,"update tea_history set
    fname = '$fname',
    lname = '$lname',
    gender = '$gender',
    date = '$date',
    blod = '$blod',
    vill = '$vill',
    dis_id = '$dis_id',
    pro_id = '$pro_id',
    nation = '$nation',
    satus = '$satus',
    date_D = '$date_D',
    date_R = '$date_R',
    date_K = '$date_K',
    date_B = '$date_B',
    e_level = '$e_level',
    degree = '$degree',
    suject = '$suject',
    tel = '$tel',
    remark = '$remark' where t_id='$t_id' ");
    if($mysql == true){
        echo"<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'ບັນທຶກຂໍ້ມູນສຳເລັດ..',
        showConfirmButton: false,
        timer: 1500,
    })
    window.setTimeout(function(){
        location='select_tea.php';
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
?>