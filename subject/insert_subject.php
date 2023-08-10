<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$subject = $_POST['subject'];
if($subject == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນວິຊາຮຽນ..!
    </div>
    ";
}else{
    $insert = mysqli_query($connect,"INSERT INTO subject SET
    subject ='$subject' ");
    if($insert == true){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດ
        
        </div>
        <script>
        window.setTimeout(function(){
            location.reload();
        },1500);
        </script>
        ";
    }else{
        echo"
        <div class='alert alert-danger' role='alert'>
        ບໍ່ສຳເລັດ..!
    </div>
        ";
    }
}
?>