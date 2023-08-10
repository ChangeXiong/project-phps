<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$dents_id = $_GET['dents_id'];
$mylove = mysqli_query($connect,"SELECT a.dents_id,a.pic_img,a.fname,a.lname,a.gender,a.dob,a.vill,a.dis,a.pro,a.tribes,a.nation,a.lgroups,a.tel,a.remark,
b.g_id,b.fnamef,b.ftell,b.fnamem,b.mtell FROM student_biography as a,guardian as b WHERE a.g_id=b.g_id and a.dents_id='$dents_id' ");
$show = mysqli_fetch_array($mylove);
?>
<script>
        $(document).ready(function (e) {
        $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
        url: "save_update.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data)
        {
        $(".show").html(data);
        },
        error: function() 
        {
        } 
        });
        }));
        });
	
	</script>
<body>
    <div class="container-fluid py-2">
        <div class="card">
            <div class="card-header border-primary text-white bg-primary">
                <div class="card-title">ຟອມບັນທຶກຊີວະປະຫັວດຂອງນັກຮຽນ</div>
            </div>
            <div class="card-body">
            <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                <form action="save_update.php"id="uploadForm" method="post" enctype="multipart/form-data" accept="utf-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="box">
                                        <img class="text"id="preview" alt="" style="height: 80px;width: 60px;">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <label for="">ເລືອກຮູບພາບ</label>
                                
                                    <input type="file" class="form-control pic_img" value="<img src='pic_image/<?php echo $show['pic_img'];?>'>" name="pic_img" id=""accept="image/png, image/jpg, image/gif, image/jpeg"onchange="renderFile(event)">
                                </div>
                            </div>
                            <label for="">ລະຫັດນັກຮຽນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-home"></i></div>
                            <input type="text" readonly value="<?php echo $show['dents_id'];?>" name="dents_id" class="form-control dents_id" id="">
                            </div>
                            <label for="">ຊື່</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user-plus"></i></div>
                            <input type="text"value="<?php echo $show['fname'];?>" name="fname" class="form-control fname" id="">
                            </div>
                            <label for="">ນາມສະກຸນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-users"></i></div>
                            <input type="text"value="<?php echo $show['lname'];?>" name="lname" class="form-control lname" id="">
                            </div>
                            <label for="">ເພດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-check"></i></div>
                            <select name="gender" class="form-control gender" id="">
                                <option value="<?php echo $show['gender'];?>"><?php echo $show['gender'];?></option>
                                <option value="ເພດຍິງ">ເພດຍິງ</option>
                                <option value="ເພດຊາຍ">ເພດຊາຍ</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                           
                            <label for="">ວັນເດືອນປິເກິດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-calendar"></i></div>
                            <input type="date"value="<?php echo $show['dob'];?>" name="dob" class="form-control dob" id="">
                            </div>
                            <label for="" class="py-2">ບ້ານ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-building"></i></div>
                            <input type="text"value="<?php echo $show['vill'];?>" name="vill" class="form-control vill" id="">
                            </div>
                            <label for="">ເມືອງ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <input type="text"value="<?php echo $show['dis'];?>" name="dis" class="form-control dis" id="">
                            </div>
                            <label for="">ແຂວງ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user-plus"></i></div>
                            <input type="text"value="<?php echo $show['pro'];?>" name="pro" class="form-control pro" id="">
                            </div>
                            <label for="">ສັນຊາດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-users"></i></div>
                            <input type="text"value="<?php echo $show['tribes'];?>" name="tribes" class="form-control tribes" id="">
                            </div>
                           
                        </div>
                        <div class="col-md-4">
                            <label for="">ເຊື່ອຊາດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fa fa-user"></i></div>
                            <input type="text"value="<?php echo $show['nation'];?>" name="nation" class="form-control nation" id="">
                            </div>
                            <label for="">ຊົນເຜົ່າ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fa fa-user"></i></div>
                            <input type="text"value="<?php echo $show['lgroups'];?>" name="lgroups" class="form-control lgroups" id="">
                            </div>
                            <label for="">ເບິໂທ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fa fa-user"></i></div>
                            <input type="text"value="<?php echo $show['tel'];?>" name="tel" class="form-control tel" id="">
                            </div>
                            <label for="">ຊື່ຜູ້ປົກຄອງນັກຮຽນ</label>
                            <div class="input-group">
                                <div class="input-group-text text-success"><i class="fas fa-users"></i></div>
                                <select name="g_id"class="form-control g_id" id="">
                                <option value="<?php echo $show['g_id'];?>"><?php echo $show['fnamef'];?></option>
                                <?php
                                include("../connect_db.php");
                                $msql = mysqli_query($connect,"SELECT g_id,fnamef,fnamem FROM guardian");
                                while($sol = mysqli_fetch_array($msql)){
                                ?>
                                <option value="<?php echo $sol[0];?>"><?php echo $sol[1];?></option>
                                <?php
                                }
                                ?>
                            </select>
                            </div>
                            <label for="">ໝາຍເຫດ:</label>
                                <textarea name="remark" id="" class="form-control remark"><?php echo $show['remark'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group text-center py-3">
                            <button type="submit" class="btn btn-primary mb-2 button">ບັນທືນຂໍ້ມູນ</button>
                            <button type="reset"onclick="windon.location.reload()" class="btn btn-danger mb-2">ລ້າງຂໍ້ມູນ</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var renderFile = function(event){
            var r = new FileReader();
            r.onload = function(){
                var preview = document.getElementById('preview');
                preview.src = r.result;
            };
            r.readAsDataURL(event.target.files[0]);
        };
    </script>
</body>