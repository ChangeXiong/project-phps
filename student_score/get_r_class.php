<?php
include_once "../connect_db.php";
$number = $_POST['number'];
$sql = mysqli_query($connect,"select r_id,r_name from r_class where b_id='$number'");

?>
<select name="" id="" class="form-control dis_id">
    <option value="">ເລືອກຫ້ອງຮຽນ </option>
    <?php
        while($b = mysqli_fetch_array($sql)){
    ?>
        <option value="<?php echo $b[0];?>"><?php echo $b[1];?></option>
    <?php
    }
    ?>
</select>