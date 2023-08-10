<?php
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
        $(".go").click(function(){
            var a = $(".pro_name").val();
            var b = $(".remark").val();
            if(a == ""){
                Swal.fire({
        position: 'top',
        icon: 'error',
        title: 'ກາລຸນາປ້ອນຊື່ແຂວງ..!',
        showConfirmButton: false,
        timer: 1500
    })
            }else{
            $.post("insert_province.php",{
                pro_name : a,
                remark : b
            },
            function(output){
                $(".show").html(output);
            });
            }
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
                    <div class="card-header bg-dark text-white">
                        <div class="card-title text-center"><b>ຟອມບັນທືກແຂວງ.</b></div>
                    </div>
                    <div class="card-body">
                       <form action="">
                       <div class="form-group p-2">
                        <label for=""><b>ຊື່ແຂວງ :</b></label>
                        <input type="text" class="form-control pro_name" placeholder="ກາລຸນາປ້ອນຊື່ແຂວງ..!">
                        </div>
                        <div class="form-group p-2">
                        <label for=""><b>ໝາຍເຫດ :</b></label>
                        <textarea name="" class="form-control remark"></textarea>
                        </div>
                        <div class="form-group justify-center text-center">
                            <label for=""></label>
                            <button type="button" class="btn btn-outline-primary go"><i class="fa fa-save"></i> ບັນທຶກ</button>
                            <button type="reset" class="btn btn-outline-warning" onclick="window.location.reload()"><i class="fas fa-eraser"></i> ບັນທຶກ</button>
                        </div>
                       </form>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
       
    </div>
</body>
</html>