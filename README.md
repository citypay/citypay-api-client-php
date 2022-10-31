# CityPay

[![Build Status](https://api.travis-ci.com/citypay/citypay-api-client-php.svg?branch=master)](https://app.travis-ci.com/github/citypay/citypay-api-client-php)

This CityPay API is a HTTP RESTful payment API used for direct server to server transactional processing. It
provides a number of payment mechanisms including: Internet, MOTO, Continuous Authority transaction processing,
3-D Secure decision handling using RFA Secure, Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids and
Completion processing. The API is also capable of tokinsed payments using Card Holder Accounts.

## Compliance and Security
Your application will need to adhere to PCI-DSS standards to operate safely and to meet requirements set out by 
Visa and MasterCard and the PCI Security Standards Council. These include

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


$apiInstance = new CityPay\Api\AuthorisationAndPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_request = new \CityPay\Model\AuthRequest(); // \CityPay\Model\AuthRequest

try {
    $result = $apiInstance->authorisationRequest($auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorisationAndPaymentApi->authorisationRequest: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.citypay.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthorisationAndPaymentApi* | [**authorisationRequest**](docs/Api/AuthorisationAndPaymentApi.md#authorisationrequest) | **POST** /v6/authorise | Authorisation
*AuthorisationAndPaymentApi* | [**binRangeLookupRequest**](docs/Api/AuthorisationAndPaymentApi.md#binrangelookuprequest) | **POST** /v6/bin | Bin Lookup
*AuthorisationAndPaymentApi* | [**cResRequest**](docs/Api/AuthorisationAndPaymentApi.md#cresrequest) | **POST** /v6/cres | CRes
*AuthorisationAndPaymentApi* | [**captureRequest**](docs/Api/AuthorisationAndPaymentApi.md#capturerequest) | **POST** /v6/capture | Capture
*AuthorisationAndPaymentApi* | [**paResRequest**](docs/Api/AuthorisationAndPaymentApi.md#paresrequest) | **POST** /v6/pares | PaRes
*AuthorisationAndPaymentApi* | [**refundRequest**](docs/Api/AuthorisationAndPaymentApi.md#refundrequest) | **POST** /v6/refund | Refund
*AuthorisationAndPaymentApi* | [**retrievalRequest**](docs/Api/AuthorisationAndPaymentApi.md#retrievalrequest) | **POST** /v6/retrieve | Retrieval
*AuthorisationAndPaymentApi* | [**voidRequest**](docs/Api/AuthorisationAndPaymentApi.md#voidrequest) | **POST** /v6/void | Void
*BatchProcessingApi* | [**batchProcessRequest**](docs/Api/BatchProcessingApi.md#batchprocessrequest) | **POST** /v6/batch/process | Batch Process Request
*BatchProcessingApi* | [**batchReportRequest**](docs/Api/BatchProcessingApi.md#batchreportrequest) | **POST** /v6/batch/retrieve | BatchReportRequest
*BatchProcessingApi* | [**checkBatchStatusRequest**](docs/Api/BatchProcessingApi.md#checkbatchstatusrequest) | **POST** /v6/batch/status | CheckBatchStatus
*CardHolderAccountApi* | [**accountCardDeleteRequest**](docs/Api/CardHolderAccountApi.md#accountcarddeleterequest) | **DELETE** /v6/account/{accountid}/card/{cardId} | Card Deletion
*CardHolderAccountApi* | [**accountCardRegisterRequest**](docs/Api/CardHolderAccountApi.md#accountcardregisterrequest) | **POST** /v6/account/{accountid}/register | Card Registration
*CardHolderAccountApi* | [**accountCardStatusRequest**](docs/Api/CardHolderAccountApi.md#accountcardstatusrequest) | **POST** /v6/account/{accountid}/card/{cardId}/status | Card Status
*CardHolderAccountApi* | [**accountChangeContactRequest**](docs/Api/CardHolderAccountApi.md#accountchangecontactrequest) | **POST** /v6/account/{accountid}/contact | Contact Details Update
*CardHolderAccountApi* | [**accountCreate**](docs/Api/CardHolderAccountApi.md#accountcreate) | **POST** /v6/account/create | Account Create
*CardHolderAccountApi* | [**accountDeleteRequest**](docs/Api/CardHolderAccountApi.md#accountdeleterequest) | **DELETE** /v6/account/{accountid} | Account Deletion
*CardHolderAccountApi* | [**accountExistsRequest**](docs/Api/CardHolderAccountApi.md#accountexistsrequest) | **GET** /v6/account-exists/{accountid} | Account Exists
*CardHolderAccountApi* | [**accountRetrieveRequest**](docs/Api/CardHolderAccountApi.md#accountretrieverequest) | **GET** /v6/account/{accountid} | Account Retrieval
*CardHolderAccountApi* | [**accountStatusRequest**](docs/Api/CardHolderAccountApi.md#accountstatusrequest) | **POST** /v6/account/{accountid}/status | Account Status
*CardHolderAccountApi* | [**chargeRequest**](docs/Api/CardHolderAccountApi.md#chargerequest) | **POST** /v6/charge | Charge
*DirectPostApi* | [**directCResAuthRequest**](docs/Api/DirectPostApi.md#directcresauthrequest) | **POST** /direct/cres/auth/{uuid} | Handles a CRes response from ACS, returning back the result of authorisation
*DirectPostApi* | [**directCResTokeniseRequest**](docs/Api/DirectPostApi.md#directcrestokeniserequest) | **POST** /direct/cres/tokenise/{uuid} | Handles a CRes response from ACS, returning back a token for future authorisation
*DirectPostApi* | [**directPostAuthRequest**](docs/Api/DirectPostApi.md#directpostauthrequest) | **POST** /direct/auth | Direct Post Auth Request
*DirectPostApi* | [**directPostTokeniseRequest**](docs/Api/DirectPostApi.md#directposttokeniserequest) | **POST** /direct/tokenise | Direct Post Tokenise Request
*DirectPostApi* | [**tokenRequest**](docs/Api/DirectPostApi.md#tokenrequest) | **POST** /direct/token | Direct Post Token Request
*OperationalFunctionsApi* | [**aclCheckRequest**](docs/Api/OperationalFunctionsApi.md#aclcheckrequest) | **POST** /v6/acl/check | ACL Check Request
*OperationalFunctionsApi* | [**domainKeyCheckRequest**](docs/Api/OperationalFunctionsApi.md#domainkeycheckrequest) | **POST** /dk/check | Domain Key Check Request
*OperationalFunctionsApi* | [**domainKeyGenRequest**](docs/Api/OperationalFunctionsApi.md#domainkeygenrequest) | **POST** /dk/gen | Domain Key Generation Request
*OperationalFunctionsApi* | [**listMerchantsRequest**](docs/Api/OperationalFunctionsApi.md#listmerchantsrequest) | **GET** /v6/merchants/{clientid} | List Merchants Request
*OperationalFunctionsApi* | [**pingRequest**](docs/Api/OperationalFunctionsApi.md#pingrequest) | **POST** /v6/ping | Ping Request
*PaylinkApi* | [**tokenAdjustmentRequest**](docs/Api/PaylinkApi.md#tokenadjustmentrequest) | **POST** /paylink/{token}/adjustment | Paylink Token Adjustment
*PaylinkApi* | [**tokenCloseRequest**](docs/Api/PaylinkApi.md#tokencloserequest) | **PUT** /paylink/{token}/close | Close Paylink Token
*PaylinkApi* | [**tokenCreateBillPaymentRequest**](docs/Api/PaylinkApi.md#tokencreatebillpaymentrequest) | **POST** /paylink/bill-payment | Create Bill Payment Paylink Token
*PaylinkApi* | [**tokenCreateRequest**](docs/Api/PaylinkApi.md#tokencreaterequest) | **POST** /paylink/create | Create Paylink Token
*PaylinkApi* | [**tokenReconciledRequest**](docs/Api/PaylinkApi.md#tokenreconciledrequest) | **PUT** /paylink/{token}/reconciled | Reconcile Paylink Token
*PaylinkApi* | [**tokenReopenRequest**](docs/Api/PaylinkApi.md#tokenreopenrequest) | **PUT** /paylink/{token}/reopen | Reopen Paylink Token
*PaylinkApi* | [**tokenStatusChangesRequest**](docs/Api/PaylinkApi.md#tokenstatuschangesrequest) | **POST** /paylink/token/changes | Paylink Token Audit
*PaylinkApi* | [**tokenStatusRequest**](docs/Api/PaylinkApi.md#tokenstatusrequest) | **GET** /paylink/{token}/status | Paylink Token Status

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
- [DirectPostRequest](docs/Model/DirectPostRequest.md)
- [DirectTokenAuthRequest](docs/Model/DirectTokenAuthRequest.md)
- [DomainKeyCheckRequest](docs/Model/DomainKeyCheckRequest.md)
- [DomainKeyRequest](docs/Model/DomainKeyRequest.md)
- [DomainKeyResponse](docs/Model/DomainKeyResponse.md)
- [Error](docs/Model/Error.md)
- [EventDataModel](docs/Model/EventDataModel.md)
- [Exists](docs/Model/Exists.md)
- [ExternalMPI](docs/Model/ExternalMPI.md)
- [ListMerchantsResponse](docs/Model/ListMerchantsResponse.md)
- [MCC6012](docs/Model/MCC6012.md)
- [Merchant](docs/Model/Merchant.md)
- [PaResAuthRequest](docs/Model/PaResAuthRequest.md)
- [PaylinkAddress](docs/Model/PaylinkAddress.md)
- [PaylinkAdjustmentRequest](docs/Model/PaylinkAdjustmentRequest.md)
- [PaylinkAttachmentRequest](docs/Model/PaylinkAttachmentRequest.md)
- [PaylinkAttachmentResult](docs/Model/PaylinkAttachmentResult.md)
- [PaylinkBillPaymentTokenRequest](docs/Model/PaylinkBillPaymentTokenRequest.md)
- [PaylinkCardHolder](docs/Model/PaylinkCardHolder.md)
- [PaylinkCart](docs/Model/PaylinkCart.md)
- [PaylinkCartItemModel](docs/Model/PaylinkCartItemModel.md)
- [PaylinkConfig](docs/Model/PaylinkConfig.md)
- [PaylinkCustomParam](docs/Model/PaylinkCustomParam.md)
- [PaylinkEmailNotificationPath](docs/Model/PaylinkEmailNotificationPath.md)
- [PaylinkErrorCode](docs/Model/PaylinkErrorCode.md)
- [PaylinkFieldGuardModel](docs/Model/PaylinkFieldGuardModel.md)
- [PaylinkPartPayments](docs/Model/PaylinkPartPayments.md)
- [PaylinkSMSNotificationPath](docs/Model/PaylinkSMSNotificationPath.md)
- [PaylinkStateEvent](docs/Model/PaylinkStateEvent.md)
- [PaylinkTokenCreated](docs/Model/PaylinkTokenCreated.md)
- [PaylinkTokenRequestModel](docs/Model/PaylinkTokenRequestModel.md)
- [PaylinkTokenStatus](docs/Model/PaylinkTokenStatus.md)
- [PaylinkTokenStatusChangeRequest](docs/Model/PaylinkTokenStatusChangeRequest.md)
- [PaylinkTokenStatusChangeResponse](docs/Model/PaylinkTokenStatusChangeResponse.md)
- [PaylinkUI](docs/Model/PaylinkUI.md)
- [Ping](docs/Model/Ping.md)
- [ProcessBatchRequest](docs/Model/ProcessBatchRequest.md)
- [ProcessBatchResponse](docs/Model/ProcessBatchResponse.md)
- [RefundRequest](docs/Model/RefundRequest.md)
- [RegisterCard](docs/Model/RegisterCard.md)
- [RequestChallenged](docs/Model/RequestChallenged.md)
- [RetrieveRequest](docs/Model/RetrieveRequest.md)
- [ThreeDSecure](docs/Model/ThreeDSecure.md)
- [TokenisationResponseModel](docs/Model/TokenisationResponseModel.md)
- [VoidRequest](docs/Model/VoidRequest.md)

## Authorization

### cp-api-key

- **Type**: API key
- **API key parameter name**: cp-api-key
- **Location**: HTTP header



### cp-domain-key

- **Type**: API key
- **API key parameter name**: cp-domain-key
- **Location**: URL query string


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

- API version: `6.4.7`
    - Package version: `1.0.9`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
