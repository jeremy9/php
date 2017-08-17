<?php
$year = date('Y');
$month = date('m');
$day = date('d');
$day = 29;
$days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
$lwd = $days_in_month;
$found = FALSE;
for (; $lwd >= 1; $lwd--) {
  $dow = date('w', mktime(0, 0, 0, $month, $lwd, $year));
  if ($dow >= 1 && $dow <= 5) {
    $found = TRUE;
    break;
  }
}
if (!$found || $lwd != $day) {
  exit;
}
echo $year.PHP_EOL;
echo $month.PHP_EOL;
echo $day.PHP_EOL;
echo 'days_in_month=>'.$days_in_month.PHP_EOL;
echo 'lwd=>'.$lwd.PHP_EOL;
?>