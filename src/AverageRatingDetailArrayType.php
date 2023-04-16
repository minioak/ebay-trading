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
 * This type has been deprecated.
 **/
class AverageRatingDetailArrayType extends EbatNs_ComplexType
{
    const TAG = 'AverageRatingDetailArrayType';
    const NAME = 'AverageRatingDetailArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AverageRatingDetailsType[]|null
     */
    protected $AverageRatingDetails = [];


    /**
     * @return AverageRatingDetailsType[]|AverageRatingDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAverageRatingDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->AverageRatingDetails
            : (count($this->AverageRatingDetails) > $index
                ? $this->AverageRatingDetails[$index]
                : null), 'AverageRatingDetails');
    }

    /**
     * @param AverageRatingDetailsType|null|AverageRatingDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAverageRatingDetails($value, $index = null)
    {
        if ($index === null) {
            $this->AverageRatingDetails = $value;
        } else {
            $this->AverageRatingDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addAverageRatingDetails($item);
            }
        }
    }

    /**
     * @param AverageRatingDetailsType|null $value
     * @return void
     */
    public function addAverageRatingDetails($value)
    {
        $this->AverageRatingDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['AverageRatingDetails' => ['type' => 'AverageRatingDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

AverageRatingDetailArrayType::_register();
