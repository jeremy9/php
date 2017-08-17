<?php
$encryption_key = openssl_random_pseudo_bytes(32, $crypto_strong);
echo $crypto_strong ? 'Good':'Bad';
file_put_contents('private.key', $encryption_key);
?>