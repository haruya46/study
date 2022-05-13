<?php
require_once('data.php');

$stmt=$pdo->prepare("SELECT * FROM test;");
//変数->prepare("SQL文;"); 
//prepare関数を使うことで実行したいSQLを定義できる
$stmt->execute();
//execute関数を使うことでprepareで書いた構文を実行できる
$study=$stmt->fetchAll();
//fetchAll関数で実行した構文の値を受け取ることが出来る

foreach($study as $test){
    echo $test['name'];
    echo $test['text'];
}
//SQLは配列でしか受け取れない
//foreach文を使って受け取る
//foreach(fetchAllを代入した変数　as キー変数){
//    echo キー変数['カラム名(例）id'];
//    echo キー変数['カラム名'];
//}
?>
