<?php
$adminId = 1;
$whereClause
  = " WHERE v_country.id_country IN
                (
                  SELECT DISTINCT
                    v_admin_countrymanager.id_country
                  FROM
                    v_admin_countrymanager
                  WHERE
                    v_admin_countrymanager.id_admin_countrymanager = ".intval($adminId)." )";
$whereClause_wrong = str_replace(' WHERE ', ' AND ', $whereClause);
echo 'WRONG: '.$whereClause_wrong.PHP_EOL;
//^ major bug - replaces all WHERE's with AND's
// Only replace first WHERE with AND
$whereClause = preg_replace('/^\040WHERE\040/i', ' AND ', $whereClause, 1);
echo 'CORRECT: '.$whereClause.PHP_EOL;
?>