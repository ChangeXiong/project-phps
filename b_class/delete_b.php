<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$b_id = $_GET['b_id'];
$sql = mysqli_query($connect,"DELETE FROM b_class WHERE b_id='$b_id'");
if($sql){
    echo"
        <div class='alert alert-success' role='alert'>
        ລົບຂໍ້ມູນສຳເລັດແລ້ວ
        
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
    ບໍສຳເລັດ..!
    </div>
    <script>
        window.setTimeout(function(){
            location='select_b.php';
        },1500);
        </script>
    ";
}
?>