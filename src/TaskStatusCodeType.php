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
 * Status values for the processing progress for the category structure changes
 * specified by a SetStoreCategories request. If the SetStoreCategories call is
 * processed asynchronously, then the status is returned by
 * GetStoreCategoryUpdateStatus, otherwise, the status is returned in the
 * SetStoreCategories response.
 **/
class TaskStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'TaskStatusCodeType';
    const NAME = 'TaskStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (out) The category changes have not started.
     **/
    const CodeType_Pending = 'Pending';

    /**
     * (out) The category changes are in progress.
     **/
    const CodeType_InProgress = 'InProgress';

    /**
     * (out) The category changes completed successfully.
     **/
    const CodeType_Complete = 'Complete';

    /**
     * (out) The category changes failed.
     **/
    const CodeType_Failed = 'Failed';

    /**
     * (out) Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return TaskStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TaskStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
    }

    /**
     * @return bool
     */
    public function isInProgress()
    {
        return $this->_value === self::CodeType_InProgress;
    }

    /**
     * @return bool
     */
    public function isComplete()
    {
        return $this->_value === self::CodeType_Complete;
    }

    /**
     * @return bool
     */
    public function isFailed()
    {
        return $this->_value === self::CodeType_Failed;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

TaskStatusCodeType::_register();
