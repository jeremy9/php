<?php
function _detectFileEncoding($filepath) {
    // VALIDATE $filepath !!!
    $output = array();
    exec("\"C:\\Program Files (x86)\\GnuWin32\\bin\\file.exe\" -i {$filepath}", $output, $ret); // -c \"file -i {$filepath}\"
    echo "({$ret})";
    if ($ret == 0 && isset($output[0])){
        $ex = explode('charset=', $output[0]);
        return isset($ex[1]) ? $ex[1] : null;
    }
    return null;
}
$enc = _detectFileEncoding('TestQ2.csv');
echo !is_null($enc) ? ('['.$enc.']') : 'NULL';
?>