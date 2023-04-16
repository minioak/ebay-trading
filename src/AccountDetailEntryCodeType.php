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
 * Enumerated type that defines the fee/charge and credit transactions that occur on an eBay user's account. These
 * values are returned in the
 * AccountEntry.AccountDetailsEntryType
 * output field of the
 * GetAccount
 * call.
 **/
class AccountDetailEntryCodeType extends EbatNs_EnumType
{
    const TAG = 'AccountDetailEntryCodeType';
    const NAME = 'AccountDetailEntryCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the account transaction type is unknown. Sometimes this value will get
     * returned, but the corresponding
     * Description
     * field may provide more details, and the corresponding
     * GrossDetailAmount
     * field will indicate whether the transaction was a charge or a credit (indicated with a negative dollar value).
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * This enumeration value indicates that the account entry is an insertion fee for a listing.
     **/
    const CodeType_FeeInsertion = 'FeeInsertion';

    /**
     * This enumeration value indicates that the account entry is a listing upgrade fee for a listing title in boldface
     * font.
     **/
    const CodeType_FeeBold = 'FeeBold';

    /**
     * This enumeration value indicates that the account entry is a listing upgrade fee for featuring the listing on an
     * eBay marketplace's home page.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * This feature is no longer available to most marketplaces and sellers.
     * </span>
     **/
    const CodeType_FeeFeatured = 'FeeFeatured';

    /**
     * This enumeration value indicates that the account entry is a listing upgrade fee for featuring the listing on an
     * eBay category page relevant to the item.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * This feature is no longer available to most marketplaces and sellers.
     * </span>
     **/
    const CodeType_FeeCategoryFeatured = 'FeeCategoryFeatured';

    /**
     * This enumeration value indicates that the account entry is a final value fee for a sale on the listing. This fee
     * is charged when a listed item sells, and is a percentage of the final sale price. This fee does not take in
     * account any shipping costs. The final value fee associated with shipping costs is returned in
     * FeeFinalValueShipping
     * entry.
     **/
    const CodeType_FeeFinalValue = 'FeeFinalValue';

    /**
     * This enumeration value indicates that the account entry is a payment by check made by a user to eBay.
     **/
    const CodeType_PaymentCheck = 'PaymentCheck';

    /**
     * This enumeration value indicates that the account entry is a payment by credit card made by a user to eBay.
     **/
    const CodeType_PaymentCC = 'PaymentCC';

    /**
     * This enumeration value indicates that the account entry is a courtesy credit issued by eBay to the user.
     **/
    const CodeType_CreditCourtesy = 'CreditCourtesy';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the user due to no sale.
     **/
    const CodeType_CreditNoSale = 'CreditNoSale';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the user due to a partial
     * sale.
     **/
    const CodeType_CreditPartialSale = 'CreditPartialSale';

    /**
     * This enumeration value indicates that the account entry is a refund to a user's credit card issued by eBay.
     **/
    const CodeType_RefundCC = 'RefundCC';

    /**
     * This enumeration value indicates that the account entry is a refund check to a user issued by eBay.
     **/
    const CodeType_RefundCheck = 'RefundCheck';

    /**
     * This enumeration value indicates that the account entry is a finance charge to the user's account. A finance
     * charge may be applicable if the user's monthly invoice balance is not paid in full by the due date.
     **/
    const CodeType_FinanceCharge = 'FinanceCharge';

    /**
     * This value is no longer applicable, and should not be returned.
     **/
    const CodeType_AWDebit = 'AWDebit';

    /**
     * This value is no longer applicable, and should not be returned.
     **/
    const CodeType_AWCredit = 'AWCredit';

    /**
     * This value is no longer applicable, and should not be returned.
     **/
    const CodeType_AWMemo = 'AWMemo';

    /**
     * This enumeration value indicates that the account entry is a credit issued to the seller for any listing fees for
     * a duplicate listing that was removed by eBay.
     **/
    const CodeType_CreditDuplicateListing = 'CreditDuplicateListing';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay for a partial sale.
     **/
    const CodeType_FeePartialSale = 'FeePartialSale';

    /**
     * This enumeration value indicates that the account entry is a reversal of an electronic transfer payment.
     **/
    const CodeType_PaymentElectronicTransferReversal = 'PaymentElectronicTransferReversal';

    /**
     * This enumeration value indicates that the account entry is a one-time payment made by a credit card.
     **/
    const CodeType_PaymentCCOnce = 'PaymentCCOnce';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay for a returned check.
     **/
    const CodeType_FeeReturnedCheck = 'FeeReturnedCheck';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay when a check must be redeposited
     * to collect funds.
     **/
    const CodeType_FeeRedepositCheck = 'FeeRedepositCheck';

    /**
     * This enumeration value indicates that the account entry is a cash payment made on the user's account.
     **/
    const CodeType_PaymentCash = 'PaymentCash';

    /**
     * This enumeration value indicates that the account entry is an insertion fee credit issued by eBay to the seller.
     **/
    const CodeType_CreditInsertion = 'CreditInsertion';

    /**
     * This enumeration value indicates that the account entry is a credit for a Bold title listing upgrade.
     **/
    const CodeType_CreditBold = 'CreditBold';

    /**
     * This enumeration value indicates that the account entry is a credit for a  listing upgrade fee for featuring the
     * listing on an eBay marketplace's home page.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * This feature is no longer available to most marketplaces and sellers.
     * </span>
     **/
    const CodeType_CreditFeatured = 'CreditFeatured';

    /**
     * This enumeration value indicates that the account entry is a credit for a  listing upgrade fee for featuring the
     * listing on an eBay category page relevant to the item.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * This feature is no longer available to most marketplaces and sellers.
     * </span>
     **/
    const CodeType_CreditCategoryFeatured = 'CreditCategoryFeatured';

    /**
     * This enumeration value indicates that the account entry is a credit for a final value fee for a sale on the
     * listing. A final value fee may be credited back to a seller's account if the buyer never pays for the line item,
     * or if the buyer cancels the order.
     **/
    const CodeType_CreditFinalValue = 'CreditFinalValue';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay when the seller's check does not
     * clear due to insufficient funds.
     **/
    const CodeType_FeeNSFCheck = 'FeeNSFCheck';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay when the seller's check does not
     * clear because the account has been closed.
     **/
    const CodeType_FeeReturnCheckClose = 'FeeReturnCheckClose';

    /**
     * This enumeration value may be returned if the account entry is just a memo/note, or if the account entry cannot
     * be properly classified. The corresponding
     * Description
     * field may provide more details, and the corresponding
     * GrossDetailAmount
     * field will indicate whether the transaction was a charge or a credit (indicate with a negative dollar value).
     **/
    const CodeType_Memo = 'Memo';

    /**
     * This enumeration value may be returned if the account entry is a payment made to the account by money order.
     **/
    const CodeType_PaymentMoneyOrder = 'PaymentMoneyOrder';

    /**
     * This enumeration value may be returned if the account entry is an automatic monthly charge of the seller's
     * invoice amount made by eBay to a credit card the seller has placed on file.
     **/
    const CodeType_CreditCardOnFile = 'CreditCardOnFile';

    /**
     * This enumeration value may be returned if the account entry is a one-time payment made with a user's credit card
     * that is not on file with eBay for automatic monthly payments.
     **/
    const CodeType_CreditCardNotOnFile = 'CreditCardNotOnFile';

    /**
     * This enumeration value indicates that the user has been invoiced.
     **/
    const CodeType_Invoiced = 'Invoiced';

    /**
     * This enumeration value indicates that the user has been invoiced and that the balance will be charged to the
     * credit card on file on the due date.
     **/
    const CodeType_InvoicedCreditCard = 'InvoicedCreditCard';

    /**
     * This enumeration value may be returned if the account entry is a credit transferred from another account to this
     * account.
     **/
    const CodeType_CreditTransferFrom = 'CreditTransferFrom';

    /**
     * This enumeration value indicates that the account entry is a debit transferred from this account to another
     * account.
     **/
    const CodeType_DebitTransferTo = 'DebitTransferTo';

    /**
     * This enumeration value indicates that the account entry is a credit balance for an account's invoice period,
     * meaning that the seller should not pay.
     **/
    const CodeType_InvoiceCreditBalance = 'InvoiceCreditBalance';

    /**
     * This enumeration value may be returned for debits issued by eBay that are manually applied to the user's account,
     * and not necessarily tied to a specific listing/line item.
     **/
    const CodeType_eBayDebit = 'eBayDebit';

    /**
     * This enumeration value may be returned for credits issued by eBay that are manually applied to the user's
     * account, and not necessarily tied to a specific listing/line item.
     **/
    const CodeType_eBayCredit = 'eBayCredit';

    /**
     * This enumeration value indicates that the account entry is a promotional credit issued by eBay.
     **/
    const CodeType_PromotionalCredit = 'PromotionalCredit';

    /**
     * This enumeration value may be returned as a note that the user's credit card is not with eBay.
     **/
    const CodeType_CCNotOnFilePerCustReq = 'CCNotOnFilePerCustReq';

    /**
     * This enumeration value indicates that the account entry is an insertion
     * fee credit. If a listed item does not sell or results in an Unpaid Item case, the seller can relist the
     * item with no additional charge.
     **/
    const CodeType_CreditInsertionFee = 'CreditInsertionFee';

    /**
     * This enumeration value may be returned as a note if a user's credit card payment is rejected.
     **/
    const CodeType_CCPaymentRejected = 'CCPaymentRejected';

    /**
     * This enumeration value is no longer applicable and should not be returned since gift services and the gift icon
     * are no longer supported in any eBay marketplaces.
     **/
    const CodeType_FeeGiftIcon = 'FeeGiftIcon';

    /**
     * This enumeration value is no longer applicable and should not be returned since gift services and the gift icon
     * are no longer supported in any eBay marketplaces.
     **/
    const CodeType_CreditGiftIcon = 'CreditGiftIcon';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay for listing an item in the
     * Picture Gallery. A buyer sees a picture of the item when browsing a category, before moving to the item's listing
     * page.
     **/
    const CodeType_FeeGallery = 'FeeGallery';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay for listing an item in the
     * Featured section at the top of the Picture Gallery page.
     **/
    const CodeType_FeeFeaturedGallery = 'FeeFeaturedGallery';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay for the Gallery fee charged
     * when the item was listed.
     **/
    const CodeType_CreditGallery = 'CreditGallery';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay for the Featured Gallery fee
     * charged when the item was listed.
     **/
    const CodeType_CreditFeaturedGallery = 'CreditFeaturedGallery';

    /**
     * This enumeration value indicates that the account entry is a fee for moving the item.
     **/
    const CodeType_ItemMoveFee = 'ItemMoveFee';

    /**
     * This enumeration value indicates that the account entry is a credit that may be issued by eBay when listings are
     * not available due to system downtime. The downtime can be a title search outage or a hard outage.
     **/
    const CodeType_OutageCredit = 'OutageCredit';

    /**
     * This enumeration value indicates that the account entry is a credit for a PSA payment.
     **/
    const CodeType_CreditPSA = 'CreditPSA';

    /**
     * This enumeration value indicates that the account entry is a credit for a PCGS fee.
     **/
    const CodeType_CreditPCGS = 'CreditPCGS';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay when the seller sets a reserve
     * price for an auction listing.
     **/
    const CodeType_FeeReserve = 'FeeReserve';

    /**
     * This enumeration value indicates that the account entry is a credit refunded to the seller for a reserve price
     * that was set for an auction listing.
     **/
    const CodeType_CreditReserve = 'CreditReserve';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the user's Visa credit
     * card.
     **/
    const CodeType_eBayVISACredit = 'eBayVISACredit';

    /**
     * This enumeration value indicates that the account entry is a credit issued administratively.
     **/
    const CodeType_BBAdminCredit = 'BBAdminCredit';

    /**
     * This enumeration value indicates that the account entry is a charge issued administratively.
     **/
    const CodeType_BBAdminDebit = 'BBAdminDebit';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to a Store owner who has
     * promoted items outside of eBay.
     **/
    const CodeType_ReferrerCredit = 'ReferrerCredit';

    /**
     * This enumeration value indicates that the account entry is a charge issued by eBay to a Store owner who has
     * promoted items outside of eBay.
     **/
    const CodeType_ReferrerDebit = 'ReferrerDebit';

    /**
     * This enumeration value may be returned as a note about switching from one billing currency to another.
     **/
    const CodeType_SwitchCurrency = 'SwitchCurrency';

    /**
     * This enumeration value indicates that the account entry is a payment made to the account by a gift certificate.
     **/
    const CodeType_PaymentGiftCertificate = 'PaymentGiftCertificate';

    /**
     * This enumeration value indicates that the account entry is a payment made to the account by wire transfer.
     **/
    const CodeType_PaymentWireTransfer = 'PaymentWireTransfer';

    /**
     * This enumeration value indicates that the account entry is a payment made to the account through home bank.
     **/
    const CodeType_PaymentHomeBanking = 'PaymentHomeBanking';

    /**
     * This enumeration value indicates that the account entry is a one-time payment made to the account by electronic
     * transfer.
     **/
    const CodeType_PaymentElectronicTransfer = 'PaymentElectronicTransfer';

    /**
     * This enumeration value indicates that the account entry is a credit made by eBay to the seller's account when a
     * payment needs to be adjusted.
     **/
    const CodeType_PaymentAdjustmentCredit = 'PaymentAdjustmentCredit';

    /**
     * This enumeration value indicates that the account entry is a debit (deduction) made by eBay to the seller's
     * account when a payment needs to be adjusted.
     **/
    const CodeType_PaymentAdjustmentDebit = 'PaymentAdjustmentDebit';

    /**
     * This enumeration value indicates that the account entry is an eBay write-off of an account charge.
     **/
    const CodeType_Chargeoff = 'Chargeoff';

    /**
     * This enumeration value indicates that the account entry is the recovery of an  eBay write-off of an acccount
     * charge.
     **/
    const CodeType_ChargeoffRecovery = 'ChargeoffRecovery';

    /**
     * This enumeration value indicates that the account entry is an eBay write-off of the account charges by eBay due
     * to the seller declaring bankruptcy.
     **/
    const CodeType_ChargeoffBankruptcy = 'ChargeoffBankruptcy';

    /**
     * This enumeration value may be returned as a note that the eBay write-off of an account charge has been suspended.
     **/
    const CodeType_ChargeoffSuspended = 'ChargeoffSuspended';

    /**
     * This enumeration value indicates that the account entry is an eBay write-off of the account charges by eBay due
     * to the decease of the seller.
     **/
    const CodeType_ChargeoffDeceased = 'ChargeoffDeceased';

    /**
     * This enumeration value indicates that the account entry is an eBay write-off of the account charges by eBay due
     * to the decease of the seller.
     **/
    const CodeType_ChargeoffOther = 'ChargeoffOther';

    /**
     * This enumeration value indicates that the account entry is an eBay write-off of the account charges by eBay due
     * to the wackiness of the seller.
     **/
    const CodeType_ChargeoffWacko = 'ChargeoffWacko';

    /**
     * This enumeration value indicates that the account entry is a reversal of the finance charge to the user's
     * account. A finance charge may be applicable if the user's monthly invoice balance is not paid in full by the due
     * date.
     **/
    const CodeType_FinanceChargeReversal = 'FinanceChargeReversal';

    /**
     * This enumeration value indicates that the account entry is a reversal of a Final Value Fee credit, resulting in
     * the fee again being charged to the seller.
     **/
    const CodeType_FVFCreditReversal = 'FVFCreditReversal';

    /**
     * This enumeration value indicates that the account entry is a fee charged for currency conversion.
     **/
    const CodeType_ForeignFundsConvert = 'ForeignFundsConvert';

    /**
     * This enumeration value indicates that the account entry is a reversal of a check payment made with foreign funds.
     **/
    const CodeType_ForeignFundsCheckReversal = 'ForeignFundsCheckReversal';

    /**
     * This enumeration value may be returned to act as a note that there is an 'End of the Month' restriction for
     * account activity.
     **/
    const CodeType_EOMRestriction = 'EOMRestriction';

    /**
     * This enumeration value may be returned if eBay is issuing a credit to the seller for multiple listing fees.
     **/
    const CodeType_AllFeesCredit = 'AllFeesCredit';

    /**
     * This enumeration value may be returned to act as a note that the user's account is on hold.
     **/
    const CodeType_SetOnHold = 'SetOnHold';

    /**
     * This enumeration value may be returned to act as a note to indicate that the state of the user's account has been
     * reverted.
     **/
    const CodeType_RevertUserState = 'RevertUserState';

    /**
     * This enumeration value indicates that the account entry is a monthly payment made by automatic direct debit to
     * the seller's checking account, when the account information is on file.
     **/
    const CodeType_DirectDebitOnFile = 'DirectDebitOnFile';

