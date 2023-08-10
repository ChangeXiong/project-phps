<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$r_id = $_GET['r_id'];
$msy = mysqli_query($connect,"SELECT a.r_id,a.r_name,a.remark,b.b_id,b.b_name FROM r_class as a,b_class as b where a.b_id=b.b_id and a.r_id='$r_id' ");
$result = mysqli_fetch_array($msy);
?>
  <script>
        $(function(){
            $(".button").click(function(){
                var r_id = $(".r_id").val();
                var b_id = $(".b_id").val();
                var r_name = $(".r_name").val();
                var remark = $(".remark").val();
                $.post("save_r.php",{
                    r_id : r_id,
                    b_id : b_id,
                    r_name : r_name,
                    remark : remark,
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
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກຫ້ອງຮຽນ ]</h3>     
                        <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                    </div>
                    <div class="col-lg-10">
                        <form action="">
                        <div class="form-group mb-2">
                            <label for="">ຊັ້ນຮຽນ</label>
                            <input type="hidden" name=""value="<?php echo $result['r_id'];?>" class="r_id" id="">
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <select name=""class="form-control b_id" id="">
                                <option value="<?php echo $result['b_id'];?>"><?php echo $result['b_name'];?></option>
                                <?php
                                include_once "../connect_db.php";
                                $select = mysqli_query($connect,"SELECT b_id,b_name FROM b_class");
                                while($show = mysqli_fetch_array($select)){
                                ?>
                                <option value="<?php echo $show['b_id'];?>"><?php echo $show['b_name'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ຫ້ອງຮຽນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <input type="text" name="lname" value="<?php echo $result['r_name'];?>" class="form-control r_name" id="" placeholder="ປ້ອນຫ້ອງຮຽນ..!">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ໝາຍເຫດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <textarea name="" class="form-control remark"id="" cols="5" rows="2"><?php echo $result['remark'];?></textarea>
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