<?php
$pipeName = 'MySQL';
$username = 'root';
$password = 'root';
$options = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$dbh = new PDO('mysql:unix_socket='.$pipeName, $username, $password, $options);
$attributes = array(
  "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
  "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
  "TIMEOUT"
);

foreach ($attributes as $val) {
  echo "PDO::ATTR_$val: ";
  echo $dbh->getAttribute(constant("PDO::ATTR_$val")) . "\n";
}

?>