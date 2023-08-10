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
            $(".button").click(function(){
                var b_id = $(".b_id").val();
                var r_name = $(".r_name").val();
                var remark = $(".remark").val();
                $.post("insert_r.php",{
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
    <style>
        .error{
            color: red;
            font-style: italic;
        }
    </style>
<body>
    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-10">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກຫ້ອງຮຽນ: ]</h3>     
                        <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                    </div>
                    <div class="col-lg-10">
                        <form action=""id="form" novalidate>
                        <div class="form-group mb-2">
                            <label for="">ຊັ້ນຮຽນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <select name="bclass"class="form-control b_id" id="Bclass" required>
                                <option value="">ເລືອກຊັ້ນຮຽນ</option>
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
                            <div role="alert" class="Bclass mt-2">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ຫ້ອງຮຽນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user"></i></div>
                            <input type="text" name="lname" class="form-control r_name" id="Rclass" placeholder="ປ້ອນຫ້ອງຮຽນ..!"title="ຕົວຢ່າງ: ມ../.."required>
                            
                            </div>
                            <div role="alert" class="Rclass mt-2">
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
                            <button type="button" class="btn btn-outline-primary button mb-2">ບັນທຶກ</button>
                            <button type="reset" class="btn btn-outline-danger button mb-2">ລ້າງຂໍ້ມູນ</button>
                        </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <script src="script.js"></script>
</body>