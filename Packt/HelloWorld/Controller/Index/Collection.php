<?php
namespace Packt\HelloWorld\Controller\Index;

class Collection extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $productCollection = $this->_objectManager
            ->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addAttributeToSelect([
                'name',
                'price',
                'image',
            ])
            ->addAttributeToFilter('entity_id', array(
                'in' => array(1, 2, 3)
            ));

        $output = '';

        $productCollection->setDataToAll('price', 20);

        foreach ($productCollection as $product) {
            print_r($product->getData());
            echo "<br>";
        }
//        $this->getResponse()->setBody($output);
    }

}
