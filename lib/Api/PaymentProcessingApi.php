<?php

namespace CityPay\Api;

use CityPay\Configuration;
use CityPay\HeaderSelector;
use GuzzleHttp\ClientInterface;

class PaymentProcessingApi extends \CityPay\Api\AuthorisationAndPaymentApi {

    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
                        $hostIndex = 0
    ) {
        parent::__construct($client, $config, $selector, $hostIndex);
    }

}

