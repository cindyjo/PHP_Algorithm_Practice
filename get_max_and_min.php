<?php

function get_max_and_min($array)
{
	$min = $array[0];
	$max = $array[0];
	for($i = 1; $i<count($array); $i++)
	{
		if($max < $array[$i])
		{
			$max = $array[$i];
		}
		else if ($min > $array[$i])
		{
			$min = $array[$i];
		}
	}
	return array("max" => $max, "min" => $min);
}

$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
$output = get_max_and_min($sample);
var_dump($output);

?>