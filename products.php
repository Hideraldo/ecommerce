<?php

use \Hcode\Model\User;
use \Hcode\Model\Product;
use \Hcode\PageAdmin;

$app->get('/admin/products', function(){

	User::verifyLogin();

	$products = Product::listAll();

	$page = new PageAdmin();

	$page->setTpl("products", [
		"products"=>$products
	]);

});

?>