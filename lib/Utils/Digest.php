<?php
namespace CityPay\Utils;

class Digest
{
    public static function validateDigest($authResponse, $licenceKey)
    {
        $stringToConvert = $authResponse['authcode']
            .$authResponse['amount']
            .$authResponse['result_code']
            .$authResponse['merchantid']
            .$authResponse['transno']
            .$authResponse['identifier']
            .$licenceKey;

        return $authResponse['sha256'] == base64_encode(hash("sha256", $stringToConvert, true));
    }
}