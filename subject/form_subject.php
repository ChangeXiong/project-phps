<?php
include_once "../connect_link.php";
?>
<script>
        $(function(){
            $(".button").click(function(){
                var subject = $(".subject").val();
                $.post("insert_subject.php",{
                    subject : subject
                },
                function(output){
                    $(".show").html(output);
                });
            });
        });
    </script>
<body>
<div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h3 class="pb-4"align="center">[ ຟອມບັນທຶກວິຊາຮຽນ ]</h3>     
                        <div class="show">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                    </div>
                    <div class="col-lg-10">
                        <form action="">
                        <div class="form-group mb-2">
                            <label for="">ວິຊາ</label>
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <input type="text" name="lname" class="form-control subject" id="" placeholder="ປ້ອນວິຊາ..!">
                            </div>
                        </div>
                       
                        <div class="form-group text-center mb-2 py-2">
                            <button type="button" class="btn btn-outline-primary button mb-2">ບັນທຶກ</button>
                            <button type="reset" class="btn btn-outline-danger button mb-2">ລ້າງຂໍ້ມູນ</button>
                        </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>