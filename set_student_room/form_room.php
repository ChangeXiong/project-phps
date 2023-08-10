<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
?>
<script>
    $(function(){
        $(".b_id").change(function(){
            var number1 = $(".b_id").val();
            $.post("get_class_name.php",{
                number : number1
            },
            function(output){
                $(".r_id").html(output);
            });
        });
    });
    $(function(){
        $(".dents_id").keyup(function(){
            var number = $(".dents_id").val();
            $.post("get_fname.php",{
                number : number
            },
            function(output){
                $(".fname").val(output).show();
            });
        });
        $(".dents_id").keyup(function(){
            var number = $(".dents_id").val();
            $.post("get_lname.php",{
                number : number
            },
            function(output){
                $(".lname").val(output).show();
            });
        });
        $(".dents_id").keyup(function(){
            var number = $(".dents_id").val();
            $.post("get_gender.php",{
                number : number
            },
            function(output){
                $(".gender").val(output).show();
            });
        });
    });
    $(function(){
        $(".button").click(function(){
            var dents_id = $(".dents_id").val();
            var b_id = $(".b_id").val();
            var r_id = $(".r_id").val();
            var y_study = $(".y_study").val();
            var remark = $(".remark").val();
            $.post("insert_room.php",{
                dents_id : dents_id,
                b_id : b_id,
                r_id : r_id,
                y_study : y_study,
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
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກນັກຮຽນເຂົ້າຫ້ອງຮຽນ ]</h3>     
                        <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                    </div>
                    <div class="col-lg-10">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">ປ້ອນລະຫັດນັກຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control dents_id" id="" placeholder="ປ້ອນຊັ້ນຮຽນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຊື່ນັກຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control fname" id="" placeholder="..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ນາມສະກຸນນັັກຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control lname" id="" placeholder="..!">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">ເພດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <select name=""class="form-control gender" id="">
                                            <option value="">ເລືອກເພດ:</option>
                                            <option value="ເພດຍີງ">ເພດຍີງ</option>
                                            <option value="ເພດຊາຍ">ເພດຊາຍ</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຊັ້ນຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
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
                                    <div class="form-group">
                                        <label for="">ຫ້ອງຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <select name=""class="form-control r_id" id="">
                                            <option value="">ເລືອກຊັ້ນຮຽນ</option>
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
                                <div class="form-group">
                                        <label for="">ສົກຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control y_study" id="" placeholder="ປ້ອນຊັ້ນຮຽນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ໝາຍເຫດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <textarea name=""class="form-control remark" id="" cols="3" rows="3"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group mb-1 py-4 text-center">
                                <button type="button" class="btn btn-outline-success button"> ບັນທຶກ</button>
                                <button type="reset" class="btn btn-outline-danger"> ລ້າງຂໍ້ມູນ</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>