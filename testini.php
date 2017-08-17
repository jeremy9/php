<?php
ini_set('memory_limit', '1024M');
set_time_limit(300);
echo 'memory_limit::'.ini_get('memory_limit').PHP_EOL;
echo 'max_execution_time::'.ini_get('max_execution_time').PHP_EOL;
?>