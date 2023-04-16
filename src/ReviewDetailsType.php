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
 * This type is deprecated.
 **/
class ReviewDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ReviewDetailsType';
    const NAME = 'ReviewDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var float|null
     */
    protected $AverageRating = null;

    /**
     * @var ReviewType[]|null
     */
    protected $Review = [];


    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAverageRating()
    {
        return $this->_dc($this->AverageRating, 'AverageRating');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setAverageRating($value)
    {
        $this->AverageRating = self::_float($value);
    }

    /**
     * @return ReviewType[]|ReviewType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getReview($index = null)
    {
        return $this->_dc($index === null
            ? $this->Review
            : (count($this->Review) > $index
                ? $this->Review[$index]
                : null), 'Review');
    }

    /**
     * @param ReviewType|null|ReviewType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setReview($value, $index = null)
    {
        if ($index === null) {
            $this->Review = $value;
        } else {
            $this->Review[$index] = [];
            
            foreach ($value as $item) {
                $this->addReview($item);
            }
        }
    }

    /**
     * @param ReviewType|null $value
     * @return void
     */
    public function addReview($value)
    {
        $this->Review[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AverageRating' => ['type' => 'float'],
            'Review' => ['type' => 'ReviewType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviewDetailsType::_register();
