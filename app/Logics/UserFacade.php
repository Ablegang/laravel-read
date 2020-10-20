<?php

namespace App\Logics;

use Illuminate\Support\Facades\Facade;

class UserFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return UserLogic::class;
    }
}