    /**
     * This enumeration value indicates that the account entry is a one-time payment made by direct debit to the
     * seller's checking account, when the account information is not on file, but is provided for this payment.
     **/
    const CodeType_DirectDebitNotOnFile = 'DirectDebitNotOnFile';

    /**
     * This enumeration value indicates that the account entry is a payment made by direct debit from the seller's
     * checking account when the seller has requested automatic monthly invoice payments.
     **/
    const CodeType_PaymentDirectDebit = 'PaymentDirectDebit';

    /**
     * This enumeration value indicates that the account entry is a reversal of a payment made by direct debit from the
     * seller's checking account.
     **/
    const CodeType_DirectDebitReversal = 'DirectDebitReversal';

    /**
     * This enumeration value indicates that the account entry is a reversal of a payment made by direct debit from a
     * seller's checking account when an item is returned by the buyer.
     **/
    const CodeType_DirectDebitReturnedItem = 'DirectDebitReturnedItem';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay for adding a colored band to
     * emphasize a listing.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * This feature is no longer available to most marketplaces and sellers.
     * </span>
     **/
    const CodeType_FeeHighlight = 'FeeHighlight';

    /**
     * This enumeration value indicates that the account entry is a credit issued to the seller by eBay for adding a
     * colored band to emphasize a listing.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * This feature is no longer available to most marketplaces and sellers.
     * </span>
     **/
    const CodeType_CreditHighlight = 'CreditHighlight';

    /**
     * This enumeration value may be returned to act as a note to indicate that the user's account has been suspended as
     * part of a bulk suspension initiated by eBay.
     **/
    const CodeType_BulkUserSuspension = 'BulkUserSuspension';

    /**
     * This enumeration value indicates that the account entry is a fee charged for a 30-day classified ad listing in a
     * Real Estate category.
     **/
    const CodeType_FeeRealEstate30DaysListing = 'FeeRealEstate30DaysListing';

    /**
     * This enumeration value indicates that the account entry is a credit issue to a seller for a 30-day classified ad
     * listing in a Real Estate category.
     **/
    const CodeType_CreditRealEstate30DaysListing = 'CreditRealEstate30DaysListing';

    /**
     * This enumeration value is only used internally.
     **/
    const CodeType_TradingLimitOverrideOn = 'TradingLimitOverrideOn';

    /**
     * This enumeration value is only used internally.
     **/
    const CodeType_TradingLimitOverrideOff = 'TradingLimitOverrideOff';

    /**
     * This enumeration value indicates that the account entry is a fee charged to a seller who did not provide a credit
     * card or checking account number to verify identify.
     **/
    const CodeType_EquifaxRealtimeFee = 'EquifaxRealtimeFee';

    /**
     * This enumeration value indicates that the account entry is a credit issued to a seller who was charged an Equifax
     * fee.
     **/
    const CodeType_CreditEquifaxRealtimeFee = 'CreditEquifaxRealtimeFee';

    /**
     * This enumeration value indicates that the account entry is a payment made by the seller for an Equifax fee.
     **/
    const CodeType_PaymentEquifaxDebit = 'PaymentEquifaxDebit';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the seller for a payment
     * made on an Equifax fee.
     **/
    const CodeType_PaymentEquifaxCredit = 'PaymentEquifaxCredit';

    /**
     * This enumeration value may be returned to act as a note to indicate that the user's two accounts (same owner, but
     * different user IDs) have been merged into one account.
     **/
    const CodeType_Merged = 'Merged';

    /**
     * The Auto Trader feature is no longer available for motor vehicle listings.
     **/
    const CodeType_AutoTraderOn = 'AutoTraderOn';

    /**
     * The Auto Trader feature is no longer available for motor vehicle listings.
     **/
    const CodeType_AutoTraderOff = 'AutoTraderOff';

    /**
     * This enumeration value is no longer applicable as paper invoices are no longer available. Users must download
     * their invoices from My eBay.
     **/
    const CodeType_PaperInvoiceOn = 'PaperInvoiceOn';

    /**
     * This enumeration value is no longer applicable as paper invoices are no longer available. Users must download
     * their invoices from My eBay.
     **/
    const CodeType_PaperInvoiceOff = 'PaperInvoiceOff';

    /**
     * This enumeration value may be returned to act as a note to indicate that there has been a change in the status of
     * the user's account.
     **/
    const CodeType_AccountStateSwitch = 'AccountStateSwitch';

    /**
     * This enumeration value indicates that the account entry is an automatic reversal of a Final Value Fee credit.
     **/
    const CodeType_FVFCreditReversalAutomatic = 'FVFCreditReversalAutomatic';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the seller if a title
     * search outage of one hour or longer occurs on the site.
     **/
    const CodeType_CreditSoftOutage = 'CreditSoftOutage';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LACatalogFee = 'LACatalogFee';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LAExtraItem = 'LAExtraItem';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LACatalogItemFeeRefund = 'LACatalogItemFeeRefund';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LACatalogInsertionRefund = 'LACatalogInsertionRefund';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LAFinalValueFee = 'LAFinalValueFee';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LAFinalValueFeeRefund = 'LAFinalValueFeeRefund';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LABuyerPremiumPercentageFee = 'LABuyerPremiumPercentageFee';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LABuyerPremiumPercentageFeeRefund = 'LABuyerPremiumPercentageFeeRefund';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LAAudioVideoFee = 'LAAudioVideoFee';

    /**
     * This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay
     * marketplace.
     **/
    const CodeType_LAAudioVideoFeeRefund = 'LAAudioVideoFeeRefund';

    /**
     * This enumeration value is no longer applicable as the iPix photo feature is  no longer available on any eBay
     * marketplace.
     **/
    const CodeType_FeeIPIXPhoto = 'FeeIPIXPhoto';

    /**
     * This enumeration value is no longer applicable as the iPix photo feature is  no longer available on any eBay
     * marketplace.
     **/
    const CodeType_FeeIPIXSlideShow = 'FeeIPIXSlideShow';

    /**
     * This enumeration value is no longer applicable as the iPix photo feature is  no longer available on any eBay
     * marketplace.
     **/
    const CodeType_CreditIPIXPhoto = 'CreditIPIXPhoto';

    /**
     * This enumeration value is no longer applicable as the iPix photo feature is  no longer available on any eBay
     * marketplace.
     **/
    const CodeType_CreditIPIXSlideShow = 'CreditIPIXSlideShow';

    /**
     * A fee charged for listing an item for 10 days, rather than one, three, five, or seven days.
     **/
    const CodeType_FeeTenDayAuction = 'FeeTenDayAuction';

    /**
     * This enumeration value indicates that the account entry is a credit issued to a seller for a 10-day auction
     * listing.
     **/
    const CodeType_CreditTenDayAuction = 'CreditTenDayAuction';

    /**
     * This enumeration value indicates that the account entry is a temporary credit from eBay to the user.
     **/
    const CodeType_TemporaryCredit = 'TemporaryCredit';

    /**
     * This enumeration value indicates that the account entry is the reversal of a temporary credit from eBay to the
     * user.
     **/
    const CodeType_TemporaryCreditReversal = 'TemporaryCreditReversal';

    /**
     * This enumeration value is no longer applicable as the Auction Assistant feature is no longer available on any
     * eBay marketplace.
     **/
    const CodeType_SubscriptionAABasic = 'SubscriptionAABasic';

    /**
     * This enumeration value is no longer applicable as the Auction Assistant feature is no longer available on any
     * eBay marketplace.
     **/
    const CodeType_SubscriptionAAPro = 'SubscriptionAAPro';

    /**
     * This enumeration value is no longer applicable as the Auction Assistant feature is no longer available on any
     * eBay marketplace.
     **/
    const CodeType_CreditAABasic = 'CreditAABasic';

    /**
     * This enumeration value is no longer applicable as the Auction Assistant feature is no longer available on any
     * eBay marketplace.
     **/
    const CodeType_CreditAAPro = 'CreditAAPro';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay for a super-sized picture in a
     * listing.
     **/
    const CodeType_FeeLargePicture = 'FeeLargePicture';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the seller for a
     * super-sized picture in a listing.
     **/
    const CodeType_CreditLargePicture = 'CreditLargePicture';

    /**
     * This enumeration value is no longer applicable as eBay no longer charges a fee for adding photos to listings.
     **/
    const CodeType_FeePicturePack = 'FeePicturePack';

    /**
     * This enumeration value is no longer applicable as eBay no longer charges a fee for adding photos to listings.
     **/
    const CodeType_CreditPicturePackPartial = 'CreditPicturePackPartial';

    /**
     * This enumeration value is no longer applicable as eBay no longer charges a fee for adding photos to listings.
     **/
    const CodeType_CreditPicturePackFull = 'CreditPicturePackFull';

    /**
     * This enumeration value indicates that the account entry is a monthly subscription fee charged for the user's eBay
     * Store.
     **/
    const CodeType_SubscriptioneBayStores = 'SubscriptioneBayStores';

    /**
     * This enumeration value indicates that the account entry is a credit toward the user's eBay Store subscription
     * fee.
     **/
    const CodeType_CrediteBayStores = 'CrediteBayStores';

    /**
     * This enumeration value indicates that the account entry is an insertion fee for a fixed-price listing.
     **/
    const CodeType_FeeInsertionFixedPrice = 'FeeInsertionFixedPrice';

    /**
     * This enumeration value indicates that the account entry is an insertion
     * fee credit for a fixed-price listing.
     **/
    const CodeType_CreditInsertionFixedPrice = 'CreditInsertionFixedPrice';

    /**
     * This enumeration value indicates that the account entry is a final value fee for a sale on the fixed-price
     * listing. This fee is charged when a listed item sells, and is a percentage of the final sale price.
     **/
    const CodeType_FeeFinalValueFixedPrice = 'FeeFinalValueFixedPrice';

    /**
     * This enumeration value indicates that the account entry is a credit for a final value fee for a sale on the
     * fixed-price listing. A final value fee may be credited back to a seller's account if the buyer never pays for the
     * line item, or if the buyer cancels the order.
     **/
    const CodeType_CreditFinalValueFixedPrice = 'CreditFinalValueFixedPrice';

    /**
     * This enumeration value is no longer applicable since paper invoices are no longer available, so electronic
     * invoices are the only option. Users must download their invoices from My eBay.
     **/
    const CodeType_ElectronicInvoiceOn = 'ElectronicInvoiceOn';

    /**
     * This enumeration value is no longer applicable since paper invoices are no longer available, so electronic
     * invoices are the only option. Users must download their invoices from My eBay.
     **/
    const CodeType_ElectronicInvoiceOff = 'ElectronicInvoiceOff';

    /**
     * This enumeration value acts as a note to indicate that a direct debit payment is pending.
     **/
    const CodeType_FlagDDDDPending = 'FlagDDDDPending';

    /**
     * This enumeration value acts as a note to indicate that a direct debit payment is confirmed.
     **/
    const CodeType_FlagDDPaymentConfirmed = 'FlagDDPaymentConfirmed';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay for creating a fixed-price
     * listing with a 10-day duration.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * This charge may only be applicable to motor vehicle listings on eBay Motors, eBay Canada (English and
     * French versions), eBay UK, and eBay Italy. For all non-motor vehicle categories, the only available listing
     * duration is 'GTC', or 'Good 'til Cancelled'.
     * </span>
     **/
    const CodeType_FixedPriceDurationFee = 'FixedPriceDurationFee';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the seller for creating a
     * fixed-price listing with a 10-day duration.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * The 10-day duration fee is only applicable to motor vehicle listings on eBay Motors, eBay Canada (English
     * and French versions), eBay UK, and eBay Italy. For all non-motor vehicle categories, the only available listing
     * duration is 'GTC', or 'Good 'til Cancelled'.
     * </span>
     **/
    const CodeType_FixedPriceDurationCredit = 'FixedPriceDurationCredit';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay if the seller uses the 'Buy It
     * Now' feature on an auction listing.
     **/
    const CodeType_BuyItNowFee = 'BuyItNowFee';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay if the seller uses the 'Buy It
     * Now' feature on an auction listing.
     **/
    const CodeType_BuyItNowCredit = 'BuyItNowCredit';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay if the seller uses the scheduled
     * listing feature for a listing. With scheduled listings, the seller schedules a listing to start at some later
     * time (up to 3 weeks after) instead of immediately.
     **/
    const CodeType_FeeSchedule = 'FeeSchedule';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the seller if the seller
     * needs to be refunded for a scheduled listing. With scheduled listings, the seller schedules a listing to start at
     * some later time (up to 3 weeks after) instead of immediately.
     **/
    const CodeType_CreditSchedule = 'CreditSchedule';

    /**
     * This enumeration value indicates that the account entry is the monthly subscription fee charged for the basic
     * version of Selling Manager. For most eBay marketplaces and sellers, there is no subscription charge to use the
     * basic version of Selling Manager.
     **/
    const CodeType_SubscriptionSMBasic = 'SubscriptionSMBasic';

    /**
     * This enumeration value indicates that the account entry is the monthly subscription fee charged for using the
     * Selling Manager Pro product.
     **/
    const CodeType_SubscriptionSMBasicPro = 'SubscriptionSMBasicPro';

    /**
     * This enumeration value indicates that the account entry is a credit for the monthly subscription fee charged for
     * the basic version of Selling Manager. For most eBay marketplaces and sellers, there is no subscription charge to
     * use the basic version of Selling Manager.
     **/
    const CodeType_CreditSMBasic = 'CreditSMBasic';

