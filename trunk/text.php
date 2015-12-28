<?php

if(!empty($default)) $value = $default;

if((isset($_SESSION['temp'][$name]) && $_SESSION['temp'][$name] == $value) || !empty($value))
{
?>
<input type="text" name="<?php echo $name ?>" value="<?php echo $default ?>">
<?php
}
else
{
?>
<input type="text" name="<?php echo $name ?>" value="">
<?php
}

unset($default, $array, $name, $selected, $ob);
?>