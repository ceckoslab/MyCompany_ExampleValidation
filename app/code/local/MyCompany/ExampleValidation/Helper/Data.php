<?php
/**
 * @author      Tsvetan Stoychev <tsvetan.stoychev@jarlssen.de>
 * @website     http://www.jarlssen.de
 */

class MyCompany_ExampleValidation_Helper_Data extends Mage_Core_Helper_Abstract
{

    const MULTIPLE_QTY_NUMBER_XML_PATH                          = 'example_validation/multiple_quantity/multiple_qty_number';
    const MULTIPLE_QTY_NUMBER_QUOTE_ITEM_ERROR_MESSAGE_XML_PATH = 'example_validation/multiple_quantity/multiple_qty_quote_item_error_message';
    const MULTIPLE_QTY_NUMBER_QUOTE_ERROR_MESSAGE_XML_PATH      = 'example_validation/multiple_quantity/multiple_qty_quote_error_message';

    /**
     * Getter for the multiple qty number for quote item
     *
     * @return null|int
     */
    public function getMultipleQtyNumber()
    {
        return Mage::getStoreConfig(self::MULTIPLE_QTY_NUMBER_XML_PATH);
    }

    /**
     * Getter for the quote item error message
     *
     * @return string
     */
    public function getMultipleQtyNumberQuoteItemErrorMessage()
    {
        return Mage::getStoreConfig(self::MULTIPLE_QTY_NUMBER_QUOTE_ITEM_ERROR_MESSAGE_XML_PATH);
    }

    /**
     * Getter for the quote error message
     *
     * @return string
     */
    public function getMultipleQtyNumberQuoteErrorMessage()
    {
        return Mage::getStoreConfig(self::MULTIPLE_QTY_NUMBER_QUOTE_ERROR_MESSAGE_XML_PATH);
    }

}