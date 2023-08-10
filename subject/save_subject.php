<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$sub_id = $_POST['sub_id'];
$subject = $_POST['subject'];
if($subject == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນວິຊາຮຽນ..!
    </div>
    ";
}else{
    $insert = mysqli_query($connect,"UPDATE subject SET
    subject ='$subject' WHERE sub_id='$sub_id' ");
    if($insert == true){
        echo"
    <div class='alert alert-success' role='alert'>
    ບັນທຶກຂໍ້ມູນສຳເລັດ
    
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
    window.setTimeout(function(){
        location='select_subject.php';
    },1500);
    </script>
        ";
    }
}
?>