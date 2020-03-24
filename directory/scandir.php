<?php
$dir='./';
$files0=scandir($dir);
$files1=scandir($dir,1);//역순

print_r($files0);
'<br />';
print_r($files1);
?>
