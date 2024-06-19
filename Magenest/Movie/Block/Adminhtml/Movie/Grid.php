<?php

namespace Magenest\Movie\Block\Adminhtml\Movie;

use Magento\Backend\Block\Widget\Grid as WidgetGrid;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Magenest\Movie\Model\Resource\Movie\Collection
     */
    protected $_subscriptionCollection;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Magenest\Movie\Model\ResourceModel\Grid\Collection $subscriptionCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context             $context,
        \Magento\Backend\Helper\Data                        $backendHelper,
        \Magenest\Movie\Model\ResourceModel\Grid\Collection $subscriptionCollection,
        array                                               $data = []
    ) {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Movie Found'));
    }

    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);

        return parent::_prepareCollection();
    }

    /**
     * Prepare grid columns
     *
     * @return $this
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'movie_id',
            [
                'header' => __('ID'),
                'index' => 'movie_id',
            ]
        );
        $this->addColumn(
            'rating',
            [
                'header' => __('Rating'),
                'index' => 'rating',
            ]
        );

        $this->addColumn(
            'name',
            [
                'header' => __('Name'),
                'index' => 'name',
            ]
        );
//
//        $this->addColumn(
//            'email',
//            [
//                'header' => __('Email address'),
//                'index' => 'email',
//            ]
//        );

//        $this->addColumn(
//            'status',
//            [
//                'header' => __('Status'),
//                'index' => 'status',
//                'frame_callback' => [$this, 'decorateStatus']
//            ]
//        );

        return $this;
    }

//    public function decorateStatus($value) {
//        $class = '';
//
//        switch ($value) {
//            case 'pending':
//                $class = 'grid-severity-minor';
//                break;
//            case 'approved':
//                $class = 'grid-severity-notice';
//                break;
//            case 'declined':
//            default:
//                $class = 'grid-severity-critical';
//                break;
//        }
//
//        return '<span class="' . $class . '"><span>' . $value . '</span></span>';
//    }
}
