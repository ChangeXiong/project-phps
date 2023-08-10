<?php
include_once "../connect_db.php";
// include_once "../connect_link.php";
$data = $_POST['data'];
$mysql = mysqli_query($connect,"select a.dents_id,a.fname,a.lname,
b.inroom_id,b.y_study,
c.sub_id,c.subject,
d.s_id,d.month,d.sore_9,d.sore_10,d.sore_11,d.sore_12,d.aver_1,d.axam_1,d.sore_2,d.sore_3,d.sore_4,d.sore_5,d.aver_2,d.axem_2,
e.b_id,e.b_name,
f.r_id,f.r_name from student_biography as a,
set_st_room as b,
subject as c,
sub_scores as d,
b_class as e,
r_class as f where a.dents_id=b.dents_id and b.b_id=e.b_id and b.r_id=f.r_id and d.inroom_id=b.inroom_id and d.sub_id=c.sub_id and f.r_name='ມ2/4' and c.sub_id='$data' " );


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<div class="data_table">
<table id="example" class="table table-bordered table-sm ">
                        <thead>
                            <tr>
                            <th >ລຳດັບ</th>
                            <th >ຊື ແລະ ນາມສະກຸນ</th>
                            <th >ເດືອນ 9</th>
                            <th >ເດືອນ 10</th>
                            <th >ເດືອນ 11</th>
                            <th >ເດືອນ 12</th>
                            <th >ສະເລ່ຍ</th>
                            <th >ເສັງພາກຮຽນ 1</th>
                            <th >ເດືອນ 2</th>
                            <th >ເດືອນ 3</th>
                            <th >ເດືອນ 4</th>
                            <th >ເດືອນ 5</th>
                            <th >ສະເລ່ຍ </th>
                            <th >ເສັງພາກຮຽນ 2</th>
                          
                            </tr>
                        </thead>
                        <tbody>                            
                            <?php
                            $a = 1;
                            while($showroom = mysqli_fetch_array($mysql)){
                            ?>
                            <tr class="text-center">
                                <td><?php echo $a;?></td>
                                <td><?php echo $showroom['fname'];?> <?php echo $showroom['lname'];?></td>
                                <td><?php echo $showroom['sore_9']?></td>
                                <td><?php echo $showroom['sore_10']?></td>
                                <td><?php echo $showroom['sore_11']?></td>
                                <td><?php echo $showroom['sore_12']?></td>
                                <td><?php echo $showroom['aver_1']?></td>
                                <td><?php echo $showroom['axam_1']?></td>
                                <td><?php echo $showroom['sore_2']?></td>
                                <td><?php echo $showroom['sore_3']?></td>
                                <td><?php echo $showroom['sore_4']?></td>
                                <td><?php echo $showroom['sore_5']?></td>
                                <td><?php echo $showroom['aver_2']?></td>
                                <td><?php echo $showroom['axem_2']?></td>
                        
                                    
                            </tr>
                            <?php
                            $a++;
                            }
                            ?>
                        </tbody>

                        </table>
                        </div>
    <script src="../bootstrap5/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/custom.js"></script>