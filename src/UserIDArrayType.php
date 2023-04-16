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
 * Contains an array of eBay UserID entries.
 **/
class UserIDArrayType extends EbatNs_ComplexType
{
    const TAG = 'UserIDArrayType';
    const NAME = 'UserIDArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UserIDType[]|null
     */
    protected $UserID = [];


    /**
     * @return UserIDType[]|UserIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getUserID($index = null)
    {
        return $this->_dc($index === null
            ? $this->UserID
            : (count($this->UserID) > $index
                ? $this->UserID[$index]
                : null), 'UserID');
    }

    /**
     * @param UserIDType|null|UserIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setUserID($value, $index = null)
    {
        if ($index === null) {
            $this->UserID = $value;
        } else {
            $this->UserID[$index] = [];
            
            foreach ($value as $item) {
                $this->addUserID($item);
            }
        }
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function addUserID($value)
    {
        $this->UserID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

UserIDArrayType::_register();
