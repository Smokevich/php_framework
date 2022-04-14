<?php

namespace Project\Controllers;

use \Core\Controller;

class NumController extends Controller
{
    public function sum($value)
    {
        echo $value['n1'] + $value['n2'] + $value['n3'];
    }
}
