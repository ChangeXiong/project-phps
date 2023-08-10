<?php
include_once "../connect_link.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        $(document).ready(function (e) {
        $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
        url: "insert_st.php",
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
</head>
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
                <form action="insert_st.php"id="uploadForm" method="post" enctype="multipart/form-data" accept="utf-8">
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
                                    <input type="file" class="form-control pic_img" name="pic_img" id=""accept="image/png, image/jpg, image/gif, image/jpeg"onchange="renderFile(event)">
                                </div>
                            </div>
                            <label for="">ລະຫັດນັກຮຽນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-home"></i></div>
                            <input type="text" name="dents_id" class="form-control dents_id" id=""placeholder="ປ້ອນລະຫັດນັກຮຽນ">
                            </div>
                            <label for="">ຊື່</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user-plus"></i></div>
                            <input type="text" name="fname" class="form-control fname" id=""placeholder="ປ້ອນຊື່..">
                            </div>
                            <label for="">ນາມສະກຸນ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-users"></i></div>
                            <input type="text" name="lname" class="form-control lname" id=""placeholder="ປ້ອນນາມສະກຸນ..">
                            </div>
                            <label for="">ເພດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-check"></i></div>
                            <select name="gender" class="form-control gender" id="">
                                <option value="">ເລືອກເພດ</option>
                                <option value="ເພດຍິງ">ເພດຍິງ</option>
                                <option value="ເພດຊາຍ">ເພດຊາຍ</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                           
                            <label for="">ວັນເດືອນປິເກິດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-calendar"></i></div>
                            <input type="date" name="dob" class="form-control dob" id="">
                            </div>
                            <label for="" class="py-2">ບ້ານ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-building"></i></div>
                            <input type="text" name="vill" class="form-control vill" id=""placeholder="ປ້ອນບ້ານ..">
                            </div>
                            <label for="">ເມືອງ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <input type="text" name="dis" class="form-control dis" id=""placeholder="ປ້ອນເມືອງ..">
                            </div>
                            <label for="">ແຂວງ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-user-plus"></i></div>
                            <input type="text" name="pro" class="form-control pro" id=""placeholder="ປ້ອນແຂວງ..">
                            </div>
                            <label for="">ສັນຊາດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-users"></i></div>
                            <input type="text" name="tribes" class="form-control tribes" id=""placeholder="ປ້ອນສັນຊາດ..">
                            </div>
                           
                        </div>
                        <div class="col-md-4">
                            <label for="">ເຊື່ອຊາດ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fa fa-user"></i></div>
                            <input type="text" name="nation" class="form-control nation" id=""placeholder="ປ້ອນເຊື່ອຊາດ">
                            </div>
                            <label for="">ຊົນເຜົ່າ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fa fa-user"></i></div>
                            <input type="text" name="lgroups" class="form-control lgroups" id=""placeholder="ປ້ອນຊົນເຜົາ..">
                            </div>
                            <label for="">ເບິໂທ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fa fa-user"></i></div>
                            <input type="text" name="tel" class="form-control tel" id=""placeholder="ປ້ອນເບິໂທ">
                            </div>
                            <label for="">ຊື່ຜູ້ປົກຄອງນັກຮຽນ</label>
                            <div class="input-group">
                                <div class="input-group-text text-success"><i class="fas fa-users"></i></div>
                                <select name="g_id"class="form-control g_id" id="">
                                <option value="">ເລືອກຜູ້ປົົກຄອງຂອງນັກຮຽນ</option>
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
                                <textarea name="remark" id="" class="form-control remark"></textarea>
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
</html>