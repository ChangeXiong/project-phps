<?php
include("../connect_db.php");
$dis_id = $_POST['dis_id'];
$sql = mysqli_query($connect,"select vill_id,vill_name from village where dis_id='$dis_id' ");

?>
<select name="" id="" class="form-control">
    <option value="">ເລືອກບ້ານ </option>
    <?php
        while($a = mysqli_fetch_array($sql)){
    ?>
        <option value="<?php echo $a[0];?>"><?php echo $a[1];?></option>
    <?php
    }
    ?>
</select>