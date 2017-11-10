<?php
    $date_of_operation_raw = '31/12/2017';
    $date = date_create_from_format('d/m/Y', $date_of_operation_raw);
    $date_of_operation = date_format($date, 'Y-m-d');
    echo "[{$date_of_operation}]";
?>