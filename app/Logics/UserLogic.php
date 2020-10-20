<?php

namespace App\Logics;

class UserLogic
{
    public function getUser($uid)
    {
        return $uid + 1;
    }
}