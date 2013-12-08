<?php

/**
 * Leetchi Meaning Of Payment 2.0
 *
 * @category    Leetchi
 * @package     Leetchi_MopV2
 * @copyright   Copyright (c) 2013 Leetchi. (http://www.leetchi.com)
 * 
 */
class Leetchi_MopV2_Helper_Config extends Mage_Core_Helper_Data
{
    private $_baseUrl;
    private $_testMode;
    private $_leetchiUrl;
    private $_merchantKey;
    private $_callbackUrl;
    private $_returnUrl;
    private $_cancelUrl;
    
    public function __construct()
    {
        $this->_baseUrl = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_DIRECT_LINK);
    }
    
    public function getLeetchiUrl()
    {
        $this->_testMode = Mage::getStoreConfig('payment/mopv2/test');
        
        if ($this->_testMode)
        {
            return $this->_leetchiUrl = Mage::getStoreConfig('payment/mopv2/test_url');
        }
        
        return $this->_leetchiUrl = Mage::getStoreConfig('payment/mopv2/prod_url');
    }
    
    public function getMerchantKey()
    {
        if ($this->_merchantKey)
        {
            return $this->_merchantKey;
        }
        
        return Mage::getStoreConfig('payment/mopv2/merchant_key');
    }
    
    public function getCallbackUrl()
    {
        if ($this->_callbackUrl)
        {
            return $this->_callbackUrl;
        }
        
        return $this->_baseUrl . Mage::getStoreConfig('payment/mopv2/callback_url');
    }
    
    public function getReturnUrl()
    {
        if ($this->_returnUrl)
        {
            return $this->_returnUrl;
        }
        
        return $this->_baseUrl . Mage::getStoreConfig('payment/mopv2/return_url');
    }
    
    public function getCancelUrl()
    {
        if ($this->_cancelUrl)
        {
            return $this->_cancelUrl;
        }
        
        return $this->_baseUrl . Mage::getStoreConfig('payment/mopv2/cancel_url');
    }
}