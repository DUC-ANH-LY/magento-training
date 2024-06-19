<?php

namespace Magenest\Movie\Block\Adminhtml\Movie\Edit;

class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry             $registry,
        \Magento\Framework\Data\FormFactory     $formFactory,
        array                                   $data = []
    )
    {
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Prepare form.
     *
     * @return $this
     */
    protected function _prepareForm()
    {
//        $dateFormat = $this->_localeDate->getDateFormat(\IntlDateFormatter::SHORT);
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(
            ['data' => [
                'id' => 'edit_form',
                'enctype' => 'multipart/form-data',
                'action' => $this->getData('action'),
                'method' => 'post'
            ]
            ]
        );

        $fieldset = $form->addFieldset(
            'base_fieldset',
            ['legend' => __('Add Row Data'), 'class' => 'fieldset-wide']
        );
//        }

        $fieldset->addField(
            'name',
            'text',
            [
                'name' => 'name',
                'label' => __('Name'),
                'id' => 'name',
                'title' => __('Name'),
                'required' => true,
            ]
        );

        $fieldset->addField(
            'description',
            'text',
            [
                'name' => 'description',
                'label' => __('Description'),
                'id' => 'description',
                'required' => true,
            ]
        );
        $fieldset->addField(
            'rating',
            'text',
            [
                'class'     => 'validate-number',
                'name' => 'rating',
                'required' => true,
                'label' => __('Rating'),
            ]
        );
        $fieldset->addField(
            'director',
            'select',
            [
                'name' => 'director',
                'label' => __('Director'),
                'id' => 'director',
                'title' => __('Director'),
                'values' => [1,2,3],
                'class' => 'director',
                'required' => true,
            ]
        );
        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
