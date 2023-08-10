<?php
include_once "../connect_db.php";
include_once "../connect_link.php";
$b_id = $_POST['b_id'];
$bl_room = $_POST['bl_room'];
$remark = $_POST['remark'];
if($bl_room == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນຊັ້ນຮຽນກ່ອນ..!
    </div>
    ";
}else{
    $msqk = mysqli_query($connect,"UPDATE b_class SET
    b_name = '$bl_room',
    remark = '$remark' WHERE b_id='$b_id' ");
if($msqk){
    echo"
    <div class='alert alert-success' role='alert'>
  ແກ້ໄຂຂໍ້ມູນສຳເລັດແລ້ວ
    
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
       ແກ້ໄຂບໍສຳເລັດ..!
    </div>
    window.setTimeout(function(){
        location='select_b.php';
    },1500);
    </script>
        ";
}
}
?>