<?php
try {
  $date = new DateTime('3-15-2013');
} catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
}
echo $date->format('Y-m-d H:i:s');
?>