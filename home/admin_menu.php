<!-- <?php
// session_start();
// if(@$_SESSION['autouser']!==1){
//   echo"<script>
// alert('ກາລຸນາ login ເພື່ອເຂົ້າສູຸ້ລະບົບ ເທົ່ານັ້ນ!!!');
// location='../../index.php';
//   </script>";
//}
//else {
    ?> -->

    <html>
    <style>
      * {
        font-family: 'Phetsarath OT';
      }
    </style>
    
    <head>
    
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ເກັບກຳຂໍ້ມູນນັກຮຽນ</title>
      <link rel="stylesheet" href="icon/css/all.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    
      <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
      <script src="jquery.js"></script>
      <script>
        $(function() {
          $('#logout').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
              title: 'ທ່ານຕ້ອງການອອກຈາກລະບົບ ຫຼື ບໍ?',
              text: "ກົດ OK ເພື່ອຢືນຢັນການທຳງານ",
              icon: 'error', // success,error,info,waining
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonColor: 'OK',
            }).then((result) => {
              if (result.value) {
                document.location.href = href;
              };
            });
          });
        });
      </script>
    </head>
    
    <body class="hold-transition sidebar-mini layout-fixed">
    
      <div class="wrapper">
    
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item mt-1">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
    
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
    
            <li class="nav-item mt-1">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
    
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" role="button">
                <i class="fas fa-user"></i>
                <?php
                 session_start();
                 echo $_SESSION['fname'] . " " . $_SESSION['lname'];
                ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php" role="button" id="logout">
                <button class="btn btn-danger"><i class="fas fa-sign-out-alt"></i>
                ອອກຈາກລະບົບ</button>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->
    
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="#" class="brand-link">
            <img src="dist/img/get.gif" alt="Logo" class="brand-image img-circle elevation-3">
            <h6><span class="brand-text font-weight-light">ເກັບກຳຂໍ້ມູນນັກຮຽນ</span></h6>
          </a>
    
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
    
    
            <!-- SidebarSearch Form -->
    
    
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="Homepage.php" target="frame" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                      ໜ້າຫຼັກ
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                      ຂໍ້ມູນນັກຮຽນ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../history_st.php/form_st.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ບັນທຶກຂໍ້ມູນນັກຮຽນ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../history_st.php/select_st.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນນັກຮຽນ </p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-school"></i>
                    <p>
                      ຂໍ້ມູນຊັ້ນ-ຫ້ອງຮຽນ-ວິຊາ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="fas fa-check"></i>
                      <p>
                        ຊັ້ນຮຽນ-ຫ້ອງຮຽນ
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">2</span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../b_class/select_b.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ສະແດງຊັ້ນຮຽນ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../r_class/select_r.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ສະແດງຫ້ອງຮຽນ</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="ion-android-add-circle"></i>
                      <p>
                        ວິຊາຮຽນປະຈຳ
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">2</span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../subject/form_subject.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ບັນທຶກວິຊາ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../subject/select_subject.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ສະແດງວິຊາຮຽນ</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-address-book"></i>
                    <p>
                      ບັນທຶກນັກຮຽນເຂົ້າຫ້ອງ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">5</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../set_student_room/form_room.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ບັນທຶກນັກຮຽນເຂົ້າຫ້ອງ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../set_student_room/select_roomm1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນນັກຮຽນຊັ້ນມໍ 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../set_student_room/select_roomm2.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນນັກຮຽນຊັ້ັນມໍ 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../set_student_room/select_roomm3.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນນັກຮຽນຊັ້ນມໍ 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../set_student_room/select_roomm4.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນນັກຮຽນຊັ້ນມໍ 4</p>
                      </a>
                    </li>
                  </ul>
                </li>
                
                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                    <p>
                    ຄະແນນປະຈຳເດືອນ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">4</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        ຄະແນນປະຈຳເດືອນຊັ້ນມໍ່ 1
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../score_m1/selectsore_m1_1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ຫ້ອງ ມ1/1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m1/selectscore_m1_2.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m1/selectscore_m1_3.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m1/selectscore_m1_4.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/4</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m1/selectscore_m1_5.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/5</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m1/selectscore_m1_6.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/6</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                      ຄະແນນປະຈຳເດືອນຊັ້ນມໍ່ 2
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../score_m2/show_m2_1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ຫ້ອງ ມ2/1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m2/show_m2_2.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ2/2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m2/show_m2_3.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ2/3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m2/show_m2_4.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ2/4</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                      ຄະແນນປະຈຳເດືອນຊັ້ນມໍ່ 3
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../score_m3/how_m3_1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ຫ້ອງ ມ3/1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m3/show_m3_2.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ3/2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m3/show_m3_3.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ3/3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m3/show_m3_4.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ3/4</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                      ຄະແນນປະຈຳເດືອນຊັ້ນມໍ່ 4
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../score_m4/showm4_1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ຫ້ອງ ມ4/1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m4/showm4_2.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ4/2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../score_m4/showm4_3.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ4/3</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon ion-android-archive"></i>
                    <p>
                    ຄະແນນປະຈຳວິຊາ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">4</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon ion-android-checkbox"></i>
                      <p>
                        ຄະແນນປະຈຳວິຊາຊັ້ນມໍ່ 1
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../sub_score/select_room1_1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ຫ້ອງ ມ1/1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room1_2.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room1_3.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room1_4.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/4</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room1_5.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/5</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room1_6.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ1/6</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon ion-android-checkbox-outline"></i>
                      <p>
                      ຄະແນນປະຈຳວີຊາຊັ້ນມໍ່ 2
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../sub_score/select_room2_1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ຫ້ອງ ມ2/1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href=".../sub_score/select_room2_2.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ2/2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room2_3.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ2/3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room2_4.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ2/4</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon ion-android-checkmark-circle"></i>
                      <p>
                      ຄະແນນປະຈຳວິຊາຊັ້ນມໍ່ 3
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../sub_score/select_room3_1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ຫ້ອງ ມ3/1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room3_2.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ3/2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room3_3.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ3/3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room3_4.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ3/4</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon ion-android-map"></i>
                      <p>
                      ຄະແນນປະຈຳວິຊາຊັ້ນມໍ່ 4
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../sub_score/select_room4_1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ຫ້ອງ ມ4/1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room4_2.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ4/2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../sub_score/select_room4_3.php" target="frame" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ຫ້ອງ ມ4/3</p>
                        </a>
                    </li>
                  </ul>
                    </li>
                  </ul>
                </li>
               
                
                
                
                    
                 
                    
                    
                   
                    
                    
                    
                    <!-- <li class="nav-item">
                      <a href="db_Checkname5+/select_Checkname1+.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານສະຫຼຸບໝາຍຂາດ</p>
                      </a>
                    </li>
                  </ul>
                </li> -->

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon ion-compose"></i>
                    <p>
                      ໝາຍຂາດຮຽນ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">5</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <!-- <li class="nav-item">
                      <a href="../set_student_room/form_room.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ບັນທຶກຄະແນນປະຈຳວິຊາ</p>
                      </a>
                    </li> -->
                    <li class="nav-item">
                      <a href="../checkname/select_check_m1.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ໝາຍຂາດຮຽນຊັ້ນມໍ 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../checkname/select_check_m2.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ໝາຍຂາດຮຽນຊັ້ັນມໍ 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../checkname/select_check_m3.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ໝາຍຂາດຮຽນຊັ້ນມໍ 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../checkname/select_check_m4.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ໝາຍຂາດຮຽນຊັ້ນມໍ 4</p>
                      </a>
                    </li>
                  </ul>
                </li>


                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon ion-ios-book"></i>
                    <p>
                      ຕາຕະລາງຄູສອນ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../teacher/form_teacher.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ບັນທຶກຂໍ້ມມູນຄູອາຈານສອນ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../teacher/select_teacher.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນຄູອາຈານສອນ</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon ion-ios-bookmarks"></i>
                    <p>
                      ຊີວະປະຫັວດຄູ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../tea_history/form_tea.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ບັນທຶກຊີວະປະຫັວດຄູ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../tea_history/select_tea.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຊີວະປະຫັວດຄູ</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      ຂໍ້ມູນຜູ້ປົກຄອງ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../guardian/gua_form.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ບັນທຶກຂໍ້ມມູນປົກຄອງ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../guardian/gua_select.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນຜູ້ປົກຄອງ</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-city"></i>
                    <p>
                      ຂໍ້ມູນແຂວງ ແລະ ເມືອງ
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../province/select_province.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນແຂວງ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../district/select_district.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນເມືອງ</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                  <a href="show_all_account.php" target="frame" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>ຂໍ້ມູນ Admin</p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../users/form_user.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ບັນທຶກຜູ້ນຳໃຊ້</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../users/select_user.php" target="frame" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ລາຍງານຂໍ້ມູນຜູ້ນຳໃຊ້</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
    
    
          <iframe width="100%" height="100%" frameborder="0" name="frame" src="Homepage.php"></iframe>
    
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <center><strong>ໂປຣເຈັກຈົບຊັ້ນປະລິນຍາຕຣີ ສົກຮຽນປີ 2022-2023</strong></center>
    
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1
          </div>
        </footer>
    
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
    
      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/moment/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="dist/js/pages/dashboard.js"></script>
    </body>
    
    </html>
    <!-- update !-->
    <?php
    //}
    ?>