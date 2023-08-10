<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$dents_id = $_POST['dents_id'];
$b_id = $_POST['b_id'];
$r_id = $_POST['r_id'];
$y_study = $_POST['y_study'];
$remark = $_POST['remark'];
if($dents_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນລະຫັດນັກຮຽນກ່ອນ..!
    </div>
    ";
}elseif($b_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ກາລຸນາເລືອກຊັ້ນຮຽນກ່ອນ..!
    </div>
    ";
}elseif($y_study == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນສົກຮຽນກ່ອນ..!
    </div>
    ";
}else{
    $solo = mysqli_query($connect,"INSERT INTO set_st_room SET
    dents_id = '$dents_id',
    b_id = '$b_id',
    r_id = '$r_id',
    y_study = '$y_study',
    remark = '$remark' ");
    if($solo == true){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='form_room.php';
        },1500);
        </script>
        ";
    }else{
        echo"
        <div class='alert alert-danger' role='alert'>
        ບັນທຶກຂໍ້ມູນບໍສຳເລັດ
        
        </div>
        ";
    }
}
?>