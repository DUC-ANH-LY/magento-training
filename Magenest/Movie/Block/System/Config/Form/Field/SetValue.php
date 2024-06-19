<?php


namespace Magenest\Movie\Block\System\Config\Form\Field;
use Magenest\Movie\Model\ResourceModel\Grid\CollectionFactory;
class SetValue extends \Magento\Framework\App\Config\Value
{
    private $collectionFactory;
//    private $actor_collectionFactory;

    protected function __construct(
        \Magenest\Movie\Model\ResourceModel\Grid\CollectionFactory $mov
    )
    {
        $this->collectionFactory = $mov;
    }

    protected function _afterLoad()
    {
//        $val  =  $this->collectionFactory->create()->addFieldToSelect('*')->count();
        if (str_contains($this->getPath(),'movie')) {
            $this->setValue($this->collectionFactory->create()->addFieldToSelect('*')->count());
        }
    }
}
