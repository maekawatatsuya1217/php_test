<?php 

    $contactFile = '.read.dat';
    $contents = fopen($contactFile, 'a+');
    $addText = '1行追記' . "/n";
    fwrite($contents, $addText);
    fclose($contents);

?>