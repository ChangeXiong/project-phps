<?php
include("../connect_link.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<script>
    $(function() {
        $(".pro_id").change(function() {
            var a = $(".pro_id").val();
            $.post("get_district.php", {
                    pro_id: a
                },
                function(output) {
                    $(".dis_id").html(output);
                });
        });
    
        $(".go").click(function() {
            var a = $(".fname").val();
            var b = $(".lname").val();
            var c = $(".gender").val();
            var d = $(".dob").val();
            var e = $(".pro_id").val();
            var f = $(".dis_id").val();
            var g = $(".vill").val();
            var h = $(".tel").val();
            var i = $(".status").val();
            var l = $(".username").val();
            var m = $(".password").val();
            var p = $(".cpass").val();
            var o = $(".remark").val();
            if (a == "") {
                Swal.fire({
                    position: 'top',
                    icon: 'info',
                    title: 'ກາລຸນາປ້ອນຂໍ້ມູນກ່ອນ..',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else {
                $.post("insert_user.php", {
                        fname: a,
                        lname: b,
                        gender: c,
                        dob: d,
                        pro_id: e,
                        dis_id: f,
                        vill: g,
                        tel: h,
                        status: i,
                        username: l,
                        password: m,
                        cpass: p,
                        remark: o
                    },
                    function(output) {
                        $(".show").html(output);
                    });
            }
        });
    });
</script>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center-white">
                        <p>
                        <h2><b> ຟອມບັນທຶກຂໍ້ມູນຜູ້ນຳໃຊ້</b></h2>
                        </p>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">ຊື່ :</label>
                                        <input type="text" class="form-control fname" placeholder="ປ້ອນຊື່..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ນາມສະກຸນ :</label>
                                        <input type="text" class="form-control lname" placeholder="ປ້ອນນາມສະກຸນ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ເພດ :</label>
                                        <select name="" class="form-control gender" id="">
                                            <option value="">ເລືອກເພດ</option>
                                            <option value="ເພດຊາຍ">ເພດຊາຍ</option>
                                            <option value="ເພດຍິງ">ເພດຍິງ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ວັນເດືອນປິເກິດ :</label>
                                        <input type="date" class="form-control dob" placeholder="ປ້ອນວັນເດືອນປິເກິດ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຊື່ແຂວງ :</label>
                                        <select name="" id="" class="form-control pro_id">
                                            <option value="">ເລືອກແຂວງ </option>
                                            <?php
                                            include("../connect_db.php");
                                            $sql = mysqli_query($connect, "select pro_id,pro_name from province");
                                            while ($da = mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?php echo $da['pro_id']; ?>"><?php echo $da['pro_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">ຊື່ເມືອງ :</label>
                                        <select name="" id="" class="form-control dis_id">
                                            <option value="">ເລືອກເມືອງ : </option>
                                            <?php
                                            $sql = mysqli_query($connect, "select dis_id,dis_name from district");
                                            while ($date = mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?php echo $date['dis_id']; ?>"><?php echo $date['dis_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຊື່ບ້ານ :</label>
                                        <input type="text" class="form-control vill" name="" id=""placeholder="ປ້ອນບ້ານ..">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ເບີໂທ :</label>
                                        <input type="text" class="form-control tel" placeholder="ປ້ອນເບີໂທ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ສະຖານະ :</label>
                                        <select name="" id="" class="form-control status">
                                            <option value="">ເລືອກສະຖານະ :</option>
                                            <option value="ຜູ້ບໍລິຫານ">ຜູ້ບໍລິຫານ</option>
                                            <option value="ຜູ້ນຳໃຊ້">ຜູ້ນຳໃຊ້</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຊື່ຜູ້ນຳໃຊ້ :</label>
                                        <input type="text" class="form-control username" placeholder="ປ້ອນຊື່ຜູ້ນຳໃຊ້..!">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">ລະຫັດຜ່ານ :</label>
                                        <input type="password" class="form-control password" placeholder="ປ້ອນລະຫັດຜ່ານ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຢືນຢັນລະຫັດ :</label>
                                        <input type="password" class="form-control cpass" placeholder="...........">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ໝາຍເຫດ :</label>
                                        <textarea name="" class="form-control remark"></textarea>
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
            <div class="col-md-1"></div>
        </div>
    </div>
</body>

</html>