<?php

namespace Magenest\Movie\Observer;

class ChangeMovieRating implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
        $observer->getData()['data_obj']->setRating(2);
	}
}
