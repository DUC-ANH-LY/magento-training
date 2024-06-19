<?php

namespace Webdev\Helloworld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Result\PageFactory;
use Webdev\Helloworld\Api\DataRepositoryInterface;
use Webdev\Helloworld\Api\Data\DataInterface;
use Webdev\Helloworld\Model\DataFactory;

class Index extends Action
{
    protected $_pageFactory;
    protected $_dataRepository;
    protected $_dataModel;
//    protected $_dataFactory;

    public function __construct(
        Context                 $context,
        PageFactory             $pageFactory,
        DataRepositoryInterface $dataRepository,
        DataInterface           $dataInterface,
//        DataFactory             $dataFactory,
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_dataRepository = $dataRepository;
        $this->_dataModel = $dataInterface;
//        $this->_dataFactory = $dataFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        /** Factory auto generate */
//            $collection  = $this->_dataFactory->create();
//            $collection->setData([
//                'student_name' =>'Ducanh',
//                'student_roll_no' => '2',
//                'student_status' => 1,
//            ]);
//            $collection->save();


        /** INSERT */

        $this->_dataModel->setStudentName("test1");
        $this->_dataModel->setStudentRollNo("222222");
        $this->_dataModel->setStudentStatus(1);
        try {
            $this->_dataRepository->save($this->_dataModel);
            echo 'Record Inserted';
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        $this->_dataRepository->save($this->_dataModel);


        /** SELECT / READ */

        // $data = $this->_dataRepository->getById(1);
        // echo '<pre>';print_r($data->getData());

        /** UPDATE */

        // $data = $this->_dataRepository->getById(1);
        // $data->setStudentName('webdeev chandra');
        // try{
        //     $this->_dataRepository->save($data);
        //     echo 'Record Updated';
        // }catch(\Exception $e){
        //     die($e->getMessage());
        // }
        // $this->_dataRepository->deleteById(1);

        /** DELETE */

        // $this->_dataRepository->deleteById(2);

        die('end here');
    }
}
