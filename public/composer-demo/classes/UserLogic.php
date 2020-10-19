<?php

class UserLogic
{
    private $name;

    public function __construct()
    {
        $this->name = "Job";
    }

    public function getName()
    {
        return $this->name;
    }
}