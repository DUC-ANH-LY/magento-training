<?php
namespace Magenest\Movie\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;
use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Result\PageFactory;

class Edit extends \Magento\Backend\App\Action
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
//        $resultPage->setActiveMenu('Packt_HelloWorld::component');
//        $resultPage->addBreadcrumb(__('HelloWorld'), __('HelloWorld'));
//        $resultPage->addBreadcrumb(__('Components'), __('Components'));
//        $resultPage->getConfig()->getTitle()->prepend(__('Components'));

        return $resultPage;
    }
}
