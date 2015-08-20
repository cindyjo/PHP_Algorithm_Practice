<?php

$num_head = 0;
$num_tail = 0;

for($i=1; $i<=5000; $i++)
{
	$coin = rand(0,1);//assigning 0 = head and 1 = head
	if($coin == 0)
	{
		$num_head ++;
	}
	else
	{
		$num_tail ++;
	}
	echo "<br><i>Attempt #" . $i . ": Throwing a coin... It's head! ... Got " . $num_head . ' head(s) so far and ' . $num_tail . ' tail(s) so far </i><br>';
}
echo '<br><i><b><u>Ending the program = thank you!</u></b></i>';

?>
