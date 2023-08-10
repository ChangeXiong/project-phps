<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$check_id = $_POST['check_id'];
$inroom_id = $_POST['inroom_id'];
$subject = $_POST['subject'];
$hour = $_POST['hour'];
$remark = $_POST['remark'];
if($inroom_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອນຊັນຮຽນ,ຫ້ອງຮຽນແ ແລະ ນັກຮຽນໃຫ້ຄົບກ່ອນ..!
    </div>
    ";
}elseif($subject == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອນວິຊາຂາດ..!
    </div>
    ";
}else{
    $mysql = mysqli_query($connect,"update check_name set
    inroom_id = '$inroom_id',
    subject = '$subject',
    hour = '$hour',
    rdate = curdate(),
    rtime = curtime(),
    remark = '$remark' where check_id='$check_id' ");
    if($mysql == TRUE){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='select_check.php';
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