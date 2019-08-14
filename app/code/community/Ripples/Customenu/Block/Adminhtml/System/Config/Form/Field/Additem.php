<?php
class Ripples_Customenu_Block_Adminhtml_System_Config_Form_Field_Additem extends Mage_Adminhtml_Block_System_Config_Form_Field_Regexceptions
{
    public function __construct()
    {
        $this->addColumn('menutitle', array(
            'label' => Mage::helper('adminhtml')->__('Menu Title'),
            'style' => 'width:120px',
        	'class' => 'input-text required-entry'
        ));
        $this->addColumn('link', array(
            'label' => Mage::helper('adminhtml')->__('Link'),
            'style' => 'width:220px',
        	'class' => 'input-text required-entry'
        ));
       
        $this->addColumn('order', array(
            'label' => Mage::helper('adminhtml')->__('Order'),
            'style' => 'width:40px',
        	'class' => 'required-entry input-text validate-number'
        ));	
        		
        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('adminhtml')->__('Add Menu Item');
        Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract::__construct();
    }
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);
        $html = $this->_toHtml();
        $this->_arrayRowsCache = null; // doh, the object is used as singleton!
        $html ='<div id="myeditableitem">'.$html.'</div>';
	return $html;
    }	
}