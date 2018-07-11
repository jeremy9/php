<?php
$http_host = 'example.com';
//$http_host = 'www.example.com';
$res = preg_match('/^(www\.).*$/i', $http_host);
if (FALSE === $res) {
    echo 'Error!';
    exit(1);
}
else {
    echo "{$res}\n";
    $http_host = preg_replace('/^(www\.)(.*)$/i','$2', $http_host);
    echo "[{$http_host}]\n";

}