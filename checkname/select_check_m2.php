<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$mysql = mysqli_query($connect,"select a.dents_id,a.fname,a.lname,b.inroom_id,b.y_study,c.check_id,c.chk_moth,c.subject,c.hour,c.rdate,c.rtime,c.remark,d.b_name,e.r_name from student_biography as a,set_st_room as b,check_name as c,b_class as d,r_class as e where a.dents_id=b.dents_id and b.inroom_id=c.inroom_id and b.b_id=d.b_id and b.r_id=e.r_id and b_name='ຊັ້ນມ2'");
?>
<script>
        $(function(){
        $(".b_id").change(function(){
            var number1 = $(".b_id").val();
            $.post("get_r_class.php",{
                number : number1
            },
            function(output){
                $(".r_id").html(output);
            });
        });
    });
        $(function(){
            $(".r_id").change(function(){
                var r_id = $(".r_id").val();
                $.post("get_show_name1.php",{
                    r_id : r_id
                },
                function(output){
                    $(".fname").html(output);
                });
            });
        });
        $(function(){
            $(".fname").change(function(){
                var fname = $(".fname").val();
                $.post("search_check.php",{
                    fname : fname
                },
                function(output){
                    $(".sraech").html(output);
                });
            });
        });
</script>
<body>
    <div class="container-fluid overflow-hidden">
        <div class="card">
            <div class="card-header">
            <div class="row gx-5">
                <div class="col">
          
                <a href="form_check.php" class="btn btn-primary">ໄປໜ້າຟອມບັນທືກຂໍ້ມູນ</a>
                </div>
                <div class="col">
                <div class="p-2 border bg-light">
                    <form action="">
                    <div class="input-group">
                        <div class="input-group-text text-success"><i class="fas fa-search"></i></div>
                            <input type="text" name="" class="form-control lname" id=""placeholder="ຄົ້ນຫາ..">
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <div class="card-body">
                <div class="card-title">ລາຍງານການຂາດຮຽນຂອງນັກຮຽນ</div>
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                    <th>ລຳດັບ</th>
                    <th>ຊື່ແລະນາມສະກຸນ</th>
                    <th>ຊັ້ນ</th>
                    <th>ຫ້ອງ</th>
                    <th>ເດືອນ</th>
                    <th>ວິຊາຂາດ</th>
                    <th>ຊົວໂມງຂາດ</th>
                    <th>ວັນທີ ແລະ ເວລາ</th>
                    <th>ເຫດຜົນ</th>
                    <th>ຂໍ້ມູນອືນໆ</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; while($get_show = mysqli_fetch_array($mysql)){
                    
                ?>
                <tr>
                    <td><?php echo $a;?></td>
                    <td><?php echo $get_show['fname'];?> <?php echo $get_show['lname'];?></td>
                    <td><?php echo $get_show['b_name'];?></td>
                    <td><?php echo $get_show['r_name'];?></td>
                    <td><?php echo $get_show['chk_moth'];?></td>
                    <td><?php echo $get_show['subject'];?></td>
                    <td><?php echo $get_show['hour'];?></td>
                    <td><?php echo $get_show['rdate'];?> <?php echo $get_show['rtime'];?></td>
                    <td><?php echo $get_show['remark'];?></td>
                    <td width="11%">

<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    ເລືອກຂໍ້ມູນ
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    <li><a class="dropdown-item" href="update_check.php?check_id=<?php echo $get_show['check_id'];?>"><button class="form-control bg-info">ແກ້ໄຂ</button></a></li>
    <li><a class="dropdown-item" href="delete_check.php?check_id=<?php echo $get_show['check_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control bg-danger">ລົບຂໍ້ມູນ</button></a></li>
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
                    <th>ຊັ້ນ</th>
                    <th>ຫ້ອງ</th>
                    <th>ເດືອນ</th>
                    <th>ວິຊາຂາດ</th>
                    <th>ຊົວໂມງຂາດ</th>
                    <th>ວັນທີ ແລະ ເວລາ</th>
                    <th>ເຫດຜົນ</th>
                    <th>ຂໍ້ມູນອືນໆ</th>
                    </tr>
                </tfoot>
            </table>
            </div>
           
        </div>
    </div>
    <hr>
    <div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="card-title text-center">ສະຫຼຸບວັນຂາດຂອງນັກຮຽນ</div>
            <div class="row">
            <div class="col-md-4">
                            <div class="form-group mb-2">
                                <label for="">ຊັ້ນຮຽນ</label>
                                <div class="input-group">
                                <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                <select name=""class="form-control b_id" id="">
                                        <option value="">ເລືອກຊັ້ນຮຽນ</option>
                                        <?php
                                        include_once "../connect_db.php";
                                        $smp = mysqli_query($connect,"select b_id,b_name from b_class");
                                        while($showget = mysqli_fetch_array($smp)){
                                        ?>
                                        <option value="<?php echo $showget['b_id'];?>"><?php echo $showget['b_name'];?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group mb-2">
                                    <label for="">ຫ້ອງຮຽນ</label>
                                    <div class="input-group">
                                    <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                    <select name=""class="form-control r_id" id="">
                                        <option value="">ເລືອກຫ້ອງຮຽນ</option>
                                        <?php
                                        include_once "../connect_db.php";
                                        $smp = mysqli_query($connect,"select r_id,r_name from r_class");
                                        while($showget = mysqli_fetch_array($smp)){
                                        ?>
                                        <option value="<?php echo $showget['r_id'];?>"><?php echo $showget['r_name'];?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group mb-2">
                                    <label for="">ຊື ແລະ ນາມສະກຸນ</label>
                                    <div class="input-group">
                                    <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                    <select name=""class="form-control fname" id="inroom_id">
                                        <option value="">ເລືອກຊື່ແລະນາມສະກຸນ</option>
                                        <?php
                                        include_once "../connect_db.php";
                                        $smp = mysqli_query($connect,"select a.inroom_id,b.dents_id,b.fname,b.lname from set_st_room as a,student_biography as b where a.dents_id=b.dents_id");
                                        while($showget = mysqli_fetch_array($smp)){
                                        ?>
                                        <option value="<?php echo $showget['fname'];?>"><?php echo $showget['fname'];?> <?php echo $showget['lname'];?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sraech">
                            
                            </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="../bootstrap5/js/bootstrap.min.js"></script>
<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>