<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$sql = mysqli_query($connect,"select a.inroom_id,a.y_study,b.dents_id,b.fname,b.lname,c.month_score,c.laguage,c.literature,c.mathermatics,c.it,c.fnaural,
                                c.society,c.population,c.art,c.mission,c.english,c.amount,c.average from set_st_room as a,student_biography as b,scores as c where a.dents_id=b.dents_id and a.inroom_id=c.inroom_id");
?>
 <script>
        $(function(){
            $(".data").change(function(){
                var data = $(".data").val();
                $.post("sreach_score.php",{
                    data : data
                },
                function(output){
                    $(".show").html(output);
                });
            });
        });
    </script>
    <style>
        th,tr {
    border: 1px black solid;
    padding: 7px;
}
td {
    border: 1px black solid;
    padding: 5px;
}
.rotate {
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  width: 1.8em;
  height: 8em;
}
.rotate div {
     -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
       -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
  -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
         margin-left: -10em;
         margin-right: -10em;

}

body{
	font-family:phetsarath OT;
	font-size:18px;
  padding: 20px;
  @page(margin:0);
}.form-group{
	font-family:phetsarath OT;
	font-size:18px;
}
    </style>
<body>
    <div class="container py-2">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-bark">
                    <div class="row bg-light">
                <div class="col-md-9">
                <div class="form-group">
                       <div class="input-group">
                       <div class="input-group-text text-success"><i class="fas fa-plus"></i></div>
                       <form action="">
                       <select name=""class="form-control data" id="">
                           <option value="">ເລືອກເດືອນ.</option>
                           <option value="ເດືອນ9">ເດືອນ 9.</option>
                           <option value="ເດືອນ10">ເດືອນ 10.</option>
                           <option value="ເດືອນ11">ເດືອນ 11.</option>
                           <option value="ເດືອນ12">ເດືອນ 12.</option>
                           <option value="ເດືອນ1">ເດືອນ 1.</option>
                           <option value="ເດືອນ2">ເດືອນ 2.</option>
                           <option value="ເດືອນ3">ເດືອນ 3.</option>
                           <option value="ເດືອນ4">ເດືອນ 4.</option>
                           <option value="ເດືອນ5">ເດືອນ 5.</option>
                       </select>
                       </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <a href="form_score.php" class="btn btn-dark">
                        <i class="fas fa-sign-out-alt"></i>ເພີ່ມລາຍຊື່ຄະເເນນນັກຮຽນ</a>
                </div>
            </div>
                    </div>
                    <div class="card-body">
            <div class="card-title text-center">ສະແດງຂໍ້ມູນຄະແນນປະຈຳເດືອນ </div>
                <div class="show">
                        <table id="example" class="table table-bordered table-striped">
                        
                                <thead>
                                <tr>
                                    <th>ລຳດັບ</th>
                                   <th class="rotate"rowspan="4">ຊື່ ແລະ ນາມສະກຸນ</th>
                                    <th class="rotate"rowspan="4"><div>ພາສາລາວ</div></th>
                                    <th class="rotate"rowspan="4"><div>ວັນນະຄະດີ<div></th>
                                    <th class="rotate"rowspan="4"><div>ຄະນິດສາດ</div></th>
                                    <th class="rotate"rowspan="4"><div>ໄອທີ</div></th>
                                    <th class="rotate"rowspan="4"><div>ວິທະຍາສາດທຳມະຊາດ</div></th>
                                    <th class="rotate"rowspan="4"><div>ວິທະຍາສາດສັງຄົມ</div></th>
                                    <th class="rotate"rowspan="4"><div>ສືກສາພົມລະເມືອງ</div></th>
                                    <th class="rotate"rowspan="4"><div>ສິລະປະ</div></th>
                                    <th class="rotate"rowspan="4"><div>ພະລະສືກສາ</div></th>
                                    <th class="rotate"rowspan="4"><div>ພາສາອັງກິດ</div></th>
                                    <th>ລວມ</th>
                                    <th>ສະເລ່ຍ</th>
                                    <th>ຂໍ້ມູນອືນ</th>
                                </tr> 
                                </thead>
                           
                            <?php
                            $a = 1;
                            while($score = mysqli_fetch_array($sql)){
                            ?>
                            
                                <tbody>
                                <tr>
                                    <td><?php echo $a;?></td>
                                    <td><?php echo $score['fname'];?> 
                                    <?php echo $score['lname'];?></td>
                                    <td><?php echo $score['laguage'];?></td>
                                    <td><?php echo $score['literature'];?></td>
                                    <td><?php echo $score['mathermatics'];?></td>
                                    <td><?php echo $score['it'];?></td>
                                    <td><?php echo $score['fnaural'];?></td>
                                    <td><?php echo $score['society'];?></td>
                                    <td><?php echo $score['population'];?></td>
                                    <td><?php echo $score['art'];?></td>
                                    <td><?php echo $score['mission'];?></td>
                                    <td><?php echo $score['english'];?></td>
                                    <td><?php echo $score['amount'];?></td>
                                    <td><?php echo $score['average'];?></td>
                                    <td width="10%">

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    ເລືອກຂໍ້ມູນ
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="update_room.php?inroom_id=<?php echo $score['inroom_id'];?>"><button class="form-control bg-info">ແກ້ໄຂ</button></a></li>
                    <li><a class="dropdown-item" href="delete_room.php?inroom_id=<?php echo $score['inroom_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control bg-danger">ລົບຂໍ້ມູນ</button></a></li>
                    </ul>
                </div>
                </td>
                                </tr>
                                </tbody>
                           
                            <?php
                            $a++;
                            }
                            ?>
                             

                            
                        </table>
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">
                                    <span>ທິ ໂຮງຮຽນ ມ ຕ ຫົວນາ, ວັນທີ ...../...../.........</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <span>ຜູ້ອຳນວຍການໂຮງຮຽນ</span>
                                </div>
                                <div class="col-sm-4">
                                    <span>ຫົວໜ້າໜ່ວຍງານວິຊາການ</span>
                                </div>
                                <div class="col-sm-4">
                                    <span>ຄູປະຈຳຫ້ອງ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
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