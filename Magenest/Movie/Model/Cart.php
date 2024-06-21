<?php

namespace Magenest\Movie\Model;

use Magento\Checkout\Model\Cart as CartType;
use Magento\Framework\Message\ManagerInterface;

class Cart extends CartType
{
    protected $request;

    public function __construct(
        \Magento\Framework\App\Request\Http $request 
    ) {
         $this->request = $request;   
    }

    public function beforeAddProduct(CartType $subject, $result)
    {

        // $result->setName()

       return null;
    }
}