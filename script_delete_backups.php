<?php
#Script for deleting old backups
#Nov, 2017.

chdir('Test/');
echo getcwd() . PHP_EOL;

$c = `ls -al`;
echo $c;

echo "Se han borrado backups antiguos" . PHP_EOL;
?>