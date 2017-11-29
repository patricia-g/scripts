<?php
#Check if any ubuntu/CentOS service isn't running
$out = `service httpd status && service mysql status`;
$cmnd = `service --status-all`;

if(stripos($out, 'running')!==false){
	var_dump($out) .PHP_EOL;
	
}else //if(stripos($out, 'dead')!==false || stripos($out, 'stopped')!==false) 
{
	$message="Uno o más servicios requeridos podrían no estar corriendo.Favor de verificar PHP,MySQL,Web Server." .PHP_EOL;
	echo $message;
}
?>