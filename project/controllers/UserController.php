<?php

namespace Project\Controllers;

use Core\Controller;
use Project\Models\User;

class UserController extends Controller
{
    private $users = [];

    public function __construct()
    {
        $this->users = [
            1 => ['name' => 'user1', 'age' => '23', 'salary' => 1000],
            2 => ['name' => 'user2', 'age' => '24', 'salary' => 2000],
            3 => ['name' => 'user3', 'age' => '25', 'salary' => 3000],
            4 => ['name' => 'user4', 'age' => '26', 'salary' => 4000],
            5 => ['name' => 'user5', 'age' => '27', 'salary' => 5000],
        ];
    }

    public function show($value)
    {
        $id = $value['id'];
        if ($this->checkCount($id)) {
            echo 'Имя ' . $this->users[$id]['name'] . '<br>' .
                'Возраст ' . $this->users[$id]['age'] . '<br>' .
                'Зарплата ' . $this->users[$id]['salary'] . '<br>';
        } else {
            echo 'Все границ!';
        }
    }

    public function info($value)
    {
        $id = $value['id'];
        if ($this->checkCount($id)) {
            $key = $value['key'];
            echo $this->users[$id][$key];
        } else {
            echo 'Все границ!';
        }
    }

    public function first($value)
    {
        $num = $value['num'];
        if ($this->checkCount($num)) {
            for ($i = 1; $i <= $num; $i++) {
                echo "<p>Имя - {$this->users[$i]['name']} | Возраст - {$this->users[$i]['age']} | Зарплата - {$this->users[$i]['salary']}</p>";
            }
        } else {
            echo 'Все границ!';
        }
    }

    public function all()
    {
        foreach ($this->users as $user) {
            echo "<p>Имя - {$user['name']} | Возраст - {$user['age']} | Зарплата - {$user['salary']}</p>";
        }
    }

    public function test()
    {
        $page = new User;
        $array = [];
        for ($i = 1; $i <= 50; $i++) {
            $name = 'User' . rand(1, 200);
            $age = rand(18, 80);
            $salary = rand(500, 3000);
            $array[] = [
                'name' => $name,
                'age' => $age,
                'salary' => $salary
            ];
        }
        //$page->set($array);
    }

    private function checkCount($id)
    {
        if (count($this->users) >= $id && $id >= 1) {
            return true;
        }
        return false;
    }
}
