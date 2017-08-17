<?php
$dateTime1 = '2016-12-31';
$dateTime2 = '2016-11-29';
$date1 = new DateTime($dateTime1);
echo $date1->format('Y-m-d') . "\n";
$date2 = new DateTime($dateTime2);
echo $date2->format('Y-m-d') . "\n";
//$date1->sub(new DateInterval('P1M'));
$year = intval($date1->format('Y'));
$month = intval($date1->format('n'));
$day = intval($date1->format('j'));
echo "[{$year}]".PHP_EOL;
echo "[{$month}]".PHP_EOL;
echo "[{$day}]".PHP_EOL;
if ($month == 1) {
  $year--;
  $month = 12;
}
else {
  $month--;
  $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
  if ($day > $days_in_month) {
    $day = $days_in_month;
  }
}
echo "[{$year}]".PHP_EOL;
echo "[{$month}]".PHP_EOL;
echo "[{$day}]".PHP_EOL;
$s_year = "{$year}";
$s_month = "{$month}";
$s_day = "{$day}";
if ($month < 10) {
  $s_month = '0'.$s_month;
}
if ($day < 10) {
  $s_day = '0'.$s_day;
}
$date3 = new DateTime("{$s_year}-{$s_month}-{$s_day}");
echo $date3->format('Y-m-d') . "\n";

echo ($date2 >= $date3?'T':'F').PHP_EOL;
?>