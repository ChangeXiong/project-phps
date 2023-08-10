<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$dents_id = $_POST['dents_id'];
$sourcePath = $_FILES['pic_img']['tmp_name'];
$image = $_FILES['pic_img']['name'];
$targetPath = "pic_image/".$_FILES['pic_img']['name'];
if(move_uploaded_file($sourcePath,$targetPath))
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$vill = $_POST['vill'];
$dis = $_POST['dis'];
$pro = $_POST['pro'];
$tribes = $_POST['tribes'];
$nation = $_POST['nation'];
$lgroups = $_POST['lgroups'];
$tel = $_POST['tel'];
$g_id = $_POST['g_id'];
$remark = $_POST['remark'];
if($image == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອກຮູບພາບນັກຮຽນ 4x3..!
    </div>
    ";
}elseif($dents_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນລະຫັດນັກຮຽນໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}elseif($fname == ""){
        echo "
        <div class='alert alert-danger' role='alert'>
            ປ້ອນຊືໃຫ້ຄົບຖ້ວນ..!
        </div>
        ";
}elseif($lname == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນນາມສະກຸນໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}elseif($gender == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອກເພດ..!
    </div>
    ";
}elseif($dob == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນວັນເດືອນປິເກິດໃຫ້ຖືກ..!
    </div>
    ";
}elseif($vill == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນບ້ານໃຫ້ຖືກ..!
    </div>
    ";
}elseif($dis == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນເມືອງໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}elseif($pro == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນແຂວງໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}elseif($tribes == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນຊົນຊັນໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}elseif($nation == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນເຊື່ອຊາດໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}elseif($lgroups == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນຊົນເຜົ່າໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}else{
    $msqli = mysqli_query($connect,"INSERT INTO student_biography SET
    dents_id = '$dents_id',
    pic_img = '$image',
    fname = '$fname',
    lname = '$lname',
    gender = '$gender',
    dob = '$dob',
    vill = '$vill',
    dis = '$dis',
    pro = '$pro',
    tribes = '$tribes',
    nation = '$nation',
    lgroups = '$lgroups',
    tel = '$tel',
    g_id = '$g_id',
    remark = '$remark'
    ");
    if($msqli == true){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ
        
        </div>
        <script>
        window.setTimeout(function(){
            location.reload();
        },1500);
        </script>
        ";
    }else{
        echo"
        <div class='alert alert-danger' role='alert'>
        ບໍສຳເລັດ
        
        </div>
        <script>
        window.setTimeout(function(){
            location.reload();
        },1500);
        </script>
        ";
    }
}
?>