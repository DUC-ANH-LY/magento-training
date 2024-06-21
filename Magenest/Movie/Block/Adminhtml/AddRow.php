<?php

namespace Magenest\Movie\Block\Adminhtml;

class AddRow extends \Magento\Backend\Block\Widget\Form\Container
{
    protected $_coreRegistry = null;

    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry           $registry,
        array                                 $data = []
    )
    {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    protected function _construct()
    {
        $this->_objectId = 'row_id';
        $this->_blockGroup = 'Magenest_Movie';
        $this->_controller = 'adminhtml_movie';
        parent::_construct();
//        if ($this->_isAllowedAction('Webkul_Grid::add_row')) {
        $this->buttonList->update('save', 'label', __('Save'));
//        } else {
//            $this->buttonList->remove('save');
//        }
//        $this->buttonList->remove('reset');
    }

    public function getHeaderText()
    {
        return __('Add Row Data');
    }

    public function getFormActionUrl()
    {
        if ($this->hasFormActionUrl()) {
            return $this->getData('form_action_url');
        }

        return $this->getUrl('*/*/save');
    }
}
