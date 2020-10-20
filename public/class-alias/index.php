<?php

ini_set('display_errors', 1);

include "./class.php";

var_dump((new Admin\User\User())->uid());

class_alias(\Admin\User\User::class,'OJBK');

var_dump((new OJBK())->uid());