<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$mylove = mysqli_query($connect,"SELECT a.dents_id,a.pic_img,a.fname,a.lname,a.gender,a.dob,a.vill,a.dis,a.pro,a.tribes,a.nation,a.lgroups,a.tel,a.remark,
b.g_id,b.fnamef,b.fage,b.fjob,b.ftell,b.fnamem,b.mage,b.mjob,b.mtell FROM student_biography as a,guardian as b WHERE a.g_id=b.g_id");
?>
 <script>
        $(function(){
            $(".data").keyup(function(){
                var data = $(".data").val();
                $.post("sreach_st.php",{
                    data : data
                },
                function(output){
                    $(".search").html(output);
                });
            });
        })
    </script>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title text-center">ຂໍ້ມູນຊີວະປະຫັວດນັກຮຽນ</div>
            </div>
            <div class="card-body">
              <!--<form action="">
                <div class="row">
                  <div class="col-6"></div>
                  <div class="col-6">
                      <div class="form-group p-2">
                          <div class="input-group">
                          <div class="input-group-text text-success"><i class="fas fa-search"></i></div>
                          <input type="text" name="lname" class="form-control data" id="" placeholder="ປ້ອນລະຫັດແລະຊື່ທີ່ຕ້ອງການຄົ້ນຫາ..!">
                          
                          </div>
                      </div>
                  </div>
                </div>
              </form> -->
              <div class="search"> <!-- saerch -->
            <table id="example" class="table table-bordered" style="width:100%">
                <thead>
                <tr>
                    <!-- <th>ລໍາດັບ</th> -->
                    <!-- <th>ຮູບພາບ</th> -->
                    <th>ລະຫັດນັກຮຽນ</th>
                    <th>ຊື່ນາມສະກຸນ</th>
                    <th>ວັນເດືອນປີເກີດ</th>
                    <th>ເພດ</th>
                    <th>ບ້ານ</th>
                    <th>ເມືອງ</th>
                    <th>ແຂວງ</th>
                    <th>ສັນຊາດ</th>
                    <!-- <th>ເຊື່ອຊາດ</th> -->
                    <th>ຊົນເຜົ່າ</th>
                    <th>ເບິໂທ</th>
                    <th>ເລືອກຂໍ້ມູນ</th>
                </tr>
                </thead>
                <tbody>
                <?php
                // $i = 1;
                while($row = mysqli_fetch_array($mylove)) { ?>
                <tr>
                 
                    
                    <td><?php echo $row['dents_id'];?></td>
                    <td><a class=""data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['dents_id'];?>"><?php echo $row['fname'];?> <?php echo $row['lname'];?></a></td>
                    <td><?php echo $row['dob'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['vill'];?></td>
                    <td><?php echo $row['dis'];?></td>
                    <td><?php echo $row['pro'];?></td>
                    <td><?php echo $row['tribes'];?></td>
                    <!-- <td><?php // echo $row['nation'];?></td> -->
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
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
              <div class="card-image"><img src="pic_image/<?php echo $row['pic_img'];?>" height="150px" width="140px" alt="" srcset=""></div>
              </div>
              <div class="col-lg-4">
              <label for=""class="mt-2" ><b>ຊື່</b> <?php echo $row['fname'];?></label><br>
              <label for=""class="mt-2" ><b>ນາມສະກຸນ</b> <?php echo $row['lname'];?></label><br>
              <label for=""class="mt-2" ><b>ເພດ</b> <?php echo $row['gender'];?></label><br>
              <label for=""class="mt-2" ><b>ວັນເດືອນປີເກີດ</b> <?php echo $row['dob'];?></label><br>
              <label for=""class="mt-2" ><b>ບ້ານ</b> <?php echo $row['vill'];?></label><br>
              <label for=""class="mt-2" ><b>ເມືອງ</b> <?php echo $row['dis'];?></label><br>
              <label for=""class="mt-2" ><b>ແຂວງ</b> <?php echo $row['pro'];?></label><br>
              <label for=""class="mt-2" ><b>ສັນຊາດ</b> <?php echo $row['tribes'];?></label><br>
              <label for=""class="mt-2" ><b>ເຊື່ອຊາດ</b> <?php echo $row['nation'];?></label><br>
              <label for=""class="mt-2" ><b>ຊົນເຜົ່າ</b> <?php echo $row['lgroups'];?></label><br>
              <label for=""class="mt-2" ><b>ເບິໂທ</b> <?php echo $row['tel'];?></label><br>
              <label for=""class="mt-2" ><b>ໝາຍເຫດ</b> <?php echo $row['remark'];?></label><br>
              </div>
              <div class="col-lg-5">
              <h4 class=""><b>ຂໍ້ມູນພໍ່</b></h4>
              <label for=""class="mt-2" ><b>ຊື່ແລະນາມສະກຸນ</b> <?php echo $row['fnamef'];?></label><br>
              <label for=""class="mt-2" ><b>ອາຍຸ</b> <?php echo $row['fage'];?></label><br>
              <label for=""class="mt-2" ><b>ອາຊິບ</b> <?php echo $row['fjob'];?></label><br>
              <label for=""class="mt-2 py-2" ><b>ເບິໂທ</b> <?php echo $row['ftell'];?></label><br>
              <h4 class=""><b>ຂໍ້ມູນແມ່</b></h4>
              <label for=""class="mt-2" ><b>ຊື່ແລະນາມສະກຸນ</b> <?php echo $row['fnamem'];?></label><br>
              <label for=""class="mt-2" ><b>ອາຍຸ</b> <?php echo $row['mage'];?></label><br>
              <label for=""class="mt-2" ><b>ອາຊິບ</b> <?php echo $row['mjob'];?></label><br>
              <label for=""class="mt-2" ><b>ເບິໂທ</b> <?php echo $row['mtell'];?></label><br>
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
                // $i++;
                } ?>
                </tbody>
                <tfoot>
                  <tr>
                  <!-- <th>ລໍາດັບ</th> -->
                    <!-- <th>ຮູບພາບ</th> -->
                    <th>ລະຫັດນັກຮຽນ</th>
                    <th>ຊື່ນາມສະກຸນ</th>
                    <th>ວັນເດືອນປີເກີດ</th>
                    <th>ເພດ</th>
                    <th>ບ້ານ</th>
                    <th>ເມືອງ</th>
                    <th>ແຂວງ</th>
                    <th>ສັນຊາດ</th>
                    <!-- <th>ເຊື່ອຊາດ</th> -->
                    <th>ຊົນເຜົ່າ</th>
                    <th>ເບິໂທ</th>
                    <th>ເລືອກຂໍ້ມູນ</th>
                  </tr>
                </tfoot>
                </table>
                </div> <!-- saerch -->
            </div>
        </div>
    </div>
</body>
<script>
$(function () {
$('#example1').DataTable()
$('#example2').DataTable({
'paging'      : true,
'lengthChange': false,
'searching'   : false,
'ordering'    : true,
'info'        : true,
'autoWidth'   : false
});
});
</script>
<script src="../bootstrap5/js/bootstrap.min.js"></script>
<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
