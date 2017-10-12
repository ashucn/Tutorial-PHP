<?php

/*
PHP 7.0.15

~ A First Class
~ A First Object (or Two)
 */

trait PriceUtilities {

    private static $taxrate = 8;

    public static function calculateTax($price)
    {
        return ((self::$taxrate / 100) * $price);
    }
}

class ShopProduct {

    use PriceUtilities;
// class body
    private $price;

    /**
     * @return mixed
     */
    function __construct($price = 0.00)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class BookProduct extends ShopProduct {

    use PriceUtilities;

    public function getPrice2()
    {
        return parent::getPrice();
    }
}
/*
$product1 = new ShopProduct(0.01);
$product2 = new ShopProduct(0.02);

var_dump($product1);
var_dump($product2);

$product3 = new BookProduct(0.03);
echo $product3->getPrice2();*/
$product4 = new ShopProduct();
echo $product4->calculateTax(5.00);