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
        $sql = mysqli_query($connect,"select a.pro_id,a.pro_name,b.dis_id,b.dis_name
        ,d.user_id,d.fname,d.lname,d.gender,d.vill,d.dob,d.tel,d.status,d.username,d.date,d.remark from province as a,district as b,
        users as d where a.pro_id=d.pro_id and b.dis_id=d.dis_id ");
    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-haeder bg-warning text-center-white">
            <p>
            <h2><b> ລາຍງານຂໍ້ມູມຜູ້ນຳໃຊ້ບໍລິການ</b></h2>
            </p>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered table-sm">
                    <tr>
                        <th>ລຳດັບ</th>
                        <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                        <th>ເພດ</th>
                        <th>ວັນເດືອນປິເກິດ</th>
                        <th>ບ້ານ</th>
                        <th>ເມືອງ</th>
                        <th>ແຂວງ</th>
                        <th>ສະຖານະ</th>
                        <th>ເບີໂທ</th>
                        <th>ວັນທີ</th>
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
                        <td><?php echo $data['fname'];?> <?php echo $data['lname'];?></td>
                        <td><?php echo $data['gender'];?></td>
                        <td><?php echo $data['dob'];?></td>
                        <td><?php echo $data['vill'];?></td>
                        <td><?php echo $data['dis_name'];?></td>
                        <td><?php echo $data['pro_name'];?></td>
                        <td><?php echo $data['status'];?></td>
                        <td><?php echo $data['tel'];?></td>
                        <td><?php echo $data['date'];?></td>
                        <td><?php echo $data['remark'];?></td>
                        <td>
                        <a href="update_user.php?user_id=<?php echo $data['user_id'];?>">
                        <span><i class="fa fa-edit"></i> ແກ້ໄຂ</span>
                        </a>
                        </td>
                        <td>
                        <a href="delete_user.php?user_id=<?php echo $data['user_id'];?>">
                        <span><i class="fa fa-undo"></i> ລົບ</span>
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