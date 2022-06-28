<?php

namespace Islam\Itraxmvc\lib;


class Bootstrap
{
    private string $controller;

    private string $method;

    public function __construct()
    {
        $this->url();
        $this->run();
    }

    private function url(): void
    {
        $url = $_SERVER['QUERY_STRING'];
        $url = explode('/', $url);
        $this->controller = (count($url) >= 2) ? $url[0] : "home";
        $this->method = (count($url) >= 2) ? $url[1] : "index";
    }

    private function run(): void
    {
        if(class_exists("Islam\Itraxmvc\controllers\\".$this->controller)){
            $object =  "Islam\Itraxmvc\controllers\\".$this->controller;
            call_user_func_array([new $object,$this->method],[]);
        }else{
            echo "Not Allow";
        }
    }
}
