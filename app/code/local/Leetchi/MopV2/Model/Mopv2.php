<?php

/**
 * Leetchi Meaning Of Payment 2.0
 *
 * @category    Leetchi
 * @package     Leetchi_MopV2
 * @copyright   Copyright (c) 2013 Leetchi. (http://www.leetchi.com)
 * 
 */
class Leetchi_MopV2_Model_Mopv2 extends Mage_Core_Model_Session_Abstract
{

    protected function _construct()
    {
        parent::_construct();
        $this->init('leetchi_mopv2');
    }

}