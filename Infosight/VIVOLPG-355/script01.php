<?php
while (!feof(STDIN)) {
  $line = trim(fgets(STDIN));
  fwrite(STDOUT, $line);
  $res = preg_match('/([^\w]+)\w*="(.*)"/', $line, $matches);
  if ($res === 1) {
    fwrite(STDOUT, $matches[1]." = \"".$matches[2]."\"".PHP_EOL);
  }
}
echo "Complete";
?>