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
 * This type is used by the
 * ASQPreferences
 * container to allow the seller to add custom Ask Seller a Question (ASQ) subjects to item listings, or to reset
 * the custom subjects to the default eBay values.
 **/
class ASQPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'ASQPreferencesType';
    const NAME = 'ASQPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $ResetDefaultSubjects = null;

    /**
     * @var string[]|null
     */
    protected $Subject = [];


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResetDefaultSubjects()
    {
        return $this->_dc($this->ResetDefaultSubjects === 'true', 'ResetDefaultSubjects');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setResetDefaultSubjects($value)
    {
        $this->ResetDefaultSubjects = self::_bool($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSubject($index = null)
    {
        return $this->_dc($index === null
            ? $this->Subject
            : (count($this->Subject) > $index
                ? $this->Subject[$index]
                : null), 'Subject');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSubject($value, $index = null)
    {
        if ($index === null) {
            $this->Subject = $value;
        } else {
            $this->Subject[$index] = [];
            
            foreach ($value as $item) {
                $this->addSubject($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addSubject($value)
    {
        $this->Subject[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ResetDefaultSubjects' => ['type' => 'bool'],
            'Subject' => ['cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ASQPreferencesType::_register();
