<?php

$selected = false;

foreach ($array as $key=>$value)
{
	if($key == "")
	{
		$key = $value;
	}
	
	if((isset($_SESSION['temp'][$name]) && $_SESSION['temp'][$name] == $value) || (isset($default) && $default == $value))
	{
?>
<input type="radio" name="<?php echo $name ?>" value="<?php echo $value ?>" checked><?php echo $value ?>
<?php
		$selected = true;
	}
	else
	{
?>
<input type="radio" name="<?php echo $name ?>" value="<?php echo $value ?>"><?php echo $value ?>
<?php
	}
}
unset($default, $array, $name, $selected, $ob);
?>