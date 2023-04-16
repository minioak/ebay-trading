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
 * MaximumItemRequirements
 * container to specify the maximum quantity of an order line item that a prospective buyer may purchase during any
 * given 10-day period.
 **/
class MaximumItemRequirementsType extends EbatNs_ComplexType
{
    const TAG = 'MaximumItemRequirementsType';
    const NAME = 'MaximumItemRequirementsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MaximumItemCount = null;

    /**
     * @var int|null
     */
    protected $MinimumFeedbackScore = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaximumItemCount()
    {
        return $this->_dc($this->MaximumItemCount, 'MaximumItemCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaximumItemCount($value)
    {
        $this->MaximumItemCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumFeedbackScore()
    {
        return $this->_dc($this->MinimumFeedbackScore, 'MinimumFeedbackScore');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMinimumFeedbackScore($value)
    {
        $this->MinimumFeedbackScore = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MaximumItemCount' => ['type' => 'int'],
            'MinimumFeedbackScore' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MaximumItemRequirementsType::_register();
