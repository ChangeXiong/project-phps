<?php
include_once "../connect_link.php";
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
            $(".btn").click(function(){
                // var s_id = $("#s_id").val();
                var sub_id = $(".sub_id").val();
                var inroom_id = $("#inroom_id").val();
                var month = $(".month").val();
                var sore = $(".sore").val();
                var remark = $(".remark").val();
                $.post("save_score9.php",{
                    // s_id : s_id,
                    sub_id : sub_id,
                    inroom_id : inroom_id,
                    month : month,
                    sore : sore,
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
                               
                                    <div class="input-group">
                                    <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                    <select name="" class="form-control b_id" id="">
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
                                <div class="col-md-3">
                                <div class="form-group mb-2">
                                        <label for="">ຫ້ອງຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                        <select name="" class="form-control r_id" id="">
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
                                <div class="col-md-3">
                                <div class="form-group mb-2">
                                        <label for="">ຊື</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                        <select name=""class="form-control fname" id="inroom_id">
                                            <option value="">ເລືອກຊື່ນັກຮຽນ</option>
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
                                        <input type="text" name="" class="form-control lname" id=""value="">
                                    </div>
                                </div>
                                </div>
                            </div>
                        <div class="form-group mb-2">
                            <label for="">ວິຊາຮຽນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <select name="" class="form-control sub_id" id="">
                                <option value="">ເລືອກວິຊາຮຽນ</option>
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
                                            <option value="ເດືອນ9">ເດືອນ 9.</option>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ຄະແນນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                <input type="text" name="" class="form-control sore" id=""placeholder="ປ້ອນຄະແນນ..">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ໝາຍເຫດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <textarea name="" class="form-control remark"id="" cols="5" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center mb-2 py-2">
                            <button type="button" class="btn btn-outline-primary btn mb-2">ບັນທຶກ</button>
                            <button type="reset" class="btn btn-outline-danger mb-2">ລ້າງຂໍ້ມູນ</button>
                        </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>