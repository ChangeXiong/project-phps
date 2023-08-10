<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$fnamef = $_POST['fnamef'];
$fage = $_POST['fage'];
$fjob = $_POST['fjob'];
$ftell = $_POST['ftell'];
$fnamem = $_POST['fnamem'];
$mage = $_POST['mage'];
$mjob = $_POST['mjob'];
$mtell = $_POST['mtell'];
if($fnamef == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນຊືແລະນາມສະກຸນໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}elseif($fjob == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນອາຊິບຂອງພໍ່..!
    </div>
    ";
}elseif($fnamem == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນຊື່ແລະນາມສະກຸນແມ່ໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}elseif($mjob == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນອາຊິບແມ່ໃຫ້ຄົບຖ້ວນ..!
    </div>
    ";
}else{
    $sql = mysqli_query($connect,"INSERT INTO guardian SET 
    fnamef = '$fnamef',
    fage = '$fage',
    fjob = '$fjob',
    ftell = '$ftell',
    fnamem = '$fnamem',
    mage = '$mage',
    mjob = '$mjob',
    mtell = '$mtell'
    ");
    if($sql == true){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ
        
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
        ບໍສຳເລັດ..!
    </div>
        ";
    }
}
?>