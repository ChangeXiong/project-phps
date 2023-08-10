<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$data = $_POST['data'];
$sql = mysqli_query($connect,"select a.inroom_id,a.y_study,b.dents_id,b.fname,b.lname,c.month_score,c.laguage,c.literature,c.mathermatics,c.it,c.fnaural,
                                c.society,c.population,c.art,c.mission,c.english,c.amount,c.average,d.b_id,d.b_name,e.r_id,e.r_name from set_st_room as a,student_biography as b,scores as c,b_class as d,r_class as e where a.dents_id=b.dents_id and a.inroom_id=c.inroom_id and a.b_id=d.b_id and a.r_id=e.r_id and e.r_name='ມ1/6' and c.month_score='$data' ");
?>
<table id="example" class="table table-bordered table-striped">
                        
                        <thead>
                        <tr>
                            <th>ລຳດັບ</th>
                           <th class="rotate"rowspan="4">ຊື່ ແລະ ນາມສະກຸນ</th>
                            <th class="rotate"rowspan="4"><div>ພາສາລາວ</div></th>
                            <th class="rotate"rowspan="4"><div>ປະຫັວດສາດ<div></th>
                            <th class="rotate"rowspan="4"><div>ຄະນິດສາດ</div></th>
                            <th class="rotate"rowspan="4"><div>ໄອທີ</div></th>
                            <th class="rotate"rowspan="4"><div>ວິທະຍາສາດທຳມະຊາດ</div></th>
                            <th class="rotate"rowspan="4"><div>ພູມສາດ</div></th>
                            <th class="rotate"rowspan="4"><div>ສືກສາພົມລະເມືອງ</div></th>
                            <th class="rotate"rowspan="4"><div>ສິລະປະ</div></th>
                            <th class="rotate"rowspan="4"><div>ພະລະສືກສາ</div></th>
                            <th class="rotate"rowspan="4"><div>ພາສາອັງກິດ</div></th>
                            <th>ລວມ</th>
                            <th>ສະເລ່ຍ</th>
                            <!-- <th>ຂໍ້ມູນອືນ</th> -->
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
                            <!-- <td width="10%">

        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            ເລືອກຂໍ້ມູນ
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li><a class="dropdown-item" href="update_room.php?inroom_id=<?php //echo $showroom['core_id'];?>"><button class="form-control bg-info">ແກ້ໄຂ</button></a></li>
            <li><a class="dropdown-item" href="?inroom_id=<?php //echo $showroom['core_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control bg-danger">ລົບຂໍ້ມູນ</button></a></li>
            </ul>
        </div>
        </td> -->
                        </tr>
                        </tbody>
                   
                    <?php
                    $a++;
                    }
                    ?>
                     

                    
                </table>