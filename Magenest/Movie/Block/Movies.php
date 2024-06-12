<?php
namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template;

class Movies extends Template
{
    private $_productCollectionFactory;

    public function __construct(
        Template\Context $context,
        \Magenest\Movie\Model\ResourceModel\Movie\CollectionFactory $productCollectionFactory,
        array $data = [])
    {
        parent::__construct($context, $data);

        $this->_productCollectionFactory = $productCollectionFactory;
    }

    public function getProducts() {
        $collection = $this->_productCollectionFactory->create();

        $collection
            ->addFieldToSelect('*')
            ->setOrder('rating')
            ->setPageSize(5);

        return $collection;
    }
}
