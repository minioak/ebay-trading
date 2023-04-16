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
 * SellerItemRatingDetailArray
 * container in the
 * LeaveFeedback
 * request payload. This container is used by an eBay buyer to leave one or more Detailed Seller Ratings for their
 * order partner concerning an order line item.
 **/
class ItemRatingDetailArrayType extends EbatNs_ComplexType
{
    const TAG = 'ItemRatingDetailArrayType';
    const NAME = 'ItemRatingDetailArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemRatingDetailsType[]|null
     */
    protected $ItemRatingDetails = [];


    /**
     * @return ItemRatingDetailsType[]|ItemRatingDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItemRatingDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ItemRatingDetails
            : (count($this->ItemRatingDetails) > $index
                ? $this->ItemRatingDetails[$index]
                : null), 'ItemRatingDetails');
    }

    /**
     * @param ItemRatingDetailsType|null|ItemRatingDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItemRatingDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ItemRatingDetails = $value;
        } else {
            $this->ItemRatingDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addItemRatingDetails($item);
            }
        }
    }

    /**
     * @param ItemRatingDetailsType|null $value
     * @return void
     */
    public function addItemRatingDetails($value)
    {
        $this->ItemRatingDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ItemRatingDetails' => ['type' => 'ItemRatingDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ItemRatingDetailArrayType::_register();
