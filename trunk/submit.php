<?php
if(!empty($default)) $value = $default;
?>
<input type="hidden" name="submit" value="<?php echo time() ?>">
<input type="submit" value="<?php echo $value ?>">
<?php
unset($default, $array, $name, $selected, $ob);
?>