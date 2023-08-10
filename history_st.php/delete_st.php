<?php
include_once "../connect_db.php";
$dents_id = $_GET['dents_id'];
$sql = mysqli_query($connect,"DELETE FROM student_biography WHERE dents_id='$dents_id'");
if($sql){
    echo"
        <div class='alert alert-success' role='alert'>
        ລົບຂໍ້ມູນສຳເລັດແລ້ວ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='select_st.php';
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
            location='select_st.php';
        },1500);
        </script>
    ";
}
?>