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
 * Type defining the array of
 * AccountEntry
 * objects that are conditionally returned in the
 * GetAccount
 * response.
 **/
class AccountEntriesType extends EbatNs_ComplexType
{
    const TAG = 'AccountEntriesType';
    const NAME = 'AccountEntriesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AccountEntryType[]|null
     */
    protected $AccountEntry = [];


    /**
     * @return AccountEntryType[]|AccountEntryType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAccountEntry($index = null)
    {
        return $this->_dc($index === null
            ? $this->AccountEntry
            : (count($this->AccountEntry) > $index
                ? $this->AccountEntry[$index]
                : null), 'AccountEntry');
    }

    /**
     * @param AccountEntryType|null|AccountEntryType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAccountEntry($value, $index = null)
    {
        if ($index === null) {
            $this->AccountEntry = $value;
        } else {
            $this->AccountEntry[$index] = [];
            
            foreach ($value as $item) {
                $this->addAccountEntry($item);
            }
        }
    }

    /**
     * @param AccountEntryType|null $value
     * @return void
     */
    public function addAccountEntry($value)
    {
        $this->AccountEntry[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['AccountEntry' => ['type' => 'AccountEntryType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

AccountEntriesType::_register();
