<select name="<?php echo $name ?>">
<?php
ob_start();

$selected = false;

foreach ($array as $key=>$value)
{
	if($key == "")
	{
		$key = $value;
	}
	if(isset($_SESSION['temp'][$name]) && $_SESSION['temp'][$name] == $value)
	{
?>
<option value="<?php echo $value ?>" selected><?php echo $value ?>&nbsp;&nbsp;</option>
<?php
		$selected = true;
	}
	else
	{
		if(isset($default) && $value == $default)
		{
?>
<option value="<?php echo $value ?>" selected><?php echo $value ?>&nbsp;&nbsp;</option>
<?php
			$selected = true;
		}
		else
		{
?>
<option value="<?php echo $value ?>"><?php echo $value ?>&nbsp;&nbsp;</option>
<?php
		}
	}
}

$ob = ob_get_contents();

ob_clean();

if(isset($default) && $selected === false)
{
?>
<option value="<?php echo $default ?>" selected><?php echo $default ?></option>
<?php
}

echo $ob;

unset($default, $array, $name, $selected, $ob);
?>
</select>