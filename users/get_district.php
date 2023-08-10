<?php
include("../connect_db.php");
$pro_id = $_POST['pro_id'];
$sql = mysqli_query($connect,"select dis_id,dis_name from district where pro_id='$pro_id' ");

?>
<select name="" id="" class="form-control dis_id">
    <option value="">ເລືອກເມືອງ </option>
    <?php
        while($b = mysqli_fetch_array($sql)){
    ?>
        <option value="<?php echo $b[0];?>"><?php echo $b[1];?></option>
    <?php
    }
    ?>
</select>