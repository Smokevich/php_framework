<?php

use \Core\Route;

return [
	new Route('/hello', 'hello', 'index'), // роут для приветственной страницы, можно удалить
	new Route('/my-page1', 'page', 'action1'),
	new Route('/my-page2', 'page', 'action2'),
	new Route('/act1', 'test', 'act1'),
	new Route('/act2', 'test', 'act2'),
	new Route('/act3', 'test', 'act3'),
	new Route('/act/:var1', 'test', 'act'),
	new Route('/nums/:n1/:n2/:n3', 'num', 'sum')
];
