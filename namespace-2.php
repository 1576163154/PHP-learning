<?php
namespace two;
include "namespace-1.php";
// define("FOO",345);
const FOO = 345;
function foo(){
    echo "调用 two/foo()";
}
class foo{
    static function aFunction(){
        echo "调用 two/foo::aFuntion()";
    }
}
echo "当前命名空间 ：",__NAMESPACE__;
echo "<br>";
foo(); //实际为 two/foo();
echo "<br>";
echo FOO; //    
echo "<br>";
foo::aFunction();

//加上限定
echo "<br>";
one\foo(); //
echo "<br>";
echo one\FOO; //    
echo "<br>";
one\foo::aFunction();

//完整限定
echo "<br>";
\two\foo();

//在 two 使用全局函数
echo "<br>";
echo \strlen("dfljaldjf"),"  int_max_size:",\PHP_INT_MAX;
?>