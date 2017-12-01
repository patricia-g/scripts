<?php
#Check if any ubuntu/CentOS service isn't running
//$out = 'apache2	cron mysql';
$s = 'hhtpd';
$cmnd = `service --status-all`;
$message="Uno o más servicios requeridos podrían no estar corriendo.Favor de verificar" .PHP_EOL;

$res=explode(' [', $cmnd);
//print_r($res);
foreach ($res as $val) {
	if(stripos($val, ' - ] ')!==false){
		$result[] = $val;
		//print_r($val);
	}else{echo "RUNNING" .PHP_EOL;
			break;
}
	while(stristr($val, $s)!==false){
			echo $message;
			print_r($val);
			break;
		}	
}
?>