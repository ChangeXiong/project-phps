<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$inroom_id = $_POST['inroom_id'];
$month_score = $_POST['month'];
$laguage = $_POST['laguage'];
$literature = $_POST['literature'];
$mathermatics = $_POST['mathermatics'];
$it = $_POST['it'];
$society = $_POST['society'];
$population = $_POST['population'];
$art = $_POST['art'];
$mission = $_POST['mission'];
$english = $_POST['english'];
$PH = $_POST['PH'];
$CH = $_POST['CH'];
$BI = $_POST['BI'];
$amount = $_POST['amount'];
$average = $_POST['average'];
if($inroom_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ກາລຸນາເລືອກຊັ້ນ,ຫ້ອງຮຽນແລະຊືນັກຮຽນກ່ອນ..!
    </div>
    ";
}elseif($month_score == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ກາລຸນາເລືອກເດືອນທີຈະບັນທຶກຂໍ້ມູນ..!
    </div>
    ";
}elseif($laguage == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ປ້ອນຄະແນນວິຊາພາສາລາວ..!
    </div>
    ";
}elseif($literature == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ກາລຸນາຄະແນນວິຊາປະຫັວດສາດກ່ອນ..!
    </div>
    ";
}elseif($mathermatics == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ກາລຸນາປ້ອນວິຊາຄະນິດສາດກ່ອນ..!
    </div>
    ";
}elseif($it == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ກາລຸນາປ້ອນວິຊາໄອທີກ່ອນ..!
    </div>
    ";
}else{
    $mysql = mysqli_query($connect,"INSERT INTO scores SET
    inroom_id = '$inroom_id',
    month_score = '$month_score',
    laguage = '$laguage',
    literature = '$literature',
    mathermatics = '$mathermatics',
    it = '$it',
    society = '$society',
    population = '$population',
    art = '$art',
    mission = '$mission',
    english = '$english',
    PH = '$PH',
    CH = '$CH',
    BI = '$BI',
    amount = '$amount',
    average = '$average'
    ");
    if($mysql == true){
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
        echo "
        <div class='alert alert-danger' role='alert'>
        ບໍ່ສຳເລັດ..!
        </div>
        ";
    }
}
?>