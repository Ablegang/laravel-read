<?php

ini_set("display_errors", 1);
include_once "namespace.php";

echo (new Admin\User\Logic\UserLogic())->getUid();
echo "<br>";
echo (new Home\User\Logic\UserLogic())->getUid();