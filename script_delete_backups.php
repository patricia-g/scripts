<?php
#Script for deleting old backups
#Nov, 2017.

//chdir('Test/');
echo getcwd() . PHP_EOL;

$weeks=3;
$c = `ls -al`;
//echo $c .PHP_EOL;
echo var_dump($c);



foreach($files as $f){
	if(filemtime($f) < time() - $weeks * (7 * 24 * 3600)){
		unlink($f);
		echo "Se han borrado backups antiguos" . PHP_EOL;
	}
}
?>