<?php
$file='readme.txt';
echo file_get_contents($file);
?>


<?php
$filename='readme.txt';

if(is_readable($filename)){
    echo "The file is readable";
}else{
    echo "The file is not readable";
}

if(is_writable($filename)){
    echo 'The file is writable';
}else{
    echo 'The file is not writable';
}

if(file_exists($filename)){
    echo "The file $filename exists";
}else{
    echo "The file $filename is not exists";
}

?>