<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$inroom_id = $_POST['inroom_id'];
$chk_moth = $_POST['chk_moth'];
$subject = $_POST['subject'];
$hour = $_POST['hour'];
$remark = $_POST['remark'];
if($inroom_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອນຊັນຮຽນ,ຫ້ອງຮຽນແ ແລະ ນັກຮຽນໃຫ້ຄົບກ່ອນ..!
    </div>
    ";
}elseif($chk_moth == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອນເດືອນ..!
    </div>
    ";
}else{
    $mysql = mysqli_query($connect,"insert into check_name set
    inroom_id = '$inroom_id',
    chk_moth = '$chk_moth',
    subject = '$subject',
    hour = '$hour',
    rdate = curdate(),
    rtime = curtime(),
    remark = '$remark' ");
    if($mysql == TRUE){
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
        ບັນທຶກບໍສຳເລັດ..!
    </div>
        ";
    }
}
?>