<?php

function countTuesdays($startDate, $endDate) {

$days = [
    7, 1, 2, 3, 4, 5, 6
];

$startDay = $days[date("w", strtotime($startDate))];

$dateDiff = date_diff(new DateTime($startDate), new DateTime($endDate))->days;

$fullWeeks = intdiv($dateDiff, 7);
$restDays = $dateDiff % 7;

$semi_result = $startDay + $restDays - 7;

if ($semi_result == 2) {
	return $fullWeeks + 1;
}

return $fullWeeks;
}

$startDate = '2023-10-01';
$endDate = '2023-10-31';

$result = countTuesdays($startDate, $endDate);
echo $result;
?>