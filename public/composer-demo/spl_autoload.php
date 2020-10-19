<?php

ini_set('display_errors', 1);

// Library/Library_UserService.php
function underlineLoad($className)
{
    $pathArr = explode('_', $className);
    array_pop($pathArr);
    $path = implode('/', $pathArr);
    $fullPath = './' . $path . '/' . $className . '.php';
    if (file_exists($fullPath)) {
        require_once $fullPath;
    }
}

// classes/UserLogic.php
function simplePathLoad($className)
{
    $fullPath = "./classes/" . $className . ".php";
    if (file_exists($fullPath)) {
        require_once $fullPath;
    }
}

// 注册自动加载方法
spl_autoload_register("simplePathLoad");
spl_autoload_register("underlineLoad");

$service = new Library_UserService();
var_dump($service);

$logic = new UserLogic();
var_dump($logic);