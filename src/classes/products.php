<?php
class Products
{

    public int $id;
    public string $img;
    public float $price;
    public function __construct(int $id, string $img, float $price)
    {
        $this->id = $id;
        $this->img = $img;
        $this->price = $price;
        $this->quantity=0;

    }
    public function getProducts($product)
    {
        foreach($product as $key=>$p)
        {
            echo "<div id='product-".$p->id."' class=\"product\">
            <img src=images/".$p->img.".png>
            <h3 class=\"title\"><a href=\"#\">Product ".$p->id." </a></h3>
            <span>Price:  $".$p->price." </span>
            <a class=\"add-to-cart\" href=\"add.php?id=".$p->id."\">Add To Cart</a>
            </div>";
        }
    }
   
}