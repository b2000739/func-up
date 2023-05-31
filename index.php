<?
function power($val, $pow)
{
	$math = $val;
	for ($i = 0; $i < $pow; $i++) {

		$math = $math * $val;
	}
	echo $math;
	echo '<br>';
	return $math;
}

power(3, 4);

function clock()
{
	$time = date('G');
	$minute = date('i');
	if ($time == 1 or $time == 21) {
		echo $time . ' час';
	} elseif ($time > 1 and $time < 5 or 22 < $time and $time < 25) {
		echo $time . ' часа';
	} elseif ($time > 4 and $time < 21 or $time == 0) {
		echo $time . ' часов';
	}
	echo "  ";

	if ($minute % 10 == 1 and $minute != 11) {
		echo $minute . ' минута';
	} elseif ($minute > 1 and $minute < 5 or $minute % 10 > 1 and $minute % 10 < 5 and $minute > 20) {
		echo $minute . ' минуты';
	} else {
		echo $minute . ' минут';
	}
}
clock();
echo '<br>';
function not_correct_3zadanie()
{
	echo rand(10, 2140);
}
not_correct_3zadanie();
