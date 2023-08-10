<?php
include_once "../connect_db.php";
include_once "../connect_link.php";
$b_id = $_POST['b_id'];
$r_name = $_POST['r_name'];
$remark = $_POST['remark'];

            $query = "select * from b_class where b_id='$b_id' ";
            $show = mysqli_query($connect,$query);
            if(mysqli_num_rows($show) > 0){
                $mydata = mysqli_fetch_array($show);
                $b_name = $mydata['b_name'];
                if (str_starts_with($r_name, $b_name)) {
                    $msqk = mysqli_query($connect,"INSERT INTO r_class SET
                        b_id = '$b_id',
                        r_name = '$r_name',
                        remark = '$remark' ");
                    if($msqk){
                        echo"
                        <div class='alert alert-success' role='alert'>
                        ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ
                        
                        </div>
                        <script>
                        window.setTimeout(function(){
                            location='select_r.php';
                        },1500);
                        </script>
                        ";
                    }else{
                        echo"
                            <div class='alert alert-danger' role='alert'>
                                ບໍ່ສຳເລັດ..!
                            </div>
                            ";
                    }
                } else {
                    echo"
                    <div class='alert alert-danger' role='alert'>
                        ຫ້ອງທີ່ປ້ອນບໍຖືກຕ້ອງ..!
                    </div>
                    ";
                }
                
            }else{
                echo"
                <div class='alert alert-danger' role='alert'>
                    ເລຶອກຊັ້ນຮຽນ..!
                </div>
                ";
            }
?>