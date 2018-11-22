<?php
//使用命名空间
namespace two\one;


function foo(){
    echo "调用 one/foo()";
}
class foo{
    static function aFunction(){
        echo "调用 one/foo::aFuntion()";
    }
}
// define("FOO",234);
const FOO = 234;

?>