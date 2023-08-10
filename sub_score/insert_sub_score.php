<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$sub_id = $_POST['sub_id'];
$inroom_id = $_POST['inroom_id'];
$month = $_POST['month'];
$sore = $_POST['sore'];
$remark = $_POST['remark'];
if($sub_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອນຊັນຮຽນ..!
    </div>
    ";
}else{
    $insert = mysqli_query($connect,"INSERT INTO sub_scores SET
    sub_id ='$sub_id',
    inroom_id = '$inroom_id',
    month ='$month',
    sore_9 ='$sore',
    remark ='$remark' ");
    if($insert == true){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດ
        
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
        ບໍ່ສຳເລັດ..!
    </div>
        ";
    }
}
?>