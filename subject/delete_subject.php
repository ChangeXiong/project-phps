<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$sub_id = $_GET['sub_id'];
$sql = mysqli_query($connect,"delete from subject where sub_id='$sub_id'");
if($sql){
    echo"
        <div class='alert alert-success' role='alert'>
        ລົບຂໍ້ມູນສຳເລັດ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='select_subject.php';
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
            location='select_subject.php';
        },1500);
        </script>
    ";
}
?>