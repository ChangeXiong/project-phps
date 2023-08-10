<?php
include_once "../connect_db.php";
include_once "../connect_link.php";
$bl_room = $_POST['bl_room'];
$remark = $_POST['remark'];
if($bl_room == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນຊັ້ນຮຽນກ່ອນ..!
    </div>
    ";
}else{
    $msqk = mysqli_query($connect,"INSERT INTO b_class SET
    b_name = '$bl_room',
    remark = '$remark' ");
if($msqk){
    echo"
    <div class='alert alert-success' role='alert'>
    ບັນທຶກຂໍ້ມູນສຳເລັດ
    
    </div>
    <script>
    window.setTimeout(function(){
        location='select_b.php';
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