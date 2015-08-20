<?php

function random_score_grade() {
	$score = rand(50,100);
	$grade = '';
	if($score >= 90 && $score <=100)
	{
		$grade = 'A';
	}
	else if ($score >=80 && $score <90)
	{
		$grade = 'B';
	}
	else if ($score >=70 && $score <80)
	{
		$grade = 'C';
	}
	else
	{
		$grade = 'D';
	}
	echo '<h1>Your Score : ' . $score .'/100</h1>';
	echo '<h2>Your grade is ' . $grade . '.</h2>';
}
for($i=0; $i<100; $i++) 
{
	random_score_grade();
}
?>