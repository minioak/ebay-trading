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
 * Specifies how to return the result list for My eBay features such as saved
 * searches, favorite sellers, and second chance offers.
 **/
class MyeBaySelectionType extends EbatNs_ComplexType
{
    const TAG = 'MyeBaySelectionType';
    const NAME = 'MyeBaySelectionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $Include = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeItemCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeFavoriteSearcheCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeFavoriteSellerCount = null;

    /**
     * @var SortOrderCodeType|null
     */
    protected $Sort = null;

    /**
     * @var int|null
     */
    protected $MaxResults = null;

    /**
     * @var string|null
     */
    protected $UserDefinedListName = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeListContents = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInclude()
    {
        return $this->_dc($this->Include === 'true', 'Include');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setInclude($value)
    {
        $this->Include = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeItemCount()
    {
        return $this->_dc($this->IncludeItemCount === 'true', 'IncludeItemCount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeItemCount($value)
    {
        $this->IncludeItemCount = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeFavoriteSearcheCount()
    {
        return $this->_dc($this->IncludeFavoriteSearcheCount === 'true', 'IncludeFavoriteSearcheCount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeFavoriteSearcheCount($value)
    {
        $this->IncludeFavoriteSearcheCount = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeFavoriteSellerCount()
    {
        return $this->_dc($this->IncludeFavoriteSellerCount === 'true', 'IncludeFavoriteSellerCount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeFavoriteSellerCount($value)
    {
        $this->IncludeFavoriteSellerCount = self::_bool($value);
    }

    /**
     * @return SortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSort()
    {
        return $this->_dc($this->Sort);
    }

    /**
     * @param SortOrderCodeType|null $value
     * @return void
     */
    public function setSort($value)
    {
        $this->Sort = $this->_enum($value, SortOrderCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxResults()
    {
        return $this->_dc($this->MaxResults, 'MaxResults');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxResults($value)
    {
        $this->MaxResults = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserDefinedListName()
    {
        return $this->_dc($this->UserDefinedListName, 'UserDefinedListName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserDefinedListName($value)
    {
        $this->UserDefinedListName = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeListContents()
    {
        return $this->_dc($this->IncludeListContents === 'true', 'IncludeListContents');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeListContents($value)
    {
        $this->IncludeListContents = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Include' => ['type' => 'bool'],
            'IncludeItemCount' => ['type' => 'bool'],
            'IncludeFavoriteSearcheCount' => ['type' => 'bool'],
            'IncludeFavoriteSellerCount' => ['type' => 'bool'],
            'Sort' => ['type' => 'SortOrderCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MaxResults' => ['type' => 'int'],
            'UserDefinedListName' => [],
            'IncludeListContents' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyeBaySelectionType::_register();
