<?php

namespace Stnc\Base\Controller\Index;
use Stnc\Base\Helper\Data as _shelper;
class Test extends \Magento\Framework\App\Action\Action
{
    //https://magento.stackexchange.com/questions/154367/how-to-call-block-method-from-controller-in-magento-2
    protected $_pageFactory;

    protected $_helper;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory


//        _shelper $_helper
    )
    {
//      $this->_helper = $_helper;

        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
      /*  $_helper= new _shelper();
        $top = $this->_helper->getOption();
        echo "Hello World--- <br> " . $top;*/


//        $ophelp = $this->_helper->getOption();
//        echo "Hello World " . $ophelp;


        $option =  $this->_objectManager->create('Stnc\Base\Helper\Data')->getOption();
        echo "Hello World " . $option;

//bir işe yaramadı ??? neden
        $resultPage = $this->_pageFactory->create();
        $blockInstance = $resultPage->getLayout()->getBlock('beon_footer_social_media');
        echo "block " . $blockInstance;

//https://magento.stackexchange.com/questions/156411/how-to-call-static-block-in-left-sidebar-in-a-page-in-magento-2
//https://magento.stackexchange.com/questions/95082/magento2-how-to-show-a-block-content-on-homepage
        echo  $this->_view->getLayout()->createBlock('Magento\Cms\Block\Block')->setBlockId('beon_footer_social_media')->toHtml();
    }
}

