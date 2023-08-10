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
            var date = $(".date").val();
            var blod = $(".blod").val();
            var g = $(".vill").val();
            var e = $(".pro_id").val();
            var f = $(".dis_id").val();
            var nation = $(".nation").val();
            var satus = $(".satus").val();
            var date_D = $(".date_D").val();
            var date_R = $(".date_R").val();
            var date_K = $(".date_K").val();
            var date_B = $(".date_B").val();
            var e_level = $(".e_level").val();
            var degree = $(".degree").val();
            var suject = $(".suject").val();
            var tel = $(".tel").val();
            var o = $(".remark").val();
            // if (a == "") {
            //     Swal.fire({
            //         position: 'top',
            //         icon: 'info',
            //         title: 'ກາລຸນາປ້ອນຂໍ້ມູນກ່ອນ..',
            //         showConfirmButton: false,
            //         timer: 1500
            //     })
            // } else {
                $.post("insert_tea.php", {
                        fname: a,
                        lname: b,
                        gender: c,
                        date: date,
                        blod: blod,
                        vill: g,
                        pro_id: e,
                        dis_id: f,
                        nation: nation,
                        satus: satus,
                        date_D: date_D,
                        date_R: date_R,
                        date_K: date_K,
                        date_B: date_B,
                        e_level: e_level,
                        degree: degree,
                        suject: suject,
                        tel: tel,
                        remark: o
                    },
                    function(output) {
                        $(".show").html(output);
                    });
           // }
        });
    });
</script>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center-white">
                        <p>
                        <h2><b> ຟອມບັນທຶກຊີວະປະຫວັດຄູ</b></h2>
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
                                        <input type="date" class="form-control date" placeholder="ປ້ອນວັນເດືອນປິເກິດ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ທິເກິດ :</label>
                                        <input type="text" class="form-control blod" placeholder="ປ້ອນທິເກິດ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ບ້ານຢູ່ປັບຈຸບັນ :</label>
                                        <input type="text" class="form-control vill" placeholder="ປ້ອນບ້ານຢູ່ປັດຈຸບັນ..!">
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
                                        <label for="">ຊົນເຜົາ :</label>
                                        <input type="text" class="form-control nation" name="" id=""placeholder="ປ້ອນຊົນເຜົາ..">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ໜ້າທີຮັບຜິດຊອບ :</label>
                                        <input type="text" class="form-control satus" placeholder="ປ້ອນເບີໂທ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ວດປສັງກັດລັດ :</label>
                                        <input type="date" class="form-control date_D" placeholder="ປ້ອນວດປສັງກັດລັດ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ວດປເຂົ້າພັກ :</label>
                                        <input type="date" class="form-control date_R" placeholder="ປ້ອນວດປເຂົ້າພັກ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ວດປເຂົ້າກຳມະບານ :</label>
                                        <input type="date" class="form-control date_K" placeholder="ປ້ອນວດປເຂົ້າກຳມະບານ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ວດປເຂົ້າຊາວໜ່ມ :</label>
                                        <input type="date" class="form-control date_B" placeholder="ປ້ອນວດປເຂົ້າຊາວໜ່ມ..!">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">ລະດັບການສຶກສາ :</label>
                                        <input type="text" class="form-control e_level" placeholder="ປ້ອນລະດັບການສຶກສາ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ລະດັບວິຊາສະເພາະ :</label>
                                        <input type="text" class="form-control degree" placeholder="ປ້ອນລະດັບວິຊາສະເພາະ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ວິຊາຮຽນຈົນ :</label>
                                        <input type="text" class="form-control suject" placeholder="ປ້ອນວິຊາຮຽນຈົນ..!">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ເບິໂທ :</label>
                                        <input type="text" class="form-control tel" placeholder="ເບິໂທ....">
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
            <!-- <div class="col-md-1"></div> -->
        </div>
    </div>
</body>

</html>