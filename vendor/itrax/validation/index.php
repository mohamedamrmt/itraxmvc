<?php

require "vendor/autoload.php";

use Itrax\Validation\validation;

if(isset($_POST['username'])){
    $v = new validation();
    $v->input('username')->required()->email();
    $v->showErorrs();
}



?>

<form action="index.php" method="post">
     <input type="text" name="username">
     <input type="text" name="age">
    <input type="submit">
</form>
