<?php

namespace Stnc\Base\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Encryption\EncryptorInterface;

class Data extends AbstractHelper
{

    /**
     * @var EncryptorInterface
     */
    protected $encryptor;

/*
     * @param Context $context
     * @param EncryptorInterface $encryptor
     */
    public function __construct(
        Context $context,
        EncryptorInterface $encryptor
    )
    {
        parent::__construct($context);
        $this->encryptor = $encryptor;
    }


    /*
     * @return string
     */
    public function getTitle($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'stncbase/general/display_text',
            $scope
        );
    }



    /*
 * @return bool
 */
    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
       /* return $this->scopeConfig->isSetFlag(
            'stncbase/general/enable',
            $scope
        );
*/
        return $this->scopeConfig->getValue(
            'stncbase/general/enable',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getPorto_zoom($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'stncbase/productPageSetting/porto_zoom_enable',
            $scope
        );
    }



    /*
     * @return string
     */
    public function getProductPageSpecsBlock($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'stncbase/productPageSetting/product_page_specs_block',
            $scope
        );
    }


    /*
     * @return string
     */
    public function getProductWarrantyBlock($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'stncbase/productPageSetting/product_page_warranty_block',
            $scope
        );
    }



    /*
   * @return string
   */
    public function getSecret($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        $secret = $this->scopeConfig->getValue(
            'stncbase/general/secret',
            $scope
        );
        $secret = $this->encryptor->decrypt($secret);

        return $secret;
    }



}