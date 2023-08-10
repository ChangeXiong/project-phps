<?php
include("../connect_db.php");
include("../connect_link.php");
$dis_id = $_GET['dis_id'];
$sql = mysqli_query($connect,"delete from district where dis_id='$dis_id' ");
if($sql){
    echo"<script>
    Swal.fire(
        'ທ່ານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ບໍ..!',
        'That thing is still around?',
        'question'
      )
      </script>";
}else{
    echo"
    <script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: ບໍ່ສຳເລັດ.!..',
        showConfirmButton: false,
        timer: 1500
    })
    </script>";
}
?>