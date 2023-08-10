<?php
include_once "../connect_db.php";
$select = mysqli_query($connect,"select a.*,b.dis_name,c.pro_name from tea_history as a,district as b,province as c where a.dis_id=b.dis_id and a.pro_id=c.pro_id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select form teacher-history</title>
    <link rel="stylesheet" href="../icon/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    *,body{
        font-family: phetsarath ot;
    }
</style>
<?php
if(isset($_GET['t_id']) == 'detele'){
   $core_id = $_GET['t_id'];
    $msql = mysqli_query($connect,"delete from tea_history where t_id='$core_id' ");
    if($msql){
        echo"<script>
        Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'ແກ້ໄຂຂໍ້ມູນສຳເລັດ..',
            showConfirmButton: false,
            timer: 2500,
        })
        window.setTimeout(function(){
            location.reload();
        },1500);
        </script>";
}else{
    echo"<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'ບໍ່ສຳເລັດ..',
        showConfirmButton: false,
        timer: 2500,
    })
    window.setTimeout(function(){
        location='select_tea.php';
    },1500);
    </script>";
    }
}
?>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>ສະແດງຂໍ້ມູນຊິວະປະຫັວດຄູ</h2>
            </div>
            <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ລະດັບ</th>
                        <th>ຊືແລະນາມສະກຸນ</th>
                        <th>ເພດ</th>
                        <!-- <th>ວັນເດືອນປິເກິດ</th> -->
                        <!-- <th>ທິເກິດ</th> -->
                        <th>ບ້ານຢູ່ປັບຈຸບັນ</th>
                        <th>ເມືອງ</th>
                        <th>ແຂວງ</th>
                        <!-- <th>ຊົນເຜົາ</th>
                        <th>ໜ້າທີຮັບຜິດຊອບ</th>
                        <th>ວດປສັງກັດລັດ</th>
                        <th>ວດປເຂົ້າພັກ</th>
                        <th>ວດປເຂົ້າກຳມະບານ</th>
                        <th>ວດປເຂົ້າຊາວໜ່ມ</th>
                        <th>ລະດັບການສຶກສາ</th>
                        <th>ລະດັບວິຊາສະເພາະ</th>
                        <th>ວິຊາຮຽນຈົນ</th> -->
                        <th>ເບິໂທ</th>
                        <th>ໝາຍເຫດ</th>
                        <th>ຈັດການ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    while($row = mysqli_fetch_array($select)){
                    ?>
                    <tr>
                        <td><?php echo $a;?></td>
                        <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <!-- <td><?php //echo $row['date'];?></td> -->
                        <!-- <td><?php// echo $row['blod'];?></td> -->
                        <td><?php echo $row['vill'];?></td>
                        <td><?php echo $row['dis_name'];?></td>
                        <td><?php echo $row['pro_name'];?></td>
                        <!-- <td><?php echo $row['nation'];?></td>
                        <td><?php //echo $row['satus'];?></td>
                        <td><?php //echo $row['date_D'];?></td>
                        <td><?php //echo $row['date_R'];?></td>
                        <td><?php //echo $row['date_K'];?></td>
                        <td><?php //echo $row['date_B'];?></td>
                        <td><?php //echo $row['e_level'];?></td>
                        <td><?php //echo $row['degree'];?></td>
                        <td><?php //echo $row['suject'];?></td> -->
                        <td><?php echo $row['tel'];?></td>
                        <td><?php echo $row['remark'];?></td>
                        <td class="mt-4 py-2 text-center">
                        <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['t_id'];?>">ລາຍລະອຽດ</button>
                            <a href="update_tea.php?t_id=<?php echo $row['t_id'];?>"><i class="fas fa-edit"></i></a>
                            <a href="?t_id=<?php echo $row['t_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><i class="fas fa-recycle"></i></a>
                        </td>
                    </tr>

                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $row['t_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ລາຍລະອຽດຊີວະປະຫັວດຄູ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <label for=""class="mt-2"><b>ຊື່ແລະນາມສະກຸນ</b> <?php echo $row['fname'];?> <?php echo $row['lname'];?></label><br>
                                        <label for=""class="mt-2"><b>ເພດ</b> <?php echo $row['gender'];?></label><br>
                                        <label for=""class="mt-2"><b>ວັນເດືອນປີເກີດ</b> <?php echo $row['date'];?></label><br>
                                        <label for=""class="mt-2"><b>ທີ່ເກີດ</b> <?php echo $row['blod'];?></label><br>
                                        <label for=""class="mt-2"><b>ບ້ານ</b> <?php echo $row['vill'];?></label><br>
                                        <label for=""class="mt-2"><b>ເມືອງ</b> <?php echo $row['dis_name'];?></label><br>
                                        <label for=""class="mt-2"><b>ແຂວງ</b> <?php echo $row['pro_name'];?></label><br>
                                        <label for=""class="mt-2"><b>ຊົນເຜົາ</b> <?php echo $row['nation'];?></label><br>
                                        <label for=""class="mt-2"><b>ໜ້າທີຮັບຜິດຊອບ</b> <?php echo $row['satus'];?></label><br>
                                        </div>
                                        <div class="col-lg-6">
                                        <label for=""class="mt-2"><b>ວດປສັງກັດລັດ</b> <?php echo $row['date_D'];?></label><br>
                                        <label for=""class="mt-2"><b>ວດປເຂົ້າພັກ</b> <?php echo $row['date_R'];?></label><br>
                                        <label for=""class="mt-2"><b>ວດປເຂົ້າກຳມະບານ</b> <?php echo $row['date_K'];?></label><br>
                                        <label for=""class="mt-2"><b>ວດປເຂົ້າຊາວໜ່ມ</b> <?php echo $row['date_B'];?></label><br>
                                        <label for=""class="mt-2"><b>ລະດັບການສຶກສາ</b> <?php echo $row['e_level'];?></label><br>
                                        <label for=""class="mt-2"><b>ລະດັບວິຊາສະເພາະ</b> <?php echo $row['degree'];?></label><br>
                                        <label for=""class="mt-2"><b>ວິຊາຮຽນຈົນ</b> <?php echo $row['suject'];?></label><br>
                                        <label for=""class="mt-2"><b>ເບິໂທ</b> <?php echo $row['tel'];?></label><br>
                                        <label for=""class="mt-2"><b>ໝາຍເຫດ</b> <?php echo $row['remark'];?></label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ປີດ</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    <?php
                    // $a++;
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>


<script src="../bootstrap5/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/custom.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>