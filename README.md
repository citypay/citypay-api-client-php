# CityPay

[![Build Status](https://api.travis-ci.com/citypay/citypay-api-client-php.svg?branch=master)](https://app.travis-ci.com/github/citypay/citypay-api-client-php)

This CityPay API is a HTTP RESTful payment API used for direct server to server transactional processing. It
provides a number of payment mechanisms including: Internet, MOTO, Continuous Authority transaction processing,
3-D Secure decision handling using RFA Secure, Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids and
Completion processing. The API is also capable of tokinsed payments using Card Holder Accounts.

## Compliance and Security
<aside class=\"notice\">
  Before we begin a reminder that your application will need to adhere to PCI-DSS standards to operate safely
  and to meet requirements set out by Visa and MasterCard and the PCI Security Standards Council including:
</aside>

* Data must be collected using TLS version 1.2 using [strong cryptography](#enabled-tls-ciphers). We will not accept calls to our API at
  lower grade encryption levels. We regularly scan our TLS endpoints for vulnerabilities and perform TLS assessments
  as part of our compliance program.
* The application must not store sensitive card holder data (CHD) such as the card security code (CSC) or
  primary access number (PAN)
* The application must not display the full card number on receipts, it is recommended to mask the PAN
  and show the last 4 digits. The API will return this for you for ease of receipt creation
* If you are developing a website, you will be required to perform regular scans on the network where you host the
  application to meet your compliance obligations
* You will be required to be PCI Compliant and the application must adhere to the security standard. Further information
  is available from [https://www.pcisecuritystandards.org/](https://www.pcisecuritystandards.org/)
* The API verifies that the request is for a valid account and originates from a trusted source using the remote IP
  address. Our application firewalls analyse data that may be an attempt to break a large number of security common
  security vulnerabilities.


For more information, please visit [https://citypay.com/customer-centre/technical-support.html](https://citypay.com/customer-centre/technical-support.html).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/citypay/citypay-api-client-php.git"
    }
  ],
  "require": {
    "citypay/citypay-api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/CityPay/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey(cp-api-key, $apiKey = ApiKey::newKey($clientId, $licenceKey);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKey(cp-api-key, $apiKey = ApiKey::newKey($clientId, $licenceKey);


$apiInstance = new CityPay\Api\BatchProcessingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_batch_request = new \CityPay\Model\ProcessBatchRequest(); // \CityPay\Model\ProcessBatchRequest

try {
    $result = $apiInstance->batchProcessRequest($process_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchProcessingApi->batchProcessRequest: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.citypay.com/v6*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BatchProcessingApi* | [**batchProcessRequest**](docs/Api/BatchProcessingApi.md#batchprocessrequest) | **POST** /batch/process | Batch Process Request
*BatchProcessingApi* | [**checkBatchStatusRequest**](docs/Api/BatchProcessingApi.md#checkbatchstatusrequest) | **POST** /batch/status | CheckBatchStatus
*BatchProcessingApi* | [**getBatchReportRequest**](docs/Api/BatchProcessingApi.md#getbatchreportrequest) | **POST** /batch/retrieve | BatchReportRequest
*CardHolderAccountApi* | [**accountCardDeleteRequest**](docs/Api/CardHolderAccountApi.md#accountcarddeleterequest) | **DELETE** /account/{accountid}/card/{cardId} | Card Deletion
*CardHolderAccountApi* | [**accountCardRegisterRequest**](docs/Api/CardHolderAccountApi.md#accountcardregisterrequest) | **POST** /account/{accountid}/register | Card Registration
*CardHolderAccountApi* | [**accountCardStatusRequest**](docs/Api/CardHolderAccountApi.md#accountcardstatusrequest) | **POST** /account/{accountid}/card/{cardId}/status | Card Status
*CardHolderAccountApi* | [**accountChangeContactRequest**](docs/Api/CardHolderAccountApi.md#accountchangecontactrequest) | **POST** /account/{accountid}/contact | Contact Details Update
*CardHolderAccountApi* | [**accountCreate**](docs/Api/CardHolderAccountApi.md#accountcreate) | **POST** /account/create | Account Create
*CardHolderAccountApi* | [**accountDeleteRequest**](docs/Api/CardHolderAccountApi.md#accountdeleterequest) | **DELETE** /account/{accountid} | Account Deletion
*CardHolderAccountApi* | [**accountExistsRequest**](docs/Api/CardHolderAccountApi.md#accountexistsrequest) | **GET** /account-exists/{accountid} | Account Exists
*CardHolderAccountApi* | [**accountRetrieveRequest**](docs/Api/CardHolderAccountApi.md#accountretrieverequest) | **GET** /account/{accountid} | Account Retrieval
*CardHolderAccountApi* | [**accountStatusRequest**](docs/Api/CardHolderAccountApi.md#accountstatusrequest) | **POST** /account/{accountid}/status | Account Status
*CardHolderAccountApi* | [**chargeRequest**](docs/Api/CardHolderAccountApi.md#chargerequest) | **POST** /charge | Charge
*OperationalApi* | [**aclCheckRequest**](docs/Api/OperationalApi.md#aclcheckrequest) | **POST** /acl/check | ACL Check Request
*OperationalApi* | [**listMerchantsRequest**](docs/Api/OperationalApi.md#listmerchantsrequest) | **GET** /merchants/{clientid} | List Merchants Request
*OperationalApi* | [**pingRequest**](docs/Api/OperationalApi.md#pingrequest) | **POST** /ping | Ping Request
*PaymentProcessingApi* | [**authorisationRequest**](docs/Api/PaymentProcessingApi.md#authorisationrequest) | **POST** /authorise | Authorisation
*PaymentProcessingApi* | [**binRangeLookupRequest**](docs/Api/PaymentProcessingApi.md#binrangelookuprequest) | **POST** /bin | Bin Lookup
*PaymentProcessingApi* | [**cResRequest**](docs/Api/PaymentProcessingApi.md#cresrequest) | **POST** /cres | CRes
*PaymentProcessingApi* | [**captureRequest**](docs/Api/PaymentProcessingApi.md#capturerequest) | **POST** /capture | Capture
*PaymentProcessingApi* | [**paResRequest**](docs/Api/PaymentProcessingApi.md#paresrequest) | **POST** /pares | PaRes
*PaymentProcessingApi* | [**refundRequest**](docs/Api/PaymentProcessingApi.md#refundrequest) | **POST** /refund | Refund
*PaymentProcessingApi* | [**retrievalRequest**](docs/Api/PaymentProcessingApi.md#retrievalrequest) | **POST** /retrieve | Retrieval
*PaymentProcessingApi* | [**voidRequest**](docs/Api/PaymentProcessingApi.md#voidrequest) | **POST** /void | Void

## Models

- [AccountCreate](docs/Model/AccountCreate.md)
- [AccountStatus](docs/Model/AccountStatus.md)
- [Acknowledgement](docs/Model/Acknowledgement.md)
- [AclCheckRequest](docs/Model/AclCheckRequest.md)
- [AclCheckResponseModel](docs/Model/AclCheckResponseModel.md)
- [AirlineAdvice](docs/Model/AirlineAdvice.md)
- [AirlineSegment](docs/Model/AirlineSegment.md)
- [AuthReference](docs/Model/AuthReference.md)
- [AuthReferences](docs/Model/AuthReferences.md)
- [AuthRequest](docs/Model/AuthRequest.md)
- [AuthResponse](docs/Model/AuthResponse.md)
- [AuthenRequired](docs/Model/AuthenRequired.md)
- [Batch](docs/Model/Batch.md)
- [BatchReportRequest](docs/Model/BatchReportRequest.md)
- [BatchReportResponseModel](docs/Model/BatchReportResponseModel.md)
- [BatchTransaction](docs/Model/BatchTransaction.md)
- [BatchTransactionResultModel](docs/Model/BatchTransactionResultModel.md)
- [Bin](docs/Model/Bin.md)
- [BinLookup](docs/Model/BinLookup.md)
- [CResAuthRequest](docs/Model/CResAuthRequest.md)
- [CaptureRequest](docs/Model/CaptureRequest.md)
- [Card](docs/Model/Card.md)
- [CardHolderAccount](docs/Model/CardHolderAccount.md)
- [CardStatus](docs/Model/CardStatus.md)
- [ChargeRequest](docs/Model/ChargeRequest.md)
- [CheckBatchStatus](docs/Model/CheckBatchStatus.md)
- [CheckBatchStatusResponse](docs/Model/CheckBatchStatusResponse.md)
- [ContactDetails](docs/Model/ContactDetails.md)
- [Decision](docs/Model/Decision.md)
- [Error](docs/Model/Error.md)
- [Exists](docs/Model/Exists.md)
- [ExternalMPI](docs/Model/ExternalMPI.md)
- [ListMerchantsResponse](docs/Model/ListMerchantsResponse.md)
- [MCC6012](docs/Model/MCC6012.md)
- [Merchant](docs/Model/Merchant.md)
- [PaResAuthRequest](docs/Model/PaResAuthRequest.md)
- [Ping](docs/Model/Ping.md)
- [ProcessBatchRequest](docs/Model/ProcessBatchRequest.md)
- [ProcessBatchResponse](docs/Model/ProcessBatchResponse.md)
- [RefundRequest](docs/Model/RefundRequest.md)
- [RegisterCard](docs/Model/RegisterCard.md)
- [RequestChallenged](docs/Model/RequestChallenged.md)
- [RetrieveRequest](docs/Model/RetrieveRequest.md)
- [ThreeDSecure](docs/Model/ThreeDSecure.md)
- [VoidRequest](docs/Model/VoidRequest.md)

## Authorization

### cp-api-key

- **Type**: API key
- **API key parameter name**: cp-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@citypay.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `6.2.8`
    - Package version: `1.0.6`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
