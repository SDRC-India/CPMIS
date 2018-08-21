<?php
include 'db.php';
$parent_id = $_GET['parent_id']; 
$result=mysql_query("select area_name,area_id from child_area_detail where parent_id='$parent_id'");
?>
<option value="">Select</option>
<?php
while($fetch_area=mysql_fetch_assoc($result))
{
?>
<option value="<?php echo $fetch_area['area_id'] ;  ?>"><?php echo $fetch_area['area_name'] ;  ?></option>
<?php } ?>
