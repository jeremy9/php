<?php
$tzArr = timezone_identifiers_list(DateTimeZone::PER_COUNTRY, 'UG');
if (!empty($tzArr)) {
  $tz = $tzArr[0];
  echo "[".$tz."]".PHP_EOL;
}
?>