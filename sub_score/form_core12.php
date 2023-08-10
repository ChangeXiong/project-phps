<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$s_id = $_GET['s_id'];
$mysql = mysqli_query($connect,"select a.dents_id,a.fname,a.lname,
b.inroom_id,b.y_study,
c.sub_id,c.subject,
d.s_id,d.month,d.sore_9,d.sore_10,d.sore_11,d.sore_12,d.aver_1,d.axam_1,d.sore_2,d.sore_3,d.sore_4,d.sore_5,d.aver_2,d.axem_2,d.remark,
e.b_id,e.b_name,
f.r_id,f.r_name from student_biography as a,
set_st_room as b,
subject as c,
sub_scores as d,
b_class as e,
r_class as f where a.dents_id=b.dents_id and b.b_id=e.b_id and b.r_id=f.r_id and d.inroom_id=b.inroom_id and d.sub_id=c.sub_id and e.b_name='ຊັ້ນມ1' and d.s_id='$s_id' ");
$select_show = mysqli_fetch_array($mysql);
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
                $.post("get_showname.php",{
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
                $.post("get_lname.php",{
                    r_id : fname
                },
                function(output){
                    $(".lname").val(output);
                });
            });
        });
        $(function(){
            $(".sore").keyup(function(){
                var fname = $(".sore").val();
                var sore_9 = $("#sore_9").val();
                var sore_10 = $("#sore_10").val();
                var sore_11 = $("#sore_11").val();
                $.post("get_aver.php",{
                    sore_9 : sore_9,
                    sore_10 : sore_10,
                    sore_11 : sore_11,
                    sore_12 : fname
                },
                function(output){
                    $(".aver_1").val(output);
                });
            });
        });
        $(function(){
            $(".button").click(function(){
                var s_id = $("#s_id").val();
                var sub_id = $(".sub_id").val();
                var inroom_id = $("#inroom_id").val();
                var month = $(".month").val();
                var sore = $(".sore").val();
                var aver_1 = $(".aver_1").val();
                var remark = $(".remark").val();
                $.post("save_core12.php",{
                    s_id : s_id,
                    sub_id : sub_id,
                    inroom_id : inroom_id,
                    month : month,
                    sore : sore,
                    aver_1 : aver_1,
                    remark : remark
                },
                function(output){
                    $(".show").html(output);
                });
            });
        });
    </script>
<body>
    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກຄະແນນຂອງລະແຕ່ລະວິຊາ ]</h3>     
                        <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                    </div>
                    <div class="col-lg-10">
                        <form action="">
                            <div class="row">
                                <div class="col-md-3">
                                <div class="form-group mb-2">
                                    <label for="">ຊັ້ນຮຽນ</label>
                                    <input type="hidden" name="" id="s_id"value="<?php echo $select_show['s_id'];?>">
                                    <div class="input-group">
                                    <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                    <select name=""readonly class="form-control b_id" id="">
                                            <option value="<?php echo $select_show['b_id'];?>"><?php echo $select_show['b_name'];?></option>
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
                                <div class="col-md-3">
                                <div class="form-group mb-2">
                                        <label for="">ຫ້ອງຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                        <select name=""readonly class="form-control r_id" id="">
                                            <option value="<?php echo $select_show['r_id'];?>"><?php echo $select_show['r_name'];?></option>
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
                                <div class="col-md-3">
                                <div class="form-group mb-2">
                                        <label for="">ຊື</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                        <select name=""readonly class="form-control fname" id="inroom_id">
                                            <option value="<?php echo $select_show['inroom_id'];?>"><?php echo $select_show['fname'];?></option>
                                            <?php
                                            include_once "../connect_db.php";
                                            $smp = mysqli_query($connect,"select a.inroom_id,b.dents_id,b.fname,b.lname from set_st_room as a,student_biography as b where a.dents_id=b.dents_id");
                                            while($showget = mysqli_fetch_array($smp)){
                                            ?>
                                            <option value="<?php echo $showget['inroom_id'];?>"><?php echo $showget['fname'];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="form-group mb-2">
                                    <label for="">ນາມສະກຸນ</label>
                                    <div class="input-group">
                                    <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                        <input type="text"readonly name="" class="form-control lname" id=""value="<?php echo $select_show['lname'];?>">
                                    </div>
                                </div>
                                </div>
                            </div>
                        <div class="form-group mb-2">
                            <label for="">ວິຊາຮຽນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <select name=""readonly class="form-control sub_id" id="">
                                <option value="<?php echo $select_show['sub_id'];?>"><?php echo $select_show['subject'];?></option>
                                <?php
                                include_once "../connect_db.php";
                                $show = mysqli_query($connect,"select * from subject");
                                while($row = mysqli_fetch_array($show)){

                                ?>
                                <option value="<?php echo $row['sub_id'];?>"><?php echo $row['subject'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ເດືອນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <select name=""readonly class="form-control month" id="">
                                            <option value="ເດືອນ12">ເດືອນ 12.</option>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                <label for="">ຄະແນນ</label>
                                <input type="hidden" name="" id="sore_9" value="<?php echo $select_show['sore_9'];?>">
                                <input type="hidden" name="" id="sore_10" value="<?php echo $select_show['sore_10'];?>">
                                <input type="hidden" name="" id="sore_11" value="<?php echo $select_show['sore_11'];?>">
                                    <div class="input-group">
                                    <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                <input type="text" name="" class="form-control sore" id=""placeholder="ປ້ອນຄະແນນ..">
                            </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">ສະເລ່ຍ</label>
                                    <input type="text" name=""class="form-control aver_1" id="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ໝາຍເຫດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <textarea name="" class="form-control remark"id="" cols="5" rows="2"><?php echo $select_show['remark'];?></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center mb-2 py-2">
                            <button type="button" class="btn btn-outline-primary button mb-2">ບັນທຶກ</button>
                            <button type="reset" class="btn btn-outline-danger button mb-2">ລ້າງຂໍ້ມູນ</button>
                        </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>