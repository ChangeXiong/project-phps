<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$data = $_POST['data'];
$mylove = mysqli_query($connect,"SELECT a.dents_id,a.pic_img,a.fname,a.lname,a.gender,a.dob,a.vill,a.dis,a.pro,a.tribes,a.nation,a.lgroups,a.tel,a.remark,
b.g_id,b.fnamef,b.fage,b.fjob,b.ftell,b.fnamem,b.mage,b.mjob,b.mtell FROM student_biography as a,guardian as b WHERE a.g_id=b.g_id and (a.dents_id like'%$data%' or a.fname like'%$data%')");
?>
 <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th>ລໍາດັບ</th>
                    <th>ຮູບພາບ</th>
                    <th>ລະຫັດນັກຮຽນ</th>
                    <th>ຊື່ແລະນາມສະກຸນ</th>
                    <th>ວັນເດືອນປີເກີດ</th>
                    <th>ເພດ</th>
                    <th>ບ້ານ</th>
                    <th>ເມືອງ</th>
                    <th>ແຂວງ</th>
                    <th>ສັນຊາດ</th>
                    <th>ເຊື່ອຊາດ</th>
                    <th>ຊົນເຜົ່າ</th>
                    <th>ເບິໂທ</th>
                    <th>ເລືອກຂໍ້ມູນ</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($mylove)) { ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td class="text-center"><img src="pic_image/<?php echo $row['pic_img'];?>"height="80px"width="60px"></td>
                    <td><?php echo $row['dents_id'];?></td>
                    <td><a class=""data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['dents_id'];?>"><?php echo $row['fname'];?> <?php echo $row['lname'];?></a></td>
                    <td><?php echo $row['dob'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['vill'];?></td>
                    <td><?php echo $row['dis'];?></td>
                    <td><?php echo $row['pro'];?></td>
                    <td><?php echo $row['tribes'];?></td>
                    <td><?php echo $row['nation'];?></td>
                    <td><?php echo $row['lgroups'];?></td>
                    <td><?php echo $row['tel'];?></td>
                <td width="11%">

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    ເລືອກຂໍ້ມູນ
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="update_st.php?dents_id=<?php echo $row['dents_id'];?>"><button class="form-control bg-info">ແກ້ໄຂ</button></a></li>
                    <li><a class="dropdown-item" href="delete_st.php?dents_id=<?php echo $row['dents_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control bg-danger">ລົບຂໍ້ມູນ</button></a></li>
                    </ul>
                </div>
                </td>
                </tr>
                <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['dents_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ຟອມຊີວະປະຫັວດນັກຮຽນ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
  <div class="col-3">
    <div class="list-group list-group-light" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active px-3 border-0" id="list-home-list"
        data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">ຂໍ້ມູນນັກຮຽນ</a>
      <a class="list-group-item list-group-item-action px-3 border-0" id="list-profile-list"
        data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">ຂໍ້ມູນຜູ້ປົກຄອງ</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel"
        aria-labelledby="list-home-list">
        <div class="row">
          <div class="col-3">
            <div class="card-image"><img src="pic_image/<?php echo $row['pic_img'];?>" height="120px" width="100px" alt="" srcset=""></div>
          </div>
          <div class="col-9">
          <ul class="list-group list-group-horizontal-xl">
          <li class="list-group-item px-3 border-0">ຊື່ແລະນາມສະກຸນ: <?php echo $row['fname'];?> <?php echo $row['lname'];?></li>
          <li class="list-group-item px-3 border-0">ເພດ: <?php echo $row['gender'];?></li>
          <li class="list-group-item px-3 border-0">ວັນເດືອນປີເກີດ: <?php echo $row['dob'];?></li>
        </ul>
          <ul class="list-group list-group-horizontal-xl">
          <li class="list-group-item px-3 border-0">ບ້ານ: <?php echo $row['vill'];?> <?php echo $row['lname'];?></li>
          <li class="list-group-item px-3 border-0">ເມືອງ: <?php echo $row['dis'];?></li>
          <li class="list-group-item px-3 border-0">ແຂວງ: <?php echo $row['pro'];?></li>
        </ul>
          </div>
        </div>
        </ul>
          <ul class="list-group list-group-horizontal-xl">
          <li class="list-group-item px-3 border-0">ສັນຊາດ: <?php echo $row['tribes'];?> <?php echo $row['lname'];?></li>
          <li class="list-group-item px-3 border-0">ເຊື່ອຊາດ: <?php echo $row['nation'];?></li>
          <li class="list-group-item px-3 border-0">ຊົນເຜົ່າ: <?php echo $row['lgroups'];?></li>
          <li class="list-group-item px-3 border-0">ເບິໂທ: <?php echo $row['tel'];?></li>
        </ul>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <dl class="row">
                  <span class="py-2"><b>ຂໍ້ມູນພໍ່</b></span>
        <dt class="col-sm-3">ຊື່ແລະນາມສະກຸນ</dt>
        <dd class="col-sm-9"><?php echo $row['fnamef'];?></dd>
        <dt class="col-sm-3">ອາຍຸ</dt>
        <dd class="col-sm-9"><?php echo $row['fage'];?></dd>
        <dt class="col-sm-3">ອາຊິບ</dt>
        <dd class="col-sm-9"><?php echo $row['fjob'];?></dd>
        <dt class="col-sm-3">ເບິໂທ</dt>
        <dd class="col-sm-9"><?php echo $row['ftell'];?></dd>
    </dl>
      <dl class="row">
                  <span class="py-2"><b>ຂໍ້ມູນແມ່</b></span>
        <dt class="col-sm-3">ຊື່ແລະນາມສະກຸນ</dt>
        <dd class="col-sm-9"><?php echo $row['fnamem'];?></dd>
        <dt class="col-sm-3">ອາຍຸ</dt>
        <dd class="col-sm-9"><?php echo $row['mage'];?></dd>
        <dt class="col-sm-3">ອາຊິບ</dt>
        <dd class="col-sm-9"><?php echo $row['mjob'];?></dd>
        <dt class="col-sm-3">ເບິໂທ</dt>
        <dd class="col-sm-9"><?php echo $row['mtell'];?></dd>
    </dl>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ປິດ</button>
      </div>
    </div>
  </div>
</div>  
                <?php
                $i++;
                } ?>
                </tbody>
                </table>