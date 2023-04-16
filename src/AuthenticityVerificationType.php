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
 * This type is used by the
 * AuthenticityVerification
 * container, which gives status on whether the order line item has passed or failed the authenticity inspection,
 * or if the test is still pending. The following table describes the relationship between the
 * Status
 * and
 * OutcomeReason
 * fields.
 * <table>
 * <col />
 * <col />
 * <col />
 * <thead>
 * <tr>
 * <th>
 * <p>Status</p>
 * </th>
 * <th>
 * <p>OutcomeReason</p>
 * </th>
 * <th>
 * <p>Description</p>
 * </th>
 * </tr>
 * </thead>
 * <tbody>
 * <tr>
 * <td>PENDING</td>
 * <td>Not applicable</td>
 * <td>Authenticity checks have not completed (the authentication status is pending). The order's
 * authenticity is still unknown</td>
 * </tr>
 * <tr>
 * <td>PASSED</td>
 * <td>Not applicable</td>
 * <td>The authentication has been accepted. The order is authentic. The authentication partner sends the
 * order line item to the buyer with the message that the item is authentic</td>
 * </tr>
 * <tr>
 * <td rowspan="2">PASSED_WITH_EXCEPTION <br />There may be legal reasons or requirements such that the item
 * cannot be labeled authentic.                            </td>
 * <td>CUSTOMIZED</td>
 * <td>The order line item has been altered or customized, and cannot be labeled as authentic but will be
 * sent to the buyer</td>
 * </tr>
 * <tr>
 * <td>MISCATEGORIZED</td>
 * <td>The order line item was in the wrong eBay category and cannot be labeled as authentic but will be sent
 * to the buyer</td>
 * </tr>
 * <tr>
 * <td rowspan="3">FAILED</td>
 * <td>NOT_AUTHENTIC</td>
 * <td>The order could not be authenticated. The authentication partner returns the order line item to the
 * seller; refunds the buyer</td>
 * </tr>
 * <tr>
 * <td>NOT_AS_DESCRIBED</td>
 * <td>The order is not as described. The authentication partner returns the order line item to the seller;
 * refunds the buyer</td>
 * </tr>
 * <tr>
 * <td>NOT_AUTHENTIC_NO_RETURN</td>
 * <td>This enumeration value indicates that the order line item was found as counterfeit and cannot be
 * returned to the seller because of legal constraints; refunds the buyer</td>
 * </tr>
 * </tbody>
 * </table>
 **/
class AuthenticityVerificationType extends EbatNs_ComplexType
{
    const TAG = 'AuthenticityVerificationType';
    const NAME = 'AuthenticityVerificationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $OutcomeReason = null;

    /**
     * @var ServiceCostType|null
     */
    protected $ServiceCost = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status, 'Status');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOutcomeReason()
    {
        return $this->_dc($this->OutcomeReason, 'OutcomeReason');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOutcomeReason($value)
    {
        $this->OutcomeReason = self::_string($value);
    }

    /**
     * @return ServiceCostType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getServiceCost()
    {
        return $this->_dc($this->ServiceCost, 'ServiceCost');
    }

    /**
     * @param ServiceCostType|null $value
     * @return void
     */
    public function setServiceCost($value)
    {
        $this->ServiceCost = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Status' => [],
            'OutcomeReason' => [],
            'ServiceCost' => ['type' => 'ServiceCostType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AuthenticityVerificationType::_register();
