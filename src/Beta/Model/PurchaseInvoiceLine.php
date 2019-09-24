<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PurchaseInvoiceLine File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* PurchaseInvoiceLine class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PurchaseInvoiceLine extends Entity
{
    /**
    * Gets the documentId
    *
    * @return string The documentId
    */
    public function getDocumentId()
    {
        if (array_key_exists("documentId", $this->_propDict)) {
            return $this->_propDict["documentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the documentId
    *
    * @param string $val The documentId
    *
    * @return PurchaseInvoiceLine
    */
    public function setDocumentId($val)
    {
        $this->_propDict["documentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the sequence
    *
    * @return int The sequence
    */
    public function getSequence()
    {
        if (array_key_exists("sequence", $this->_propDict)) {
            return $this->_propDict["sequence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sequence
    *
    * @param int $val The sequence
    *
    * @return PurchaseInvoiceLine
    */
    public function setSequence($val)
    {
        $this->_propDict["sequence"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the itemId
    *
    * @return string The itemId
    */
    public function getItemId()
    {
        if (array_key_exists("itemId", $this->_propDict)) {
            return $this->_propDict["itemId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the itemId
    *
    * @param string $val The itemId
    *
    * @return PurchaseInvoiceLine
    */
    public function setItemId($val)
    {
        $this->_propDict["itemId"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountId
    *
    * @return string The accountId
    */
    public function getAccountId()
    {
        if (array_key_exists("accountId", $this->_propDict)) {
            return $this->_propDict["accountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountId
    *
    * @param string $val The accountId
    *
    * @return PurchaseInvoiceLine
    */
    public function setAccountId($val)
    {
        $this->_propDict["accountId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lineType
    *
    * @return string The lineType
    */
    public function getLineType()
    {
        if (array_key_exists("lineType", $this->_propDict)) {
            return $this->_propDict["lineType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lineType
    *
    * @param string $val The lineType
    *
    * @return PurchaseInvoiceLine
    */
    public function setLineType($val)
    {
        $this->_propDict["lineType"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return PurchaseInvoiceLine
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the unitCost
    *
    * @return Decimal The unitCost
    */
    public function getUnitCost()
    {
        if (array_key_exists("unitCost", $this->_propDict)) {
            if (is_a($this->_propDict["unitCost"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["unitCost"];
            } else {
                $this->_propDict["unitCost"] = new Decimal($this->_propDict["unitCost"]);
                return $this->_propDict["unitCost"];
            }
        }
        return null;
    }
    
    /**
    * Sets the unitCost
    *
    * @param Decimal $val The unitCost
    *
    * @return PurchaseInvoiceLine
    */
    public function setUnitCost($val)
    {
        $this->_propDict["unitCost"] = $val;
        return $this;
    }
    
    /**
    * Gets the quantity
    *
    * @return Decimal The quantity
    */
    public function getQuantity()
    {
        if (array_key_exists("quantity", $this->_propDict)) {
            if (is_a($this->_propDict["quantity"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["quantity"];
            } else {
                $this->_propDict["quantity"] = new Decimal($this->_propDict["quantity"]);
                return $this->_propDict["quantity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the quantity
    *
    * @param Decimal $val The quantity
    *
    * @return PurchaseInvoiceLine
    */
    public function setQuantity($val)
    {
        $this->_propDict["quantity"] = $val;
        return $this;
    }
    
    /**
    * Gets the discountAmount
    *
    * @return Decimal The discountAmount
    */
    public function getDiscountAmount()
    {
        if (array_key_exists("discountAmount", $this->_propDict)) {
            if (is_a($this->_propDict["discountAmount"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["discountAmount"];
            } else {
                $this->_propDict["discountAmount"] = new Decimal($this->_propDict["discountAmount"]);
                return $this->_propDict["discountAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discountAmount
    *
    * @param Decimal $val The discountAmount
    *
    * @return PurchaseInvoiceLine
    */
    public function setDiscountAmount($val)
    {
        $this->_propDict["discountAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the discountPercent
    *
    * @return Decimal The discountPercent
    */
    public function getDiscountPercent()
    {
        if (array_key_exists("discountPercent", $this->_propDict)) {
            if (is_a($this->_propDict["discountPercent"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["discountPercent"];
            } else {
                $this->_propDict["discountPercent"] = new Decimal($this->_propDict["discountPercent"]);
                return $this->_propDict["discountPercent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discountPercent
    *
    * @param Decimal $val The discountPercent
    *
    * @return PurchaseInvoiceLine
    */
    public function setDiscountPercent($val)
    {
        $this->_propDict["discountPercent"] = $val;
        return $this;
    }
    
    /**
    * Gets the discountAppliedBeforeTax
    *
    * @return bool The discountAppliedBeforeTax
    */
    public function getDiscountAppliedBeforeTax()
    {
        if (array_key_exists("discountAppliedBeforeTax", $this->_propDict)) {
            return $this->_propDict["discountAppliedBeforeTax"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the discountAppliedBeforeTax
    *
    * @param bool $val The discountAppliedBeforeTax
    *
    * @return PurchaseInvoiceLine
    */
    public function setDiscountAppliedBeforeTax($val)
    {
        $this->_propDict["discountAppliedBeforeTax"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the amountExcludingTax
    *
    * @return Decimal The amountExcludingTax
    */
    public function getAmountExcludingTax()
    {
        if (array_key_exists("amountExcludingTax", $this->_propDict)) {
            if (is_a($this->_propDict["amountExcludingTax"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["amountExcludingTax"];
            } else {
                $this->_propDict["amountExcludingTax"] = new Decimal($this->_propDict["amountExcludingTax"]);
                return $this->_propDict["amountExcludingTax"];
            }
        }
        return null;
    }
    
    /**
    * Sets the amountExcludingTax
    *
    * @param Decimal $val The amountExcludingTax
    *
    * @return PurchaseInvoiceLine
    */
    public function setAmountExcludingTax($val)
    {
        $this->_propDict["amountExcludingTax"] = $val;
        return $this;
    }
    
    /**
    * Gets the taxCode
    *
    * @return string The taxCode
    */
    public function getTaxCode()
    {
        if (array_key_exists("taxCode", $this->_propDict)) {
            return $this->_propDict["taxCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the taxCode
    *
    * @param string $val The taxCode
    *
    * @return PurchaseInvoiceLine
    */
    public function setTaxCode($val)
    {
        $this->_propDict["taxCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the taxPercent
    *
    * @return Decimal The taxPercent
    */
    public function getTaxPercent()
    {
        if (array_key_exists("taxPercent", $this->_propDict)) {
            if (is_a($this->_propDict["taxPercent"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["taxPercent"];
            } else {
                $this->_propDict["taxPercent"] = new Decimal($this->_propDict["taxPercent"]);
                return $this->_propDict["taxPercent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the taxPercent
    *
    * @param Decimal $val The taxPercent
    *
    * @return PurchaseInvoiceLine
    */
    public function setTaxPercent($val)
    {
        $this->_propDict["taxPercent"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalTaxAmount
    *
    * @return Decimal The totalTaxAmount
    */
    public function getTotalTaxAmount()
    {
        if (array_key_exists("totalTaxAmount", $this->_propDict)) {
            if (is_a($this->_propDict["totalTaxAmount"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["totalTaxAmount"];
            } else {
                $this->_propDict["totalTaxAmount"] = new Decimal($this->_propDict["totalTaxAmount"]);
                return $this->_propDict["totalTaxAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the totalTaxAmount
    *
    * @param Decimal $val The totalTaxAmount
    *
    * @return PurchaseInvoiceLine
    */
    public function setTotalTaxAmount($val)
    {
        $this->_propDict["totalTaxAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the amountIncludingTax
    *
    * @return Decimal The amountIncludingTax
    */
    public function getAmountIncludingTax()
    {
        if (array_key_exists("amountIncludingTax", $this->_propDict)) {
            if (is_a($this->_propDict["amountIncludingTax"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["amountIncludingTax"];
            } else {
                $this->_propDict["amountIncludingTax"] = new Decimal($this->_propDict["amountIncludingTax"]);
                return $this->_propDict["amountIncludingTax"];
            }
        }
        return null;
    }
    
    /**
    * Sets the amountIncludingTax
    *
    * @param Decimal $val The amountIncludingTax
    *
    * @return PurchaseInvoiceLine
    */
    public function setAmountIncludingTax($val)
    {
        $this->_propDict["amountIncludingTax"] = $val;
        return $this;
    }
    
    /**
    * Gets the invoiceDiscountAllocation
    *
    * @return Decimal The invoiceDiscountAllocation
    */
    public function getInvoiceDiscountAllocation()
    {
        if (array_key_exists("invoiceDiscountAllocation", $this->_propDict)) {
            if (is_a($this->_propDict["invoiceDiscountAllocation"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["invoiceDiscountAllocation"];
            } else {
                $this->_propDict["invoiceDiscountAllocation"] = new Decimal($this->_propDict["invoiceDiscountAllocation"]);
                return $this->_propDict["invoiceDiscountAllocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invoiceDiscountAllocation
    *
    * @param Decimal $val The invoiceDiscountAllocation
    *
    * @return PurchaseInvoiceLine
    */
    public function setInvoiceDiscountAllocation($val)
    {
        $this->_propDict["invoiceDiscountAllocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the netAmount
    *
    * @return Decimal The netAmount
    */
    public function getNetAmount()
    {
        if (array_key_exists("netAmount", $this->_propDict)) {
            if (is_a($this->_propDict["netAmount"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["netAmount"];
            } else {
                $this->_propDict["netAmount"] = new Decimal($this->_propDict["netAmount"]);
                return $this->_propDict["netAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the netAmount
    *
    * @param Decimal $val The netAmount
    *
    * @return PurchaseInvoiceLine
    */
    public function setNetAmount($val)
    {
        $this->_propDict["netAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the netTaxAmount
    *
    * @return Decimal The netTaxAmount
    */
    public function getNetTaxAmount()
    {
        if (array_key_exists("netTaxAmount", $this->_propDict)) {
            if (is_a($this->_propDict["netTaxAmount"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["netTaxAmount"];
            } else {
                $this->_propDict["netTaxAmount"] = new Decimal($this->_propDict["netTaxAmount"]);
                return $this->_propDict["netTaxAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the netTaxAmount
    *
    * @param Decimal $val The netTaxAmount
    *
    * @return PurchaseInvoiceLine
    */
    public function setNetTaxAmount($val)
    {
        $this->_propDict["netTaxAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the netAmountIncludingTax
    *
    * @return Decimal The netAmountIncludingTax
    */
    public function getNetAmountIncludingTax()
    {
        if (array_key_exists("netAmountIncludingTax", $this->_propDict)) {
            if (is_a($this->_propDict["netAmountIncludingTax"], "Microsoft\Graph\Beta\Model\Decimal")) {
                return $this->_propDict["netAmountIncludingTax"];
            } else {
                $this->_propDict["netAmountIncludingTax"] = new Decimal($this->_propDict["netAmountIncludingTax"]);
                return $this->_propDict["netAmountIncludingTax"];
            }
        }
        return null;
    }
    
    /**
    * Sets the netAmountIncludingTax
    *
    * @param Decimal $val The netAmountIncludingTax
    *
    * @return PurchaseInvoiceLine
    */
    public function setNetAmountIncludingTax($val)
    {
        $this->_propDict["netAmountIncludingTax"] = $val;
        return $this;
    }
    
    /**
    * Gets the expectedReceiptDate
    *
    * @return \DateTime The expectedReceiptDate
    */
    public function getExpectedReceiptDate()
    {
        if (array_key_exists("expectedReceiptDate", $this->_propDict)) {
            if (is_a($this->_propDict["expectedReceiptDate"], "\DateTime")) {
                return $this->_propDict["expectedReceiptDate"];
            } else {
                $this->_propDict["expectedReceiptDate"] = new \DateTime($this->_propDict["expectedReceiptDate"]);
                return $this->_propDict["expectedReceiptDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expectedReceiptDate
    *
    * @param \DateTime $val The expectedReceiptDate
    *
    * @return PurchaseInvoiceLine
    */
    public function setExpectedReceiptDate($val)
    {
        $this->_propDict["expectedReceiptDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the item
    *
    * @return Item The item
    */
    public function getItem()
    {
        if (array_key_exists("item", $this->_propDict)) {
            if (is_a($this->_propDict["item"], "Microsoft\Graph\Beta\Model\Item")) {
                return $this->_propDict["item"];
            } else {
                $this->_propDict["item"] = new Item($this->_propDict["item"]);
                return $this->_propDict["item"];
            }
        }
        return null;
    }
    
    /**
    * Sets the item
    *
    * @param Item $val The item
    *
    * @return PurchaseInvoiceLine
    */
    public function setItem($val)
    {
        $this->_propDict["item"] = $val;
        return $this;
    }
    
    /**
    * Gets the account
    *
    * @return Account The account
    */
    public function getAccount()
    {
        if (array_key_exists("account", $this->_propDict)) {
            if (is_a($this->_propDict["account"], "Microsoft\Graph\Beta\Model\Account")) {
                return $this->_propDict["account"];
            } else {
                $this->_propDict["account"] = new Account($this->_propDict["account"]);
                return $this->_propDict["account"];
            }
        }
        return null;
    }
    
    /**
    * Sets the account
    *
    * @param Account $val The account
    *
    * @return PurchaseInvoiceLine
    */
    public function setAccount($val)
    {
        $this->_propDict["account"] = $val;
        return $this;
    }
    
}