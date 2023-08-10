<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
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
r_class as f where a.dents_id=b.dents_id and b.b_id=e.b_id and b.r_id=f.r_id and d.inroom_id=b.inroom_id and d.sub_id=c.sub_id and f.r_name='ມ1/4' ");
// $select1 = mysqli_query($connect,"select a.dents_id,a.fname,a.lname,
// b.inroom_id,b.y_study,
// c.sub_id,c.subject,
// d.s_id,d.month,d.sore from student_biography as a,
// set_st_room as b,
// subject as c,
// sub_score as d where a.dents_id=b.dents_id and b.inroom_id=d.inroom_id and d.sub_id=c.sub_id ");
?>
 <script>
        $(function(){
            $(".data").change(function(){
                var data = $(".data").val();
                $.post("sreach_s1_4.php",{
                    data : data
                },
                function(output){
                    $(".show").html(output);
                });
            });
        });

    </script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<style>
    *,body{
        font-family: phetsarath ot;
    }
</style>
<body>
    <div class="container-fluid py-2">

                <div class="card">
                <div class="card-header text-bark">
                    <div class="row bg-light">
                <div class="col-md-9">
                <div class="form-group">
                       <div class="input-group">
                       <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                       <form action="">
                       <select name=""class="form-control data" id="">
                           <option value="">ເລືອກວິຊາ.</option>
                           <?php 
                           include_once "../connect_db.php";
                           $subject = mysqli_query($connect,"select sub_id,subject from subject");
                           while($showsub = mysqli_fetch_array($subject)){
                           ?>
                           <option value="<?php echo $showsub['sub_id'];?>"><?php echo $showsub['subject'];?></option>
                           <?php
                           }
                           ?>
                       </select>
                       </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 text-right">
                    <a href="form_core9.php" class="btn btn-dark">
                        <i class="fas fa-sign-out-alt"></i>ເພີ່ມລາຍຊື່ຄະເເນນນັກຮຽນ</a>
                </div>
            </div>
                    </div>
                    <div class="card-body">
                   
                    <div class="show">
                    <div class="data_table">
                    <table id="example" class="table table-bordered table-sm">
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
                            <th >ບັນທືກຄະແນນ</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            <?php
                            $a = 1;
                            while($showroom = mysqli_fetch_array($mysql)){
                            ?>
                            <tr class="">
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
                                <td>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">ເລືອກຂໍ້ມູນ</button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="form_core9.php?s_id=<?php echo $showroom['s_id'];?>">ບັນທືກຄະແນນເດືອນ9</a></li>
                                            <li><a class="dropdown-item" href="form_core10.php?s_id=<?php echo $showroom['s_id'];?>">ບັນທືກຄະແນນເດືອນ10</a></li>
                                            <li><a class="dropdown-item" href="form_core11.php?s_id=<?php echo $showroom['s_id'];?>">ບັນທືກຄະແນນເດືອນ11</a></li>
                                            <li><a class="dropdown-item" href="form_core12.php?s_id=<?php echo $showroom['s_id'];?>">ບັນທືກຄະແນນເດືອນ12</a></li>
                                            <li><a class="dropdown-item" href="axem_core1.php?s_id=<?php echo $showroom['s_id'];?>">ເສັງພາກ 1</a></li>
                                            <li><a class="dropdown-item" href="form_core2.php?s_id=<?php echo $showroom['s_id'];?>">ບັນທືກຄະແນນເດືອນ2</a></li>
                                            <li><a class="dropdown-item" href="form_core3.php?s_id=<?php echo $showroom['s_id'];?>">ບັນທືກຄະແນນເດືອນ3</a></li>
                                            <li><a class="dropdown-item" href="form_core4.php?s_id=<?php echo $showroom['s_id'];?>">ບັນທືກຄະແນນເດືອນ4</a></li>
                                            <li><a class="dropdown-item" href="form_core5.php?s_id=<?php echo $showroom['s_id'];?>">ບັນທືກຄະແນນເດືອນ5</a></li>
                                            <li><a class="dropdown-item" href="axem_core2.php?s_id=<?php echo $showroom['s_id'];?>">ເສັງພາກ 2</a></li>


                                            </ul>
                                    </div>
                                </td>
                        
                                    
                            </tr>
                            <?php
                            $a++;
                            }
                            ?>
                        </tbody>

                        </table>
                        </div>
                        </div>
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