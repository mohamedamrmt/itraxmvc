<?php

namespace Islam\Itraxmvc\controllers;

class BaseController
{
    public function __call($name, $arguments)
    {
        echo "this method : ".$name." not found";
    }
}
