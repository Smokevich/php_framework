<?php

namespace Project\Controllers;

use \Core\Controller;

class TestController extends Controller
{
    public function act($value)
    {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }

    public function act1()
    {
        echo 'act1';
    }

    public function act2()
    {
        echo 'act2';
    }

    public function act3()
    {
        echo 'act3';
    }
}
