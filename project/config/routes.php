<?php

use \Core\Route;

return [
	new Route('/hello', 'hello', 'index'), // роут для приветственной страницы, можно удалить
	new Route('/my-page1', 'page', 'action1'),
	new Route('/my-page2', 'page', 'action2'),
	new Route('/act', 'page', 'act'),
	// new Route('/act1', 'test', 'act1'),
	// new Route('/act2', 'test', 'act2'),
	// new Route('/act3', 'test', 'act3'),
	new Route('/act/:var1', 'test', 'act'),
	new Route('/pages', 'page', 'all'),
	new Route('/page/:id', 'page', 'show'),
	new Route('/nums/:n1/:n2/:n3', 'num', 'sum'),
	new Route('/user/all', 'user', 'all'),
	new Route('/user/test', 'user', 'test'),
	new Route('/user/:id', 'user', 'show'),
	new Route('/user/first/:num', 'user', 'first'),
	new Route('/user/:id/:key', 'user', 'info'),
	new Route('/product/all', 'product', 'all'),
	new Route('/product/:id', 'product', 'show'),
];
