<?php
$pipeName = 'MySQL';
$username = 'root';
$password = 'root';
$options = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$dbh = new PDO('mysql:unix_socket='.$pipeName, $username, $password, $options);
?>