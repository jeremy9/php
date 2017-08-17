<?php
// DEFINE our cipher
define('AES_256_CBC', 'aes-256-cbc');

// Generate a 256-bit encryption key
// This should be stored somewhere instead of recreating it each time
//$encryption_key = openssl_random_pseudo_bytes(32);
$encryption_key = file_get_contents('private.key');

// Generate an initialization vector
// This *MUST* be available for decryption as well
//$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

$encrypted_packet = file_get_contents('packet.dat');

$iv_temp = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));
$iv_temp_base64 = base64_encode($iv_temp);
$cipher_iv_length_base64 = strlen($iv_temp_base64);

$encrypted = substr($encrypted_packet, 0, -$cipher_iv_length_base64);
$iv = base64_decode(substr($encrypted_packet, -$cipher_iv_length_base64));

$decrypted = openssl_decrypt($encrypted, AES_256_CBC, $encryption_key, 0, $iv);
echo "Decrypted: [$decrypted]\n";
?>