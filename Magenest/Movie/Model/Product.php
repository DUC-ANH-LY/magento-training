<?php

namespace Magenest\Movie\Model;
use \Magento\Catalog\Model\Product as ProductType;

class Product extends ProductType{
    // public function getName()
    // {
    //     return "test";
    // }

    public function afterGetName(ProductType $product,$res) {
        return $res . "hi";
    }   
}