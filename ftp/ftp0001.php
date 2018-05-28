<?php
// set up basic connection
$conn_id = ftp_connect('127.0.0.1');

// login with username and password
$login_result = ftp_login($conn_id, 'anonymous', 'me@localhost');

// check connection
if ((!$conn_id) || (!$login_result)) {
    echo "FTP connection has failed!\n";
    //echo "Attempted to connect to $ftp_server for user $ftp_user_name";
    exit;
} else {
    //echo "Connected to $ftp_server, for user $ftp_user_name";
    echo "Connected to ftp server!\n";
}

// upload the file
//$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
//if (!$upload) {
//    echo "FTP upload has failed!";
//} else {
//    echo "Uploaded $source_file to $ftp_server as $destination_file";
//}

$ret = ftp_nlist($conn_id, '.');

var_dump($ret);

// close the FTP stream
ftp_close($conn_id);
?>