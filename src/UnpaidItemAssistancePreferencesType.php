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
 * This type defines the
 * UnpaidItemAssistancePreferences
 * container. This container is
 * used in
 * SetUserPreferences
 * to set the preferences related to the
 * Unpaid Item
 * Assistant
 * feature. The
 * UnpaidItemAssistancePreferences
 * container is also returned in
 * 
 * GetUserPreferences
 * (if the
 * ShowUnpaidItemAssistancePreference
 * flag is included and
 * set to true in the request).
 * 
 * See the <a href="https://www.ebay.com/help/selling/getting-paid/resolving-unpaid-items?id=4137">Resolving
 * unpaid items with buyers</a> Help topic for more information about setting up and using the Unpaid Item
 * preferences feature.
 **/
class UnpaidItemAssistancePreferencesType extends EbatNs_ComplexType
{
    const TAG = 'UnpaidItemAssistancePreferencesType';
    const NAME = 'UnpaidItemAssistancePreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $DelayBeforeOpeningDispute = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $OptInStatus = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AutoRelist = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $RemoveAllExcludedUsers = null;

    /**
     * @var string[]|null
     */
    protected $ExcludedUser = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $AutoOptDonationRefund = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDelayBeforeOpeningDispute()
    {
        return $this->_dc($this->DelayBeforeOpeningDispute, 'DelayBeforeOpeningDispute');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDelayBeforeOpeningDispute($value)
    {
        $this->DelayBeforeOpeningDispute = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOptInStatus()
    {
        return $this->_dc($this->OptInStatus === 'true', 'OptInStatus');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOptInStatus($value)
    {
        $this->OptInStatus = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutoRelist()
    {
        return $this->_dc($this->AutoRelist === 'true', 'AutoRelist');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAutoRelist($value)
    {
        $this->AutoRelist = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRemoveAllExcludedUsers()
    {
        return $this->_dc($this->RemoveAllExcludedUsers === 'true', 'RemoveAllExcludedUsers');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRemoveAllExcludedUsers($value)
    {
        $this->RemoveAllExcludedUsers = self::_bool($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getExcludedUser($index = null)
    {
        return $this->_dc($index === null
            ? $this->ExcludedUser
            : (count($this->ExcludedUser) > $index
                ? $this->ExcludedUser[$index]
                : null), 'ExcludedUser');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setExcludedUser($value, $index = null)
    {
        if ($index === null) {
            $this->ExcludedUser = $value;
        } else {
            $this->ExcludedUser[$index] = [];
            
            foreach ($value as $item) {
                $this->addExcludedUser($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addExcludedUser($value)
    {
        $this->ExcludedUser[] = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutoOptDonationRefund()
    {
        return $this->_dc($this->AutoOptDonationRefund === 'true', 'AutoOptDonationRefund');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAutoOptDonationRefund($value)
    {
        $this->AutoOptDonationRefund = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DelayBeforeOpeningDispute' => ['type' => 'int'],
            'OptInStatus' => ['type' => 'bool'],
            'AutoRelist' => ['type' => 'bool'],
            'RemoveAllExcludedUsers' => ['type' => 'bool'],
            'ExcludedUser' => ['cardinality' => '0..*'],
            'AutoOptDonationRefund' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UnpaidItemAssistancePreferencesType::_register();
