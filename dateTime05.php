<?php
$datetime = '3-15-2013';
try {
  $date = new DateTime($datetime);
} catch (Exception $e) {
  try {
    $date = new DateTime(str_replace('-', '/', $datetime));
  } catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
  }
}
//$date = NULL;
if (is_object($date))
  echo 'is_object';
else
  echo '!is_object';
echo $date->format('Y-m-d H:i:s');
?>