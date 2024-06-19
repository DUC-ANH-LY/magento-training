<?php

namespace Magenest\Movie\Observer;

class ChangeFirstName implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
        $observer->getData()['customer']->setFirstName('Magenest');
	}
}
