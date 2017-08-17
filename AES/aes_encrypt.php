<?php
// DEFINE our cipher
define('AES_256_CBC', 'aes-256-cbc');

// Generate a 256-bit encryption key
// This should be stored somewhere instead of recreating it each time
//$encryption_key = openssl_random_pseudo_bytes(32);
$encryption_key = file_get_contents('private.key');

// Generate an initialization vector
// This *MUST* be available for decryption as well
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

// Create some data to encrypt
$data = "Encrypt me, please!";
//echo "Before encryption: $data\n";

// Encrypt $data using aes-256-cbc cipher with the given encryption key and
// our initialization vector. The 0 gives us the default options, but can
// be changed to OPENSSL_RAW_DATA or OPENSSL_ZERO_PADDING
$encrypted = openssl_encrypt($data, AES_256_CBC, $encryption_key, 0, $iv).base64_encode($iv);
//echo "Encrypted: $encrypted\n";

file_put_contents('packet.dat', $encrypted);
?>