<?php
class A{
    function __construct()
    {
        echo "调用A:construct()";
    }

    function __destruct()
    {
        echo "调用A:destruct() <br>";
    }

    public function sayHello(){
        echo("你好！");
    }

    public function getAge(){
        return $this->age;
    }

    private function getSalary(){
        return $this->salary;
    }

    public function test(){
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic(){
        echo "调用Public A:testPublic()";
    }

    private function testPrivate(){
        echo "调用private A:testPrivate()";
    }

    public  $name  = "Tom";
    protected $age = 17;
    private $salary = 10000;

}

//继承
class B extends A{
    //重写
    public function sayHello()
    {
        echo("hi!");
    }

    public function testPublic(){
        echo "调用Public B:testPublic()";
    }

    private function testPrivate(){
        echo "调用private B:testPrivate()";
    }
    protected $age = 33; //修改
    const G = 9.8;
   
}


$obj_a = new A;
echo("<br>");

$obj_b = new B;
echo "<br>";
$obj_b->sayHello();
echo "<br>";
// 
echo $obj_b->name;
echo "<br>";


echo $obj_b->getAge();
echo "<br>";
echo "B类中的常量G ：",B::G;
echo "<br>";

$obj_b->test();

//interface
 interface if_A{
     public function sayHello();
 }

 class Dog implements if_A{
     public function sayHello()
     {
         echo("汪汪汪！");
     }
 }

?>