<?php

namespace App\Http\Controllers;

class TestArrController
{
    private $values = [];

    /**  最终会输出一个错误 Undefined index: test   上面代码的问题在于没有搞清楚通过引用与通过值返回数组的区别。除非你明确告诉 PHP 通过引用返回一个数组
    public function getValues() {
        return $this->values;
    }

    public function testArray()
    {
        $this->getValues()['test'] = 'test';
        echo $this->getValues()['test'];
    }
    */

    //加个引用后，php在类中就不会返回一个拷贝数组了，而是最初定义的数组
    public function &getValues() {
        return $this->values;
    }

    public function testArray()
    {
        $this->getValues()['test'] = 'test';
        echo $this->getValues()['test'];
    }
}