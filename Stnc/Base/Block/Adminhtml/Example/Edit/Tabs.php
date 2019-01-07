<?php

namespace Stnc\Base\Block\Adminhtml\Example\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('contact_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Contact Information'));
    }


protected function _prepareLayout()
{


    $this->addTab(
        'productgrid',
        [
            'label' => __('Select Product'),
            'url' => $this->getUrl('stnc/base/*/actionname', ['_current' => true]),
            'class' => 'ajax',

        ]
    );

}
}
