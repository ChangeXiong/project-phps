<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$select = mysqli_query($connect,"SELECT * FROM  subject");
?>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">ສະແດງວິຊາທັງໝົດ</div>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered table-sm">
                    <tr>
                    <thead>
                        <th>ລຳດັບ</th>
                        <th>ວິຊາ</th>
                        <th>ແກ້ໄຂ</th>
                        <th>ລົບຂໍ້ມູນ</th>
                    </thead>
                    </tr>
                    <?php
                    $a = 1;
                    while($getup = mysqli_fetch_array($select)){
                    ?>
                    <tr>
                        <tbody>
                            <td><?php echo $a;?></td>
                            <td><?php echo $getup['subject'];?></td>
                            <td>
                                <a href="update_subject.php?sub_id=<?php echo $getup['sub_id'];?>" class=""><button class="btn btn-primary btn-sm">ແກ້ໄຂ</button></a>
                            </td>
                            <td>
                            <a href="delete_subject.php?sub_id=<?php echo $getup['sub_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')" class=""><button class="btn btn-danger btn-sm">ລົບຂໍ້ມູນ</button></a>
                            </td>
                        </tbody>
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