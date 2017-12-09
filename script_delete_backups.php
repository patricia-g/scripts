<?php
#Script for deleting old backups
#Nov, 2017.

//chdir('Test/');
$path= "/";
$weeks=3;
$c = `ls -al`;
$filetypes_to_delete = array(".txt");
//echo var_dump($c);

// Open the directory
if ($handle = opendir($path))
{
    while (($file = readdir($handle))!==false)
    {
        
        if (is_file($path.$file))
        {
            $file_info = pathinfo($path.$file);
            if (isset($file_info['extension']) && in_array(strtolower($file_info['extension']), $filetypes_to_delete))
            {
                if (filemtime($path.$file) < ( time() - ( $weeks *7 * 24 * 60 * 60 ) ) )
                {
                    unlink($path.$file);
                    echo "Se han borrado backups antiguos" . PHP_EOL;
                }
            }else{
                	echo "Archivo reciente." .PHP_EOL; 
                }
        }
    }
}
?>