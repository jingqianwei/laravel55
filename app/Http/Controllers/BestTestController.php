<?php

namespace App\Http\Controllers;

/**
尽管如此，我们要认识到应该尽量避免返回一个数组或 ArrayObject，因为这会让调用者能够修改实例对象的私有数据。
 * 这就破坏了对象的封装性。所以最好的方式是使用传统的「getters」和「setters」，例如：
 */
class BestTestController
{
    private $values = [];

    public function setValue($key, $value) {
        $this->values[$key] = $value;
    }

    public function getValue($key) {
        return $this->values[$key];
    }

    public function testArrayObject()
    {
        $this->setValue('testKey', 'testValue');
        echo $this->getValue('testKey');
    }
    /**
        这个方法让调用者可以在不对私有的$values数组本身进行公开访问的情况下设置或者获取数组中的任意值。
     */
}