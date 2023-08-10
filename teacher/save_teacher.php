<?php
include_once "../connect_db.php";
include_once "../connect_link.php";
$tea_id = $_POST['tea_id'];
$t_id = $_POST['t_id'];
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$anchor1 = $_POST['anchor1'];
$anchor2 = $_POST['anchor2'];
$tel = $_POST['tel'];
$remark = $_POST['remark'];
if($t_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ເລືອກຊືແລະນາມສະກຸນ..!
    </div>
    ";
}else{
    $insert = mysqli_query($connect,"UPDATE teacher SET
    t_id ='$t_id',
    subject1 = '$subject1',
    subject2 = '$subject2',
    anchor1 = '$anchor1',
    anchor2 = '$anchor2',
    tel = '$tel',
    remark ='$remark' WHERE tea_id='$tea_id' ");
    if($insert == true){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='select_teacher.php';
        },1500);
        </script>
        ";
    }else{
        echo"
        <div class='alert alert-danger' role='alert'>
        ບໍ່ສຳເລັດ..!
    </div>
    <script>
        window.setTimeout(function(){
            location='select_teacher.php';
        },1500);
        </script>
        ";
    }
}
?>