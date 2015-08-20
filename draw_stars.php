<?php
//part 1
function draw_star($array) 
{
	foreach($array as $num_star)
	{
		for($i = 0; $i < $num_star; $i++)
		{
			echo '*';
		}
	echo '<br>';
	}
}

$x = array(4,6,1,3,5,7,25);
echo 'draw_star Part 1 <br>';
draw_star($x);

//part 2
function draw_star_modified($array)
{
	foreach($array as $value)
	{
		if(is_numeric($value))
		{
			for($i = 0; $i < $value; $i++)
			{
				echo '*';
			}
		}
		else
		{
			for($i = 0; $i < strlen($value); $i++)
			{
				echo strtolower($value[0]);
			}
		}
		echo '<br>';
	}
}

$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
echo '<br>draw_star Part 2<br>';
draw_star_modified($x);

?>
