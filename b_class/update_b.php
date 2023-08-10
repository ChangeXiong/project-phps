<?php 
 include("../connect_link.php");
 include("../connect_db.php");
 $b_id = $_GET['b_id'];
 $result = mysqli_query($connect,"SELECT * FROM b_class WHERE b_id='$b_id' ");
 $select = mysqli_fetch_array($result);
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
            $(".button").click(function(){
                var b_id = $(".b_id").val();
                var bl_room = $(".bl_room").val();
                var remark = $(".remark").val();
                $.post("save_b.php",{
                    b_id : b_id,
                    bl_room : bl_room,
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
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກຊັ້ນ ]</h3>     
                        <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                    </div>
                    <div class="col-lg-10">
                        <form action="">
                        <div class="form-group mb-2">
                            <label for="">ຊັ້ນຮຽນ</label>
                            <input type="hidden" name=""value="<?php echo $select['b_id'];?>" class="b_id" id="">
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <input type="text" value="<?php echo $select['b_name'];?>" name="lname" class="form-control bl_room" id="" placeholder="ປ້ອນຊັ້ນຮຽນ..!">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ໝາຍເຫດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <textarea name="" class="form-control remark"id="" cols="5" rows="2"><?php echo $select['remark'];?></textarea>
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