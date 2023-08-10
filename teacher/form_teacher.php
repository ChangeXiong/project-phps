<?php 
 include("../connect_link.php");
 ?>
    <style>
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #F5F8FF;
        }
        .table{
            font-family:'Noto Sans Lao';
        }
        .modal-body{
            font-family:'Noto Sans Lao';
        }
        h5,h1{
            font-family:'Noto Sans Lao';
        }
        span{
            font-family:'Noto Sans Lao';
        }

    </style>
        <script>
        $(function(){
            $(".t_id").change(function() {
            var a = $(".t_id").val();
            $.post("get_gender.php", {
                    t_id: a
                },
                function(output) {
                    $("#show").val(output);
                });
                });
        });
        $(function(){
            $(".button").click(function(){
                var t_id = $(".t_id").val();
                var subject1 = $(".subject1").val();
                var subject2 = $(".subject2").val();
                var anchor1 = $(".anchor1").val();
                var anchor2 = $(".anchor2").val();
                var tel = $(".tel").val();
                var remark = $(".remark").val();
                $.post("insert_teacher.php",{
                    t_id : t_id,
                    subject1 : subject1,
                    subject2 : subject2,
                    anchor1 : anchor1,
                    anchor2 : anchor2,
                    tel : tel,
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
                    <div class="col-lg-12">
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກຄູສອນແຕ່ລະຫ້ອງ ]</h3>     
                        <div class="show">
                             <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">ຊື</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <select name=""class="form-control t_id" id="">
                                            <option value="">ເລຶອກຊື່ແລະນາມສະກຸນ</option>
                                            <?php
                                            include_once "../connect_db.php";
                                            $showf = mysqli_query($connect,"select t_id,fname,lname from tea_history");
                                            while($get = mysqli_fetch_array($showf)){
                                            ?>
                                            <option value="<?php echo $get['t_id'];?>"><?php echo $get['fname']?> <?php echo $get['lname'];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">ເພດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control gender" id="show" placeholder="ປ້ອນຊັ້ນຮຽນ..!">
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">ວິຊາສອນ 1</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <select name=""class="form-control subject1" id="">
                                            <option value="">ເລືອກວິຊາສອນ</option>
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
                                        <label for="">ວິຊາສອນ 2</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <select name=""class="form-control subject2" id="">
                                            <option value="">ເລືອກວິຊາສອນ</option>
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
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">ຊັ້ນສອນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control anchor1" id="" placeholder="ປ້ອນຊັ້ນຮຽນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">ຫ້ອງສອນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control anchor2" id="" placeholder="ປ້ອນຊັ້ນຮຽນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">ເບິໂທ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control tel" id="" placeholder="ປ້ອນຊັ້ນຮຽນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">ໝາຍເຫດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <textarea name=""class="form-control remark" id="" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center mb-2 py-2">
                                    <button type="button" class="btn btn-outline-primary button mb-2">ບັນທຶກ</button>
                                    <button type="reset" class="btn btn-outline-danger mb-2">ລ້າງຂໍ້ມູນ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>