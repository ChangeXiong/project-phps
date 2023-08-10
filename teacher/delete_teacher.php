<?php
include_once "../connect_db.php";
$tea_id = $_GET['tea_id'];
$sql = mysqli_query($connect,"DELETE FROM teacher WHERE tea_id='$tea_id'");
if($sql){
    echo"
        <div class='alert alert-success' role='alert'>
       ລົບຂໍ້ມູນສຳເລັດ
        
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
    ບໍສຳເລັດ..!
    </div>
    <script>
        window.setTimeout(function(){
            location='select_teacher.php';
        },1500);
        </script>
    ";
}
?>