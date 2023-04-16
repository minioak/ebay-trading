<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * Type defining the
 * AddItemResponseContainer
 * containers that are returned in an
 * AddItems
 * call. An
 * AddItemResponseContainer
 * container is returned for each item created through an
 * AddItems
 * call. Each item being created through an
 * AddItems
 * call is identified through a unique
 * AddItemRequestContainer.MessageID
 * value that is defined by the seller. To match up the
 * AddItemResponseContainer
 * to the
 * AddItemRequestContainer
 * , look for a
 * AddItemResponseContainer.CorrelationID
 * value that matches the
 * AddItemRequestContainer.MessageID
 * value in the request.
 **/
class AddItemResponseContainerType extends EbatNs_ComplexType
{
    const TAG = 'AddItemResponseContainerType';
    const NAME = 'AddItemResponseContainerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var string|null
     */
    protected $EndTime = null;

    /**
     * @var FeesType|null
     */
    protected $Fees = null;

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var string|null
     */
    protected $Category2ID = null;

    /**
     * @var string|null
     */
    protected $CorrelationID = null;

    /**
     * @var ErrorType[]|null
     */
    protected $Errors = [];

    /**
     * @var string|null
     */
    protected $Message = null;

    /**
     * @var DiscountReasonCodeType[]|null
     */
    protected $DiscountReason = [];


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }

    /**
     * @return FeesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFees()
    {
        return $this->_dc($this->Fees, 'Fees');
    }

    /**
     * @param FeesType|null $value
     * @return void
     */
    public function setFees($value)
    {
        $this->Fees = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategory2ID()
    {
        return $this->_dc($this->Category2ID, 'Category2ID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategory2ID($value)
    {
        $this->Category2ID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCorrelationID()
    {
        return $this->_dc($this->CorrelationID, 'CorrelationID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCorrelationID($value)
    {
        $this->CorrelationID = self::_string($value);
    }

    /**
     * @return ErrorType[]|ErrorType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getErrors($index = null)
    {
        return $this->_dc($index === null
            ? $this->Errors
            : (count($this->Errors) > $index
                ? $this->Errors[$index]
                : null), 'Errors');
    }

    /**
     * @param ErrorType|null|ErrorType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setErrors($value, $index = null)
    {
        if ($index === null) {
            $this->Errors = $value;
        } else {
            $this->Errors[$index] = [];
            
            foreach ($value as $item) {
                $this->addErrors($item);
            }
        }
    }

    /**
     * @param ErrorType|null $value
     * @return void
     */
    public function addErrors($value)
    {
        $this->Errors[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessage()
    {
        return $this->_dc($this->Message, 'Message');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessage($value)
    {
        $this->Message = self::_string($value);
    }

    /**
     * @return string[]|DiscountReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDiscountReason($index = null)
    {
        return $this->_dc($index === null
            ? $this->DiscountReason
            : (count($this->DiscountReason) > $index
                ? $this->DiscountReason[$index]
                : null));
    }

    /**
     * @param DiscountReasonCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDiscountReason($value, $index = null)
    {
        if ($index === null) {
            $this->DiscountReason = $value;
        } else {
            $this->DiscountReason[$index] = [];
            
            foreach ($value as $item) {
                $this->addDiscountReason($item);
            }
        }
    }

    /**
     * @param DiscountReasonCodeType|null $value
     * @return void
     */
    public function addDiscountReason($value)
    {
        $this->DiscountReason[] = $this->_enum($value, DiscountReasonCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'StartTime' => [],
            'EndTime' => [],
            'Fees' => ['type' => 'FeesType', 'xmlns' => self::XMLNS],
            'CategoryID' => [],
            'Category2ID' => [],
            'CorrelationID' => [],
            'Errors' => ['type' => 'ErrorType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Message' => [],
            'DiscountReason' => ['type' => 'DiscountReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddItemResponseContainerType::_register();
