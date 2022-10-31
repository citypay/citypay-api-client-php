<?php

namespace CityPay\Api;

use CityPay\Configuration;
use CityPay\HeaderSelector;
use GuzzleHttp\ClientInterface;

class OperationalApi extends \CityPay\Api\OperationalFunctionsApi {

    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
                        $hostIndex = 0
    ) {
        parent::__construct($client, $config, $selector, $hostIndex);
    }

}

