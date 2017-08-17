<?php
define('AES_256_CBC', 'aes-256-cbc');
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC), $crypto_strong);
echo $crypto_strong ? 'Good':'Bad';
file_put_contents('private.iv', $iv);
?>