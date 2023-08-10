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
<body>
    <?php
    $sql = mysqli_query($connect,"select a.pro_name,b.dis_id,b.dis_name,b.remark from province as a,district as b where a.pro_id=b.pro_id");
    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary text-white">
            <p>
            <h2><b> ລາຍງານຂໍ້ມູນເມືອງ</b></h2>
            </p>
            </div>
            <div class="card-body">
            <a href="form_district.php"class="btn btn-primary">ໄປໜ້າຟອມບັນທືກຂໍ້ມູນ</a>
                <table class="table table-hover table-bordered table-sm">
                <tr class="table-success">
                    <th>ລຳດັບ</th>
                    <th>ຊື່ເມື່ອງ</th>
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
                    <td><?php echo $a;?></td>
                    <td><?php echo $data['dis_name'];?></td>
                    <td><?php echo $data['pro_name'];?></td>
                    <td><?php echo $data['remark'];?></td>
                    <td>
                        <a href="update_dis.php?dis_id=<?php echo $data['dis_id'];?>">
                        <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i> ແກ້ໄຂ</button>
                        </a>
                    </td>
                    <td>
                        <a href="delete_dis.php?dis_id=<?php echo $data['dis_id'];?>">
                        <button class="btn btn-outline-primary btn-sm"><i class="fa fa-trash-o"></i> ລົບ</button>
                        </a>
                    </td>
                </tr>
                <?php
                $a++;
                }
                ?>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</body>
</html>