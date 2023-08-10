<?php
include_once "../connect_db.php";
$inroom_id = $_GET['inroom_id'];
$sql = mysqli_query($connect,"DELETE FROM set_st_room WHERE inroom_id='$inroom_id'");
if($sql){
    echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='select_all_room.php';
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
            location='select_all_room.php';
        },1500);
        </script>
    ";
}
?>