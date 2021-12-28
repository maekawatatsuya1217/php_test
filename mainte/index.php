<?php

    require 'db_connection.php';

    // ユーザー入力なし query
    // $sql = 'select * from contacts where id = 1';
    // $stmt = $pdo->query($sql);

    // $result = $stmt -> fetchall();
  
    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";

    // ユーザー入力あり（フォーム・検索機能） prepare bind esecut 悪意あるユーザーからデータを守る為 SQLインジェクション対策

    $sql = 'select * from contacts where id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('id', 2, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt -> fetchall();

    echo "<pre>";
    var_dump($result);
    echo "</pre>";

    // まとまって処理 beginTransaction, commit, rollback

    $pdo->beginTransaction();

    try{

        // sql処理
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('id', 2, PDO::PARAM_INT);
        $stmt->execute();

        $pdo->commit();

    }catch(PDOExcection $e){

        $pdo->rollback();

    }
?>