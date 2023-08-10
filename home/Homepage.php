<?php
// session_start();
// if(@$_SESSION['autouser']!==1){
//   echo"<script>
// alert('ກາລຸນາ login ເພື່ອເຂົ້າສູຸ້ລະບົບ ເທົ່ານັ້ນ!!!');
// location='../../index.php';
//   </script>";
// }
// else {
 ?>
<?php
include('../connect_db.php');
$query ="select count(dents_id)as counnt from student_biography where dents_id";
$result = mysqli_query($connect,$query);
while($get_allstudents=mysqli_fetch_array($result)) { ?>

<?php
$query ="select count(dents_id)as counnt from student_biography where gender='ເພດຊາຍ'";
$result1 = mysqli_query($connect,$query);
while($get_genderm=mysqli_fetch_array($result1)) { ?>

<?php
$query ="select count(dents_id)as counnt from student_biography where gender='ເພດຍິງ'";
$result2 = mysqli_query($connect,$query);
while($get_genderf=mysqli_fetch_array($result2)) { ?>
<!-- ------------------------- -->
<?php
$query ="select count(t_id)as counnt from tea_history where t_id";
$re = mysqli_query($connect,$query);
while($get_td=mysqli_fetch_array($re)) { ?>

<?php
$query ="select count(t_id)as counnt from tea_history where gender='ເພດຊາຍ'";
$re1 = mysqli_query($connect,$query);
while($get_td1=mysqli_fetch_array($re1)) { ?>


<?php
$query ="select count(t_id)as counnt from tea_history where gender='ເພດຍິງ'";
$re2 = mysqli_query($connect,$query);
while($get_td2=mysqli_fetch_array($re2)) { ?>
<!-- ------------------------- -->
<!-- ===ລາຍງານນັກຮຽນທັງໝົດໃນຊັ້ນມໍ 1===== -->

<?php
$query ="select count(a.inroom_id)as students from set_st_room as a,b_class as b where a.b_id=b.b_id and b_name='ຊັ້ນມ1' ";
$reclass = mysqli_query($connect,$query);
while($get_class1=mysqli_fetch_array($reclass)) { ?>

<!-- ===== ຊາຍທັງໝົດໃນຊັ້ນມໍ 1-->
<?php
$query ="select count(a.inroom_id)as students from set_st_room as a, student_biography as b,b_class as c where a.dents_id=b.dents_id and a.b_id=c.b_id and c.b_name='ຊັ້ນມ1' and b.gender='ເພດຊາຍ' ";
$reclass1 = mysqli_query($connect,$query);
while($get_class2=mysqli_fetch_array($reclass1)) { ?>

<!-- =  ຍິງທັງໝົດໃນໃນຊັ້ນ ມໍ 1-->
<?php
$query ="select count(a.inroom_id)as students from set_st_room as a, student_biography as b,b_class as c where a.dents_id=b.dents_id and a.b_id=c.b_id and c.b_name='ຊັ້ນມ1' and b.gender='ຍິງ' ";
$reclass2 = mysqli_query($connect,$query);
while($get_class3=mysqli_fetch_array($reclass2)) { ?>
<!-- ====== ຊັ້ນມໍ 2-->

<?php
$query ="select count(a.inroom_id)as students from set_st_room as a,b_class as b where a.b_id=b.b_id and b_name='ຊັ້ນມ2' ";
$reclass = mysqli_query($connect,$query);
while($get_class22=mysqli_fetch_array($reclass)) { ?>

<!-- ===== ຊາຍທັງໝົດໃນຊັ້ນມໍ 2-->
<?php
$query ="select count(a.inroom_id)as students from set_st_room as a, student_biography as b,b_class as c where a.dents_id=b.dents_id and a.b_id=c.b_id and c.b_name='ຊັ້ນມ2' and b.gender='ເພດຊາຍ' ";
$reclass1 = mysqli_query($connect,$query);
while($get_class222=mysqli_fetch_array($reclass1)) { ?>

<!-- =  ຍິງທັງໝົດໃນໃນຊັ້ນ ມໍ 2-->
<?php
$query ="select count(a.inroom_id)as students from set_st_room as a, student_biography as b,b_class as c where a.dents_id=b.dents_id and a.b_id=c.b_id and c.b_name='ຊັ້ນມ2' and b.gender='ເພດຍິງ' ";
$reclass2= mysqli_query($connect,$query);
while($get_class2222=mysqli_fetch_array($reclass2)) { ?>

<!-- ====== ຊັ້ນມໍ 3-->

<?php
$query ="select count(a.inroom_id)as students from set_st_room as a,b_class as b where a.b_id=b.b_id and b_name='ຊັ້ນມ3' ";
$reclass = mysqli_query($connect,$query);
while($get_class33=mysqli_fetch_array($reclass)) { ?>

<!-- ===== ຊາຍທັງໝົດໃນຊັ້ນມໍ 3-->
<?php
$query ="select count(a.inroom_id)as students from set_st_room as a, student_biography as b,b_class as c where a.dents_id=b.dents_id and a.b_id=c.b_id and c.b_name='ຊັ້ນມ3' and b.gender='ເພດຊາຍ' ";
$reclass1 = mysqli_query($connect,$query);
while($get_class333=mysqli_fetch_array($reclass1)) { ?>

<!-- =  ຍິງທັງໝົດໃນໃນຊັ້ນ ມໍ 3-->
<?php
$query ="select count(a.inroom_id)as students from set_st_room as a, student_biography as b,b_class as c where a.dents_id=b.dents_id and a.b_id=c.b_id and c.b_name='ຊັ້ນມ3' and b.gender='ເພດຍິງ' ";
$reclass2= mysqli_query($connect,$query);
while($get_class3333=mysqli_fetch_array($reclass2)) { ?>

<!-- ====== ຊັ້ນມໍ 4-->

<?php
$query ="select count(a.inroom_id)as students from set_st_room as a,b_class as b where a.b_id=b.b_id and b_name='ຊັ້ນມ4'";
$reclass = mysqli_query($connect,$query);
while($get_class44=mysqli_fetch_array($reclass)) { ?>

<!-- ===== ຊາຍທັງໝົດໃນຊັ້ນມໍ 4-->
<?php
$query ="select count(a.inroom_id)as students from set_st_room as a, student_biography as b,b_class as c where a.dents_id=b.dents_id and a.b_id=c.b_id and c.b_name='ຊັ້ນມ4' and b.gender='ເພດຊາຍ' ";
$reclass1 = mysqli_query($connect,$query);
while($get_class444=mysqli_fetch_array($reclass1)) { ?>

<!-- =  ຍິງທັງໝົດໃນໃນຊັ້ນ ມໍ 4-->
<?php
$query ="select count(a.inroom_id)as students from set_st_room as a, student_biography as b,b_class as c where a.dents_id=b.dents_id and a.b_id=c.b_id and c.b_name='ຊັ້ນມ4' and b.gender='ເພດຍິງ'";
$reclass2= mysqli_query($connect,$query);
while($get_class4444=mysqli_fetch_array($reclass2)) { ?>


<!-- ===========count username all -->

<?php
$query ="select count(user_id)as user_id from users where user_id";
$users= mysqli_query($connect,$query);
while($get_user1=mysqli_fetch_array($users)) { ?>
<!-- ----gender M -->

<?php
$query ="select count(user_id)as user_id from users where gender='ເພດຊາຍ'";
$users= mysqli_query($connect,$query);
while($get_user2=mysqli_fetch_array($users)) { ?>
<!-- ----gender F -->

<?php
$query ="select count(user_id)as user_id from users where gender='ເພດຍິງ'";
$users= mysqli_query($connect,$query);
while($get_user3=mysqli_fetch_array($users)) { ?>
<!-- -------- count class all-->

<?php
$query ="select count(r_id)as class from r_class where r_id";
$clas= mysqli_query($connect,$query);
while($get_clas=mysqli_fetch_array($clas)) { ?>
<!-- ----gender M -->

<?php
// $query ="select count(a.class_id)as sun from class as a, chan as b where b.sun_id=a.sun_id and b.sun_id='10-21971'";
// $chan= mysqli_query($conn,$query);
// while($get_chan1=mysqli_fetch_array($chan)) { ?>
<!-- ----gender F -->

<?php
// $query ="select count(a.class_id)as sun from class as a,chan as b where b.sun_id=a.sun_id and b.sun_id='10-37181'";
// $chan= mysqli_query($conn,$query);
// while($get_chan2=mysqli_fetch_array($chan)) { ?>

<?php
$query =" select count(sub_id)from subject where sub_id";
$sar= mysqli_query($connect,$query);
while($get_sar=mysqli_fetch_array($sar)) { ?>
<!-- ============class report  -->
<!-- ===========count class all -->

<?php
// $query1 ="select count(a.class_id)as students from class as a, students as b where a.class_id=b.class_id and a.class_id='10-89519'";
// $cl1= mysqli_query($conn,$query1);
// while($get_classa1=mysqli_fetch_array($cl1)) { ?>
<!-- ----gender M -->

<?php
// $query2 ="select count(a.class_id)as students from class as a, students as b where a.class_id=b.class_id and b.gender='M' and a.class_id='10-89519'";
// $cl2= mysqli_query($conn,$query2);
// while($get_classa2=mysqli_fetch_array($cl2)) { ?>
<!-- ----gender F -->

<?php
// $query3 ="select count(a.class_id)as students from class as a, students as b where a.class_id=b.class_id and b.gender='F' and a.class_id='10-89519'";
// $cl3= mysqli_query($conn,$query3);
// while($get_classa3=mysqli_fetch_array($cl3)) { ?>
<!-- -------- count class all-->

    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form || visar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../ionicons-2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
    body,span{
    font-family: phetsarath OT;
    }
    </style>
    </head>

    <body>

       <div class="card bg-default-gradient">
            <div class="card-header no-border">
              <h3 class="card-title">
                
                <i class="fa fa-th mr-1"><span class="text-info"> ລາຍງານຂໍ້ມູນນັກຮຽນ</span></i>
                <span class="text-dark"id="txt">ເວລາ:</span>
                
                <script>
                  
              today=new Date();
              d=today.getDate();
              m=today.getMonth()+1;
              y=today.getFullYear();
              document.write( +d+ "." +m+ "." +y);
              </script>

                <script>
              function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
              }
              function checkTime(i) {
                if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
              }
              </script>
              
              <body onload="startTime()">
              
              
            <section class="content">
            <div class="container-fluid">

              </h3>

              <div class="card-tools">
                <button type="button" class="btn bg-info btn-sm" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-info btn-sm" data-widget="remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
    <div class="row">


    <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-primary">
    <div class="inner">

<h5>ນັກຮຽນທັງໝົດ</h5>
    <h3><?php echo $get_allstudents[0];?><sup style="font-size: 20px"> ຄົນ</sup>
    <i class="ion ion-man"></i>
    <sup style="font-size: 20px"><?php echo $get_genderm[0];?></sup>
    <i class="ion ion-woman"></i>
    <sup style="font-size: 20px"><?php echo $get_genderm[0];?></sup><sup style="font-size: 20px"></sup></<h3></h3>

    </div>
    <div class="icon">
    <i class="ion ion-university"></i>
    </div>
    <a href="../history_st.php/select_st.php" class="small-box-footer">ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-secondary">
    <div class="inner">
    <h5>ຂໍ້ມູນອາຈານທັງໝົດ</h5>
    <h3><?php echo $get_td[0];?><sup style="font-size: 20px"> ຄົນ</sup>
    <i class="ion ion-man"></i>
    <sup style="font-size: 20px"><?php echo $get_td1[0];?></sup>
    <i class="ion ion-woman"></i>
    <sup style="font-size: 20px"><?php echo $get_td2[0];?></sup><sup style="font-size: 20px"></sup></<h3></h3>

    </div>
    <div class="icon">
    <i class="ion ion-stats-bars"></i>
    </div>
    <a href="../teacher/select_teacher.php" class="small-box-footer">ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
    <div class="inner">
    <h5>ນັກຮຽນຊັ້ນນມໍ 1 ທັງໝົດ</h5>
     <h3><?php echo $get_class1[0];?><sup style="font-size: 20px"> ຄົນ</sup>
    <i class="ion ion-man"></i>
    <sup style="font-size: 20px"><?php echo $get_class2[0];?></sup><sup style="font-size: 20px"></sup>
    <i class="ion ion-woman"></i>
    <sup style="font-size: 20px"><?php echo $get_class3[0];?></sup><sup style="font-size: 20px"></sup></h3>

    </div>
    <div class="icon">
    <i class="ion ion-soup-can"></i>
    </div>
    <a href="../set_student_room/select_roomm1.php" class="small-box-footer">ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-secondary">
    <div class="inner">
    <h5>ນັກຮຽນຊັ້ນມໍ 2 ທັງໝົດ</h5>
  <h3><?php echo $get_class22[0];?><sup style="font-size: 20px"> ຄົນ</sup>
    <i class="ion ion-man"></i>
    <sup style="font-size: 20px"><?php echo $get_class222[0];?></sup><sup style="font-size: 20px"></sup>
    <i class="ion ion-woman"></i>
    <sup style="font-size: 20px"><?php echo $get_class2222[0];?></sup><sup style="font-size: 20px"></sup></h3>

    </div>
    <div class="icon">
    <i class="ion ion-briefcase"></i>
    </div>
    <a href="../set_student_room/select_roomm2.php" class="small-box-footer">ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div>
      <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
    <div class="inner">

<h5>ນັກຮຽນຊັ້ນມໍ 3 ທັງໝົດ</h5>
    <h3><?php echo $get_class33[0];?>
    <i class="ion ion-man"></i>
    <sup style="font-size: 20px"><?php echo $get_class333[0];?></sup><sup style="font-size: 20px"></sup>
    <i class="ion ion-woman"></i>
    <sup style="font-size: 20px"><?php echo $get_class3333[0];?></sup><sup style="font-size: 20px"></sup></<h3></h3>

    </div>
    <div class="icon">
    <i class="ion ion-bag"></i>
    </div>
    <a href="../set_student_room/select_roomm3.php" class="small-box-footer">ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
    <div class="inner">
    <h5>ນັກຮຽນຊັ້ນມໍ 4 ທັງໝົດ</h5>
    <h3><?php echo $get_class44[0];?><sup style="font-size: 20px"> ຄົນ</sup>
    <i class="ion ion-man"></i>
    <sup style="font-size: 20px"><?php echo $get_class444[0];?></sup>
    <i class="ion ion-woman"></i>
    <sup style="font-size: 20px"><?php echo $get_class444[0];?></sup><sup style="font-size: 20px"></sup></<h3></h3>

    </div>
    <div class="icon">
    <i class="ion ion-ribbon-a"></i>
    </div>
    <a href="../set_student_room/select_roomm4.php" class="small-box-footer">ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div>




    <!--./col -->
    <!-- <div class="col-lg-4 col-6">
    <!-- small box -->
    <!-- <div class="small-box bg-success">
    <div class="inner">
    <h5>ຂໍ້ມູນພະນັກງານທັງໝົດ</h5>
    <h3><?php echo $get_user1[0];?><sup style="font-size: 20px"> ຄົນ</sup>
    <i class="ion ion-man"></i>
    <sup style="font-size: 20px"><?php echo $get_user2[0];?></sup><sup style="font-size: 20px"></sup>
    <i class="ion ion-woman"></i>
    <sup style="font-size: 20px"><?php echo $get_user3[0];?></sup><sup style="font-size: 20px"></sup></h3> -->

    <!-- </div>
    <div class="icon">
    <i class="ion ion-person-stalker"></i>
    </div>
    <a href="../users/select_user.php" class="small-box-footer"> ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div> --> 
    <!-- ./col
    <!-- <div class="col-lg-4 col-6">
    <!-- small box -->
    <!-- <div class="small-box bg-warning">
    <div class="inner">
    <h5>ຂໍ້ມູນຫ້ອງທັງໝົດ</h5>
    <h3 class="text-default"><?php echo $get_clas[0];?><sup style="font-size: 20px">ຫ້ອງ
     </sup><sup style="font-size: 20px"> ມໍຕົ້ນ</sup><sup style="font-size: 20px" class="text-success"><?php// echo $get_chan1[0];?></sup>
    <!-- <sup style="font-size: 20px"> ມໍປ້າຍ </sup><sup style="font-size: 20px" class="text-danger"><?php //echo $get_chan2[0];?></sup> -->
 

    <!-- </div>
    <div class="icon">
    <i class="ion ion-ios-home"></i>
    </i>
    </div>
    <a href="../r_class/select_r.php" class="small-box-footer"> ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div> --> 
    <!-- ./col -->
    <!-- <div class="col-lg-4 col-6">
    <!-- small box -->
    <!-- <div class="small-box bg-info"> -->
    <!-- <div class="inner">
    <h5>ຂໍ້ມູນວິຊາຮຽນທັງໝົດ </h5>
    <h3><?php  echo $get_sar[0];?><sup style="font-size: 20px"> ວິຊາ</sup></h3> -->

    <!-- </div>
    <div class="icon">
    <i class="ion ion-ios-book"></i>
    </div>
    <a href="../subject/select_subject.php" class="small-box-footer"> ເບິ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div> -->
    <!-- ./col --> 


        </section>
    </div>
    <!-- /.row -->
<?php
 // include('fiel_cart.php');
 ?>




               </div>
<!-- show tables -->

<?php
include_once "../connect_link.php";
$mylove = mysqli_query($connect,"SELECT a.dents_id,a.fname,a.lname,a.gender,a.dob,a.vill,a.dis,a.pro,a.tribes,a.nation,a.lgroups,a.tel,a.remark,
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
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr class="table bg-success">
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
         
            <!-- <td class="text-center"><img src="pic_image/<?php //echo $row['pic_img'];?>"height="80px"width="60px"></td> -->
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
      <div class="card-image"><img src="../history_st.php/pic_image/<?php echo $row['pic_img'];?>" height="150px" width="140px" alt="" srcset=""></div>
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
      <h4 class="py-2"><b>ຂໍ້ມູນພໍ່</b></h4>
      <label for=""class="mt-2" ><b>ຊື່ແລະນາມສະກຸນ</b> <?php echo $row['fnamef'];?></label><br>
      <label for=""class="mt-2" ><b>ອາຍຸ</b> <?php echo $row['fage'];?></label><br>
      <label for=""class="mt-2" ><b>ອາຊິບ</b> <?php echo $row['fjob'];?></label><br>
      <label for=""class="mt-2" ><b>ເບິໂທ</b> <?php echo $row['ftell'];?></label><br>
      <h4 class="py-2"><b>ຂໍ້ມູນແມ່</b></h4>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- end tables -->


    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="plugins/chart.js/Chart.bundle.js"></script> -->
    <script src="../dist/js/adminlte.js"></script>
    <script src="../bootstrap5/js/bootstrap.min.js"></script>
    </body>

    </html>
    <?php } } }  } } }  } } }  } } }  } } }  } } }  } } }  } }// }  } } }  }  ?>
<!-- <?php // } ?> -->
