<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Page;

class PageController extends Controller
{

    private $pages = [];

    public function __construct()
    {
    }

    public function show($num)
    {
        //print_r($num);
        $page = new Page;
        $id = $num['id'];
        if ($this->checkCount($id)) {
            $value = $page->getById($id);
            $this->title = $value['title'];
            return $this->render('page/show', $value);
        } else {
            $this->title = 'Вне диапазона';
            $value = ['text' => 'Вне диапазона'];
            return $this->render('page/show', $value);
        }
    }

    public function all()
    {
        $page = new Page;
        $pages = $page->getAll();
        $this->title = 'Все страницы';
        return $this->render('page/all', [$pages, 'h3' => $this->title]);
    }

    public function act()
    {
        return $this->render('page/act', [
            'var1' => 'data1',
            'var2' => 'data2',
            'var3' => 'data3',
            'users' => ['user1', 'user2', 'user3']
        ]);
    }

    public function act2()
    {
        echo '222';
    }



    private function checkCount($id)
    {
        $page = new Page;
        if ($page->getCount()[0] >= $id && $id >= 1) {
            return true;
        }
        return false;
    }
}
