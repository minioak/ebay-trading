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
 * RequiredSellerActionArray
 * container,
 * which may contain one or more
 * RequiredSellerAction
 * fields.
 **/
class RequiredSellerActionArrayType extends EbatNs_ComplexType
{
    const TAG = 'RequiredSellerActionArrayType';
    const NAME = 'RequiredSellerActionArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RequiredSellerActionCodeType[]|null
     */
    protected $RequiredSellerAction = [];


    /**
     * @return string[]|RequiredSellerActionCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRequiredSellerAction($index = null)
    {
        return $this->_dc($index === null
            ? $this->RequiredSellerAction
            : (count($this->RequiredSellerAction) > $index
                ? $this->RequiredSellerAction[$index]
                : null));
    }

    /**
     * @param RequiredSellerActionCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRequiredSellerAction($value, $index = null)
    {
        if ($index === null) {
            $this->RequiredSellerAction = $value;
        } else {
            $this->RequiredSellerAction[$index] = [];
            
            foreach ($value as $item) {
                $this->addRequiredSellerAction($item);
            }
        }
    }

    /**
     * @param RequiredSellerActionCodeType|null $value
     * @return void
     */
    public function addRequiredSellerAction($value)
    {
        $this->RequiredSellerAction[] = $this->_enum($value, RequiredSellerActionCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['RequiredSellerAction' => ['type' => 'RequiredSellerActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

RequiredSellerActionArrayType::_register();
