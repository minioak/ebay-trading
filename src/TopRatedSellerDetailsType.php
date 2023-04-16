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
 * Container for Top-Rated Seller program information.
 **/
class TopRatedSellerDetailsType extends EbatNs_ComplexType
{
    const TAG = 'TopRatedSellerDetailsType';
    const NAME = 'TopRatedSellerDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TopRatedProgramCodeType[]|null
     */
    protected $TopRatedProgram = [];


    /**
     * @return string[]|TopRatedProgramCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getTopRatedProgram($index = null)
    {
        return $this->_dc($index === null
            ? $this->TopRatedProgram
            : (count($this->TopRatedProgram) > $index
                ? $this->TopRatedProgram[$index]
                : null));
    }

    /**
     * @param TopRatedProgramCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setTopRatedProgram($value, $index = null)
    {
        if ($index === null) {
            $this->TopRatedProgram = $value;
        } else {
            $this->TopRatedProgram[$index] = [];
            
            foreach ($value as $item) {
                $this->addTopRatedProgram($item);
            }
        }
    }

    /**
     * @param TopRatedProgramCodeType|null $value
     * @return void
     */
    public function addTopRatedProgram($value)
    {
        $this->TopRatedProgram[] = $this->_enum($value, TopRatedProgramCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['TopRatedProgram' => ['type' => 'TopRatedProgramCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

TopRatedSellerDetailsType::_register();
