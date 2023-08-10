<?php 
 include("../connect_db.php");
 include("../connect_link.php");
 $result = mysqli_query($connect,"SELECT * FROM b_class");
 ?>
    <style>
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 10vh;
            background-color: #F5F8FF;
        }
    </style>
<body>
    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h3 class="pb-4"align="center">[ ສະແດງຜົນຂໍ້ມູນ ]</h3>
                        <a href="form_b.php"class="btn btn-primary">ໄປໜ້າຟອມບັນທືກຂໍ້ມູນ</a>
                        <span class="float-end" >ຈຳນວນຊັ້ນ [ <?php echo mysqli_num_rows($result) ?> ] ຊັ້ນ</span>     
                    </div>
                    <div class="col-lg-10">
                        <div class="table-responsive" >
                            <?php if (mysqli_num_rows($result) > 0): ?>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center text-light bg-dark">
                                   <th>ລຳດັບ</th>
                                    <th>ຊັ້ນຮຽນ</th>
                                    <th>ໝາຍເຫດ</th>
                                    <th>ເລືອກຂໍ້ມູນ</th>
                                </tr>
                                </thead>
                                <?php $a = 1; while ($row = mysqli_fetch_assoc($result)):?>
                                <tbody>
                               
                                    <tr class="text-center">
                                        <td> <?php echo $a ?> </td>
                                        <td> <?php echo $row['b_name']; ?> </td>
                                        <td> <?php echo $row['remark']; ?> </td>
                                      
                                        <td width="10%">

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            ເລືອກຂໍ້ມູນ
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="update_b.php?b_id=<?php echo $row['b_id'];?>"><button class="form-control btn-sm bg-info">ແກ້ໄຂ</button></a></li>
                                            <li><a class="dropdown-item" href="delete_b.php?b_id=<?php echo $row['b_id'];?>"onclick="return confirm('ເຈົ້າແນໃຈຕ້ອງການລົບແທ້ບໍ ?')"><button class="form-control btn-sm bg-danger">ລົບຂໍ້ມູນ</button></a></li>
                                            </ul>
                                        </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php $a++; endwhile; ?>
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