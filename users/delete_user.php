<?php
include("../connect_dbstock.php");
include("../connect_link.php");
$user_id = $_GET['user_id'];
$sql = mysqli_query($connect,"delete from users where user_id='$user_id' ");
if($sql){
    echo"
    <script>
    location='select_user.php';
    </script>";
}else{
    echo"
    <script>
    Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'ລົ້ມເຫຼວ..!',
        showConfirmButton: false,
        timer: 1500
    })
    </script>";
}
?>