<?php


function view($path,$data){
    extract($data);
    include "../src/views/".$path.".php";
}


function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die;
}
