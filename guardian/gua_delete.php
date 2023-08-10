<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$g_id = $_GET['g_id'];
$sql = mysqli_query($connect,"DELETE FROM guardian WHERE g_id='$g_id'");
if($sql){
    echo"
        <div class='alert alert-success' role='alert'>
        ລົບສຳເລັດແລ້ວ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='gua_select.php';
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
            location='gua_select.php';
        },1500);
        </script>
    ";
}
?>