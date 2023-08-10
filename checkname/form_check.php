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
                $.post("get_show_name.php",{
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
            $(".button").click(function(){
                var inroom_id = $("#inroom_id").val();
                var chk_moth = $(".chk_moth").val();
                var subject = $(".subject").val();
                var hour = $(".hour").val();
                var remark = $(".remark").val();
                $.post("insert_check.php",{
                    inroom_id : inroom_id,
                    chk_moth : chk_moth,
                    subject : subject,
                    hour : hour,
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
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກໝາຍຂາດຂອງນັກຮຽນ ]</h3>     
                        <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                    </div>
                    <div class="col-lg-10">
                        <form action="">
                            <div class="row">
                            <div class="row">
                                <div class="col-md-3">
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
                                <div class="col-md-3">
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
                                <div class="col-md-3">
                                <div class="form-group mb-2">
                                        <label for="">ຊື</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                                        <select name=""class="form-control fname" id="inroom_id">
                                            <option value="">ເລືອກຊື່</option>
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
                                        <input type="text" name="" class="form-control lname" id=""placeholder="ປ້ອນຄະແນນ..">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                            <label for="">ເລືອກເດືອນ</label>
                       <div class="input-group">
                       <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                       <form action="">
                       <select name=""class="form-control chk_moth" id="">
                           <option value="">ເລືອກເດືອນ.</option>
                           <option value="ເດືອນ9">ເດືອນ 9.</option>
                           <option value="ເດືອນ10">ເດືອນ 10.</option>
                           <option value="ເດືອນ11">ເດືອນ 11.</option>
                           <option value="ເດືອນ12">ເດືອນ 12.</option>
                           <option value="ເດືອນ1">ເດືອນ 1.</option>
                           <option value="ເດືອນ2">ເດືອນ 2.</option>
                           <option value="ເດືອນ3">ເດືອນ 3.</option>
                           <option value="ເດືອນ4">ເດືອນ 4.</option>
                           <option value="ເດືອນ5">ເດືອນ 5.</option>
                       </select>
                       </form>
                        </div>
                    </div>
                </div>
                        <div class="form-group mb-2">
                            <label for="">ວິຊາຮຽນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <select name=""class="form-control subject" id="">
                                <option value="">ເລືອກວິຊາ</option>
                                <option value="ພາສາລາວ">ພາສາລາວ</option>
                                <option value="ວັນນະຄະດີ">ວັນນະຄະດີ</option>
                                <option value="ຄະນິດສາດ">ຄະນິດສາດ</option>
                                <option value="ໄອທີ">ໄອທີ</option>
                                <option value="ວິທະຍາສາດທຳມະຊາດ">ວິທະຍາສາດທຳມະຊາດ</option>
                                <option value="ວິທະຍາສາດສັງຄົມ">ວິທະຍາສາດສັງຄົມ</option>
                                <option value="ສືກສາພົມລະເມືອງ">ສືກສາພົມລະເມືອງ</option>
                                <option value="ສິລະປະ">ສິລະປະ</option>
                                <option value="ພະລະສືກສາ">ພະລະສືກສາ</option>
                                <option value="ພາສາອັງກິດ">ພາສາອັງກິດ</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ຊົວໂມງຂາດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <select name=""class="form-control hour" id="">
                                <option value="">ເລືອກຊົວໂມງຂາດ</option>
                                <option value="1-2">1 - 2</option>
                                <option value="3-4">3 - 4</option>
                                <option value="5-6">5 - 6</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ເຫດຜົນ:</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <textarea name="" class="form-control remark" id="" ></textarea>
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