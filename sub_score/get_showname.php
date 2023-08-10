<?php
include("../connect_db.php");
$r_id = $_POST['r_id'];
$sql = mysqli_query($connect,"select a.inroom_id,b.dents_id,b.fname,b.lname from set_st_room as a,student_biography as b where a.dents_id=b.dents_id and a.r_id='$r_id' ");

?>
<select name="" id="" class="form-control dis_id">
    <option value="">ເລືອກຊື່ </option>
    <?php
        while($b = mysqli_fetch_array($sql)){
    ?>
        <option value="<?php echo $b[0];?>"><?php echo $b[2];?></option>
    <?php
    }
    ?>
</select>