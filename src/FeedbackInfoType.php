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
 * Type defining the Feedback details for an order line item, including the eBay User ID
 * of the user the feedback is intended for, the Feedback rating, and the Feedback comment.
 **/
class FeedbackInfoType extends EbatNs_ComplexType
{
    const TAG = 'FeedbackInfoType';
    const NAME = 'FeedbackInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CommentText = null;

    /**
     * @var CommentTypeCodeType|null
     */
    protected $CommentType = null;

    /**
     * @var UserIDType|null
     */
    protected $TargetUser = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommentText()
    {
        return $this->_dc($this->CommentText, 'CommentText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCommentText($value)
    {
        $this->CommentText = self::_string($value);
    }

    /**
     * @return CommentTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommentType()
    {
        return $this->_dc($this->CommentType);
    }

    /**
     * @param CommentTypeCodeType|null $value
     * @return void
     */
    public function setCommentType($value)
    {
        $this->CommentType = $this->_enum($value, CommentTypeCodeType::class);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTargetUser()
    {
        return $this->_dc($this->TargetUser, 'TargetUser');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setTargetUser($value)
    {
        $this->TargetUser = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CommentText' => [],
            'CommentType' => ['type' => 'CommentTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TargetUser' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FeedbackInfoType::_register();
