<?php

class TestDemo
{
    private $user;

    public function getUser()
    {
        return $this->user;
    }
}

$instance = new TestDemo();
var_dump($instance->getUser());

// 第一个参数是闭包，第二个参数是绑定的实例，第三个参数是此闭包可访问范围
// 返回值是一个闭包，执行此闭包就等于该类执行了一遍绑定的这个方法
call_user_func(Closure::bind(function () use ($instance) {
    $instance->user = 1;
}, $instance, TestDemo::class));

var_dump($instance->getUser());
