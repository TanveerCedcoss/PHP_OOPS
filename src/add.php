<?php
require("classes/cart.php");
require("classes/products.php");
header(("location:products.php"));
session_start();
$id= $_GET['id'];
foreach($_SESSION["products"] as $v)
{
    if($v->id==$id)
    {
        $product=$v;
    }
}
print_r($product);
$add = new Cart();
$add->addToCart($product);
echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";



?>