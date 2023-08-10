<?php
include("../connect_db.php");
include("../connect_link.php");
$dis_id = $_GET['dis_id'];
$sql = mysqli_query($connect,"select a.pro_id,a.pro_name,b.dis_id,b.dis_name,b.remark from province as a,district as b where a.pro_id=b.pro_id and b.dis_id='$dis_id' ");
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
            var d = $(".dis_id").val();
            var a = $(".dis_name").val();
            var b = $(".pro_id").val();
            var c = $(".remark").val();
            $.post("save_dis.php",{
                dis_id : d,
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
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                    <form action="">
                    <div class="card-header bg-secondary text-white">
                    <p>
                    <h2><b> ບັນທຶກຂໍ້ມູນເມື່ອງ</b></h2>
                    </p>
                    </div>
                    <div class="card-body bg-warning text-white">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="form-group">
                                <label for=""><b>ຊື່ເມືອງ :</b></label>
                                <input type="hidden" value="<?php echo $data['dis_id'];?>" class="dis_id">
                                <input type="text" value="<?php echo $data['dis_name'];?>" class="form-control dis_name" placeholder="ປ້ອນເມື່ອງ..!">
                                </div>
                                <div class="form-group">
                                <label for=""><b>ເລືອກຊື່ແຂວງ :</b></label>
                                <select name="" class="form-control pro_id">
                                    <option value="<?php echo $data['pro_id'];?>"><?php echo $data['pro_name'];?></option>
                                    <?php 
                                    include("../connect_dbstock.php");
                                    $sql = mysqli_query($connect,"select *from province");
                                    while($data = mysqli_fetch_array($sql)){

                                    ?>
                                    <option value="<?php echo $data['pro_id'];?>"><?php echo $data['pro_name'];?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for=""><b>ໝາຍເຫດ :</b></label>
                                <textarea name="" value="<?php echo $data['remark'];?>" class="form-control remark"></textarea>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="form-group text-center p-2">
                            <label for=""></label>
                            <button type="button" class="btn btn-primary go"><I class="fa fa-save"></I> ບັນທຶກ</button>
                            <button type="reset" class="btn btn-danger"><I class="fa fa-eraser"></I> ລ້າງຂໍ້ມູນ</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="card-footer show"></div>
                </div>
                    </div>
                <div class="col-md-4"></div>
            </div>
    </div> 
</body>
</html>