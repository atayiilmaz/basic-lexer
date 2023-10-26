<?php

$file = fopen("test.txt", "r");
$fileData = fread($file, filesize("test.txt"));
fclose($file);

$words = preg_split('/[ \t\n]+/', $fileData);

foreach ($words as $word) {
    echo $word . "<br>";
    
}