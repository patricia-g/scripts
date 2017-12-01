<?php
 #Script that checks free disk space.

$d = round(disk_free_space('/')/1024 /1024 /1024);

echo $d." GB libres" .PHP_EOL;
?>