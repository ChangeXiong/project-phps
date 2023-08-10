<?php
include_once "../connect_db.php";
include_once "../connect_link.php";
$select = "SELECT a.*,b.* FROM tea_history as a,teacher as b where a.t_id=b.t_id";
$mysql = mysqli_query($connect,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                            <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ສະແດງການແຈ້ງເຕືອນ</div>
                
            </div>
            <div class="card-title text-center"><b>ສະແດງຂໍ້ມູນຄູສອນ</b></div>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ລຳດັບ</th>
                        <th>ຊື່ແລະນາມສະກຸນ</th>
                        <th>ເພດ</th>
                        <th>ວັນເດຶອນປິເກິດ</th>
                        <th>ວິຊາສອນ1</th>
                        <th>ວິຊາສອນ2</th>
                        <th>ຊັ້ນສອນ</th>
                        <th>ຫ້ອງສອນ</th>
                        <th>ເບິໂທ</th>
                        <th>ໝາຍເຫດ</th>
                        <th>ຂໍ້ມູນອືນໆ.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    while($row = mysqli_fetch_array($mysql)){
                    ?>
                    <tr>
                        <td><?php echo $a;?></td>
                        <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['subject1'];?></td>
                        <td><?php echo $row['subject2'];?></td>
                        <td><?php echo $row['anchor1'];?></td>
                        <td><?php echo $row['anchor2'];?></td>
                        <td><?php echo $row['tel'];?></td>
                        <td><?php echo $row['remark'];?></td>
                        <td width="11%">

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            ເລືອກຂໍ້ມູນ
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="update_teacher.php?tea_id=<?php echo $row['tea_id'];?>"><button class="form-control bg-info">ແກ້ໄຂ</button></a></li>
                            <li><a class="dropdown-item" href="delete_teacher.php?tea_id=<?php echo $row['tea_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control bg-danger">ລົບຂໍ້ມູນ</button></a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <?php
                    $a++;
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                    <th>ລຳດັບ</th>
                        <th>ຊື່ແລະນາມສະກຸນ</th>
                        <th>ເພດ</th>
                        <th>ວັນເດຶອນປິເກິດ</th>
                        <th>ວິຊາສອນ1</th>
                        <th>ວິຊາສອນ2</th>
                        <th>ຊັ້ນສອນ</th>
                        <th>ຫ້ອງສອນ</th>
                        <th>ເບິໂທ</th>
                        <th>ໝາຍເຫດ</th>
                        <th>ຂໍ້ມູນອືນໆ.</th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>