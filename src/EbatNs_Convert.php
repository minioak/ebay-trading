<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Convert
{
    public static function ToAmount($amountValue, $currency)
    {
        $a = new AmountType();
        $a->setTypeValue($amountValue);
        $a->assignTagAttribute('currencyID', $currency);

        return $a;
    }

    public static function ToCategory($categoryId)
    {
        $category = new CategoryType();
        $category->CategoryID = $categoryId;
        return $category;
    }
}
