<?php
    //<h2> 字体大小
    echo("<h2>PHP字符串可以包含HTML标签</h2>");
    echo "<br>";
    echo "这是一个","包含","多个","字符串","的字符串";

    //array
    $fruits = array("apple","orange","cherry");//键 默认为 0，1,2……
    echo "<br>";
    echo $fruits[0];//跟 C 语言，索引都从0开始
    echo "<br>";
    echo "数组fruits的长度: ",count($fruits);
    

    //print
    echo "<br>";
    print "用print输出：$fruits[2]";

    //PHP EOF (heredoc)
   //<P> 段落标签
    echo <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p> 
EOF;

    $str = "xyz";
    echo<<<EOF
    "abc"
    $str
    "123"
EOF;

//数据类型
$one = 4396;    // int
echo("<br>");
var_dump($one);//var_dump 获取变量的数据类型

$two = 0x10;    //16进制
$three = 010;   //8 进制
echo "<br>";
var_dump($two);

$f_one = 10.9;  //float
echo "<br>";
var_dump($f_one);

$b_one = true;  //bool
$b_two = false;
echo "<br>";
var_dump($b_one);

echo "<br>";
var_dump($fruits);//array

//PHP object 类型
//类？
class Asian{
    var $skinColor = "";
    function construct($skinColor = "yellow"){
        $this->skinColor = $skinColor;
    }

    function getSkinColor(){
        return $this->skinColor;
    }

    function getClassName(){
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}

//null 
$nuvar = null;
echo "<br>";
var_dump($nuvar);

echo "<br>";
echo $nuvar; //此时再尝试输出该变量


//PHP 常量

define("G",9.8,false);//常量默认为 全局变量
echo "<br>";
echo "输出常量 G = ",G;

//字符串 并置运算符.
$stra = "internat";
$strb = "ional";
echo "<br>";
echo $stra,$strb;//连续输出两个字符串变量
echo "<br>";
echo $stra."ional";
echo "<br>";
echo $stra.$strb;//.

//strlen
echo "<br>";
echo "字符串长度：",strlen("international");

//strpos,查找特定字符串
echo "<br>";
echo "nation 在 international 中的起始位置 ：",strpos("international","nation");

//PHP 运算符
$aint = 65;
echo "<br>";
echo -$aint; //-取反 直接可以作用于变量

echo "<br>";
echo intdiv(10,3); //整除，结果取整

echo "<br>";
echo var_dump(100 == "100"); // == 运算符
echo "<br>";
echo var_dump(100 === "100"); // === 运算符


$colorsA = array("a"=> "red");
$colorsB = array("b" => "blue");
$colorsC = $colorsA + $colorsB;//数组操作

//foreach 遍历 关联数组
echo "<br>";
echo "用foreach 遍历 关联数组colorsC";
echo "<br>";
foreach($colorsC as $key => $value){
    echo $key,"=>",$value;
    echo "<br>";
}

echo "<br>";
var_dump($colorsC);
echo "<br>";
echo $colorsC["b"];

$a = 6 > 5 ? 1 : 0; // ?: 三目运算符
echo "<br>";
echo "a 的值：",$a;

$first = 10;
$second = 11;
$compareResult = $first <=> $second; // 组合比较符> 1,== 0, < -1
echo "<br>";
echo $compareResult;


//数组排序
$elements = array("wind","fire","thunder","electricity"); //默认字符串数组
$nums = array(10,15,34,23,23,9,67);
sort($elements); //按值进行 升序 排序
sort($nums);
echo "<br>";
var_dump($elements);
echo "<br>";
var_dump($nums);

rsort($elements); //按值进行 降序 排序
echo "<br>";
var_dump($elements);

//asort（） 与 sort()相同
$food = array("cake","rice","beef","carrot","tomote","ginger");
asort($food);
echo "<br>";
var_dump($food);

//ksort() 
$peopleAges = array("Tom"=>13,"Ana"=>15,"Jack"=>14);   
ksort($peopleAges); //按key 升序 排序
echo "<br>";
var_dump($peopleAges);

krsort($peopleAges); //按key 降序 排序
echo "<br>";
var_dump($peopleAges);


//超级全局变量
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

//魔术变量
echo "<br>";
echo "当前行号：",__LINE__;
echo "<br>";
echo "本php文件路径：",__FILE__;


$obj_asin = new Asian();
echo "<br>";
$obj_asin->getClassName();

?>