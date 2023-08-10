<?php
include_once "../connect_link.php";
include_once "../connect_db.php";
$data = $_POST['data'];
$sql = mysqli_query($connect,"select a.inroom_id,a.y_study,b.dents_id,b.fname,b.lname,c.month_score,c.laguage,c.literature,c.mathermatics,c.it,c.fnaural,
                                c.society,c.population,c.art,c.mission,c.english,c.amount,c.average from set_st_room as a,student_biography as b,scores as c where a.dents_id=b.dents_id and a.inroom_id=c.inroom_id and c.month_score='$data' ");
?>
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
                        </tr>
                        </tbody>

                    
                    <?php
                    $a++;
                    }
                    ?>

                </table>