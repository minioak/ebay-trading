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
 * URL and size information for each generated and stored picture.
 * This data is provided for use in application previews of pictures.
 * This data is used for display control for specific pictures in the generated imageset.
 * This container is supplied for all generated pictures.
 **/
class PictureSetMemberType extends EbatNs_ComplexType
{
    const TAG = 'PictureSetMemberType';
    const NAME = 'PictureSetMemberType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $MemberURL = null;

    /**
     * @var int|null
     */
    protected $PictureHeight = null;

    /**
     * @var int|null
     */
    protected $PictureWidth = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMemberURL()
    {
        return $this->_dc($this->MemberURL, 'MemberURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMemberURL($value)
    {
        $this->MemberURL = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureHeight()
    {
        return $this->_dc($this->PictureHeight, 'PictureHeight');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPictureHeight($value)
    {
        $this->PictureHeight = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureWidth()
    {
        return $this->_dc($this->PictureWidth, 'PictureWidth');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPictureWidth($value)
    {
        $this->PictureWidth = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MemberURL' => [],
            'PictureHeight' => ['type' => 'int'],
            'PictureWidth' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PictureSetMemberType::_register();
