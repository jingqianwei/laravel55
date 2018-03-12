<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8 0008
 * Time: 17:32
 */

class Superman
{
    protected $module;
    //为了让每个注入的类，都遵循SuperModuleInterface这个接口的规则
    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }
}