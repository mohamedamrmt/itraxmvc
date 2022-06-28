<?php

namespace Islam\Itraxmvc\controllers;

use Islam\Itraxmvc\models\CategoryModel;

class home extends BaseController
{
    public function index()
    {
        $category = new CategoryModel();
        $categories = $category->getcategory();
        dd($categories);
        return view('index', ['categories' => $categories]);
    }

    public function add()
    {
        return view("add");
    }
}
