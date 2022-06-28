<?php

namespace Islam\Itraxmvc\models;

use Itrax\DbWrapper\dbwrapper;

class CategoryModel extends dbwrapper
{
    public  function getcategory()
    {
        return $this->select("category", "*")->getAll();
    }
}
