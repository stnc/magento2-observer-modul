<?php

namespace Stnc\Base\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Stnc\Base\Helper\Data;

class Config extends Template
{
    /**
     * @var Data
     */
    protected $helper;

    public function __construct(Context $context, Data $helper) {
        $this->helper = $helper;
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }
}