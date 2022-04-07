<?php
declare(strict_types=1);

namespace homework;

class currency
{
    private $isoCode;
    private const CURRENCY = ['AUD', 'EUR', 'AZN', 'ALL', 'DZD', 'USD', 'XCD', 'AOA', 'ARS', 'AMD', 'AMG', 'AFN', 'BSD', 'BDT', 'BBD', 'BHD', 'BYN', 'BZD', 'XOF', 'BMD', 'BGN', 'BOB', 'ВАМ', 'BWP', 'BRL', 'BND', 'BIF', 'INR', 'BTN', 'VUV', 'HUF', 'VEF', 'VHD', 'XAF', 'HTG', 'GYD', 'GMD', 'GHS', 'GTQ', 'GNF', 'GIP', 'HNL', 'HKD', 'DKK', 'GEL', 'DJF', 'DOP', 'EGP', 'ZMK', 'MAD', 'ZWL', 'ILS', 'IDR', 'JOD', 'IQD', 'IRR', 'ISK', 'YER', 'CVE', 'KZT', 'KHR', 'CAD', 'QAR', 'KES', 'KGS', 'CNY', 'COU', 'COP', 'KMF', 'CDF', 'KPW', 'KRW', 'CRC', 'CUP', 'CUC', 'KWD', 'ANG', 'LAK', 'LVL', 'ZAR', 'LSL', 'LRD', 'LBP', 'LYD', 'LTL', 'CHF', 'MUR', 'MRO', 'MGA', 'MOP', 'MKD', 'MWK', 'MYR', 'MVR', 'XDR', 'MXN', 'MZN', 'MDL', 'MNT', 'MMK', 'NAD', 'NPR', 'NGN', 'NIO', 'NZD', 'XPF', 'NOK', 'AED', 'OMR', 'KYD', 'SHP', 'PKR', 'PAB', 'PGK', 'PYG', 'PEN', 'PLN', 'RUB', 'RWF', 'RON', 'WST', 'STD', 'SAR', 'SZL', 'SCR', 'RSD', 'SGD', 'SYP', 'SBD', 'SOS', 'SDG', 'SRD', 'SLL', 'TJS', 'THB', 'TWD', 'TZS', 'TOP', 'TTD', 'TND', 'TMT', 'TRY', 'UGX', 'UZS', 'UAH', 'UYU', 'UYI', 'FJD', 'PHP', 'FKP', 'HRK', 'CZK', 'CLP', 'SEK', 'LKR', 'SVC', 'ERN', 'ETB', 'JMD', 'JPY'];

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    private function setIsoCode(string $isoCode): void
    {
        $isoCode = strtoupper($isoCode);
        $this->validate($isoCode);
        $this->isoCode = $isoCode;
    }

    private function validate($value)
    {
        if (!in_array($value, self::CURRENCY)) {
            throw new \Exception('Not correct');
        }
    }

}


