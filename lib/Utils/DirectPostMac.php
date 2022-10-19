<?php

namespace CityPay\Utils;

include 'EncodingUtils.php';

class DirectPostMac
{
    /**
     * Generates a new Mac with a given licence key, random value, amount and identifier
     * @param string $licenceKey client licence key
     * @param array $nonce a 128 bit (16 byte) random value which will be converted to hex value
     * @param int $amount the amount of the transction in the lowest unit of currency
     * @param string $identifier the identifier of the transaction
     * @return string a hex encoded uppercase Mac value
     */
    public static function createMac(string $licenceKey, array $nonce, int $amount, string $identifier): string
    {
        return self::create($licenceKey, strtoupper(byteArray2Hex($nonce)).$amount.$identifier);
    }

    /**
     * Generates a new Mac with a given licence key and value
     * @param string $key client licence key
     * @param string $value a string value tht represents the concatenation of random nonce, amount and identifier of the transaction
     * @return string a hex encoded uppercase Mac value
     */
    public static function create(string $key, string $value): string
    {
        $s = hash_hmac('sha256', $value, $key, true);
        return strtoupper(bin2hex($s));
    }

    /**
     * Verify the provided Mac value matches the generated Mac value with the given licence key, nonce value, amount and identifier
     * @param string $mac a hex encoded uppercase Mac value
     * @param string $licenceKey client licence key
     * @param array $nonce a 128 bit (16 byte) random value which will be converted to hex value
     * @param int $amount the amount of the transction in the lowest unit of currency
     * @param string $identifier the identifier of the transaction
     * @return boolean
     */
    public static function verify(string $mac, string $licenceKey, array $nonce, int $amount, string $identifier): bool
    {
        $val = self::createMac($licenceKey, $nonce, $amount, $identifier);
        return $val == $mac;
    }
}

