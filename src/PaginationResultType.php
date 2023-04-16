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
 * Shows the pagination of data returned by call requests.
 * Pagination of returned data is not needed nor
 * supported for every Trading API call. See the documentation for
 * individual calls to determine whether pagination is
 * supported, required, or desirable.
 **/
class PaginationResultType extends EbatNs_ComplexType
{
    const TAG = 'PaginationResultType';
    const NAME = 'PaginationResultType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $TotalNumberOfPages = null;

    /**
     * @var int|null
     */
    protected $TotalNumberOfEntries = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalNumberOfPages()
    {
        return $this->_dc($this->TotalNumberOfPages, 'TotalNumberOfPages');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalNumberOfPages($value)
    {
        $this->TotalNumberOfPages = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalNumberOfEntries()
    {
        return $this->_dc($this->TotalNumberOfEntries, 'TotalNumberOfEntries');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalNumberOfEntries($value)
    {
        $this->TotalNumberOfEntries = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TotalNumberOfPages' => ['type' => 'int'],
            'TotalNumberOfEntries' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PaginationResultType::_register();
