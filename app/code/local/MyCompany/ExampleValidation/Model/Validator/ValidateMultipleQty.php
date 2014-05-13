<?php
/**
 * @author      Tsvetan Stoychev <tsvetan.stoychev@jarlssen.de>
 * @website     http://www.jarlssen.de
 */

class MyCompany_ExampleValidation_Model_Validator_ValidateMultipleQty extends Jarlssen_CustomCartValidation_Model_Validator_Rule
{

    /**
     * @var MyCompany_ExampleValidation_Helper_Data
     */
    protected $_helper;

    public function __construct()
    {
        $this->_helper = Mage::helper('example_validation');
    }

    /**
     * Implementation of the validation logic
     *
     * @param Mage_Sales_Model_Quote_Item $item
     * @return bool
     */
    public function validate($item)
    {
        $multipleNumber = $this->_helper->getMultipleQtyNumber();

        $qty = $item->getQty();

        //For example 100 % 10
        if($qty % $multipleNumber != 0) {
            return false;
        }

        return true;
    }

    /**
     * In case we got validation error we have to specify and error
     * message, that will be show in the quote item line
     *
     * @return string
     */
    public function getQuoteItemMessage()
    {
        $multipleNumber = $this->_helper->getMultipleQtyNumber();
        return sprintf($this->_helper->getMultipleQtyNumberQuoteItemErrorMessage(), $multipleNumber);
    }

    /**
     * In case we got validation error we have to specify and error
     * message, that will be show in the quote
     * ( usually show in the cart heading section or product heading section )
     *
     * @return string
     */
    public function getQuoteMessage()
    {
        return $this->_helper->getMultipleQtyNumberQuoteErrorMessage();
    }
}