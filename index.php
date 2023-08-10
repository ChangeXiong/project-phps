<?php
include_once "connect_db.php";
include_once "connect_link.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Ionicons -->
  <link rel="stylesheet" href="ionicons-2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- <script src="datatable_bootstrap4/jquery-3.3.1.js"></script> -->
   <script src="js/jquery.js"></script>

   <script src="jquery.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="bootstrap5/js/bootstrap.min.js"></script>
  <style>
body{
  font-family: phetsarath OT;
  background-image:url("image/imagess.jpg");
  /*background-color:#121420;*/
  /*background-color:#xf067;*/
  margin-top:10px;
}b{
  color: #fff;

}

  img{
  padding: 10px;
  width: 200px;
  height: 150px;
}span,p{
  font-size: 22px;
}
</style>
<script>
 function showhide(){
    if(document.getElementById('checkbox').checked)
    {
      document.getElementById('show').type='show';
    }else{
      document.getElementById('show').type='password';
    }
  }
</script>


  </script>
  <script>
  $(function(){
  $('#login').click(function(){
  var fname=$('#fname').val();
  var pass=$('#show').val();
  $.post('check_users.php',
  {
  user_name:fname,
  password:pass
  },
  function(output){
  $('#show1').html(output);
  });
  });
  });

  </script>
  <!-- Google Font: Source Sans Pro -->
</head>
<body  >
  <!-- class="hold-transition login-page" -->
  <div class="row">

<div class="col-sm-3"></div>
<div class="col-sm-6">
  <div align="center">

  <img src="image/login.gif" class="avatar">
  </div>
  <div class="login-logo">
    <a href="#"><b>ລະບົບບໍລິຫານນັກຮຽນມັດຖະຍົມຕອນຕົ້ນ</b></a>
  <!-- </div> -->
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-danger">ຍິນດີຕ້ອນຮັບເຂົ້າສູ່ລະບົບ</p>

      <form>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" id="fname" placeholder="ກະລຸນາປ້ອນຊື່ຜູ້ນໍາໃຊ້">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password"   placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" id="show">
          <span class="fa fa-lock form-control-feedback"> </span>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" id="checkbox" onChange="showhide();"> <span class="text-info"> ເບິ່ງລະຫັດ</span>
              <div><p id="show1"></p></div>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" id="login" class="btn btn-success btn-block btn-flat" ><span class="ion ion-log-in"></span> ເຂົ້າສູ່ລະບົບ</button>
          </div>
          <!-- /.col -->


        </div>
      </form>
</div>
     <!--  <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div> -->
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
  <div class="col-sm-3"></div>
    </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script> -->
</body>
</html>
