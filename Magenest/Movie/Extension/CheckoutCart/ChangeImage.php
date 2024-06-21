<?php

namespace Magenest\Movie\Extension\CheckoutCart;

class ChangeImage extends \Magento\Checkout\Block\Cart\Item\Renderer

{

    public function afterGetImage($item, $result)

    {

        //    if(CONDITION) {

        //        $result->setImageUrl(IMAGE_URL);

        //    }

        return $result;
    }
}
