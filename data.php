<?php 
    $dsn ="mysql:dbname=study;host=localhost;charset=utf8";
    $user="root";
    $password="";
    $opt=[];
    
    $pdo=new PDO($dsn,$user,$password,$opt);
    //PDOを用いたmysqlへの接続方法
    //$dsn ="mysql:dbname=データーベース名;host=localhost;charset=utf8";
    //$user="root";　ユーザーネーム
    //$password="";　パスワード
    //$opt=[];
    //$pdo=new PDO($dsn,$user,$password,$opt);
    

?>