<?php

$file = 'extras/user1.txt';

if (file_exists($file)) {
    //echo readfile($file);
    $handle = fopen($file, 'r');
    $fileContents = fread($handle, filesize($file));
    fclose($handle);
    echo $fileContents;
} else {
    $handle = fopen($file, 'w');
    $fileContents = 'Mike' . PHP_EOL . 'Antony' . PHP_EOL . 'Steve';
    fwrite($handle, $fileContents);
    fclose($handle);
}