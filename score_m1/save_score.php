<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$core_id = $_POST['core_id'];
$inroom_id = $_POST['inroom_id'];
$month_score = $_POST['month'];
$laguage = $_POST['laguage'];
$literature = $_POST['literature'];
$mathermatics = $_POST['mathermatics'];
$it = $_POST['it'];
$fnaural = $_POST['fnaural'];
$society = $_POST['society'];
$population = $_POST['population'];
$art = $_POST['art'];
$mission = $_POST['mission'];
$english = $_POST['english'];
$amount = $_POST['amount'];
$average = $_POST['average'];
if($inroom_id == ""){
    echo "
    <div class='alert alert-danger' role='alert'>
        ກາລຸນາປ້ອນລະຫັດນັກຮຽນ..!
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
        ກາລຸນາຄະແນນວິຊາວັນນະຄະດິກ່ອນ..!
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
    $mysql = mysqli_query($connect,"UPDATE scores SET
    inroom_id = '$inroom_id',
    month_score = '$month_score',
    laguage = '$laguage',
    literature = '$literature',
    mathermatics = '$mathermatics',
    it = '$it',
    fnaural = '$fnaural',
    society = '$society',
    population = '$population',
    art = '$art',
    mission = '$mission',
    english = '$english',
    amount = '$amount',
    average = '$average' WHERE core_id='$core_id'
    ");
    if($mysql == true){
        echo"
        <div class='alert alert-success' role='alert'>
        ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ
        
        </div>
        <script>
        window.setTimeout(function(){
            location='../student_score/form_score.php';
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