<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_Marketplace
 * @version     1.9.2
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2016 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
class Apptha_Onestepcheckout_Block_System_Config_Form_Field_Feedbackfields extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract {
    /**
     * Construct to feedback fields
     */
    public function __construct() {
        $this->addColumn ( 'value', array (
                'label' => $this->__ ( 'Label' ),
                'style' => 'width:250px',
                'class' =>'required-entry'
        ) );
        $this->_addAfter = false;
        $this->_addButtonLabel = $this->__ ( 'Add label' );
        parent::__construct ();
    }
}