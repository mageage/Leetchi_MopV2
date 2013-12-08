<?php

/**
 * Leetchi Meaning Of Payment 2.0
 *
 * @category    Leetchi
 * @package     Leetchi_MopV2
 * @copyright   Copyright (c) 2013 Leetchi. (http://www.leetchi.com)
 * 
 */
class Leetchi_MopV2_Block_Redirect extends Mage_Core_Block_Template
{
    
    const VERSION = 2;
    
    private $_configHelper;

    protected function _construct()
    {
        //parent::_construct();
        $this->_configHelper = Mage::helper('leetchi_mopv2/config');
    }

    protected function _toHtml()
    {
        $leetchi = Mage::getModel('leetchi_mopv2/method_mopv2');
        /* $form = new Varien_Data_Form();
          $form->setAction($leetchi->getLeetchiUrl())
          ->setId('leetchi_payment_form')
          ->setName('leetchi_payment_form')
          ->setMethod('POST')
          ->setUseContainer(true);

          $form = $leetchi->addLeetchiFields($form);

          $this->setLeetchiForm($form); */

        return parent::_toHtml();
    }

    /**
     * Add all needed fields for leetchi payment
     * @param $forms Object
     */
    public function addLeetchiFields($form)
    {
        $form->addField(
            'callback-url', 'hidden', array(
                'name' => 'pay_to_email',
                'value' => $this->getPayToEmail()
        ));
        
        $form->addField(
            'return-url', 'hidden', array(
                'name' => 'pay_to_email',
                'value' => $this->getPayToEmail()
        ));
        
        $form->addField(
            'tag', 'hidden', array(
                'name' => 'pay_to_email',
                'value' => $this->getPayToEmail()
        ));
        
        $form->addField(
            'logo', 'hidden', array(
                'name' => 'pay_to_email',
                'value' => $this->getPayToEmail()
        ));
        
        $form->addField(
            'locale', 'hidden', array(
                'name' => 'pay_to_email',
                'value' => $this->getPayToEmail()
        ));
        
        $form->addField(
            'amount', 'hidden', array(
                'name' => 'pay_to_email',
                'value' => $this->getPayToEmail()
        ));
        
        $form->addField(
            'merchant-key', 'hidden', array(
                'name' => 'pay_to_email',
                'value' => $this->_configHelper->getMerchantKey()
        ));
        
        $form->addField(
            'version', 'hidden', array(
                'name' => 'pay_to_email',
                'value' => self::CODE
        ));
    }

}

/**

 * <input type="hidden" name="callback-url" value="http://google.com">
<input type="hidden" name="return-url" value="http://google.com">
<input type="hidden" name="tag" value="Anything you want to pass">
<input type="hidden" name="logo" value="1">
<input type="hidden" name="locale" value="fr">
<input type="hidden" name="amount" value="1000">
<input type="hidden" name="merchant-key" value="_srEfjXA4A_VhcjEntPtmQ">
<input type="hidden" name="version" value="2">
<input type="image" src="http://mop.leetchi.com/logo/leetchi/1.png">
 * 
 */