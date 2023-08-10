<?php
include("../connect_db.php");
include("../connect_link.php");
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
        $(".send").click(function(){
            var a = $(".pro_id").val();
            var b = $(".pro_name").val();
            var c = $(".remark").val();
            $.post("save_province.php",{
                pro_id : a,
                pro_name : b,
                remark : c
            },
            function(output){
                $(".show").html(output);
            });
        });
    });
</script>
<body>
    <?php
    $pro_id = $_GET['pro_id'];
    $sql = mysqli_query($connect,"select * from province where pro_id='$pro_id' ");
    $data = mysqli_fetch_array($sql);
    ?>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                    <p>
                    <h2><b> ບັນທຶກຂໍ້ມູນແຂວງ</b></h2>
                    </p>
                    </div>
                    <div class="card-body">
                       <form action="">
                       <div class="form-group p-2">
                        <label for=""><b>ຊື່ແຂວງ :</b></label>
                        <input type="hidden" value="<?php echo $data['pro_id'];?>" class="pro_id">
                        <input type="text" value="<?php echo $data['pro_name'];?>" class="form-control pro_name" placeholder="ກາລຸນາປ້ອນຊື່ແຂວງ..!">
                        </div>
                        <div class="form-group p-2">
                        <label for=""><b>ໝາຍເຫດ :</b></label>
                        <textarea name="" class="form-control remark"><?php echo $data['remark'];?></textarea>
                        </div>
                        <div class="form-group justify-center text-center">
                            <label for=""></label>
                            <button type="button" class="btn btn-outline-primary send"><i class="fa fa-save"></i> ບັນທຶກ</button>
                            <button type="reset" class="btn btn-outline-warning" onclick="window.location.reload()"><i class="fas fa-eraser"></i> ບັນທຶກ</button>
                        </div>
                       </form>
                    </div>
                    <div class="card-footer show"></div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
       
    </div>
</body>
</html>