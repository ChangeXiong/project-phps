<?php
include("../connect_db.php");
include("../connect_link.php");
$user_id = $_GET['user_id'];
$sql = mysqli_query($connect,"select a.pro_id,a.pro_name,b.dis_id,b.dis_name
,d.user_id,d.fname,d.lname,d.gender,d.dob,d.vill,d.tel,d.status,d.remark from province as a,district as b,
users as d where a.pro_id=d.pro_id and b.dis_id=d.dis_id and d.user_id='$user_id' ");
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script>
    $(function(){
        $(".go").click(function(){
            var p = $(".user_id").val();
            var a = $(".fname").val();
            var b = $(".lname").val();
            var c = $(".gender").val();
            var d = $(".dob").val();
            var e = $(".pro_id").val();
            var f = $(".dis_id").val();
            var g = $(".vill").val();
            var h = $(".tel").val();
            var o = $(".remark").val();
            $.post("save_user.php",{
                user_id : p,
                fname : a,
                lname : b,
                gender : c,
                dob : d,
                pro_id : e,
                dis_id : f,
                vill : g,
                tel : h,
                remark : o
            },
            function(output){
                $(".show").html(output);
            });
        });
    });
</script>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-center-white">
                        <p>
                        <h2><b> ຟອມບັນທຶກຂໍ້ມູນຜູ້ນຳໃຊ້</b></h2>
                        </p>
                    </div>
                    <div class="card-body">
                        <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="">ຊື່ :</label>
                                <input type="hidden" value="<?php echo $data['user_id'];?>" class="user_id">
                                <input type="text" value="<?php echo $data['fname'];?>" class="form-control fname" placeholder="ປ້ອນຊື່..!">
                                </div>
                                <div class="form-group">
                                <label for="">ນາມສະກຸນ :</label>
                                <input type="text" value="<?php echo $data['lname'];?>" class="form-control lname" placeholder="ປ້ອນນາມສະກຸນ..!">
                                </div>
                                <div class="form-group">
                                <label for="">ເພດ :</label>
                                <select name="" class="form-control gender" id="">
                                    <option value="<?php echo $data['gender'];?>"><?php echo $data['gender'];?></option>
                                    <option value="ເພດຊາຍ">ເພດຊາຍ</option>
                                    <option value="ເພດຍິງ">ເພດຍິງ</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="">ວັນເດືອນປິເກິດ :</label>
                                <input type="date" value="<?php echo $data['dob'];?>" class="form-control dob" placeholder="ປ້ອນວັນເດືອນປິເກິດ..!">
                                </div>
                                <div class="form-group">
                                <label for="">ຊື່ແຂວງ :</label>
                                <select name="" id="" class="form-control pro_id">
                                    <option value="<?php echo $data['pro_id'];?>"><?php echo $data['pro_name'];?></option>
                                    <?php
                                    include("../connect_db.php");
                                    $sql = mysqli_query($connect,"select pro_id,pro_name from province");
                                    while($da = mysqli_fetch_array($sql)){
                                    ?>
                                    <option value="<?php echo $da['pro_id'];?>"><?php echo $da['pro_name'];?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="">ຊື່ເມືອງ :</label>
                                <select name="" id="" class="form-control dis_id">
                                    <option value="<?php echo $data['dis_id'];?>"><?php echo $data['dis_name'];?> </option>
                                    <?php
                                    $sql = mysqli_query($connect,"select dis_id,dis_name from district");
                                    while($date = mysqli_fetch_array($sql)){
                                    ?>
                                    <option value="<?php echo $date['dis_id'];?>"><?php echo $date['dis_name'];?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                               <input type="text"class="form-control vill" name=""value="<?php echo $data['vill'];?>" id="">
                                </div>
                                <div class="form-group">
                                <label for="">ເບີໂທ :</label>
                                <input type="text" value="<?php echo $data['tel'];?>" class="form-control tel" placeholder="ປ້ອນເບີໂທ..!">
                                </div>
                                <div class="form-group">
                                <label for="">ໝາຍເຫດ :</label>
                                <textarea name="" class="form-control remark"><?php echo $data['remark'];?></textarea>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="card-footer">
                    <div class="form-group text-center">
                                <label for=""></label>
                                <button type="button" class="btn btn-danger go"><i class="fa fa-save"></i> ບັນທຶກ</button>
                                <button type="reset" class="btn btn-primary" onclick="window.location.reload()"><i class="fa fa-eraser"></i> ລົບ</button>
                            </div>
                            <div class="show"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>