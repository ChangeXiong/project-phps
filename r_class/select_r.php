<?php 
 include("../connect_db.php");
 include("../connect_link.php");
 $result = mysqli_query($connect,"SELECT a.r_id,a.r_name,a.remark,b.b_id,b.b_name FROM r_class as a,b_class as b where a.b_id=b.b_id");
 ?>
    <style>
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #F5F8FF;
        }
    </style>
<body>
    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-10">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h3 class="pb-4"align="center">[ ສະແດງຜົນຂໍ້ມູນ ]</h3>
                        <a href="form_r.php"class="btn btn-primary">ໄປໜ້າຟອມບັນທືກຂໍ້ມູນ</a>
                        <span class="float-end" >ຈຳນວນຫ້ອງຮຽນ [ <?php echo mysqli_num_rows($result) ?> ] ຫ້ອງ</span>     
                    </div>
                    <div class="col-lg-10">
                        <div class="table-responsive" >
                            <?php if (mysqli_num_rows($result) > 0): ?>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center text-light bg-dark">
                                   <th>ລະຫັດຫ້ອງ</th>
                                    <th>ຊັ້ນຮຽນ</th>
                                    <th>ຫ້ອງຮຽນ</th>
                                    <th>ໝາຍເຫດ</th>
                                    <th>ເລືອກຂໍ້ມູນ</th>
                                </tr>
                                </thead>
                                <?php while ($row = mysqli_fetch_assoc($result)):?>
                                <tbody>
                               
                                    <tr class="text-center">
                                        <td> <?php echo $row['r_id'] ?> </td>
                                        <td> <?php echo $row['b_name'] ?> </td>
                                        <td> <?php echo $row['r_name'] ?> </td>
                                        <td> <?php echo $row['remark'] ?> </td>
                                      
                                        <td width="10%">

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            ເລືອກຂໍ້ມູນ
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="update_r.php?r_id=<?php echo $row['r_id'];?>"><button class="form-control btn-sm bg-info">ແກ້ໄຂ</button></a></li>
                                            <li><a class="dropdown-item" href="delete_r.php?r_id=<?php echo $row['r_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control btn-sm bg-danger">ລົບຂໍ້ມູນ</button></a></li>
                                            </ul>
                                        </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php endwhile; ?>
                            </table>    
                            <?php 
                                else: 
                                    echo "<p class='mt-5'>ບໍ່ມີ</p>"; 
                                endif; 
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>