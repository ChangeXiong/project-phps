<?php
	session_start(); // ປະກາດນຳໃຊ້ session 
	include("connect_db.php"); // ເອີ້ນຟຣາຍທີ່ເຊື່ອມໂຍງຫາຖານຂໍ້ມູນມານຳໃຊ້
	$user=$_POST['user_name']; // ວາງຕົວປ່ຽນຮັບເອົາຂໍ້ມູນ
	$pass=$_POST['password'];

	$sql=mysqli_query($connect,"select user_id,status,fname,lname from users
	where username='$user' and password=password('$pass')");
	$a=mysqli_num_rows($sql); // ກວດສອບຂໍ້ມູນວ່າມີຫຼືບໍ່
	if($a <> 0){ // ຖ້າມີຂໍ້ມູນ ໃຫ້ທຳງານຕາມເງື່ອນໄຂດັ່ງນີ້ :
		$rows=mysqli_fetch_array($sql);
		if($rows['status']=="ຜູ້ບໍລິຫານ"){ // ຖ້າຫາກສະຖານະຂອງຜຸ້ລ໋ອກອິນ ແມ່ນ ຜູ້ບໍລິຫານ
		$_SESSION['user_id']=$rows['user_id']; // ວາງຕົວປ່ຽນ user_id ເກັບເອົາລະຫັດຜູ້ນຳໃຊ້
		$_SESSION['fname']=$rows['fname']; // ວາງຕົວປ່ຽນ fname ເກັບເອົາຊື່
		$_SESSION['lname']=$rows['lname']; // ວາງຕົວປ່ຽນ lname ເກັບເອົານາມສະກຸນ
		$_SESSION['checked']=1; // ວາງຕົວປ່ຽນ checked ເກັບກຳເອົາເລກ 1 ເພື່ອໃຊ້ໃນການຢືນຢັນ 
		echo"
		<script>
		let timerInterval
Swal.fire({
  title: 'ກຳລັງເຂົ້າສູ່ລະບົບ!',
  timer: 1500,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
       const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
window.setTimeout(function(){ 
    location='home/admin_menu.php';
} ,1500);
		</script>
		";
		
		
	}
	else if($rows['status']=="ຜູ້ນຳໃຊ້"){ 
		$_SESSION['user_id']=$rows['user_id'];
		$_SESSION['fname']=$rows['fname']; 
		$_SESSION['lname']=$rows['lname']; 
		$_SESSION['checked']=1;
		echo"
		<script>
		let timerInterval
Swal.fire({
  title: 'ກຳລັງເຂົ້າສູ່ລະບົບ!',
  timer: 1500,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
window.setTimeout(function(){ 
    location='home/users_template.php';
} ,1500);
		</script>
		";
		
	}
	}
	else{
	echo"
	<script>
		Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'ຂໍ້ມູນບໍ່ຖືກຕ້ອງ',
  showConfirmButton: false,
  timer: 1500
})
window.setTimeout(function(){ 
  location='index.php';
} ,1500);
		</script>
		";
	}
	
	
?>