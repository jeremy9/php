<?php
    $date = date_create();
    date_sub($date, date_interval_create_from_date_string('7 days'));
    $datepart = date_format($date, 'Y-m-d');
    $filename = "vivo_{$datepart}.sql.zip";
    if (file_exists($filename)) {
        unlink($filename);
    }
?>