    /**
     * This enumeration value indicates that the account entry is a credit for the monthly subscription fee charged for
     * using the Selling Manager Pro product.
     **/
    const CodeType_CreditSMBasicPro = 'CreditSMBasicPro';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller when a 'Good 'til
     * Cancelled', fixed-price listing automatically renews after each month (as long as inventory is still available or
     * 'out-of-stock' feature is on). This fee is similar to an insertion fee when a listing is first created. 'GTC'
     * listings automatically renew each month, and these renewed listings may incur insertion fees unless the seller
     * has 'zero insertion fee' credits. eBay sellers with stores get more 'zero insertion fee' credits than other
     * sellers.
     **/
    const CodeType_StoresGTCFee = 'StoresGTCFee';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to refund the seller for a
     * 'Good 'til Cancelled' listing renewal/insertion fee. 'GTC' listings automatically renew each, and these renewed
     * listings may incur insertion fees unless the seller has 'zero insertion fee' credits. eBay sellers with stores
     * get more 'zero insertion fee' credits than other sellers.
     **/
    const CodeType_StoresGTCCredit = 'StoresGTCCredit';

    /**
     * This enumeration value is no longer appplicable as sellers are no longer able to use Listing Designer templates
     * when they create or revise listings.
     **/
    const CodeType_ListingDesignerFee = 'ListingDesignerFee';

    /**
     * This enumeration value is no longer appplicable as sellers are no longer able to use Listing Designer templates
     * when they create or revise listings.
     **/
    const CodeType_ListingDesignerCredit = 'ListingDesignerCredit';

    /**
     * This enumeration value is no longer applicable as there is no additional fee charged to the seller for creating a
     * 10-day auction listing.
     **/
    const CodeType_ExtendedAuctionFee = 'ExtendedAuctionFee';

    /**
     * This enumeration value is no longer applicable as there is no additional fee charged to the seller for creating a
     * 10-day auction listing.
     **/
    const CodeType_ExtendedAcutionCredit = 'ExtendedAcutionCredit';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_PayPalOTPSucc = 'PayPalOTPSucc';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_PayPalOTPPend = 'PayPalOTPPend';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_PayPalFailed = 'PayPalFailed';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_PayPalChargeBack = 'PayPalChargeBack';

    /**
     * This enumeration value indicates that the account entry is a charge back.
     **/
    const CodeType_ChargeBack = 'ChargeBack';

    /**
     * This enumeration value indicates that the account entry is the reversal of a charge back.
     **/
    const CodeType_ChargeBackReversal = 'ChargeBackReversal';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_PayPalRefund = 'PayPalRefund';

    /**
     * This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     **/
    const CodeType_BonusPointsAddition = 'BonusPointsAddition';

    /**
     * This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     **/
    const CodeType_BonusPointsReduction = 'BonusPointsReduction';

    /**
     * This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     **/
    const CodeType_BonusPointsPaymentAutomatic = 'BonusPointsPaymentAutomatic';

    /**
     * This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     **/
    const CodeType_BonusPointsPaymentManual = 'BonusPointsPaymentManual';

    /**
     * This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     **/
    const CodeType_BonusPointsPaymentReversal = 'BonusPointsPaymentReversal';

    /**
     * This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     **/
    const CodeType_BonusPointsCashPayout = 'BonusPointsCashPayout';

    /**
     * This enumeration value indicates that the account entry is a credit to the seller's account for Value-Added Tax
     * (VAT) previously paid by the seller.
     **/
    const CodeType_VATCredit = 'VATCredit';

    /**
     * This enumeration value indicates that the account entry is a debit to the seller's account for a Value-Added Tax
     * (VAT) charge.
     **/
    const CodeType_VATDebit = 'VATDebit';

    /**
     * This enumeration value acts as a note to indicate that a VAT status change to the seller's account is pending.
     **/
    const CodeType_VATStatusChangePending = 'VATStatusChangePending';

    /**
     * This enumeration value acts as a note to indicate that a VAT status change to the seller's account is approved.
     **/
    const CodeType_VATStatusChangeApproved = 'VATStatusChangeApproved';

    /**
     * This enumeration value acts as a note to indicate that a VAT status change to the seller's account was denied.
     **/
    const CodeType_VATStatusChange_Denied = 'VATStatusChange_Denied';

    /**
     * This enumeration value acts as a note to indicate that a VAT status change to the seller's account was cancelled
     * by an eBay customer support representative.
     **/
    const CodeType_VATStatusDeletedByCSR = 'VATStatusDeletedByCSR';

    /**
     * This enumeration value acts as a note to indicate that a VAT status change to the seller's account was cancelled
     * by the user.
     **/
    const CodeType_VATStatusDeletedByUser = 'VATStatusDeletedByUser';

    /**
     * This enumeration value is no longer appplicable as sellers are no longer able to use Listing Designer templates
     * when they create or revise listings.
     **/
    const CodeType_SMProListingDesignerFee = 'SMProListingDesignerFee';

    /**
     * This enumeration value is no longer appplicable as sellers are no longer able to use Listing Designer templates
     * when they create or revise listings.
     **/
    const CodeType_SMProListingDesignerCredit = 'SMProListingDesignerCredit';

    /**
     * This enumeration value is no longer applicable as <code>StoresFixedPrice</code> is no longer a valid listing
     * type.
     **/
    const CodeType_StoresSuccessfulListingFee = 'StoresSuccessfulListingFee';

    /**
     * This enumeration value is no longer applicable as <code>StoresFixedPrice</code> is no longer a valid listing
     * type.
     **/
    const CodeType_StoresSuccessfulListingFeeCredit = 'StoresSuccessfulListingFeeCredit';

    /**
     * This enumeration value is no longer applicable as there is no longer a referral fee charged to sellers when
     * buyers are routed to their store through printed materials or emails.
     **/
    const CodeType_StoresReferralFee = 'StoresReferralFee';

    /**
     * This enumeration value is no longer applicable as there is no longer a referral fee charged to sellers when
     * buyers are routed to their store through printed materials or emails.
     **/
    const CodeType_StoresReferralCredit = 'StoresReferralCredit';

    /**
     * This enumeration value indicates the account entry is a fee charged to the seller for adding a subtitle to a
     * listing. Subtitles allow sellers to provide more keywords and/or descriptive information, and may increase
     * buyers' interest.
     **/
    const CodeType_SubtitleFee = 'SubtitleFee';

    /**
     * This enumeration value indicates the account entry is a credit issued from eBay to compensate the seller for a
     * subtitle fee charged to their account.
     **/
    const CodeType_SubtitleFeeCredit = 'SubtitleFeeCredit';

    /**
     * This enumeration value is no longer applicable as <code>StoresFixedPrice</code> is no longer a valid listing
     * type.
     **/
    const CodeType_eBayStoreInventorySubscriptionCredit = 'eBayStoreInventorySubscriptionCredit';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_AutoPmntReqExempt = 'AutoPmntReqExempt';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_AutoPmntReqRein = 'AutoPmntReqRein';

    /**
     * This enumeration value is no longer applicable as the Picture Manager feature is no longer available.
     **/
    const CodeType_PictureManagerSubscriptionFee = 'PictureManagerSubscriptionFee';

    /**
     * This enumeration value is no longer applicable as the Picture Manager feature is no longer available.
     **/
    const CodeType_PictureManagerSubscriptionFeeCredit = 'PictureManagerSubscriptionFeeCredit';

    /**
     * This enumeration value is no longer applicable as the Seller Reports feature is no longer available.
     **/
    const CodeType_SellerReportsBasicFee = 'SellerReportsBasicFee';

    /**
     * This enumeration value is no longer applicable as the Seller Reports feature is no longer available.
     **/
    const CodeType_SellerReportsBasicCredit = 'SellerReportsBasicCredit';

    /**
     * This enumeration value is no longer applicable as the Seller Reports feature is no longer available.
     **/
    const CodeType_SellerReportsPlusFee = 'SellerReportsPlusFee';

    /**
     * This enumeration value is no longer applicable as the Seller Reports feature is no longer available.
     **/
    const CodeType_SellerReportsPlusCredit = 'SellerReportsPlusCredit';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_PaypalOnFile = 'PaypalOnFile';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_PaypalOnFileByCSR = 'PaypalOnFileByCSR';

    /**
     * This enumeration value is no longer applicable.
     **/
    const CodeType_PaypalOffFile = 'PaypalOffFile';

    /**
     * This enumeration value is no longer applicable as borders around listing photos are no longer supported on any
     * eBay marketplace.
     **/
    const CodeType_BorderFee = 'BorderFee';

    /**
     * This enumeration value is no longer applicable as borders around listing photos are no longer supported on any
     * eBay marketplace.
     **/
    const CodeType_BorderFeeCredit = 'BorderFeeCredit';

    /**
     * This enumeration value is no longer applicable since placing eBay Germany motor vehicle listings on the mobile.de
     * site is no longer supported.
     **/
    const CodeType_FeeSearchableMobileDE = 'FeeSearchableMobileDE';

    /**
     * This enumeration value indicates the account entry is a monthly subscription fee charged for Sales Reports Plus.
     **/
    const CodeType_SalesReportsPlusFee = 'SalesReportsPlusFee';

    /**
     * This enumeration value indicates the account entry is a credit to the seller applied towards the monthly
     * subscription fee charged for Sales Reports Plus.
     **/
    const CodeType_SalesReportsPlusCredit = 'SalesReportsPlusCredit';

    /**
     * This enumeration value is no longer applicable since placing eBay Germany motor vehicle listings on the mobile.de
     * site is no longer supported.
     **/
    const CodeType_CreditSearchableMobileDE = 'CreditSearchableMobileDE';

    /**
     * This enumeration value is no longer applicable since this eBay Stores marketing feature is no longer supported.
     **/
    const CodeType_EmailMarketingFee = 'EmailMarketingFee';

    /**
     * This enumeration value is no longer applicable since this eBay Stores marketing feature is no longer supported.
     **/
    const CodeType_EmailMarketingCredit = 'EmailMarketingCredit';

    /**
     * This enumeration value is no longer applicable since the picture slide show feature is no longer available.
     **/
    const CodeType_FeePictureShow = 'FeePictureShow';

    /**
     * This enumeration value is no longer applicable since the picture slide show feature is no longer available.
     **/
    const CodeType_CreditPictureShow = 'CreditPictureShow';

    /**
     * This enumeration value indicates the account entry is a fee charged to the seller for using the Pro Pack Bundle
     * feature pack (currently available to US and Canada eBay motor vehicle sellers).
     **/
    const CodeType_ProPackBundleFee = 'ProPackBundleFee';

    /**
     * This enumeration value indicates the account entry is a credit towards the fee charged to the seller for using
     * the Pro Pack Bundle feature pack (currently available to US and Canada eBay motor vehicle sellers).
     **/
    const CodeType_ProPackBundleFeeCredit = 'ProPackBundleFeeCredit';

    /**
     * This enumeration value is no longer applicable since this bundle pack is no longer available on any eBay
     * marketplaces.
     **/
    const CodeType_BasicUpgradePackBundleFee = 'BasicUpgradePackBundleFee';

    /**
     * This enumeration value is no longer applicable since this bundle pack is no longer available on any eBay
     * marketplaces.
     **/
    const CodeType_BasicUpgradePackBundleFeeCredit = 'BasicUpgradePackBundleFeeCredit';

    /**
     * This enumeration value indicates the account entry is a fee charged by eBay to the seller for using the Value
     * Pack Bundle feature pack.
     **/
    const CodeType_ValuePackBundleFee = 'ValuePackBundleFee';

    /**
     * This enumeration value indicates the account entry is a credit towards the fee charged to the seller for using
     * the Value Pack Bundle feature pack.
     **/
    const CodeType_ValuePackBundleFeeCredit = 'ValuePackBundleFeeCredit';

    /**
     * This enumeration value indicates the account entry is a fee charged by eBay to the seller for using the Pro Pack
     * Plus Bundle feature pack.
     **/
    const CodeType_ProPackPlusBundleFee = 'ProPackPlusBundleFee';

    /**
     * This enumeration value indicates the account entry is a credit towards the fee charged by eBay to the seller for
     * using the Pro Pack Plus Bundle feature pack.
     **/
    const CodeType_ProPackPlusBundleFeeCredit = 'ProPackPlusBundleFeeCredit';

    /**
     * This enumeration value indicates the account entry is the final entry in a user's account before it is closed or
     * merged with another account.
     **/
    const CodeType_FinalEntry = 'FinalEntry';

    /**
     * This enumeration value is Reserved for future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller for using an extended
     * listing duration.
     **/
    const CodeType_ExtendedDurationFee = 'ExtendedDurationFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards a fee charged to the seller for using
     * an extended listing duration.
     **/
    const CodeType_ExtendedDurationFeeCredit = 'ExtendedDurationFeeCredit';

    /**
     * This enumeration value indicates that the account entry is a 'cross-border trade' fee, where the seller pays an
     * additional listing fee to have his/her listing surface in the search on another eBay marketplace.
     **/
    const CodeType_InternationalListingFee = 'InternationalListingFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards a 'cross-border trade' fee, where the
     * seller pays an additional listing fee to have his/her listing surface in the search on another eBay marketplace.
     **/
    const CodeType_InternationalListingCredit = 'InternationalListingCredit';

    /**
     * This enumeration value indicates that the account entry is a fee for an expired Terapeak Research subscription.
     **/
    const CodeType_MarketplaceResearchExpiredSubscriptionFee = 'MarketplaceResearchExpiredSubscriptionFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards a fee for an expired Terapeak
     * Research subscription.
     **/
    const CodeType_MarketplaceResearchExpiredSubscriptionFeeCredit = 'MarketplaceResearchExpiredSubscriptionFeeCredit';

    /**
     * This enumeration value indicates that the account entry is a fee for a Terapeak Research basic subscription.
     **/
    const CodeType_MarketplaceResearchBasicSubscriptionFee = 'MarketplaceResearchBasicSubscriptionFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards a  fee for a Terapeak Research basic
     * subscription.
     **/
    const CodeType_MarketplaceResearchBasicSubscriptionFeeCredit = 'MarketplaceResearchBasicSubscriptionFeeCredit';

    /**
     * This enumeration value indicates that the account entry is a fee for a Terapeak Research pro subscription.
     **/
    const CodeType_MarketplaceResearchProSubscriptionFee = 'MarketplaceResearchProSubscriptionFee';

    /**
     * This enumeration value is no longer applicable since a basic bundle pack is no longer available on any eBay
     * marketplace.
     **/
    const CodeType_BasicBundleFee = 'BasicBundleFee';

    /**
     * This enumeration value is no longer applicable since a basic bundle pack is no longer available on any eBay
     * marketplace.
     **/
    const CodeType_BasicBundleFeeCredit = 'BasicBundleFeeCredit';

    /**
     * This enumeration value indicates that the account entry is a credit towards a  fee for a Terapeak Research pro
     * subscription.
     **/
    const CodeType_MarketplaceResearchProSubscriptionFeeCredit = 'MarketplaceResearchProSubscriptionFeeCredit';

    /**
     * This enumeration value is no longer applicable as there are no longer any subscription fees to sell motor
     * vehicles through Motors local listings.
     **/
    const CodeType_VehicleLocalSubscriptionFee = 'VehicleLocalSubscriptionFee';

    /**
     * This enumeration value is no longer applicable as there are no longer any subscription fees to sell motor
     * vehicles through Motors local listings.
     **/
    const CodeType_VehicleLocalSubscriptionFeeCredit = 'VehicleLocalSubscriptionFeeCredit';

    /**
     * This enumeration value indicates that the account entry is an insertion fee for a Motors local listing.
     **/
    const CodeType_VehicleLocalInsertionFee = 'VehicleLocalInsertionFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards an insertion fee for a Motors local
     * listing.
     **/
    const CodeType_VehicleLocalInsertionFeeCredit = 'VehicleLocalInsertionFeeCredit';

    /**
     * This enumeration value indicates that the account entry is a final value fee for the sale of a motor vehicle
     * through a Motors local listing.
     **/
    const CodeType_VehicleLocalFinalValueFee = 'VehicleLocalFinalValueFee';

    /**
     * This enumeration value indicates that the account entry is credit towards a final value fee for the sale of a
     * motor vehicle through a Motors local listing.
     **/
    const CodeType_VehicleLocalFinalValueFeeCredit = 'VehicleLocalFinalValueFeeCredit';

    /**
     * This enumeration value indicates that the account entry is a 'GTC' duration listing fee for a Motors local
     * listing.
     **/
    const CodeType_VehicleLocalGTCFee = 'VehicleLocalGTCFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards a 'GTC' duration listing fee for a
     * Motors local listing.
     **/
    const CodeType_VehicleLocalGTCFeeCredit = 'VehicleLocalGTCFeeCredit';

    /**
     * This enumeration value indicates that the account entry is an eBay Motors Pro fee. Applies to eBay Motors Pro
     * registered dealers only.
     **/
    const CodeType_eBayMotorsProFee = 'eBayMotorsProFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards an eBay Motors Pro fee. Applies to
     * eBay Motors Pro registered dealers only.
     **/
    const CodeType_CrediteBayMotorsProFee = 'CrediteBayMotorsProFee';

    /**
     * This enumeration value indicates that the account entry is an eBay Motors Pro fee for a Feature pack. Applies to
     * eBay Motors Pro registered dealers only.
     **/
    const CodeType_eBayMotorsProFeatureFee = 'eBayMotorsProFeatureFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards an eBay Motors Pro fee for a Feature
     * pack. Applies to eBay Motors Pro registered dealers only.
     **/
    const CodeType_CrediteBayMotorsProFeatureFee = 'CrediteBayMotorsProFeatureFee';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay for listing an item with the
     * Gallery Plus feature.
     **/
    const CodeType_FeeGalleryPlus = 'FeeGalleryPlus';

    /**
     * This enumeration value indicates that the account entry is a credit towards a fee charged by eBay for listing an
     * item with the Gallery Plus feature.
     **/
    const CodeType_CreditGalleryPlus = 'CreditGalleryPlus';

    /**
     * This enumeration value indicates that the account entry is a fee for a private listing. With a private listing,
     * bidders/buyers remain anonymous to other eBay users (besides the seller).
     **/
    const CodeType_PrivateListing = 'PrivateListing';

    /**
     * This enumeration value indicates that the account entry is a fee for a private listing. With a private listing,
     * bidders/buyers remain anonymous to other eBay users (besides the seller).
     **/
    const CodeType_CreditPrivateListing = 'CreditPrivateListing';

    /**
     * This enumeration value is no longer applicable, and should not be returned.
     **/
    const CodeType_ImmoProFee = 'ImmoProFee';

    /**
     * This enumeration value is no longer applicable, and should not be returned.
     **/
    const CodeType_CreditImmoProFee = 'CreditImmoProFee';

    /**
     * This enumeration value is no longer applicable, and should not be returned.
     **/
    const CodeType_ImmoProFeatureFee = 'ImmoProFeatureFee';

    /**
     * This enumeration value is no longer applicable, and should not be returned.
     **/
    const CodeType_CreditImmoProFeatureFee = 'CreditImmoProFeatureFee';

    /**
     * This enumeration value is no longer applicable, and should not be returned.
     **/
    const CodeType_RealEstateProFee = 'RealEstateProFee';

    /**
     * This enumeration value is no longer applicable, and should not be returned.
     **/
    const CodeType_CreditRealEstateProFee = 'CreditRealEstateProFee';

    /**
     * This enumeration value is no longer applicable, and should not be returned.
     **/
    const CodeType_RealEstateProFeatureFee = 'RealEstateProFeatureFee';

    /**
     * This enumeration value is no longer applicable, and should not be returned.
     **/
    const CodeType_CreditRealEstateProFeatureFee = 'CreditRealEstateProFeatureFee';

    /**
     * This enumeration value indicates that the account entry is a seller discount against a final value fee, an
     * insertion fee, a subscription fee, or other fee. See the corresponding
     * Description
     * and/or
     * Memo
     * fields for more information on the type of discount.
     **/
    const CodeType_Discount = 'Discount';

    /**
     * This enumeration value indicates that the account entry is a credit towards a  final value fee for the shipping
     * cost of an order. This fee is charged when a listed item sells, and is a percentage of the shipping cost. The
     * final value fee associated with the final sale price is returned in a
     * FeeFinalValue
     * entry.
     **/
    const CodeType_CreditFinalValueShipping = 'CreditFinalValueShipping';

    /**
     * This enumeration value indicates that the account entry is a final value fee for the shipping cost of an order.
     * This fee is charged when a listed item sells, and is a percentage of the shipping cost. The final value fee
     * associated with the final sale price is returned in a
     * FeeFinalValue
     * entry.
     **/
    const CodeType_FeeFinalValueShipping = 'FeeFinalValueShipping';

    /**
     * This enumeration value indicates that the account entry is a return shipping fee if an item is returned by the
     * buyer.
     **/
    const CodeType_FeeReturnShipping = 'FeeReturnShipping';

    /**
     * This enumeration value indicates that the account entry is a credit toward a return shipping fee if an item is
     * returned by the buyer.
     **/
    const CodeType_CreditReturnShipping = 'CreditReturnShipping';

    /**
     * This enumeration value indicates that the account entry is a fee charged by eBay if the seller is using the
     * Global Shipping Program to ship an item internationally.
     **/
    const CodeType_FeeGlobalShippingProgram = 'FeeGlobalShippingProgram';

    /**
     * This enumeration value indicates that the account entry is a credit towards a fee charged by eBay if the seller
     * is using the Global Shipping Program to ship an item internationally.
     **/
    const CodeType_CreditGlobalShippingProgram = 'CreditGlobalShippingProgram';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller's account if the seller
     * ends an auction (with bids) early.
     **/
    const CodeType_FeeAuctionEndEarly = 'FeeAuctionEndEarly';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to the seller's account if a
     * duplicate auction listing is ended administratively by eBay. A seller is only eligible for this credit if the
     * auction listing had zero bids and was never surfaced in Search.
     **/
    const CodeType_CreditAuctionEndEarly = 'CreditAuctionEndEarly';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using
     * a FedEx shipping label from eBay.
     **/
    const CodeType_FeeFedExShippingLabel = 'FeeFedExShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to reimburse the seller for a
     * FedEx shipping label. In some cases, this credit may be issued to the seller as a result of an Unpaid Item case
     * that the seller has won against a buyer.
     **/
    const CodeType_CreditFedExShippingLabel = 'CreditFedExShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller's account if eBay refunds
     * the buyer in a case where the buyer has used the eBay returns process and return shipped the item to the seller,
     * but the seller has not issued a refund to the buyer within seven business days after receiving the returned item.
     **/
    const CodeType_FeeReturnRefund = 'FeeReturnRefund';

    /**
     * This enumeration value indicates that the account entry is a credit issued to the buyer's account by eBay in a
     * case where the buyer has used the eBay returns process and return shipped the item to the seller, but the seller
     * has not issued a refund to the buyer within seven business days after receiving the returned item. The buyer
     * credit amounts to the total purchase price plus any shipping costs if the item was 'not as described'.
     **/
    const CodeType_CreditReturnRefund = 'CreditReturnRefund';

    /**
     * This enumeration value indicates that the account entry is a fee charged for early termination of an eBay Stores
     * subscription.
     **/
    const CodeType_FeeStoresSubscriptionEarlyTermination = 'FeeStoresSubscriptionEarlyTermination';

    /**
     * This enumeration value indicates that the account entry is a credit toward a fee charged for early termination of
     * an eBay Stores subscription.
     **/
    const CodeType_CreditStoresSubscriptionEarlyTermination = 'CreditStoresSubscriptionEarlyTermination';

    /**
     * This enumeration value indicates that the account entry is a fee charged for early termination of a National
     * Vehicle subscription.
     **/
    const CodeType_FeeVehicleSubscriptionEarlyTermination = 'FeeVehicleSubscriptionEarlyTermination';

    /**
     * This enumeration value indicates that the account entry is a credit toward a fee charged for early termination of
     * a National Vehicle subscription.
     **/
    const CodeType_CreditVehicleSubscriptionEarlyTermination = 'CreditVehicleSubscriptionEarlyTermination';

    /**
     * This enumeration value indicates that the account entry is a monthly subscription fee charged for a National
     * Vehicle subscription.
     **/
    const CodeType_FeeVehicleSubscription = 'FeeVehicleSubscription';

    /**
     * This enumeration value indicates that the account entry is a credit toward a monthly subscription fee charged for
     * a National Vehicle subscription.
     **/
    const CodeType_CreditVehicleSubscription = 'CreditVehicleSubscription';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using
     * an Australia Post shipping label from eBay.
     **/
    const CodeType_FeeAUPostShippingLabel = 'FeeAUPostShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a credit toward a fee charged to the seller for
     * printing out and using an Australia Post shipping label from eBay. In some cases, this credit may be issued to
     * the seller as a result of an Unpaid Item case that the seller has won against a buyer.
     **/
    const CodeType_CreditAUPostShippingLabel = 'CreditAUPostShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using
     * an FedEx shipping label from eBay in the Asia-Pacific geographical region.
     **/
    const CodeType_FeeAPACFedExShippingLabel = 'FeeAPACFedExShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a credit toward a fee charged to the seller for
     * printing out and using an FedEx shipping label from eBay in the Asia-Pacific geographical region. In some cases,
     * this credit may be issued to the seller as a result of an Unpaid Item case that the seller has won against a
     * buyer.
     **/
    const CodeType_CreditAPACFedExShippingLabel = 'CreditAPACFedExShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using
     * an Track & Trace (TNT) shipping label from eBay in the Asia-Pacific geographical region.
     **/
    const CodeType_FeeAPACTNTShippingLabel = 'FeeAPACTNTShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a credit toward a fee charged to the seller for
     * printing out and using an Track & Trace (TNT) shipping label from eBay in the Asia-Pacific geographical region.In
     * some cases, this credit may be issued to the seller as a result of an Unpaid Item case that the seller has won
     * against a buyer.
     **/
    const CodeType_CreditAPACTNTShippingLabel = 'CreditAPACTNTShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a fee charged for eBay Money Back Guarantee
     * reimbursement.
     **/
    const CodeType_FeeEBPReimbursement = 'FeeEBPReimbursement';

    /**
     * This enumeration value indicates that the account entry is a credit toward a fee charged for eBay Money Back
     * Guarantee reimbursement.
     **/
    const CodeType_CreditEBPReimbursement = 'CreditEBPReimbursement';

    /**
     * This value is deprecated. Instead, Promoted Listing fees are returned as <code>FeeAd</code> for a Standard
     * Promoted Listing ad on eBay or <code>AdFeePremium</code> for an Advanced Promoted Listing ad on eBay.
     **/
    const CodeType_FeePromotedListingFeature = 'FeePromotedListingFeature';

    /**
     * This value is deprecated. Instead, Promoted Listing credits are returned as <code>CreditAd</code> for a Standard
     * Promoted Listing ad on eBay or <code>AdFeePremiumCredit</code> for an Advanced Promoted Listing ad on eBay.
     **/
    const CodeType_CreditPromotedListingFeature = 'CreditPromotedListingFeature';

    /**
     * This enumeration value indicates that the account entry is a fee charged for a Standard Promoted Listing ad on
     * eBay. With Standard Promoted Listings, the seller is charged a fee when a buyer clicks on the ad and then goes on
     * to purchase that same item within 30 days of that click. The seller chooses the bid percentage for the ad, and
     * this rate is applied toward the total purchase price.
     **/
    const CodeType_FeeAd = 'FeeAd';

    /**
     * This enumeration value indicates that the account entry is a credit issued toward a Standard Promoted Listing ad
     * fee.
     **/
    const CodeType_CreditAd = 'CreditAd';

    /**
     * This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using
     * a Universal Business Integration (UBI) shipping label from eBay.
     **/
    const CodeType_FeeUBIShippingLabel = 'FeeUBIShippingLabel';

    /**
     * This enumeration value indicates that the account entry is a credit issued by eBay to reimburse the seller for a
     * Universal Business Integration (UBI) shipping label. In some cases, this credit may be issued to the seller as a
     * result of an Unpaid Item case that the seller has won against a buyer.
     **/
    const CodeType_CreditUBIShippingLabel = 'CreditUBIShippingLabel';

    /**
     * This enumeration value indicates that the account entry is an annual subscription fee charged for an eBay Plus
     * subscription.
     **/
    const CodeType_FeeeBayPlusSubscription = 'FeeeBayPlusSubscription';

    /**
     * This enumeration value indicates that the account entry is a credit toward an annual subscription fee charged for
     * an eBay Plus subscription.
     **/
    const CodeType_CrediteBayPlusSubscription = 'CrediteBayPlusSubscription';

    /**
     * This enumeration value indicates that the charge is a payment processing fee for the order. This fee is only
     * applied at the order level, and the amount of the fee will be the same, regardless of how many line items are in
     * the order or on the total cost of the order. Typically, this fee is $0.30.
     **/
    const CodeType_PaymentIntermediationFee = 'PaymentIntermediationFee';

    /**
     * This enumeration value indicates that the credit is for a payment processing fee for the order.
     **/
    const CodeType_PaymentIntermediationFeeCredit = 'PaymentIntermediationFeeCredit';

    /**
     * This enumeration value indicates that the charge is a payment processing fee for the order. This fee is only
     * applied at the order level, and the amount of the fee will be the same, regardless of how many line items are in
     * the order or on the total cost of the order. Typically, this fee is $0.30.
     **/
    const CodeType_FeePaymentIntermediationRVI = 'FeePaymentIntermediationRVI';

    /**
     * This enumeration value indicates the credit is a seller reimbursement for an eBay payment intermediation fee.
     **/
    const CodeType_FeePaymentIntermediationChargeback = 'FeePaymentIntermediationChargeback';

    /**
     * This enumeration value indicates the invoice credit is a seller reimbursement for an eBay payment intermediation
     * fee.
     **/
    const CodeType_FeePaymentIntermediationChargebackRVI = 'FeePaymentIntermediationChargebackRVI';

    /**
     * This enumeration value indicates the invoice charge is a Final Value Fee (for item cost) charged to the seller's
     * account after a buyer creates and wins a 'significantly not as described' (SNAD) case against the seller.
     **/
    const CodeType_SnadOutlierFinalValueFee = 'SnadOutlierFinalValueFee';

    /**
     * This enumeration value indicates the invoice charge is a Final Value Fee (for shipping cost) charged to the
     * seller's account after a buyer creates and wins a 'significantly not as described' (SNAD) case against the
     * seller.
     **/
    const CodeType_SnadOutlierFinalValueFeeOnShipping = 'SnadOutlierFinalValueFeeOnShipping';

    /**
     * This enumeration value indicates the invoice charge is for a 'Highline Search' fee, which is a capability that
     * allows sellers to advertise multiple products at the same time, with ads appearing prominently on top of eBay's
     * search results.
     **/
    const CodeType_HighlineSearchFee = 'HighlineSearchFee';

    /**
     * This enumeration value indicates the invoice credit is for a 'Highline Search' fee that was charged to the
     * seller's account. The 'Highline Search' capability allows sellers to advertise multiple products at the same
     * time, with ads appearing prominently on top of eBay's search results.
     **/
    const CodeType_HighlineSearchFeeCredit = 'HighlineSearchFeeCredit';

    /**
     * This enumeration value indicates the invoice credit is for a Final Value Fee (for item cost) that was charged to
     * the seller's account after a buyer created a 'significantly not as described' (SNAD) case against the seller, but
     * the seller won the case.
     **/
    const CodeType_SnadOutlierFinalValueFeeCredit = 'SnadOutlierFinalValueFeeCredit';

    /**
     * This enumeration value indicates the invoice credit is for a Final Value Fee (for shipping cost) that was charged
     * to the seller's account after a buyer created a 'significantly not as described' (SNAD) case against the seller,
     * but the seller won the case.
     **/
    const CodeType_SnadOutlierFinalValueFeeOnShippingCredit = 'SnadOutlierFinalValueFeeOnShippingCredit';

    /**
     * This enumeration value indicates that the account entry is a fee charged for a Advanced Promoted Listing ad on
     * eBay. With Advanced Promoted Listings, the seller uses keywords to promote the listing, and if buyers find the
     * listing based on a keyword defined in the seller's Promoted Listings campaign, the seller is charged a fee each
     * time the ad is clicked. The seller chooses the bid percentage rate for the ad, and this rate is charged for each
     * click on the ad.
     **/
    const CodeType_AdFeePremium = 'AdFeePremium';

    /**
     * This enumeration value indicates that a credit was issued toward an Advanced Promoted Listing ad fee.
     **/
    const CodeType_AdFeePremiumCredit = 'AdFeePremiumCredit';

    /**
     * This enumeration value is no longer applicable, and should not be returned. Instead, the payment processing fee
     * for all orders is represented with the <code>FinalValueFeeFixedFeePerOrder</code> value.
     **/
    const CodeType_PerListingPaymentsFee = 'PerListingPaymentsFee';

    /**
     * This enumeration value is no longer applicable, and should not be returned. Instead, any credit for a payment
     * processing fee is represented with the <code>FinalValueFeeFixedFeePerOrderCredit</code> value.
     **/
    const CodeType_PerListingPaymentsFeeCredit = 'PerListingPaymentsFeeCredit';

    /**
     * This enumeration value indicates the invoice charge is for a Vehicles Listing Basic Package fee.
     **/
    const CodeType_VehiclesListingBasicPackageFee = 'VehiclesListingBasicPackageFee';

    /**
     * This enumeration value indicates that a credit was issued for a Vehicles Listing Basic Package fee charge.
     **/
    const CodeType_VehiclesListingBasicPackageCredit = 'VehiclesListingBasicPackageCredit';

    /**
     * This enumeration value indicates the invoice charge is for a Vehicles Listing Plus Package fee.
     **/
    const CodeType_VehiclesListingPlusPackageFee = 'VehiclesListingPlusPackageFee';

    /**
     * This enumeration value indicates that a credit was issued for a Vehicles Listing Plus Package fee charge.
     **/
    const CodeType_VehiclesListingPlusPackageCredit = 'VehiclesListingPlusPackageCredit';

    /**
     * This enumeration value indicates the invoice charge is for a Vehicles Listing Premium Package fee.
     **/
    const CodeType_VehiclesListingPremiumPackageFee = 'VehiclesListingPremiumPackageFee';

    /**
     * This enumeration value indicates that a credit was issued for a Vehicles Listing Premium Package fee charge.
     **/
    const CodeType_VehiclesListingPremiumPackageCredit = 'VehiclesListingPremiumPackageCredit';

    /**
     * This enumeration value indicates the invoice charge is for a Send Label fee.
     **/
    const CodeType_SendLabelFee = 'SendLabelFee';

    /**
     * This enumeration value indicates that a credit was issued for a Send Label fee charge.
     **/
    const CodeType_SendLabelFeeCredit = 'SendLabelFeeCredit';

    /**
     * This enumeration value indicates the invoice charge is for a UPS Label fee.
     **/
    const CodeType_UpsLabelFee = 'UpsLabelFee';

    /**
     * This enumeration value indicates that a credit was issued for a UPS Label fee charge.
     **/
    const CodeType_UpsLabelFeeCredit = 'UpsLabelFeeCredit';

    /**
     * This enumeration value indicates the invoice charge is for a Canada Post Label fee.
     **/
    const CodeType_CanadaPostLabelFee = 'CanadaPostLabelFee';

    /**
     * This enumeration value indicates that a credit was issued for a Canada Post Label fee charge.
     **/
    const CodeType_CanadaPostLabelFeeCredit = 'CanadaPostLabelFeeCredit';

    /**
     * This enumeration value indicates the invoice charge is for eBay having to resend/regenerate a shipping label for
     * a seller. Sellers typically have 24 hours to reprint a shipping label 24 hours after the purchase of the shipping
     * label. If a seller tries to reprint a purchased shipping label after this time, a small fee may apply.
     **/
    const CodeType_EbaySendLabelFee = 'EbaySendLabelFee';

    /**
     * This enumeration value indicates that a credit was issued for the fee charged by eBay to resend/regenerate a
     * shipping label for the seller.
     **/
    const CodeType_EbaySendLabelFeeCredit = 'EbaySendLabelFeeCredit';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_USInternetSalesTax = 'USInternetSalesTax';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_USInternetSalesTaxCredit = 'USInternetSalesTaxCredit';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_NewZealandGST = 'NewZealandGST';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_NewZealandGSTCredit = 'NewZealandGSTCredit';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_AustraliaGST = 'AustraliaGST';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_AustraliaGSTCredit = 'AustraliaGSTCredit';

    /**
     * This enumeration value indicates that eBay is billing the seller for a USPS shipping label that was purchased
     * through the seller's eBay account.
     **/
    const CodeType_UspsLabelFee = 'UspsLabelFee';

    /**
     * This enumeration value indicates that eBay is giving a credit to the seller for a USPS shipping label that was
     * purchased through the seller's eBay account.
     **/
    const CodeType_UspsLabelFeeCredit = 'UspsLabelFeeCredit';

    /**
     * This enumeration value indicates that eBay is billing the seller for shipping insurance (such as ShipCover
     * through USPS) that was purchased through the seller's eBay account.
     **/
    const CodeType_ShippingInsuranceFee = 'ShippingInsuranceFee';

    /**
     * This enumeration value indicates that eBay is giving a credit to the seller for shipping insurance (such as
     * ShipCover through USPS) that was purchased through the seller's eBay account.
     **/
    const CodeType_ShippingInsuranceFeeCredit = 'ShippingInsuranceFeeCredit';

    /**
     * This enumeration value indicates that eBay is billing the seller for underpayment for a USPS shipping label that
     * was purchased through the seller's eBay account. Underpayment may occur if the seller paid for a shipping label
     * based on specific package weight and dimensions, but either or both package weight and dimensions were not
     * accurate, hence the seller owes more money to USPS for postage.
     **/
    const CodeType_UspsShortpaidFee = 'UspsShortpaidFee';

    /**
     * This enumeration value indicates that eBay is giving credit to the seller for underpayment for a USPS shipping
     * label that was purchased through the seller's eBay account. Underpayment may occur if the seller paid for a
     * shipping label based on specific package weight and dimensions, but either or both package weight and dimensions
     * were not accurate, hence the seller owes more money to USPS for postage.
     **/
    const CodeType_UspsShortpaidFeeCredit = 'UspsShortpaidFeeCredit';

    /**
     * This enumeration value indicates that eBay is billing the seller for a co-funding charge.
     **/
    const CodeType_CoFundingCharge = 'CoFundingCharge';

    /**
     * This enumeration value indicates that eBay is giving credit to the seller for a co-funding charge.
     **/
    const CodeType_CoFundingChargeCredit = 'CoFundingChargeCredit';

    /**
     * This enumeration value indicates that the account entry is a final value fee, which is a fee that is calculated
     * as a percentage of the total amount of the order, including the purchase price and any shipping and handling
     * charges. This fee is always deducted directly from the seller payout associated with the order.
     * 
     * For more information about how final value fees are handled, see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section2"
     * target="_blank">Selling fees</a> help page.
     * </span>
     **/
    const CodeType_FinalValueFee = 'FinalValueFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards a final value fee calculated for an
     * order. The seller may get this credit for different reasons, including if the buyer cancels the order, or the
     * buyer doesn't pay for the order and the seller files and wins an Unpaid Item case.
     **/
    const CodeType_FinalValueFeeCredit = 'FinalValueFeeCredit';

    /**
     * This enumeration value indicates that the account entry is an international fee, which is a fee that is
     * calculated as a percentage of the total amount of the order, and is applicable for international buyers. This fee
     * is always deducted directly from the seller payout associated with the order.
     * 
     * <span class="tablenote">
     * Note:
     * For more information about this international fee, see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section8"
     * target="_blank">Selling fees</a> help page.
     * </span>
     **/
    const CodeType_InternationalFee = 'InternationalFee';

    /**
     * This enumeration value indicates that the account entry is a credit towards an international fee calculated for
     * an order. The seller may get this credit for different reasons, including if the buyer cancels the order, or the
     * buyer doesn't pay for the order and the seller files and wins an Unpaid Item case.
     **/
    const CodeType_InternationalFeeCredit = 'InternationalFeeCredit';

    /**
     * This enumeration value indicates that the account entry is a payment processing fee, which is a fixed fee that is
     * charged for all orders. This fixed fee may vary by country, but it is currently $0.30 in the US. This fee is
     * always deducted directly from the seller payout associated with the order.
     * 
     * <span class="tablenote">
     * Note:
     * For more information about how final value fees are handled, see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section2"
     * target="_blank">Selling fees</a> help page.
     * </span>
     **/
    const CodeType_FinalValueFeeFixedFeePerOrder = 'FinalValueFeeFixedFeePerOrder';

    /**
     * This enumeration value indicates that the account entry is a credit against a payment processing fee. Except for
     * perhaps a very unlikely and unusual situation, the payment processing fee will generally not be refunded to the
     * seller.
     **/
    const CodeType_FinalValueFeeFixedFeePerOrderCredit = 'FinalValueFeeFixedFeePerOrderCredit';

    /**
     * This enumeration value indicates that the account entry is an additional final value fee for a Below Standard
     * seller. Typically, this fee will be an additional 5 percent (on top of standard final value fee) of the total
     * amount of the order, including the purchase price and any shipping and handling charges. It is possible that this
     * fee may also be charged to an Above Standard or Top-rated seller if that seller is having an issue with 'item not
     * as described' return requests. This fee is always deducted directly from the seller payout associated with the
     * order.
     * 
     * <span class="tablenote">
     * Note:
     * For more information about this additional final value fee for sellers, see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section6"
     * target="_blank">Selling fees</a> help page.
     * </span>
     **/
    const CodeType_FinalValueFeeBelowStandard = 'FinalValueFeeBelowStandard';

    /**
     * This enumeration value indicates that the account entry is a credit against an additional final value fee for a
     * Below Standard seller.
     **/
    const CodeType_FinalValueFeeBelowStandardCredit = 'FinalValueFeeBelowStandardCredit';

    /**
     * This enumeration value indicates that the account entry is a Promoted Listing Express fee.
     **/
    const CodeType_AdFeeExpress = 'AdFeeExpress';

    /**
     * This enumeration value indicates that the account entry is a credit applied against a Promoted Listing Express
     * fee.
     **/
    const CodeType_AdFeeExpressCredit = 'AdFeeExpressCredit';

    /**
     * This enumeration value indicates that the account entry is a Motor Vehicles Deposit processing fee. eBay charges
     * the seller a 2.8 percent processing fee (against the required deposit amount) when they sell their vehicle
     * through a listing that required that the buyer make an initial deposit for the vehicle.
     **/
    const CodeType_DepositProcessingFee = 'DepositProcessingFee';

    /**
     * This enumeration value indicates that the account entry is a credit applied against a Motor Vehicles Deposit
     * processing fee.
     **/
    const CodeType_DepositProcessingFeeCredit = 'DepositProcessingFeeCredit';

    /**
     * This enumeration value is deprecated. All Motor Vehicles Deposit processing fees are indicated with the
     * <code>DepositProcessingFee</code> value.
     **/
    const CodeType_DepositProcessingFixedFee = 'DepositProcessingFixedFee';

    /**
     * This enumeration value is deprecated. All credits against Motor Vehicles Deposit processing fees are indicated
     * with the <code>DepositProcessingFeeCredit</code> value.
     **/
    const CodeType_DepositProcessingFixedFeeCredit = 'DepositProcessingFixedFeeCredit';

    /**
     * This enumeration value indicates that the seller was charged a fee for a FedEx return shipping label.
     **/
    const CodeType_FedExReturnLabelFee = 'FedExReturnLabelFee';

    /**
     * This enumeration value indicates that the seller received a credit against a fee for a FedEx return shipping
     * label.
     **/
    const CodeType_FedExReturnLabelFeeCredit = 'FedExReturnLabelFeeCredit';

    /**
     * This enumeration value indicates that the seller was charged a fee for an Australia Post return shipping label.
     **/
    const CodeType_AUPostReturnLabelFee = 'AUPostReturnLabelFee';

    /**
     * This enumeration value indicates that the seller received a credit against a fee for an Australia Post return
     * shipping label.
     **/
    const CodeType_AUPostReturnLabelFeeCredit = 'AUPostReturnLabelFeeCredit';

    /**
     * This enumeration value indicates that the seller was charged a fee for a UPS Canada shipping label.
     **/
    const CodeType_UpsCaLabelFee = 'UpsCaLabelFee';

    /**
     * This enumeration value indicates that the seller received a credit against a fee for a UPS Canada shipping label.
     **/
    const CodeType_UpsCaLabelFeeCredit = 'UpsCaLabelFeeCredit';

    /**
     * This enumeration value indicates that the seller was charged a fee for a FedEx Canada shipping label.
     **/
    const CodeType_FedExCaLabelFee = 'FedExCaLabelFee';

    /**
     * This enumeration value indicates that the seller received a credit against a fee for a FedEx Canada shipping
     * label.
     **/
    const CodeType_FedExCaLabelFeeCredit = 'FedExCaLabelFeeCredit';

    /**
     * This enumeration value indicates that the seller was charged a fee for a Hubbed return shipping label.
     **/
    const CodeType_HubbedReturnLabelFee = 'HubbedReturnLabelFee';

    /**
     * This enumeration value indicates that the seller received a credit against a fee for a Hubbed return shipping
     * label.
     **/
    const CodeType_HubbedReturnLabelFeeCredit = 'HubbedReturnLabelFeeCredit';

    /**
     * This enumeration value indicates that the seller was charged a fee for a Royal Mail return shipping label.
     **/
    const CodeType_RoyalMailReturnLabelFee = 'RoyalMailReturnLabelFee';

    /**
     * This enumeration value indicates that the seller received a credit against a fee for a Royal Mail return shipping
     * label.
     **/
    const CodeType_RoyalMailReturnLabelFeeCredit = 'RoyalMailReturnLabelFeeCredit';

    /**
     * This enumeration value indicates that the seller was charged a fee for a Parcel Force Post return shipping label.
     **/
    const CodeType_ParcelForcePostReturnLabelFee = 'ParcelForcePostReturnLabelFee';

    /**
     * This enumeration value indicates that the seller received a credit against a fee for a Parcel Force Post return
     * shipping label.
     **/
    const CodeType_ParcelForcePostReturnLabelFeeCredit = 'ParcelForcePostReturnLabelFeeCredit';

    /**
     * This enumeration value indicates that the seller was charged a fee for offsite ad clicks for a Promoted Listing
     * Advanced campaign.
     **/
    const CodeType_OffsiteAdsFee = 'OffsiteAdsFee';

    /**
     * This enumeration value indicates that the seller was issue a credit against a fee for offsite ad clicks for a
     * Promoted Listing Advanced campaign.
     **/
    const CodeType_OffsiteAdsFeeCredit = 'OffsiteAdsFeeCredit';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return AccountDetailEntryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AccountDetailEntryCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isUnknown()
    {
        return $this->_value === self::CodeType_Unknown;
    }

    /**
     * @return bool
     */
    public function isFeeInsertion()
    {
        return $this->_value === self::CodeType_FeeInsertion;
    }

    /**
     * @return bool
     */
    public function isFeeBold()
    {
        return $this->_value === self::CodeType_FeeBold;
    }

    /**
     * @return bool
     */
    public function isFeeFeatured()
    {
        return $this->_value === self::CodeType_FeeFeatured;
    }

    /**
     * @return bool
     */
    public function isFeeCategoryFeatured()
    {
        return $this->_value === self::CodeType_FeeCategoryFeatured;
    }

    /**
     * @return bool
     */
    public function isFeeFinalValue()
    {
        return $this->_value === self::CodeType_FeeFinalValue;
    }

    /**
     * @return bool
     */
    public function isPaymentCheck()
    {
        return $this->_value === self::CodeType_PaymentCheck;
    }

    /**
     * @return bool
     */
    public function isPaymentCC()
    {
        return $this->_value === self::CodeType_PaymentCC;
    }

    /**
     * @return bool
     */
    public function isCreditCourtesy()
    {
        return $this->_value === self::CodeType_CreditCourtesy;
    }

    /**
     * @return bool
     */
    public function isCreditNoSale()
    {
        return $this->_value === self::CodeType_CreditNoSale;
    }

    /**
     * @return bool
     */
    public function isCreditPartialSale()
    {
        return $this->_value === self::CodeType_CreditPartialSale;
    }

    /**
     * @return bool
     */
    public function isRefundCC()
    {
        return $this->_value === self::CodeType_RefundCC;
    }

    /**
     * @return bool
     */
    public function isRefundCheck()
    {
        return $this->_value === self::CodeType_RefundCheck;
    }

    /**
     * @return bool
     */
    public function isFinanceCharge()
    {
        return $this->_value === self::CodeType_FinanceCharge;
    }

    /**
     * @return bool
     */
    public function isAWDebit()
    {
        return $this->_value === self::CodeType_AWDebit;
    }

    /**
     * @return bool
     */
    public function isAWCredit()
    {
        return $this->_value === self::CodeType_AWCredit;
    }

    /**
     * @return bool
     */
    public function isAWMemo()
    {
        return $this->_value === self::CodeType_AWMemo;
    }

    /**
     * @return bool
     */
    public function isCreditDuplicateListing()
    {
        return $this->_value === self::CodeType_CreditDuplicateListing;
    }

    /**
     * @return bool
     */
    public function isFeePartialSale()
    {
        return $this->_value === self::CodeType_FeePartialSale;
    }

    /**
     * @return bool
     */
    public function isPaymentElectronicTransferReversal()
    {
        return $this->_value === self::CodeType_PaymentElectronicTransferReversal;
    }

    /**
     * @return bool
     */
    public function isPaymentCCOnce()
    {
        return $this->_value === self::CodeType_PaymentCCOnce;
    }

    /**
     * @return bool
     */
    public function isFeeReturnedCheck()
    {
        return $this->_value === self::CodeType_FeeReturnedCheck;
    }

    /**
     * @return bool
     */
    public function isFeeRedepositCheck()
    {
        return $this->_value === self::CodeType_FeeRedepositCheck;
    }

    /**
     * @return bool
     */
    public function isPaymentCash()
    {
        return $this->_value === self::CodeType_PaymentCash;
    }

    /**
     * @return bool
     */
    public function isCreditInsertion()
    {
        return $this->_value === self::CodeType_CreditInsertion;
    }

    /**
     * @return bool
     */
    public function isCreditBold()
    {
        return $this->_value === self::CodeType_CreditBold;
    }

    /**
     * @return bool
     */
    public function isCreditFeatured()
    {
        return $this->_value === self::CodeType_CreditFeatured;
    }

    /**
     * @return bool
     */
    public function isCreditCategoryFeatured()
    {
        return $this->_value === self::CodeType_CreditCategoryFeatured;
    }

    /**
     * @return bool
     */
    public function isCreditFinalValue()
    {
        return $this->_value === self::CodeType_CreditFinalValue;
    }

    /**
     * @return bool
     */
    public function isFeeNSFCheck()
    {
        return $this->_value === self::CodeType_FeeNSFCheck;
    }

    /**
     * @return bool
     */
    public function isFeeReturnCheckClose()
    {
        return $this->_value === self::CodeType_FeeReturnCheckClose;
    }

    /**
     * @return bool
     */
    public function isMemo()
    {
        return $this->_value === self::CodeType_Memo;
    }

    /**
     * @return bool
     */
    public function isPaymentMoneyOrder()
    {
        return $this->_value === self::CodeType_PaymentMoneyOrder;
    }

    /**
     * @return bool
     */
    public function isCreditCardOnFile()
    {
        return $this->_value === self::CodeType_CreditCardOnFile;
    }

    /**
     * @return bool
     */
    public function isCreditCardNotOnFile()
    {
        return $this->_value === self::CodeType_CreditCardNotOnFile;
    }

    /**
     * @return bool
     */
    public function isInvoiced()
    {
        return $this->_value === self::CodeType_Invoiced;
    }

    /**
     * @return bool
     */
    public function isInvoicedCreditCard()
    {
        return $this->_value === self::CodeType_InvoicedCreditCard;
    }

    /**
     * @return bool
     */
    public function isCreditTransferFrom()
    {
        return $this->_value === self::CodeType_CreditTransferFrom;
    }

    /**
     * @return bool
     */
    public function isDebitTransferTo()
    {
        return $this->_value === self::CodeType_DebitTransferTo;
    }

    /**
     * @return bool
     */
    public function isInvoiceCreditBalance()
    {
        return $this->_value === self::CodeType_InvoiceCreditBalance;
    }

    /**
     * @return bool
     */
    public function isEBayDebit()
    {
        return $this->_value === self::CodeType_eBayDebit;
    }

    /**
     * @return bool
     */
    public function isEBayCredit()
    {
        return $this->_value === self::CodeType_eBayCredit;
    }

    /**
     * @return bool
     */
    public function isPromotionalCredit()
    {
        return $this->_value === self::CodeType_PromotionalCredit;
    }

    /**
     * @return bool
     */
    public function isCCNotOnFilePerCustReq()
    {
        return $this->_value === self::CodeType_CCNotOnFilePerCustReq;
    }

    /**
     * @return bool
     */
    public function isCreditInsertionFee()
    {
        return $this->_value === self::CodeType_CreditInsertionFee;
    }

    /**
     * @return bool
     */
    public function isCCPaymentRejected()
    {
        return $this->_value === self::CodeType_CCPaymentRejected;
    }

    /**
     * @return bool
     */
    public function isFeeGiftIcon()
    {
        return $this->_value === self::CodeType_FeeGiftIcon;
    }

    /**
     * @return bool
     */
    public function isCreditGiftIcon()
    {
        return $this->_value === self::CodeType_CreditGiftIcon;
    }

    /**
     * @return bool
     */
    public function isFeeGallery()
    {
        return $this->_value === self::CodeType_FeeGallery;
    }

    /**
     * @return bool
     */
    public function isFeeFeaturedGallery()
    {
        return $this->_value === self::CodeType_FeeFeaturedGallery;
    }

    /**
     * @return bool
     */
    public function isCreditGallery()
    {
        return $this->_value === self::CodeType_CreditGallery;
    }

    /**
     * @return bool
     */
    public function isCreditFeaturedGallery()
    {
        return $this->_value === self::CodeType_CreditFeaturedGallery;
    }

    /**
     * @return bool
     */
    public function isItemMoveFee()
    {
        return $this->_value === self::CodeType_ItemMoveFee;
    }

    /**
     * @return bool
     */
    public function isOutageCredit()
    {
        return $this->_value === self::CodeType_OutageCredit;
    }

    /**
     * @return bool
     */
    public function isCreditPSA()
    {
        return $this->_value === self::CodeType_CreditPSA;
    }

    /**
     * @return bool
     */
    public function isCreditPCGS()
    {
        return $this->_value === self::CodeType_CreditPCGS;
    }

    /**
     * @return bool
     */
    public function isFeeReserve()
    {
        return $this->_value === self::CodeType_FeeReserve;
    }

    /**
     * @return bool
     */
    public function isCreditReserve()
    {
        return $this->_value === self::CodeType_CreditReserve;
    }

    /**
     * @return bool
     */
    public function isEBayVISACredit()
    {
        return $this->_value === self::CodeType_eBayVISACredit;
    }

    /**
     * @return bool
     */
    public function isBBAdminCredit()
    {
        return $this->_value === self::CodeType_BBAdminCredit;
    }

    /**
     * @return bool
     */
    public function isBBAdminDebit()
    {
        return $this->_value === self::CodeType_BBAdminDebit;
    }

    /**
     * @return bool
     */
    public function isReferrerCredit()
    {
        return $this->_value === self::CodeType_ReferrerCredit;
    }

    /**
     * @return bool
     */
    public function isReferrerDebit()
    {
        return $this->_value === self::CodeType_ReferrerDebit;
    }

    /**
     * @return bool
     */
    public function isSwitchCurrency()
    {
        return $this->_value === self::CodeType_SwitchCurrency;
    }

    /**
     * @return bool
     */
    public function isPaymentGiftCertificate()
    {
        return $this->_value === self::CodeType_PaymentGiftCertificate;
    }

    /**
     * @return bool
     */
    public function isPaymentWireTransfer()
    {
        return $this->_value === self::CodeType_PaymentWireTransfer;
    }

    /**
     * @return bool
     */
    public function isPaymentHomeBanking()
    {
        return $this->_value === self::CodeType_PaymentHomeBanking;
    }

    /**
     * @return bool
     */
    public function isPaymentElectronicTransfer()
    {
        return $this->_value === self::CodeType_PaymentElectronicTransfer;
    }

    /**
     * @return bool
     */
    public function isPaymentAdjustmentCredit()
    {
        return $this->_value === self::CodeType_PaymentAdjustmentCredit;
    }

    /**
     * @return bool
     */
    public function isPaymentAdjustmentDebit()
    {
        return $this->_value === self::CodeType_PaymentAdjustmentDebit;
    }

    /**
     * @return bool
     */
    public function isChargeoff()
    {
        return $this->_value === self::CodeType_Chargeoff;
    }

    /**
     * @return bool
     */
    public function isChargeoffRecovery()
    {
        return $this->_value === self::CodeType_ChargeoffRecovery;
    }

    /**
     * @return bool
     */
    public function isChargeoffBankruptcy()
    {
        return $this->_value === self::CodeType_ChargeoffBankruptcy;
    }

    /**
     * @return bool
     */
    public function isChargeoffSuspended()
    {
        return $this->_value === self::CodeType_ChargeoffSuspended;
    }

    /**
     * @return bool
     */
    public function isChargeoffDeceased()
    {
        return $this->_value === self::CodeType_ChargeoffDeceased;
    }

    /**
     * @return bool
     */
    public function isChargeoffOther()
    {
        return $this->_value === self::CodeType_ChargeoffOther;
    }

    /**
     * @return bool
     */
    public function isChargeoffWacko()
    {
        return $this->_value === self::CodeType_ChargeoffWacko;
    }

    /**
     * @return bool
     */
    public function isFinanceChargeReversal()
    {
        return $this->_value === self::CodeType_FinanceChargeReversal;
    }

    /**
     * @return bool
     */
    public function isFVFCreditReversal()
    {
        return $this->_value === self::CodeType_FVFCreditReversal;
    }

    /**
     * @return bool
     */
    public function isForeignFundsConvert()
    {
        return $this->_value === self::CodeType_ForeignFundsConvert;
    }

    /**
     * @return bool
     */
    public function isForeignFundsCheckReversal()
    {
        return $this->_value === self::CodeType_ForeignFundsCheckReversal;
    }

    /**
     * @return bool
     */
    public function isEOMRestriction()
    {
        return $this->_value === self::CodeType_EOMRestriction;
    }

    /**
     * @return bool
     */
    public function isAllFeesCredit()
    {
        return $this->_value === self::CodeType_AllFeesCredit;
    }

    /**
     * @return bool
     */
    public function isSetOnHold()
    {
        return $this->_value === self::CodeType_SetOnHold;
    }

    /**
     * @return bool
     */
    public function isRevertUserState()
    {
        return $this->_value === self::CodeType_RevertUserState;
    }

    /**
     * @return bool
     */
    public function isDirectDebitOnFile()
    {
        return $this->_value === self::CodeType_DirectDebitOnFile;
    }

    /**
     * @return bool
     */
    public function isDirectDebitNotOnFile()
    {
        return $this->_value === self::CodeType_DirectDebitNotOnFile;
    }

    /**
     * @return bool
     */
    public function isPaymentDirectDebit()
    {
        return $this->_value === self::CodeType_PaymentDirectDebit;
    }

    /**
     * @return bool
     */
    public function isDirectDebitReversal()
    {
        return $this->_value === self::CodeType_DirectDebitReversal;
    }

    /**
     * @return bool
     */
    public function isDirectDebitReturnedItem()
    {
        return $this->_value === self::CodeType_DirectDebitReturnedItem;
    }

    /**
     * @return bool
     */
    public function isFeeHighlight()
    {
        return $this->_value === self::CodeType_FeeHighlight;
    }

    /**
     * @return bool
     */
    public function isCreditHighlight()
    {
        return $this->_value === self::CodeType_CreditHighlight;
    }

    /**
     * @return bool
     */
    public function isBulkUserSuspension()
    {
        return $this->_value === self::CodeType_BulkUserSuspension;
    }

    /**
     * @return bool
     */
    public function isFeeRealEstate30DaysListing()
    {
        return $this->_value === self::CodeType_FeeRealEstate30DaysListing;
    }

    /**
     * @return bool
     */
    public function isCreditRealEstate30DaysListing()
    {
        return $this->_value === self::CodeType_CreditRealEstate30DaysListing;
    }

    /**
     * @return bool
     */
    public function isTradingLimitOverrideOn()
    {
        return $this->_value === self::CodeType_TradingLimitOverrideOn;
    }

    /**
     * @return bool
     */
    public function isTradingLimitOverrideOff()
    {
        return $this->_value === self::CodeType_TradingLimitOverrideOff;
    }

    /**
     * @return bool
     */
    public function isEquifaxRealtimeFee()
    {
        return $this->_value === self::CodeType_EquifaxRealtimeFee;
    }

    /**
     * @return bool
     */
    public function isCreditEquifaxRealtimeFee()
    {
        return $this->_value === self::CodeType_CreditEquifaxRealtimeFee;
    }

    /**
     * @return bool
     */
    public function isPaymentEquifaxDebit()
    {
        return $this->_value === self::CodeType_PaymentEquifaxDebit;
    }

    /**
     * @return bool
     */
    public function isPaymentEquifaxCredit()
    {
        return $this->_value === self::CodeType_PaymentEquifaxCredit;
    }

    /**
     * @return bool
     */
    public function isMerged()
    {
        return $this->_value === self::CodeType_Merged;
    }

    /**
     * @return bool
     */
    public function isAutoTraderOn()
    {
        return $this->_value === self::CodeType_AutoTraderOn;
    }

    /**
     * @return bool
     */
    public function isAutoTraderOff()
    {
        return $this->_value === self::CodeType_AutoTraderOff;
    }

    /**
     * @return bool
     */
    public function isPaperInvoiceOn()
    {
        return $this->_value === self::CodeType_PaperInvoiceOn;
    }

    /**
     * @return bool
     */
    public function isPaperInvoiceOff()
    {
        return $this->_value === self::CodeType_PaperInvoiceOff;
    }

    /**
     * @return bool
     */
    public function isAccountStateSwitch()
    {
        return $this->_value === self::CodeType_AccountStateSwitch;
    }

    /**
     * @return bool
     */
    public function isFVFCreditReversalAutomatic()
    {
        return $this->_value === self::CodeType_FVFCreditReversalAutomatic;
    }

    /**
     * @return bool
     */
    public function isCreditSoftOutage()
    {
        return $this->_value === self::CodeType_CreditSoftOutage;
    }

    /**
     * @return bool
     */
    public function isLACatalogFee()
    {
        return $this->_value === self::CodeType_LACatalogFee;
    }

    /**
     * @return bool
     */
    public function isLAExtraItem()
    {
        return $this->_value === self::CodeType_LAExtraItem;
    }

    /**
     * @return bool
     */
    public function isLACatalogItemFeeRefund()
    {
        return $this->_value === self::CodeType_LACatalogItemFeeRefund;
    }

    /**
     * @return bool
     */
    public function isLACatalogInsertionRefund()
    {
        return $this->_value === self::CodeType_LACatalogInsertionRefund;
    }

    /**
     * @return bool
     */
    public function isLAFinalValueFee()
    {
        return $this->_value === self::CodeType_LAFinalValueFee;
    }

    /**
     * @return bool
     */
    public function isLAFinalValueFeeRefund()
    {
        return $this->_value === self::CodeType_LAFinalValueFeeRefund;
    }

    /**
     * @return bool
     */
    public function isLABuyerPremiumPercentageFee()
    {
        return $this->_value === self::CodeType_LABuyerPremiumPercentageFee;
    }

    /**
     * @return bool
     */
    public function isLABuyerPremiumPercentageFeeRefund()
    {
        return $this->_value === self::CodeType_LABuyerPremiumPercentageFeeRefund;
    }

    /**
     * @return bool
     */
    public function isLAAudioVideoFee()
    {
        return $this->_value === self::CodeType_LAAudioVideoFee;
    }

    /**
     * @return bool
     */
    public function isLAAudioVideoFeeRefund()
    {
        return $this->_value === self::CodeType_LAAudioVideoFeeRefund;
    }

    /**
     * @return bool
     */
    public function isFeeIPIXPhoto()
    {
        return $this->_value === self::CodeType_FeeIPIXPhoto;
    }

    /**
     * @return bool
     */
    public function isFeeIPIXSlideShow()
    {
        return $this->_value === self::CodeType_FeeIPIXSlideShow;
    }

    /**
     * @return bool
     */
    public function isCreditIPIXPhoto()
    {
        return $this->_value === self::CodeType_CreditIPIXPhoto;
    }

    /**
     * @return bool
     */
    public function isCreditIPIXSlideShow()
    {
        return $this->_value === self::CodeType_CreditIPIXSlideShow;
    }

    /**
     * @return bool
     */
    public function isFeeTenDayAuction()
    {
        return $this->_value === self::CodeType_FeeTenDayAuction;
    }

    /**
     * @return bool
     */
    public function isCreditTenDayAuction()
    {
        return $this->_value === self::CodeType_CreditTenDayAuction;
    }

    /**
     * @return bool
     */
    public function isTemporaryCredit()
    {
        return $this->_value === self::CodeType_TemporaryCredit;
    }

    /**
     * @return bool
     */
    public function isTemporaryCreditReversal()
    {
        return $this->_value === self::CodeType_TemporaryCreditReversal;
    }

    /**
     * @return bool
     */
    public function isSubscriptionAABasic()
    {
        return $this->_value === self::CodeType_SubscriptionAABasic;
    }

    /**
     * @return bool
     */
    public function isSubscriptionAAPro()
    {
        return $this->_value === self::CodeType_SubscriptionAAPro;
    }

    /**
     * @return bool
     */
    public function isCreditAABasic()
    {
        return $this->_value === self::CodeType_CreditAABasic;
    }

    /**
     * @return bool
     */
    public function isCreditAAPro()
    {
        return $this->_value === self::CodeType_CreditAAPro;
    }

    /**
     * @return bool
     */
    public function isFeeLargePicture()
    {
        return $this->_value === self::CodeType_FeeLargePicture;
    }

    /**
     * @return bool
     */
    public function isCreditLargePicture()
    {
        return $this->_value === self::CodeType_CreditLargePicture;
    }

    /**
     * @return bool
     */
    public function isFeePicturePack()
    {
        return $this->_value === self::CodeType_FeePicturePack;
    }

    /**
     * @return bool
     */
    public function isCreditPicturePackPartial()
    {
        return $this->_value === self::CodeType_CreditPicturePackPartial;
    }

    /**
     * @return bool
     */
    public function isCreditPicturePackFull()
    {
        return $this->_value === self::CodeType_CreditPicturePackFull;
    }

    /**
     * @return bool
     */
    public function isSubscriptioneBayStores()
    {
        return $this->_value === self::CodeType_SubscriptioneBayStores;
    }

    /**
     * @return bool
     */
    public function isCrediteBayStores()
    {
        return $this->_value === self::CodeType_CrediteBayStores;
    }

    /**
     * @return bool
     */
    public function isFeeInsertionFixedPrice()
    {
        return $this->_value === self::CodeType_FeeInsertionFixedPrice;
    }

    /**
     * @return bool
     */
    public function isCreditInsertionFixedPrice()
    {
        return $this->_value === self::CodeType_CreditInsertionFixedPrice;
    }

    /**
     * @return bool
     */
    public function isFeeFinalValueFixedPrice()
    {
        return $this->_value === self::CodeType_FeeFinalValueFixedPrice;
    }

    /**
     * @return bool
     */
    public function isCreditFinalValueFixedPrice()
    {
        return $this->_value === self::CodeType_CreditFinalValueFixedPrice;
    }

    /**
     * @return bool
     */
    public function isElectronicInvoiceOn()
    {
        return $this->_value === self::CodeType_ElectronicInvoiceOn;
    }

    /**
     * @return bool
     */
    public function isElectronicInvoiceOff()
    {
        return $this->_value === self::CodeType_ElectronicInvoiceOff;
    }

    /**
     * @return bool
     */
    public function isFlagDDDDPending()
    {
        return $this->_value === self::CodeType_FlagDDDDPending;
    }

    /**
     * @return bool
     */
    public function isFlagDDPaymentConfirmed()
    {
        return $this->_value === self::CodeType_FlagDDPaymentConfirmed;
    }

    /**
     * @return bool
     */
    public function isFixedPriceDurationFee()
    {
        return $this->_value === self::CodeType_FixedPriceDurationFee;
    }

    /**
     * @return bool
     */
    public function isFixedPriceDurationCredit()
    {
        return $this->_value === self::CodeType_FixedPriceDurationCredit;
    }

    /**
     * @return bool
     */
    public function isBuyItNowFee()
    {
        return $this->_value === self::CodeType_BuyItNowFee;
    }

    /**
     * @return bool
     */
    public function isBuyItNowCredit()
    {
        return $this->_value === self::CodeType_BuyItNowCredit;
    }

    /**
     * @return bool
     */
    public function isFeeSchedule()
    {
        return $this->_value === self::CodeType_FeeSchedule;
    }

    /**
     * @return bool
     */
    public function isCreditSchedule()
    {
        return $this->_value === self::CodeType_CreditSchedule;
    }

    /**
     * @return bool
     */
    public function isSubscriptionSMBasic()
    {
        return $this->_value === self::CodeType_SubscriptionSMBasic;
    }

    /**
     * @return bool
     */
    public function isSubscriptionSMBasicPro()
    {
        return $this->_value === self::CodeType_SubscriptionSMBasicPro;
    }

    /**
     * @return bool
     */
    public function isCreditSMBasic()
    {
        return $this->_value === self::CodeType_CreditSMBasic;
    }

    /**
     * @return bool
     */
    public function isCreditSMBasicPro()
    {
        return $this->_value === self::CodeType_CreditSMBasicPro;
    }

    /**
     * @return bool
     */
    public function isStoresGTCFee()
    {
        return $this->_value === self::CodeType_StoresGTCFee;
    }

    /**
     * @return bool
     */
    public function isStoresGTCCredit()
    {
        return $this->_value === self::CodeType_StoresGTCCredit;
    }

    /**
     * @return bool
     */
    public function isListingDesignerFee()
    {
        return $this->_value === self::CodeType_ListingDesignerFee;
    }

    /**
     * @return bool
     */
    public function isListingDesignerCredit()
    {
        return $this->_value === self::CodeType_ListingDesignerCredit;
    }

    /**
     * @return bool
     */
    public function isExtendedAuctionFee()
    {
        return $this->_value === self::CodeType_ExtendedAuctionFee;
    }

    /**
     * @return bool
     */
    public function isExtendedAcutionCredit()
    {
        return $this->_value === self::CodeType_ExtendedAcutionCredit;
    }

    /**
     * @return bool
     */
    public function isPayPalOTPSucc()
    {
        return $this->_value === self::CodeType_PayPalOTPSucc;
    }

    /**
     * @return bool
     */
    public function isPayPalOTPPend()
    {
        return $this->_value === self::CodeType_PayPalOTPPend;
    }

    /**
     * @return bool
     */
    public function isPayPalFailed()
    {
        return $this->_value === self::CodeType_PayPalFailed;
    }

    /**
     * @return bool
     */
    public function isPayPalChargeBack()
    {
        return $this->_value === self::CodeType_PayPalChargeBack;
    }

    /**
     * @return bool
     */
    public function isChargeBack()
    {
        return $this->_value === self::CodeType_ChargeBack;
    }

    /**
     * @return bool
     */
    public function isChargeBackReversal()
    {
        return $this->_value === self::CodeType_ChargeBackReversal;
    }

    /**
     * @return bool
     */
    public function isPayPalRefund()
    {
        return $this->_value === self::CodeType_PayPalRefund;
    }

    /**
     * @return bool
     */
    public function isBonusPointsAddition()
    {
        return $this->_value === self::CodeType_BonusPointsAddition;
    }

    /**
     * @return bool
     */
    public function isBonusPointsReduction()
    {
        return $this->_value === self::CodeType_BonusPointsReduction;
    }

    /**
     * @return bool
     */
    public function isBonusPointsPaymentAutomatic()
    {
        return $this->_value === self::CodeType_BonusPointsPaymentAutomatic;
    }

    /**
     * @return bool
     */
    public function isBonusPointsPaymentManual()
    {
        return $this->_value === self::CodeType_BonusPointsPaymentManual;
    }

    /**
     * @return bool
     */
    public function isBonusPointsPaymentReversal()
    {
        return $this->_value === self::CodeType_BonusPointsPaymentReversal;
    }

    /**
     * @return bool
     */
    public function isBonusPointsCashPayout()
    {
        return $this->_value === self::CodeType_BonusPointsCashPayout;
    }

    /**
     * @return bool
     */
    public function isVATCredit()
    {
        return $this->_value === self::CodeType_VATCredit;
    }

    /**
     * @return bool
     */
    public function isVATDebit()
    {
        return $this->_value === self::CodeType_VATDebit;
    }

    /**
     * @return bool
     */
    public function isVATStatusChangePending()
    {
        return $this->_value === self::CodeType_VATStatusChangePending;
    }

    /**
     * @return bool
     */
    public function isVATStatusChangeApproved()
    {
        return $this->_value === self::CodeType_VATStatusChangeApproved;
    }

    /**
     * @return bool
     */
    public function isVATStatusChange_Denied()
    {
        return $this->_value === self::CodeType_VATStatusChange_Denied;
    }

    /**
     * @return bool
     */
    public function isVATStatusDeletedByCSR()
    {
        return $this->_value === self::CodeType_VATStatusDeletedByCSR;
    }

    /**
     * @return bool
     */
    public function isVATStatusDeletedByUser()
    {
        return $this->_value === self::CodeType_VATStatusDeletedByUser;
    }

    /**
     * @return bool
     */
    public function isSMProListingDesignerFee()
    {
        return $this->_value === self::CodeType_SMProListingDesignerFee;
    }

    /**
     * @return bool
     */
    public function isSMProListingDesignerCredit()
    {
        return $this->_value === self::CodeType_SMProListingDesignerCredit;
    }

    /**
     * @return bool
     */
    public function isStoresSuccessfulListingFee()
    {
        return $this->_value === self::CodeType_StoresSuccessfulListingFee;
    }

    /**
     * @return bool
     */
    public function isStoresSuccessfulListingFeeCredit()
    {
        return $this->_value === self::CodeType_StoresSuccessfulListingFeeCredit;
    }

    /**
     * @return bool
     */
    public function isStoresReferralFee()
    {
        return $this->_value === self::CodeType_StoresReferralFee;
    }

    /**
     * @return bool
     */
    public function isStoresReferralCredit()
    {
        return $this->_value === self::CodeType_StoresReferralCredit;
    }

    /**
     * @return bool
     */
    public function isSubtitleFee()
    {
        return $this->_value === self::CodeType_SubtitleFee;
    }

    /**
     * @return bool
     */
    public function isSubtitleFeeCredit()
    {
        return $this->_value === self::CodeType_SubtitleFeeCredit;
    }

    /**
     * @return bool
     */
    public function isEBayStoreInventorySubscriptionCredit()
    {
        return $this->_value === self::CodeType_eBayStoreInventorySubscriptionCredit;
    }

    /**
     * @return bool
     */
    public function isAutoPmntReqExempt()
    {
        return $this->_value === self::CodeType_AutoPmntReqExempt;
    }

    /**
     * @return bool
     */
    public function isAutoPmntReqRein()
    {
        return $this->_value === self::CodeType_AutoPmntReqRein;
    }

    /**
     * @return bool
     */
    public function isPictureManagerSubscriptionFee()
    {
        return $this->_value === self::CodeType_PictureManagerSubscriptionFee;
    }

    /**
     * @return bool
     */
    public function isPictureManagerSubscriptionFeeCredit()
    {
        return $this->_value === self::CodeType_PictureManagerSubscriptionFeeCredit;
    }

    /**
     * @return bool
     */
    public function isSellerReportsBasicFee()
    {
        return $this->_value === self::CodeType_SellerReportsBasicFee;
    }

    /**
     * @return bool
     */
    public function isSellerReportsBasicCredit()
    {
        return $this->_value === self::CodeType_SellerReportsBasicCredit;
    }

    /**
     * @return bool
     */
    public function isSellerReportsPlusFee()
    {
        return $this->_value === self::CodeType_SellerReportsPlusFee;
    }

    /**
     * @return bool
     */
    public function isSellerReportsPlusCredit()
    {
        return $this->_value === self::CodeType_SellerReportsPlusCredit;
    }

    /**
     * @return bool
     */
    public function isPaypalOnFile()
    {
        return $this->_value === self::CodeType_PaypalOnFile;
    }

    /**
     * @return bool
     */
    public function isPaypalOnFileByCSR()
    {
        return $this->_value === self::CodeType_PaypalOnFileByCSR;
    }

    /**
     * @return bool
     */
    public function isPaypalOffFile()
    {
        return $this->_value === self::CodeType_PaypalOffFile;
    }

    /**
     * @return bool
     */
    public function isBorderFee()
    {
        return $this->_value === self::CodeType_BorderFee;
    }

    /**
     * @return bool
     */
    public function isBorderFeeCredit()
    {
        return $this->_value === self::CodeType_BorderFeeCredit;
    }

    /**
     * @return bool
     */
    public function isFeeSearchableMobileDE()
    {
        return $this->_value === self::CodeType_FeeSearchableMobileDE;
    }

    /**
     * @return bool
     */
    public function isSalesReportsPlusFee()
    {
        return $this->_value === self::CodeType_SalesReportsPlusFee;
    }

    /**
     * @return bool
     */
    public function isSalesReportsPlusCredit()
    {
        return $this->_value === self::CodeType_SalesReportsPlusCredit;
    }

    /**
     * @return bool
     */
    public function isCreditSearchableMobileDE()
    {
        return $this->_value === self::CodeType_CreditSearchableMobileDE;
    }

    /**
     * @return bool
     */
    public function isEmailMarketingFee()
    {
        return $this->_value === self::CodeType_EmailMarketingFee;
    }

    /**
     * @return bool
     */
    public function isEmailMarketingCredit()
    {
        return $this->_value === self::CodeType_EmailMarketingCredit;
    }

    /**
     * @return bool
     */
    public function isFeePictureShow()
    {
        return $this->_value === self::CodeType_FeePictureShow;
    }

    /**
     * @return bool
     */
    public function isCreditPictureShow()
    {
        return $this->_value === self::CodeType_CreditPictureShow;
    }

    /**
     * @return bool
     */
    public function isProPackBundleFee()
    {
        return $this->_value === self::CodeType_ProPackBundleFee;
    }

    /**
     * @return bool
     */
    public function isProPackBundleFeeCredit()
    {
        return $this->_value === self::CodeType_ProPackBundleFeeCredit;
    }

    /**
     * @return bool
     */
    public function isBasicUpgradePackBundleFee()
    {
        return $this->_value === self::CodeType_BasicUpgradePackBundleFee;
    }

    /**
     * @return bool
     */
    public function isBasicUpgradePackBundleFeeCredit()
    {
        return $this->_value === self::CodeType_BasicUpgradePackBundleFeeCredit;
    }

    /**
     * @return bool
     */
    public function isValuePackBundleFee()
    {
        return $this->_value === self::CodeType_ValuePackBundleFee;
    }

    /**
     * @return bool
     */
    public function isValuePackBundleFeeCredit()
    {
        return $this->_value === self::CodeType_ValuePackBundleFeeCredit;
    }

    /**
     * @return bool
     */
    public function isProPackPlusBundleFee()
    {
        return $this->_value === self::CodeType_ProPackPlusBundleFee;
    }

    /**
     * @return bool
     */
    public function isProPackPlusBundleFeeCredit()
    {
        return $this->_value === self::CodeType_ProPackPlusBundleFeeCredit;
    }

    /**
     * @return bool
     */
    public function isFinalEntry()
    {
        return $this->_value === self::CodeType_FinalEntry;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isExtendedDurationFee()
    {
        return $this->_value === self::CodeType_ExtendedDurationFee;
    }

    /**
     * @return bool
     */
    public function isExtendedDurationFeeCredit()
    {
        return $this->_value === self::CodeType_ExtendedDurationFeeCredit;
    }

    /**
     * @return bool
     */
    public function isInternationalListingFee()
    {
        return $this->_value === self::CodeType_InternationalListingFee;
    }

    /**
     * @return bool
     */
    public function isInternationalListingCredit()
    {
        return $this->_value === self::CodeType_InternationalListingCredit;
    }

    /**
     * @return bool
     */
    public function isMarketplaceResearchExpiredSubscriptionFee()
    {
        return $this->_value === self::CodeType_MarketplaceResearchExpiredSubscriptionFee;
    }

    /**
     * @return bool
     */
    public function isMarketplaceResearchExpiredSubscriptionFeeCredit()
    {
        return $this->_value === self::CodeType_MarketplaceResearchExpiredSubscriptionFeeCredit;
    }

    /**
     * @return bool
     */
    public function isMarketplaceResearchBasicSubscriptionFee()
    {
        return $this->_value === self::CodeType_MarketplaceResearchBasicSubscriptionFee;
    }

    /**
     * @return bool
     */
    public function isMarketplaceResearchBasicSubscriptionFeeCredit()
    {
        return $this->_value === self::CodeType_MarketplaceResearchBasicSubscriptionFeeCredit;
    }

    /**
     * @return bool
     */
    public function isMarketplaceResearchProSubscriptionFee()
    {
        return $this->_value === self::CodeType_MarketplaceResearchProSubscriptionFee;
    }

    /**
     * @return bool
     */
    public function isBasicBundleFee()
    {
        return $this->_value === self::CodeType_BasicBundleFee;
    }

    /**
     * @return bool
     */
    public function isBasicBundleFeeCredit()
    {
        return $this->_value === self::CodeType_BasicBundleFeeCredit;
    }

    /**
     * @return bool
     */
    public function isMarketplaceResearchProSubscriptionFeeCredit()
    {
        return $this->_value === self::CodeType_MarketplaceResearchProSubscriptionFeeCredit;
    }

    /**
     * @return bool
     */
    public function isVehicleLocalSubscriptionFee()
    {
        return $this->_value === self::CodeType_VehicleLocalSubscriptionFee;
    }

    /**
     * @return bool
     */
    public function isVehicleLocalSubscriptionFeeCredit()
    {
        return $this->_value === self::CodeType_VehicleLocalSubscriptionFeeCredit;
    }

    /**
     * @return bool
     */
    public function isVehicleLocalInsertionFee()
    {
        return $this->_value === self::CodeType_VehicleLocalInsertionFee;
    }

    /**
     * @return bool
     */
    public function isVehicleLocalInsertionFeeCredit()
    {
        return $this->_value === self::CodeType_VehicleLocalInsertionFeeCredit;
    }

    /**
     * @return bool
     */
    public function isVehicleLocalFinalValueFee()
    {
        return $this->_value === self::CodeType_VehicleLocalFinalValueFee;
    }

    /**
     * @return bool
     */
    public function isVehicleLocalFinalValueFeeCredit()
    {
        return $this->_value === self::CodeType_VehicleLocalFinalValueFeeCredit;
    }

    /**
     * @return bool
     */
    public function isVehicleLocalGTCFee()
    {
        return $this->_value === self::CodeType_VehicleLocalGTCFee;
    }

    /**
     * @return bool
     */
    public function isVehicleLocalGTCFeeCredit()
    {
        return $this->_value === self::CodeType_VehicleLocalGTCFeeCredit;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProFee()
    {
        return $this->_value === self::CodeType_eBayMotorsProFee;
    }

    /**
     * @return bool
     */
    public function isCrediteBayMotorsProFee()
    {
        return $this->_value === self::CodeType_CrediteBayMotorsProFee;
    }

    /**
     * @return bool
     */
    public function isEBayMotorsProFeatureFee()
    {
        return $this->_value === self::CodeType_eBayMotorsProFeatureFee;
    }

    /**
     * @return bool
     */
    public function isCrediteBayMotorsProFeatureFee()
    {
        return $this->_value === self::CodeType_CrediteBayMotorsProFeatureFee;
    }

    /**
     * @return bool
     */
    public function isFeeGalleryPlus()
    {
        return $this->_value === self::CodeType_FeeGalleryPlus;
    }

    /**
     * @return bool
     */
    public function isCreditGalleryPlus()
    {
        return $this->_value === self::CodeType_CreditGalleryPlus;
    }

    /**
     * @return bool
     */
    public function isPrivateListing()
    {
        return $this->_value === self::CodeType_PrivateListing;
    }

    /**
     * @return bool
     */
    public function isCreditPrivateListing()
    {
        return $this->_value === self::CodeType_CreditPrivateListing;
    }

    /**
     * @return bool
     */
    public function isImmoProFee()
    {
        return $this->_value === self::CodeType_ImmoProFee;
    }

    /**
     * @return bool
     */
    public function isCreditImmoProFee()
    {
        return $this->_value === self::CodeType_CreditImmoProFee;
    }

    /**
     * @return bool
     */
    public function isImmoProFeatureFee()
    {
        return $this->_value === self::CodeType_ImmoProFeatureFee;
    }

    /**
     * @return bool
     */
    public function isCreditImmoProFeatureFee()
    {
        return $this->_value === self::CodeType_CreditImmoProFeatureFee;
    }

    /**
     * @return bool
     */
    public function isRealEstateProFee()
    {
        return $this->_value === self::CodeType_RealEstateProFee;
    }

    /**
     * @return bool
     */
    public function isCreditRealEstateProFee()
    {
        return $this->_value === self::CodeType_CreditRealEstateProFee;
    }

    /**
     * @return bool
     */
    public function isRealEstateProFeatureFee()
    {
        return $this->_value === self::CodeType_RealEstateProFeatureFee;
    }

    /**
     * @return bool
     */
    public function isCreditRealEstateProFeatureFee()
    {
        return $this->_value === self::CodeType_CreditRealEstateProFeatureFee;
    }

    /**
     * @return bool
     */
    public function isDiscount()
    {
        return $this->_value === self::CodeType_Discount;
    }

    /**
     * @return bool
     */
    public function isCreditFinalValueShipping()
    {
        return $this->_value === self::CodeType_CreditFinalValueShipping;
    }

    /**
     * @return bool
     */
    public function isFeeFinalValueShipping()
    {
        return $this->_value === self::CodeType_FeeFinalValueShipping;
    }

    /**
     * @return bool
     */
    public function isFeeReturnShipping()
    {
        return $this->_value === self::CodeType_FeeReturnShipping;
    }

    /**
     * @return bool
     */
    public function isCreditReturnShipping()
    {
        return $this->_value === self::CodeType_CreditReturnShipping;
    }

    /**
     * @return bool
     */
    public function isFeeGlobalShippingProgram()
    {
        return $this->_value === self::CodeType_FeeGlobalShippingProgram;
    }

    /**
     * @return bool
     */
    public function isCreditGlobalShippingProgram()
    {
        return $this->_value === self::CodeType_CreditGlobalShippingProgram;
    }

    /**
     * @return bool
     */
    public function isFeeAuctionEndEarly()
    {
        return $this->_value === self::CodeType_FeeAuctionEndEarly;
    }

    /**
     * @return bool
     */
    public function isCreditAuctionEndEarly()
    {
        return $this->_value === self::CodeType_CreditAuctionEndEarly;
    }

    /**
     * @return bool
     */
    public function isFeeFedExShippingLabel()
    {
        return $this->_value === self::CodeType_FeeFedExShippingLabel;
    }

    /**
     * @return bool
     */
    public function isCreditFedExShippingLabel()
    {
        return $this->_value === self::CodeType_CreditFedExShippingLabel;
    }

    /**
     * @return bool
     */
    public function isFeeReturnRefund()
    {
        return $this->_value === self::CodeType_FeeReturnRefund;
    }

    /**
     * @return bool
     */
    public function isCreditReturnRefund()
    {
        return $this->_value === self::CodeType_CreditReturnRefund;
    }

    /**
     * @return bool
     */
    public function isFeeStoresSubscriptionEarlyTermination()
    {
        return $this->_value === self::CodeType_FeeStoresSubscriptionEarlyTermination;
    }

    /**
     * @return bool
     */
    public function isCreditStoresSubscriptionEarlyTermination()
    {
        return $this->_value === self::CodeType_CreditStoresSubscriptionEarlyTermination;
    }

    /**
     * @return bool
     */
    public function isFeeVehicleSubscriptionEarlyTermination()
    {
        return $this->_value === self::CodeType_FeeVehicleSubscriptionEarlyTermination;
    }

    /**
     * @return bool
     */
    public function isCreditVehicleSubscriptionEarlyTermination()
    {
        return $this->_value === self::CodeType_CreditVehicleSubscriptionEarlyTermination;
    }

    /**
     * @return bool
     */
    public function isFeeVehicleSubscription()
    {
        return $this->_value === self::CodeType_FeeVehicleSubscription;
    }

    /**
     * @return bool
     */
    public function isCreditVehicleSubscription()
    {
        return $this->_value === self::CodeType_CreditVehicleSubscription;
    }

    /**
     * @return bool
     */
    public function isFeeAUPostShippingLabel()
    {
        return $this->_value === self::CodeType_FeeAUPostShippingLabel;
    }

    /**
     * @return bool
     */
    public function isCreditAUPostShippingLabel()
    {
        return $this->_value === self::CodeType_CreditAUPostShippingLabel;
    }

    /**
     * @return bool
     */
    public function isFeeAPACFedExShippingLabel()
    {
        return $this->_value === self::CodeType_FeeAPACFedExShippingLabel;
    }

    /**
     * @return bool
     */
    public function isCreditAPACFedExShippingLabel()
    {
        return $this->_value === self::CodeType_CreditAPACFedExShippingLabel;
    }

    /**
     * @return bool
     */
    public function isFeeAPACTNTShippingLabel()
    {
        return $this->_value === self::CodeType_FeeAPACTNTShippingLabel;
    }

    /**
     * @return bool
     */
    public function isCreditAPACTNTShippingLabel()
    {
        return $this->_value === self::CodeType_CreditAPACTNTShippingLabel;
    }

    /**
     * @return bool
     */
    public function isFeeEBPReimbursement()
    {
        return $this->_value === self::CodeType_FeeEBPReimbursement;
    }

    /**
     * @return bool
     */
    public function isCreditEBPReimbursement()
    {
        return $this->_value === self::CodeType_CreditEBPReimbursement;
    }

    /**
     * @return bool
     */
    public function isFeePromotedListingFeature()
    {
        return $this->_value === self::CodeType_FeePromotedListingFeature;
    }

    /**
     * @return bool
     */
    public function isCreditPromotedListingFeature()
    {
        return $this->_value === self::CodeType_CreditPromotedListingFeature;
    }

    /**
     * @return bool
     */
    public function isFeeAd()
    {
        return $this->_value === self::CodeType_FeeAd;
    }

    /**
     * @return bool
     */
    public function isCreditAd()
    {
        return $this->_value === self::CodeType_CreditAd;
    }

    /**
     * @return bool
     */
    public function isFeeUBIShippingLabel()
    {
        return $this->_value === self::CodeType_FeeUBIShippingLabel;
    }

    /**
     * @return bool
     */
    public function isCreditUBIShippingLabel()
    {
        return $this->_value === self::CodeType_CreditUBIShippingLabel;
    }

    /**
     * @return bool
     */
    public function isFeeeBayPlusSubscription()
    {
        return $this->_value === self::CodeType_FeeeBayPlusSubscription;
    }

    /**
     * @return bool
     */
    public function isCrediteBayPlusSubscription()
    {
        return $this->_value === self::CodeType_CrediteBayPlusSubscription;
    }

    /**
     * @return bool
     */
    public function isPaymentIntermediationFee()
    {
        return $this->_value === self::CodeType_PaymentIntermediationFee;
    }

    /**
     * @return bool
     */
    public function isPaymentIntermediationFeeCredit()
    {
        return $this->_value === self::CodeType_PaymentIntermediationFeeCredit;
    }

    /**
     * @return bool
     */
    public function isFeePaymentIntermediationRVI()
    {
        return $this->_value === self::CodeType_FeePaymentIntermediationRVI;
    }

    /**
     * @return bool
     */
    public function isFeePaymentIntermediationChargeback()
    {
        return $this->_value === self::CodeType_FeePaymentIntermediationChargeback;
    }

    /**
     * @return bool
     */
    public function isFeePaymentIntermediationChargebackRVI()
    {
        return $this->_value === self::CodeType_FeePaymentIntermediationChargebackRVI;
    }

    /**
     * @return bool
     */
    public function isSnadOutlierFinalValueFee()
    {
        return $this->_value === self::CodeType_SnadOutlierFinalValueFee;
    }

    /**
     * @return bool
     */
    public function isSnadOutlierFinalValueFeeOnShipping()
    {
        return $this->_value === self::CodeType_SnadOutlierFinalValueFeeOnShipping;
    }

    /**
     * @return bool
     */
    public function isHighlineSearchFee()
    {
        return $this->_value === self::CodeType_HighlineSearchFee;
    }

    /**
     * @return bool
     */
    public function isHighlineSearchFeeCredit()
    {
        return $this->_value === self::CodeType_HighlineSearchFeeCredit;
    }

    /**
     * @return bool
     */
    public function isSnadOutlierFinalValueFeeCredit()
    {
        return $this->_value === self::CodeType_SnadOutlierFinalValueFeeCredit;
    }

    /**
     * @return bool
     */
    public function isSnadOutlierFinalValueFeeOnShippingCredit()
    {
        return $this->_value === self::CodeType_SnadOutlierFinalValueFeeOnShippingCredit;
    }

    /**
     * @return bool
     */
    public function isAdFeePremium()
    {
        return $this->_value === self::CodeType_AdFeePremium;
    }

    /**
     * @return bool
     */
    public function isAdFeePremiumCredit()
    {
        return $this->_value === self::CodeType_AdFeePremiumCredit;
    }

    /**
     * @return bool
     */
    public function isPerListingPaymentsFee()
    {
        return $this->_value === self::CodeType_PerListingPaymentsFee;
    }

    /**
     * @return bool
     */
    public function isPerListingPaymentsFeeCredit()
    {
        return $this->_value === self::CodeType_PerListingPaymentsFeeCredit;
    }

    /**
     * @return bool
     */
    public function isVehiclesListingBasicPackageFee()
    {
        return $this->_value === self::CodeType_VehiclesListingBasicPackageFee;
    }

    /**
     * @return bool
     */
    public function isVehiclesListingBasicPackageCredit()
    {
        return $this->_value === self::CodeType_VehiclesListingBasicPackageCredit;
    }

    /**
     * @return bool
     */
    public function isVehiclesListingPlusPackageFee()
    {
        return $this->_value === self::CodeType_VehiclesListingPlusPackageFee;
    }

    /**
     * @return bool
     */
    public function isVehiclesListingPlusPackageCredit()
    {
        return $this->_value === self::CodeType_VehiclesListingPlusPackageCredit;
    }

    /**
     * @return bool
     */
    public function isVehiclesListingPremiumPackageFee()
    {
        return $this->_value === self::CodeType_VehiclesListingPremiumPackageFee;
    }

    /**
     * @return bool
     */
    public function isVehiclesListingPremiumPackageCredit()
    {
        return $this->_value === self::CodeType_VehiclesListingPremiumPackageCredit;
    }

    /**
     * @return bool
     */
    public function isSendLabelFee()
    {
        return $this->_value === self::CodeType_SendLabelFee;
    }

    /**
     * @return bool
     */
    public function isSendLabelFeeCredit()
    {
        return $this->_value === self::CodeType_SendLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isUpsLabelFee()
    {
        return $this->_value === self::CodeType_UpsLabelFee;
    }

    /**
     * @return bool
     */
    public function isUpsLabelFeeCredit()
    {
        return $this->_value === self::CodeType_UpsLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isCanadaPostLabelFee()
    {
        return $this->_value === self::CodeType_CanadaPostLabelFee;
    }

    /**
     * @return bool
     */
    public function isCanadaPostLabelFeeCredit()
    {
        return $this->_value === self::CodeType_CanadaPostLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isEbaySendLabelFee()
    {
        return $this->_value === self::CodeType_EbaySendLabelFee;
    }

    /**
     * @return bool
     */
    public function isEbaySendLabelFeeCredit()
    {
        return $this->_value === self::CodeType_EbaySendLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isUSInternetSalesTax()
    {
        return $this->_value === self::CodeType_USInternetSalesTax;
    }

    /**
     * @return bool
     */
    public function isUSInternetSalesTaxCredit()
    {
        return $this->_value === self::CodeType_USInternetSalesTaxCredit;
    }

    /**
     * @return bool
     */
    public function isNewZealandGST()
    {
        return $this->_value === self::CodeType_NewZealandGST;
    }

    /**
     * @return bool
     */
    public function isNewZealandGSTCredit()
    {
        return $this->_value === self::CodeType_NewZealandGSTCredit;
    }

    /**
     * @return bool
     */
    public function isAustraliaGST()
    {
        return $this->_value === self::CodeType_AustraliaGST;
    }

    /**
     * @return bool
     */
    public function isAustraliaGSTCredit()
    {
        return $this->_value === self::CodeType_AustraliaGSTCredit;
    }

    /**
     * @return bool
     */
    public function isUspsLabelFee()
    {
        return $this->_value === self::CodeType_UspsLabelFee;
    }

    /**
     * @return bool
     */
    public function isUspsLabelFeeCredit()
    {
        return $this->_value === self::CodeType_UspsLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isShippingInsuranceFee()
    {
        return $this->_value === self::CodeType_ShippingInsuranceFee;
    }

    /**
     * @return bool
     */
    public function isShippingInsuranceFeeCredit()
    {
        return $this->_value === self::CodeType_ShippingInsuranceFeeCredit;
    }

    /**
     * @return bool
     */
    public function isUspsShortpaidFee()
    {
        return $this->_value === self::CodeType_UspsShortpaidFee;
    }

    /**
     * @return bool
     */
    public function isUspsShortpaidFeeCredit()
    {
        return $this->_value === self::CodeType_UspsShortpaidFeeCredit;
    }

    /**
     * @return bool
     */
    public function isCoFundingCharge()
    {
        return $this->_value === self::CodeType_CoFundingCharge;
    }

    /**
     * @return bool
     */
    public function isCoFundingChargeCredit()
    {
        return $this->_value === self::CodeType_CoFundingChargeCredit;
    }

    /**
     * @return bool
     */
    public function isFinalValueFee()
    {
        return $this->_value === self::CodeType_FinalValueFee;
    }

    /**
     * @return bool
     */
    public function isFinalValueFeeCredit()
    {
        return $this->_value === self::CodeType_FinalValueFeeCredit;
    }

    /**
     * @return bool
     */
    public function isInternationalFee()
    {
        return $this->_value === self::CodeType_InternationalFee;
    }

    /**
     * @return bool
     */
    public function isInternationalFeeCredit()
    {
        return $this->_value === self::CodeType_InternationalFeeCredit;
    }

    /**
     * @return bool
     */
    public function isFinalValueFeeFixedFeePerOrder()
    {
        return $this->_value === self::CodeType_FinalValueFeeFixedFeePerOrder;
    }

    /**
     * @return bool
     */
    public function isFinalValueFeeFixedFeePerOrderCredit()
    {
        return $this->_value === self::CodeType_FinalValueFeeFixedFeePerOrderCredit;
    }

    /**
     * @return bool
     */
    public function isFinalValueFeeBelowStandard()
    {
        return $this->_value === self::CodeType_FinalValueFeeBelowStandard;
    }

    /**
     * @return bool
     */
    public function isFinalValueFeeBelowStandardCredit()
    {
        return $this->_value === self::CodeType_FinalValueFeeBelowStandardCredit;
    }

    /**
     * @return bool
     */
    public function isAdFeeExpress()
    {
        return $this->_value === self::CodeType_AdFeeExpress;
    }

    /**
     * @return bool
     */
    public function isAdFeeExpressCredit()
    {
        return $this->_value === self::CodeType_AdFeeExpressCredit;
    }

    /**
     * @return bool
     */
    public function isDepositProcessingFee()
    {
        return $this->_value === self::CodeType_DepositProcessingFee;
    }

    /**
     * @return bool
     */
    public function isDepositProcessingFeeCredit()
    {
        return $this->_value === self::CodeType_DepositProcessingFeeCredit;
    }

    /**
     * @return bool
     */
    public function isDepositProcessingFixedFee()
    {
        return $this->_value === self::CodeType_DepositProcessingFixedFee;
    }

    /**
     * @return bool
     */
    public function isDepositProcessingFixedFeeCredit()
    {
        return $this->_value === self::CodeType_DepositProcessingFixedFeeCredit;
    }

    /**
     * @return bool
     */
    public function isFedExReturnLabelFee()
    {
        return $this->_value === self::CodeType_FedExReturnLabelFee;
    }

    /**
     * @return bool
     */
    public function isFedExReturnLabelFeeCredit()
    {
        return $this->_value === self::CodeType_FedExReturnLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isAUPostReturnLabelFee()
    {
        return $this->_value === self::CodeType_AUPostReturnLabelFee;
    }

    /**
     * @return bool
     */
    public function isAUPostReturnLabelFeeCredit()
    {
        return $this->_value === self::CodeType_AUPostReturnLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isUpsCaLabelFee()
    {
        return $this->_value === self::CodeType_UpsCaLabelFee;
    }

    /**
     * @return bool
     */
    public function isUpsCaLabelFeeCredit()
    {
        return $this->_value === self::CodeType_UpsCaLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isFedExCaLabelFee()
    {
        return $this->_value === self::CodeType_FedExCaLabelFee;
    }

    /**
     * @return bool
     */
    public function isFedExCaLabelFeeCredit()
    {
        return $this->_value === self::CodeType_FedExCaLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isHubbedReturnLabelFee()
    {
        return $this->_value === self::CodeType_HubbedReturnLabelFee;
    }

    /**
     * @return bool
     */
    public function isHubbedReturnLabelFeeCredit()
    {
        return $this->_value === self::CodeType_HubbedReturnLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isRoyalMailReturnLabelFee()
    {
        return $this->_value === self::CodeType_RoyalMailReturnLabelFee;
    }

    /**
     * @return bool
     */
    public function isRoyalMailReturnLabelFeeCredit()
    {
        return $this->_value === self::CodeType_RoyalMailReturnLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isParcelForcePostReturnLabelFee()
    {
        return $this->_value === self::CodeType_ParcelForcePostReturnLabelFee;
    }

    /**
     * @return bool
     */
    public function isParcelForcePostReturnLabelFeeCredit()
    {
        return $this->_value === self::CodeType_ParcelForcePostReturnLabelFeeCredit;
    }

    /**
     * @return bool
     */
    public function isOffsiteAdsFee()
    {
        return $this->_value === self::CodeType_OffsiteAdsFee;
    }

    /**
     * @return bool
     */
    public function isOffsiteAdsFeeCredit()
    {
        return $this->_value === self::CodeType_OffsiteAdsFeeCredit;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

AccountDetailEntryCodeType::_register();
