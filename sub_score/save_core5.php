<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$s_id = $_POST['s_id'];
$sub_id = $_POST['sub_id'];
$inroom_id = $_POST['inroom_id'];
$month = $_POST['month'];
$sore = $_POST['sore'];
$aver_2 = $_POST['aver_2'];
$remark = $_POST['remark'];
if($sub_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອນຊັນຮຽນ..!
    </div>
    ";
}else{
    $insert = mysqli_query($connect,"UPDATE sub_scores SET
    sub_id ='$sub_id',
    inroom_id = '$inroom_id',
    month ='$month',
    sore_5 ='$sore',
    aver_2 = '$aver_2',
    remark ='$remark' WHERE s_id='$s_id' ");
    if($insert == true){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='select_core_room1.php';
        },1500);
        </script>
        ";
    }else{
        echo"
        <div class='alert alert-danger' role='alert'>
        ບັນທຶກບໍສຳເລັດ..!
    </div>
    <script>
        window.setTimeout(function(){
            location='select_core_room1.php';
        },1500);
        </script>
        ";
    }
}
?>