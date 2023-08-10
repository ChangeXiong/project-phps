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
        $(function(){
            $(".button").click(function(){
                var fnamef = $(".fnamef").val();
                var fage = $(".fage").val();
                var fjob = $(".fjob").val();
                var ftell = $(".ftell").val();
                var fnamem = $(".fnamem").val();
                var mage = $(".mage").val();
                var mjob = $(".mjob").val();
                var mtell = $(".mtell").val();
                $.post("gua_insert.php",{
                    fnamef : fnamef,
                    fage : fage,
                    fjob : fjob,
                    ftell : ftell,
                    fnamem : fnamem,
                    mage : mage,
                    mjob : mjob,
                    mtell : mtell
                },
                function(output){
                    $(".show").html(output);
                });
            });
        });
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1><div class="card-title text-center">ຟອມບັນທຶກຂໍ້ມູນຜູ້ປົກຄອງ</div></h1>
            </div>
            <div class="card-body">
                <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ຊື່ ແລະ ນາມສະກຸນພໍ່</label>
                                <input type="text" name=""class="form-control fnamef" id=""placeholder="ປ້ອນຊື່ພໍ່..!">
                            </div>
                            <div class="form-group">
                                <label for="">ອາຍຸພໍ່</label>
                                <input type="text" name=""class="form-control fage" id=""placeholder="ປ້ອນອາຍຸພໍ່..!"onKeyUp="if(isNaN(this.value)){ Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'ກະລຸນາປ້ອນອາຍູ',
    showConfirmButton: false,
    timer: 1500
    }); this.value='';}">
                            </div>
                            <div class="form-group">
                                <label for="">ອາຊິບພໍ່</label>
                                <input type="text" name=""class="form-control fjob" id=""placeholder="ປ້ອນອາຊິບພໍ່..!">
                            </div>
                            <div class="form-group">
                                <label for="">ເບິໂທພໍ່</label>
                                <input type="text" name=""class="form-control ftell" id=""placeholder="ປ້ອນເບິໂທພໍ່..! 020 ..."onKeyUp="if(isNaN(this.value)){ Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'ກະລຸນາປ້ອນເບີໂທ',
    showConfirmButton: false,
    timer: 1500
    }); this.value='';}">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">ຊື່ ແລະ ນາມສະກຸນແມ່</label>
                                <input type="text" name=""class="form-control fnamem" id=""placeholder="ປ້ອນຊື່ແມ່..!">
                            </div>
                            <div class="form-group">
                                <label for="">ອາຍຸແມ່</label>
                                <input type="text" name=""class="form-control mage" id=""placeholder="ປ້ອນອາຍຸແມ່..!"onKeyUp="if(isNaN(this.value)){ Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'ກະລຸນາປ້ອນອາຍູ',
    showConfirmButton: false,
    timer: 1500
    }); this.value='';}">
                            </div>
                            <div class="form-group">
                                <label for="">ອາຊິບແມ່</label>
                                <input type="text" name=""class="form-control mjob" id=""placeholder="ປ້ອນອາຊິບແມ່..!">
                            </div>
                            <div class="form-group">
                                <label for="">ເບິໂທແມ່</label>
                                <input type="text" name=""class="form-control mtell" id=""placeholder="ປ້ອນເບິໂທແມ່..! 020 ..."onKeyUp="if(isNaN(this.value)){ Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'ກະລຸນາປ້ອນເບີໂທ',
    showConfirmButton: false,
    timer: 1500
    }); this.value='';}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                        <button type="button" class="form-control bg-success mb-2 button">ບັນທຶກ</button>
                        </div>
                        <div class="col-md-6">
                        <button type="reset" onclick="windon.location.reload()" class="form-control bg-primary mb-2">ລ້າງຂໍ້ມູນ</button>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>