<?php
#Check if any ubuntu/CentOS service isn't running
//$out = 'apache2	cron mysql';
$s = 'mysql';
$cmnd = `service --status-all`;
$message="Uno o más servicios requeridos podrían no estar corriendo.Favor de verificar" .PHP_EOL;

$res=explode(' [', $cmnd);
//print_r($res);
foreach ($res as $val) {
	if(stripos($val, ' - ] ')!==false){
		$result[] = $val;
		//print_r($val);
	while(stristr($val, $s)!==false){
			echo $message;
			print_r($val);
			break;
		}	
	}
	else if(stristr($val, 'apache')!==false)
		{
			echo "Servicios requeridos corriendo";
			print_r($val);	

		}
	elseif (stristr($val, $s)!==false) {
			echo "Servicios requeridos corriendo";
			print_r($val);
		}	
}
if(empty($res))
{
	echo "NO SE ENCONTRARON SERVICIOS! REVISAR";

}
?>