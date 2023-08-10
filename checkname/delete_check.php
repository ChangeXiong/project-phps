<?php
include_once "../connect_db.php";
$check_id = $_GET['check_id'];
$sql = mysqli_query($connect,"DELETE FROM check_name WHERE check_id='$check_id'");
if($sql){
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
    <script>
        window.setTimeout(function(){
            location='select_check.php';
        },1500);
        </script>
    ";
}
?>