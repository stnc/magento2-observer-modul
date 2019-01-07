<?php

namespace Stnc\ZohoInventory\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Encryption\EncryptorInterface;

class Data extends AbstractHelper
{

	const XML_PATH_HELLOWORLD = 'base/';

	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	public function getGeneralConfig($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);
	}

    /*
 * @return bool
 */
    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'stncbase/general/enabled',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getPorto_zoom($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'stncbase/general/Porto_zoom_enable',
            $scope
        );
    }

}