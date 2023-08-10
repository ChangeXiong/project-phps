<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$sql = mysqli_query($connect,"SELECT * FROM guardian");
?>
 <script>
        $(function(){
            $(".button_btn").click(function(){
                var g_id = $(".g_id").val();
                var fnamef = $(".fnamef").val();
                var fage = $(".fage").val();
                var fjob = $(".fjob").val();
                var ftell = $(".ftell").val();
                var fnamem = $(".fnamem").val();
                var mage = $(".mage").val();
                var mjob = $(".mjob").val();
                var mtell = $(".mtell").val();
                $.post("gua_update.php",{
                    g_id : g_id,
                    fnamef : fnamef,
                    fage : fage,
                    fjob : fjob,
                    ftell : ftell,
                    fnamem : fnamem,
                    mage : mage,
                    mjob : mjob,
                    mtell : mtell
                },
                function(output){
                    $(".show-model").html(output);
                });
            });
        });
    </script>
<body>

    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h1><div class="card-title text-center">ລາຍງານຂໍ້ມູນປົກຄອງ</div></h1>
            </div>
       
            <div class="card-body">
            <a href="gua_form.php"class="btn btn-primary">ໄປໜ້າຟອມບັນທືກຂໍ້ມູນ</a>
                <table class="table table-striped table-bordered table-sm">
                <tr>
                    <thead>
                        <th>ລຳດັບ</th>
                        <th>ຊື່ ແລະ ນາມສະກຸນພໍ່</th>
                        <th>ອາຍຸພໍ່</th>
                        <th>ອາຊິບພໍ່</th>
                        <th>ເບິໂທພໍ່</th>
                        <th>ຊື່ ແລະ ນາມສະກຸນແມ່</th>
                        <th>ອາຍຸແມ່</th>
                        <th>ອາຊິບແມ່</th>
                        <th>ເບິໂທແມ່</th>
                        <th>ລົບແກ້ໄຂ</th>
                    </thead>
                </tr>
                <?php
                $a = 1;
                while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <tbody>
                        <td><?php echo $a;?></td>
                        <td><?php echo $row['fnamef'];?></td>
                        <td><?php echo $row['fage'];?></td>
                        <td><?php echo $row['fjob'];?></td>
                        <td><?php echo $row['ftell'];?></td>
                        <td><?php echo $row['fnamem'];?></td>
                        <td><?php echo $row['mage'];?></td>
                        <td><?php echo $row['mjob'];?></td>
                        <td><?php echo $row['mtell'];?></td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm"data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['g_id'];?>">ແກ້ໄຂ</button>
                            <a href="gua_delete.php?g_id=<?php echo $row['g_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="btn btn-danger btn-sm">ລົົບ</button></a>
                        </td>
                    </tbody>
                </tr>
                <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['g_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ຟອມບັນທຶກຂໍ້ມູນຜູ້ປົກຄອງ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <div class="show-model">
                <div class="alert alert-primary d-flex align-items-center" role="alert">ຜົນການສະແດງແຈ້ງເຕືອນ</div>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ຊື່ ແລະ ນາມສະກຸນພໍ່</label>
                                <input type="hidden" name="" value="<?php echo $row['g_id'];?>" class="form-control g_id">
                                <input type="text" value="<?php echo $row['fnamef'];?>" name=""class="form-control fnamef" id=""placeholder="ປ້ອນຊື່ພໍ່..!">
                            </div>
                            <div class="form-group">
                                <label for="">ອາຍຸພໍ່</label>
                                <input type="text" value="<?php echo $row['fage'];?>" name=""class="form-control fage" id=""placeholder="ປ້ອນອາຍຸພໍ່..!"onKeyUp="if(isNaN(this.value)){ Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'ກະລຸນາປ້ອນຕົວເລກ',
    showConfirmButton: false,
    timer: 1500
    }); this.value='';}">
                            </div>
                            <div class="form-group">
                                <label for="">ອາຊິບພໍ່</label>
                                <input type="text" value="<?php echo $row['fjob'];?>" name=""class="form-control fjob" id=""placeholder="ປ້ອນອາຊິບພໍ່..!">
                            </div>
                            <div class="form-group">
                                <label for="">ເບິໂທພໍ່</label>
                                <input type="text" value="<?php echo $row['ftell'];?>" name=""class="form-control ftell" id=""placeholder="ປ້ອນເບິໂທພໍ່..! 020 ..."onKeyUp="if(isNaN(this.value)){ Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'ກະລຸນາປ້ອນຕົວເລກ',
    showConfirmButton: false,
    timer: 1500
    }); this.value='';}">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">ຊື່ ແລະ ນາມສະກຸນແມ່</label>
                                <input type="text" value="<?php echo $row['fnamem'];?>" name=""class="form-control fnamem" id=""placeholder="ປ້ອນຊື່ແມ່..!">
                            </div>
                            <div class="form-group">
                                <label for="">ອາຍຸແມ່</label>
                                <input type="text" value="<?php echo $row['mage'];?>" name=""class="form-control mage" id=""placeholder="ປ້ອນອາຍຸແມ່..!"onKeyUp="if(isNaN(this.value)){ Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'ກະລຸນາປ້ອນຕົວເລກ',
    showConfirmButton: false,
    timer: 1500
    }); this.value='';}">
                            </div>
                            <div class="form-group">
                                <label for="">ອາຊິບແມ່</label>
                                <input type="text" value="<?php echo $row['mjob'];?>" name=""class="form-control mjob" id=""placeholder="ປ້ອນອາຊິບແມ່..!">
                            </div>
                            <div class="form-group">
                                <label for="">ເບິໂທແມ່</label>
                                <input type="text" value="<?php echo $row['mtell'];?>" name=""class="form-control mtell" id=""placeholder="ປ້ອນເບິໂທແມ່..! 020 ..."onKeyUp="if(isNaN(this.value)){ Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'ກະລຸນາປ້ອນຕົວເລກ',
    showConfirmButton: false,
    timer: 1500
    }); this.value='';}">
                            </div>
                        </div>
                    </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ປິດ</button>
        <button type="button" class="btn btn-primary button_btn">ບັນທຶກ</button>
      </div>
    </div>
  </div>
</div>  
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>