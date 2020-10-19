<?php

// 自动加载的逻辑
// 当 PHP 无法在已加载文件中找到要 new 的类时，会自动调用此方法
function __autoload($className)
{
    // 这是一个最简单的加载逻辑
    // 实际项目里，这里的算法一定会更加复杂，会根据传入的 className 来确定该加载的文件处于什么目录
    // 那么，className 和文件实际所在目录，就要有逻辑上的关联，这些需事先约定好
    // 比如，className 必须是这样的命名：App_Lib_Logic_UserLogic
    // 然后，explode('_',$className)，再将之组织成物理地址，再 require
    require_once "classes/" . $className . ".php";
}

$logic = new UserLogic();
echo $logic->getName();