<?php
include("../connect_link.php");
include("../connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .card-title,a
    {
        font-family: phetsarath ot;
    }
</style>
<body>
    <?php
    $sql = mysqli_query($connect,"select *from province");

    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-warning text-center-white">
            <p>
            <center>
            <h2><b>ລາຍງານຂໍ້ມູນແຂວງ</b></h2>
            </center>
            </p>
            </div>
            <div class="card-body">
            <a href="form_province.php"class="btn btn-primary">ໄປໜ້າຟອມບັນທືກຂໍ້ມູນ</a>
                <table class=" table table-hover table-bordered table-sm">
                    <tr>
                    <th>ລຳດັບ</th>
                    <th>ຊື່ແຂວງ</th>
                    <th>ໝາຍເຫດ</th>
                    <th>ແກ້ໄຂ</th>
                    <th>ລົບ</th>
                    </tr>
                    <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($sql)){

                    ?>
                    <tr>
                        <td><?php echo $a; ?></td>
                        <td><?php echo $data['pro_name'];?></td>
                        <td><?php echo $data['remark'];?></td>
                        <td>
                        <a href="update_province.php?pro_id=<?php echo $data['pro_id'];?>">
                        <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i> ແກ້ໄຂ</button>
                        </a>
                        </td>
                        <td>
                        <a href="delete_province.php?pro_id=<?php echo $data['pro_id'];?>">
                        <button class="btn btn-outline-primary btn-sm"><i class="fa fa-undo"></i> ລົບ</button>
                        </a>
                        </td>
                    </tr>
                    <?php
                    $a++;
                    }
                    ?>
                </table>
            </div>
            <div class="card-footer show"></div>
        </div>
    </div>
</body>
</html>