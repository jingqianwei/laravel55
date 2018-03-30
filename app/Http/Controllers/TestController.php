<?php

namespace App\Http\Controllers;
use ArrayObject;

class TestController
{
    private $values;

    // 使用数组对象而不是数组
    public function __construct()
    {
        $this->values = new ArrayObject();
        //与数组不同，PHP 永远会将对象按引用传递。（ArrayObject 是一个 SPL 对象，它完全模仿数组的用法，但是却是以对象来工作。）
    }

    public function getValues()
    {
        return $this->values;
    }

    public function testArrayObject()
    {
        $this->getValues()['test'] = 'test';
        echo $this->getValues()['test'];
    }
}