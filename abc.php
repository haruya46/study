<?php
//クラス作成
class test{
    //プロパティの作成
    public $name;
    //nameプロパティを作成
    //　↓（__construct(引数を受け取ることが出来る)←コンストラクタメソット　インスタンスが作成されたときに必ず呼び出すことが出来る
    public function __construct($age){
        //この中に処理を書く
        echo $age;
    }


    function text(){
        echo "私の名前は、".$this->name."です";
        //文字列の間に変数やメソットを使う際には「.(ドット）」で挟む
        //$thisは、メソットを呼び出したインスタンスに変わる
    }

    
}
//クラス
//testクラスをインスタンス化して呼び出す
//testのインスタンスを変数（＄）に代入する
$curry= new test(3);
$curry->name="haruya";
//プロパティへのアクセス
$menu=new test(3);
//変数menuにtestクラスのインスタンスを代入
$menu->name ="macd";
//インスタンス->プロパティ名　でプロパティにアクセスする

$curry->text();
//textメソットを呼び出す処理
//実行結果
//私の名前は、haruyaです

$ages=new test(3)
//$ages=new test(引数を渡すことが出来る)


?>