<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$roomm1 = mysqli_query($connect,"select a.dents_id,a.fname,a.lname,a.gender,b.b_id,b.b_name,d.r_id,d.r_name,c.inroom_id,c.y_study from student_biography as a,
b_class as b,set_st_room as c,r_class as d where a.dents_id=c.dents_id and c.b_id=b.b_id and c.r_id=d.r_id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/datatables.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container py-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-bark">
                    <a href="form_room.php" class="btn btn-dark">
                        <i class="fas fa-sign-out-alt"></i>ເພີ່ມລາຍຊື່ຄະເເນນນັກຮຽນ</a>
                    </div>
                    <div class="card-body">
                    <div class="card-title text-center">ສະແດງຂໍ້ມູນຊັ້ນຮຽນແລະຫ້ອງຮຽນທັງໝົດ</div>
                    <table id="example" class="table table-striped" style="width:100%">
                            
                                <thead>
                                <tr>
                                    <th>ລຳດັບ</th>
                                    <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                    <th>ເພດ</th>
                                    <th>ຊັ້ນຮຽນ</th>
                                    <th>ຫ້ອງຮຽນ</th>
                                    <th>ສົກຮຽນ</th>
                                    <th>ຂໍ່ມູນອື່ນໆ</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                            $a = 1;
                            while($showroom = mysqli_fetch_array($roomm1)){
                            ?>
                         
                                
                                    <tr>
                                    <td><?php echo $a;?></td>
                                    <td><?php echo $showroom['fname'];?> <?php echo $showroom['lname'];?></td>
                                    <td><?php echo $showroom['gender'];?></td>
                                    <td><?php echo $showroom['b_name'];?></td>
                                    <td><?php echo $showroom['r_name'];?></td>
                                    <td><?php echo $showroom['y_study'];?></td>
                                    <td width="10%">

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    ເລືອກຂໍ້ມູນ
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="update_room.php?inroom_id=<?php echo $showroom['inroom_id'];?>"><button class="form-control bg-info">ແກ້ໄຂ</button></a></li>
                    <li><a class="dropdown-item" href="delete_room.php?inroom_id=<?php echo $showroom['inroom_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control bg-danger">ລົບຂໍ້ມູນ</button></a></li>
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
                                    <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                    <th>ເພດ</th>
                                    <th>ຊັ້ນຮຽນ</th>
                                    <th>ຫ້ອງຮຽນ</th>
                                    <th>ສົກຮຽນ</th>
                                    <th>ຂໍ່ມູນອື່ນໆ</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <script src="../bootstrap5/js/bootstrap.min.js"></script>
<script src="app.js"></script>
<script src="cumtom.js"></script>
<script src="../assets/js/datatables.min.js"></script>
<script src="../assets/js/pdfmake.min.js"></script>
<script src="../assets/js/vfs_fonts.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>

</body>
</html>