<?php

/**
 * Leetchi Meaning Of Payment 2.0
 *
 * @category    Leetchi
 * @package     Leetchi_MopV2
 * @copyright   Copyright (c) 2013 Leetchi. (http://www.leetchi.com)
 * 
 */
class Leetchi_MopV2_Block_Form_Leetchi extends Mage_Payment_Block_Form_Cc
{

    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('leetchi/mopv2/form/leetchi.phtml');
    }

}