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
 * Type defining the
 * Pictograms
 * and
 * Statements
 * containers, and the
 * Component
 * and
 * SignalWord
 * fields, that provide hazardous material related information. For additional information, see <a
 * href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal"
 * target="_blank">Signal word information</a>.
 **/
class HazmatType extends EbatNs_ComplexType
{
    const TAG = 'HazmatType';
    const NAME = 'HazmatType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PictogramsType|null
     */
    protected $Pictograms = null;

    /**
     * @var string|null
     */
    protected $SignalWord = null;

    /**
     * @var StatementsType|null
     */
    protected $Statements = null;

    /**
     * @var string|null
     */
    protected $Component = null;


    /**
     * @return PictogramsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictograms()
    {
        return $this->_dc($this->Pictograms, 'Pictograms');
    }

    /**
     * @param PictogramsType|null $value
     * @return void
     */
    public function setPictograms($value)
    {
        $this->Pictograms = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSignalWord()
    {
        return $this->_dc($this->SignalWord, 'SignalWord');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSignalWord($value)
    {
        $this->SignalWord = self::_string($value);
    }

    /**
     * @return StatementsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatements()
    {
        return $this->_dc($this->Statements, 'Statements');
    }

    /**
     * @param StatementsType|null $value
     * @return void
     */
    public function setStatements($value)
    {
        $this->Statements = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getComponent()
    {
        return $this->_dc($this->Component, 'Component');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setComponent($value)
    {
        $this->Component = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Pictograms' => ['type' => 'PictogramsType', 'xmlns' => self::XMLNS],
            'SignalWord' => [],
            'Statements' => ['type' => 'StatementsType', 'xmlns' => self::XMLNS],
            'Component' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

HazmatType::_register();
