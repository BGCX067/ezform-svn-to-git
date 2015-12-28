<?php
if(!empty($default)) $value = $default;
?>

<input type="button" name="<?php echo $name ?>" value="<?php echo $value ?>">
<?php
unset($default, $array, $name, $selected, $ob);
?>