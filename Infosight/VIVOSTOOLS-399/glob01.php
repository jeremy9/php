<?php
$savedir = getcwd();
chdir('C:\\Users\\Jeremy\\Documents\\GitHub\\Issues\\VIVOSTOOLS-399\\data');
foreach (glob("*.xls") as $filename) {
  echo "{$filename}".PHP_EOL;
}
chdir($savedir);
?>