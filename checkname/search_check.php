<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$fname = $_POST['fname'];
$mysql = mysqli_query($connect,"select a.dents_id,a.fname,a.lname,b.inroom_id,b.y_study,c.check_id,c.chk_moth,c.subject,c.hour,c.rdate,c.rtime,c.remark,d.b_name,e.r_name from student_biography as a,set_st_room as b,check_name as c,b_class as d,r_class as e where a.dents_id=b.dents_id and b.inroom_id=c.inroom_id and b.b_id=d.b_id and b.r_id=e.r_id and a.fname='$fname'");

?>
<table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                    <th>ລຳດັບ</th>
                    <th>ຊື່ແລະນາມສະກຸນ</th>
                    <th>ຊັ້ນ</th>
                    <th>ຫ້ອງ</th>
                    <th>ເດືອນ</th>
                    <th>ວິຊາຂາດ</th>
                    <th>ຊົວໂມງຂາດ</th>
                    <th>ວັນທີ ແລະ ເວລາ</th>
                    <th>ເຫດຜົນ</th>
                    <th>ຂໍ້ມູນອືນໆ</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; while($get_show = mysqli_fetch_array($mysql)){
                    
                ?>
                <tr>
                    <td><?php echo $a;?></td>
                    <td><?php echo $get_show['fname'];?> <?php echo $get_show['lname'];?></td>
                    <td><?php echo $get_show['b_name'];?></td>
                    <td><?php echo $get_show['r_name'];?></td>
                    <td><?php echo $get_show['chk_moth'];?></td>
                    <td><?php echo $get_show['subject'];?></td>
                    <td><?php echo $get_show['hour'];?></td>
                    <td><?php echo $get_show['rdate'];?> <?php echo $get_show['rtime'];?></td>
                    <td><?php echo $get_show['remark'];?></td>
                    <td width="11%">

<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    ເລືອກຂໍ້ມູນ
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    <li><a class="dropdown-item" href="update_check.php?check_id=<?php echo $get_show['check_id'];?>"><button class="form-control bg-info">ແກ້ໄຂ</button></a></li>
    <li><a class="dropdown-item" href="delete_check.php?check_id=<?php echo $get_show['check_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control bg-danger">ລົບຂໍ້ມູນ</button></a></li>
    </ul>
</div>
</td>
                </tr>
                <?php
                $a++;
                }
                ?>
                </tbody>
                
            </table>