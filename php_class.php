<?php
//Leaning about class

class SimpleClass{

    //プロパティの宣言(class定義の中の変数や定数)
    public $var = 'a default value';

    //メソッドの宣言(class定義の関数)
    public function displayVar() {
       echo $this->var;
    }
}

class SimpleClass2 {
    public $var = 'a default value 2';
}

//インスタンス化
$instance_class = new SimpleClass;

$instance_class->displayVar(); //a default value
echo $instance_class->var; //a default value


$instance_class2 = new SimpleClass2;
echo $instance_class2->var; //a default value 2

echo "<br><br>";
// - - - - -

class time_now{

    public $time_format = "Y-m-d h:i:s";

    public function now(){
        return date($this->time_format);
    }
}

$t_f = new time_now;
$t_f2 = new time_now;

//インスタンスが保持しているプロパティの値を変更できる
$t_f2->time_format = "y-n-j g:i:s";

echo $t_f->now(); //2019-07-30 04:26:38
echo $t_f2->now(); //19-7-30 4:29:04

echo "<br><br>";
// - - - - -

class myName{
    private $name;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

}

$m_name = new myName();
$m_name->setName("M");
echo $m_name->getName()."\n"; //M



//継承
class myName2 extends myName {
    private $addr;

    function setAddr($add){
         $this->addr = $addr;
    }

    function getAddr(){
        return $this->addr;
    }
}

$m_name2 = new myName2();

$m_name2->setName("MM");
echo $m_name2->getName()."\n"; //MM

$m_name2->setAddr("MM add");
echo $m_name2->getAddr()."\n"; //?


//クラス定数
class myMath{
    const PI = 3.14;
}

//インスタンス化せず、アクセス可能
//クラス名::定数名
echo myMath::PI."\n";


//スタティック変数
class myMath2{
    public static $debug_level = 0;
}

//インスタンス化せず、アクセス可能
//定義後も変更可能 ※定数は変更できない
//クラス名::$定数名
myMath2::$debug_level = 9;
echo myMath2::$debug_level."\n";


//スタティックメソッド
class myMath3{
    public static function add($x, $y){
        return $x + $y;
    }
}

//インスタンス化必要なし
//クラス名::メソッド名()
echo myMath3::add(3,5)."\n";

//:: ←スコープ演算子

//self:: は、自クラスの意味
//クラス定数、スタティック定数、スタティックメソッドについてインスタンス化せずに使用するため、
//$thisは使用できず、代わりにselfを使用します
class myMath4{
    const PI = 3.14;
    public static $debug_level = 0;
    public static function add($x, $y) { return $x + $y; }

    function test(){
        echo self::PI."\n";
        echo self::$debug_level."\n";
        echo self::add(3,5)."\n";
        echo 'test';
    }
}
//?

//parent:: 親クラス
class pare{
    function func1(){
        echo "func1()";
    }
}
class chi extends pare{
    function func2(){
        parent::func1();
    }

}


//コンストラクタ
//オブジェクト作成時に暗黙的に呼び出される
class myCons{
    function __construct(){
        echo 'Constructer of this class';
    }
}

$obj = new myCons();


//参考：
//http://www.tohoho-web.com/php/class.html

?>
