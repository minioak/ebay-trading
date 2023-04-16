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
 * Type used by the
 * NotificationDetailsArray
 * container that is returned by the
 * GetNotificationsUsage
 * call. The
 * NotificationDetailsArray
 * container consists of one or more notifications that match the input criteria in the call request.
 * 
 * This container is only returned if an
 * ItemID
 * value was specified in the request, and there were notifications related to this listing during the specified
 * time range.
 **/
class NotificationDetailsArrayType extends EbatNs_ComplexType
{
    const TAG = 'NotificationDetailsArrayType';
    const NAME = 'NotificationDetailsArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var NotificationDetailsType[]|null
     */
    protected $NotificationDetails = [];


    /**
     * @return NotificationDetailsType[]|NotificationDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getNotificationDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->NotificationDetails
            : (count($this->NotificationDetails) > $index
                ? $this->NotificationDetails[$index]
                : null), 'NotificationDetails');
    }

    /**
     * @param NotificationDetailsType|null|NotificationDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setNotificationDetails($value, $index = null)
    {
        if ($index === null) {
            $this->NotificationDetails = $value;
        } else {
            $this->NotificationDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addNotificationDetails($item);
            }
        }
    }

    /**
     * @param NotificationDetailsType|null $value
     * @return void
     */
    public function addNotificationDetails($value)
    {
        $this->NotificationDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['NotificationDetails' => ['type' => 'NotificationDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

NotificationDetailsArrayType::_register();
