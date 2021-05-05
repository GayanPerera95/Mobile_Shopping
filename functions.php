<?php

require ('database/DBController.php');

require ('database/Product.php');

require ('database/Cart.php');


$db = new DBController();

$product = new Product($db);


$Cart = new Cart($db);
$arr = array(
    "user_id" => 2,
    "item_id" => 5
    
);

$Cart->insertIntoCart($arr);

