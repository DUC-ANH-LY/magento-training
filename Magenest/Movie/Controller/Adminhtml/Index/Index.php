<?php
namespace Magenest\Movie\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    public $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
//        $resultPage->setActiveMenu('Magenest_Movie::grid_list');
//        $resultPage->getConfig()->getTitle()->prepend(__('Grid List'));
        return $resultPage;
    }

//    protected function _isAllowed()
//    {
////        return $this->_authorization->isAllowed('Packt_HelloWorld::index');
//    }
}
