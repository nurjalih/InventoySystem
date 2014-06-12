
<?php
foreach($menu->result_array() as $row){
$a=$row['status'];   

?>
 <input type="checkbox" name="<?php echo $row['menu']; ?>" value="<?php echo $row['id']; ?>" <?php if($a=='Y') { ?> checked="checked" <?php } ?> ><?php echo $row['menu']; ?></br>
<?php


}
?>