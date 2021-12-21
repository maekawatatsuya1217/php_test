<?php 

    // ファイル読み込み
    $contentfile = '.read.dat';
    $read = file_get_contents($contentfile);
    echo $read;

    // ファイル書き込み（上書き）
    // file_put_contents($contentfile, 'テストです');

    // ファイル書き込み（追記）
    file_put_contents($contentfile, 'テストです', FILE_APPEND);
?>