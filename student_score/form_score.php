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
</head>
<script>
            $(function(){
        $(".b_id").change(function(){
            var number1 = $(".b_id").val();
            $.post("get_r_class.php",{
                number : number1
            },
            function(output){
                $(".r_id").html(output);
            });
        });
    });
        $(function(){
            $(".r_id").change(function(){
                var r_id = $(".r_id").val();
                $.post("get_showname.php",{
                    r_id : r_id
                },
                function(output){
                    $(".fname").html(output);
                });
            });
        });
        $(function(){
            $(".fname").change(function(){
                var fname = $(".fname").val();
                $.post("get_lname.php",{
                    r_id : fname
                },
                function(output){
                    $(".lname").val(output);
                });
            });
        });
        $(function(){
        $(".laguage,.literature,.mathermatics,.it,.fnaural,.society,.population,.art,.mission,.english").keyup(function(){
            var a = parseInt($(".laguage").val());
            var b = parseInt($(".literature").val());
            var c = parseInt($(".mathermatics").val());
            var d = parseInt($(".it").val());
            var e = parseInt($(".fnaural").val());
            var f = parseInt($(".society").val());
            var g = parseInt($(".population").val());
            var j = parseInt($(".art").val());
            var k = parseInt($(".mission").val());
            var t = parseInt($(".english").val());
            var totals = parseFloat(a + b + c + d + e + f + g + j + k + t) || 0;
            $(".amount").val(totals);
        });
    });
    $(function(){
        $("#button-addon2").click(function(){
            var laguage = $(".laguage").val();
            var literature = $(".literature").val();
            var mathermatics = $(".mathermatics").val();
            var it = $(".it").val();
            var fnaural = $(".fnaural").val();
            var society = $(".society").val();
            var population = $(".population").val();
            var art = $(".art").val();
            var mission = $(".mission").val();
            var english = $(".english").val();
            $.post("get_average.php",{
                laguage : laguage,
                literature : literature,
                mathermatics : mathermatics,
                it : it,
                fnaural : fnaural,
                society : society,
                population : population,
                art : art,
                mission : mission,
                english : english
            },
            function(output){
                $(".average").val(output).show();
            });
        });
    });
    $(function(){
        $(".button").click(function(){
            var inroom_id = $("#inroom_id").val();
            var month = $(".month").val();
            var laguage = $("#laguage").val();
            var literature = $(".literature").val();
            var mathermatics = $(".mathermatics").val();
            var it = $(".it").val();
            var fnaural = $(".fnaural").val();
            var society = $(".society").val();
            var population = $(".population").val();
            var art = $(".art").val();
            var mission = $(".mission").val();
            var english = $(".english").val();
            var amount = $(".amount").val();
            var average = $(".average").val();
            $.post("insert_score.php",{
                inroom_id : inroom_id,
                month : month,
                laguage : laguage,
                literature : literature,
                mathermatics : mathermatics,
                it : it,
                fnaural : fnaural,
                society : society,
                population : population,
                art : art,
                mission : mission,
                english : english,
                amount : amount,
                average : average
            },
            function(output){
                $(".show").html(output);
            });
        });
    });
</script>
<body>
<div class="flex-container">
        <div class="container-fluid">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກຄະແນນເດືອນ ]</h3>     
                        <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                    </div>
                    <div class="col-lg-10">
                        <form action="">
                            <div class="row">
                                <div class="col-md-3">
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
                                        <label for="">ເດືອນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <select name=""class="form-control month" id="">
                                            <option value="">ເລືອກເດືອນ.</option>
                                            <option value="ເດືອນ9">ເດືອນ 9.</option>
                                            <option value="ເດືອນ10">ເດືອນ 10.</option>
                                            <option value="ເດືອນ11">ເດືອນ 11.</option>
                                            <option value="ເດືອນ12">ເດືອນ 12.</option>
                                            <option value="ເດືອນ1">ເດືອນ 1.</option>
                                            <option value="ເດືອນ2">ເດືອນ 2.</option>
                                            <option value="ເດືອນ3">ເດືອນ 3.</option>
                                            <option value="ເດືອນ4">ເດືອນ 4.</option>
                                            <option value="ເດືອນ5">ເດືອນ 5.</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ພາສາລາວ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control laguage" id="laguage" placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ປະຫັວດສາດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control literature" id="" placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">ຫ້ອງຮຽນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <select name=""class="form-control r_id" id="">
                                            <option value="">ເລືອກຫ້ອງຮຽນ</option>
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
                                    <div class="form-group">
                                        <label for="">ຄະນິດສາດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name=""class="form-control mathermatics" id=""placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ໄອທີ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name=""class="form-control it" id=""placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ວິທະຍາສາດທຳມະຊາດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name=""class="form-control fnaural" id=""placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">ຊື</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <select name=""class="form-control fname" id="inroom_id">
                                            <option value="">ເລືອກຊື່</option>
                                            <?php
                                            include_once "../connect_db.php";
                                            $smp = mysqli_query($connect,"select a.inroom_id,b.dents_id,b.fname,b.lname from set_st_room as a,student_biography as b where a.dents_id=b.dents_id");
                                            while($showget = mysqli_fetch_array($smp)){
                                            ?>
                                            <option value="<?php echo $showget['inroom_id'];?>"><?php echo $showget['fname'];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ພູມສາດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control society" id="" placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ສືກສາພົມລະເມືອງ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control population" id="" placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ສິລະປະ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="lname" class="form-control art" id="" placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">ນາມສະກຸນ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="" class="form-control lname" id=""placeholder="ປ້ອນນາມສະກຸນ..">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ພະລະສືກສາ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="class_name" class="form-control mission" id="class_name" placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ພາສາອັງກິດ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="class_name" class="form-control english" id="class_name" placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຄະແນນລວມ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="class_name" class="form-control amount" id="class_name" placeholder="ປ້ອນຄະແນນ..!">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ສະເລ່ຍ</label>
                                        <div class="input-group">
                                        <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                                        <input type="text" name="class_name" class="form-control average" id="class_name" placeholder="ປ້ອນຄະແນນ..!">
                                        <button class="btn btn-outline-success" type="button" id="button-addon2">ສະເລ່ຍ</button>
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
</html>