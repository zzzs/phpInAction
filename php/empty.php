<?php
// 数组的判断
$arr = [];
var_dump(empty($arr));
// 输出 bool(true)
$arr = new ArrayObject();
var_dump(empty($arr));
// 输出 bool(false)


// 类属性的判断
class ClassA
{
    public $test = 'value';
}

class ClassB
{
    private $values = ['test' => 'value'];

    public function __get($key)
    {
        if (isset($this->values[$key])) {
            return $this->values[$key];
        }
    }
}
$classA = new ClassA();
var_dump($classA->test);
// 输出 string(4) "value"
$classB = new ClassB();
var_dump($classB->test);
// 输出 string(4) "value"

var_dump(empty($classA->test));
// 输出 bool(false)
var_dump(empty($classB->test));
// 输出 bool(true)
