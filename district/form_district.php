<?php
include("../connect_link.php")
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
            var a = $(".dis_name").val();
            var b = $(".pro_id").val();
            var c = $(".remark").val();
            $.post("insert_district.php",{
                dis_name : a,
                pro_id : b,
                remark : c
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
            <div class="col-md-3"></div>
                <div class="col-md-6">
                <div class="card mt-5 show"></div>
                    <div class="card my-2">
                    
                    <form action="">
                    <div class="card-header bg-white text-black">
                    <div class="card-title"><b>ຟອມບັນທືກເມືອງ.</b></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="form-group p-2">
                                <label for=""><b>ຊື່ເມືອງ :</b></label>
                                <input type="text" class="form-control dis_name" placeholder="ປ້ອນເມື່ອງ..!">
                                </div>
                                <div class="form-group p-2">
                                <label for=""><b>ເລືອກຊື່ແຂວງ :</b></label>
                                <select name="" class="form-control pro_id">
                                    <option value="">ກາລຸນາເລືອກແຂວງ :</option>
                                    <?php 
                                    include("../connect_db.php");
                                    $sql = mysqli_query($connect,"select *from province");
                                    while($data = mysqli_fetch_array($sql)){

                                    ?>
                                    <option value="<?php echo $data['pro_id'];?>"><?php echo $data['pro_name'];?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                                <div class="form-group p-2">
                                <label for=""><b>ໝາຍເຫດ :</b></label>
                                <textarea name="" class="form-control remark"></textarea>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            
                        </div>
                        <div class="form-group text-center">
                            <label for=""></label>
                            <button type="button" class="btn btn-primary go"><I class="fa fa-save"></I> ບັນທຶກ</button>
                            <button type="reset" class="btn btn-danger"><I class="fa fa-eraser"></I> ລ້າງຂໍ້ມູນ</button>
                            </div>
                    </div>
                    </form>
                    
                </div>
                    </div>
                <div class="col-md-3"></div>
            </div>
    </div>
</body>
</html>