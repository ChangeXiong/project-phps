<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$sub_id = $_GET['sub_id'];
$msql = "SELECT * FROM subject WHERE sub_id='$sub_id' ";
$result = mysqli_query($connect,$msql);
$row = mysqli_fetch_array($result);
?>
<script>
        $(function(){
            $(".button").click(function(){
                var sub_id = $("#sub_id").val();
                var subject = $(".subject").val();
                $.post("save_subject.php",{
                    sub_id : sub_id,
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
                            <input type="hidden" name="" value="<?php echo $row['sub_id'];?>" id="sub_id">
                            <div class="input-group">
                            <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                            <input type="text" name="lname" class="form-control subject" id="" value="<?php echo $row['subject'];?>">
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