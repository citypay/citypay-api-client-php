# CityPay

[![PHP PHPUnit Tests](https://github.com/citypay/citypay-api-client-php/actions/workflows/build.yml/badge.svg)](https://github.com/citypay/citypay-api-client-php/actions/workflows/build.yml)

Welcome to the CityPay API, a robust HTTP API payment solution designed for seamless server-to-server 
transactional processing. Our API facilitates a wide array of payment operations, catering to diverse business needs. 
Whether you're integrating Internet payments, handling Mail Order/Telephone Order (MOTO) transactions, managing 
Subscriptions with Recurring and Continuous Authority payments, or navigating the complexities of 3-D Secure 
authentication, our API is equipped to support your requirements. Additionally, we offer functionalities for 
Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids, and Completion processing, alongside the capability 
for tokenised payments.

## Compliance and Security Overview
<aside class=\"notice\">
  Ensuring the security of payment transactions and compliance with industry standards is paramount. Our API is 
  designed with stringent security measures and compliance protocols to safeguard sensitive information and meet 
  the rigorous requirements of Visa, MasterCard, and the PCI Security Standards Council.
</aside>

### Key Compliance and Security Measures

* **TLS Encryption**: All data transmissions must utilise TLS version 1.2 or higher, employing [strong cryptography](#enabled-tls-ciphers). Our infrastructure strictly enforces this requirement to maintain the integrity and confidentiality of data in transit. We conduct regular scans and assessments of our TLS endpoints to identify and mitigate vulnerabilities.
* **Data Storage Prohibitions**: Storing sensitive cardholder data (CHD), such as the card security code (CSC) or primary account number (PAN), is strictly prohibited. Our API is designed to minimize your exposure to sensitive data, thereby reducing your compliance burden.
* **Data Masking**: For consumer protection and compliance, full card numbers must not be displayed on receipts or any customer-facing materials. Our API automatically masks PANs, displaying only the last four digits to facilitate safe receipt generation.
* **Network Scans**: If your application is web-based, regular scans of your hosting environment are mandatory to identify and rectify potential vulnerabilities. This proactive measure is crucial for maintaining a secure and compliant online presence.
* **PCI Compliance**: Adherence to PCI DSS standards is not optional; it's a requirement for operating securely and legally in the payments ecosystem. For detailed information on compliance requirements and resources, please visit the PCI Security Standards Council website [https://www.pcisecuritystandards.org/](https://www.pcisecuritystandards.org/).
* **Request Validation**: Our API includes mechanisms to verify the legitimacy of each request, ensuring it pertains to a valid account and originates from a trusted source. We leverage remote IP address verification alongside sophisticated application firewall technologies to thwart a wide array of common security threats.

## Getting Started
Before integrating with the CityPay API, ensure your application and development practices align with the outlined compliance and security measures. This preparatory step is crucial for a smooth integration process and the long-term success of your payment processing operations.

For further details on API endpoints, request/response formats, and code examples, proceed to the subsequent sections of our documentation. Our aim is to provide you with all the necessary tools and information to integrate our payment processing capabilities seamlessly into your application.

Thank you for choosing CityPay API. We look forward to supporting your payment processing needs with our secure, compliant, and versatile API solution.


For more information, please visit [https://www.citypay.com/contacts/](https://www.citypay.com/contacts/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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
*AuthorisationAndPaymentApi* | [**createPaymentIntent**](docs/Api/AuthorisationAndPaymentApi.md#createpaymentintent) | **POST** /v6/intent/create | Create a Payment Intent
*AuthorisationAndPaymentApi* | [**paResRequest**](docs/Api/AuthorisationAndPaymentApi.md#paresrequest) | **POST** /v6/pares | PaRes
*AuthorisationAndPaymentApi* | [**refundRequest**](docs/Api/AuthorisationAndPaymentApi.md#refundrequest) | **POST** /v6/refund | Refund
*AuthorisationAndPaymentApi* | [**retrievalRequest**](docs/Api/AuthorisationAndPaymentApi.md#retrievalrequest) | **POST** /v6/retrieve | Retrieval
*AuthorisationAndPaymentApi* | [**voidRequest**](docs/Api/AuthorisationAndPaymentApi.md#voidrequest) | **POST** /v6/void | Void
*BatchProcessingApi* | [**batchProcessRequest**](docs/Api/BatchProcessingApi.md#batchprocessrequest) | **POST** /v6/batch/process | Batch Process Request
*BatchProcessingApi* | [**batchRetrieveRequest**](docs/Api/BatchProcessingApi.md#batchretrieverequest) | **POST** /v6/batch/retrieve | Batch Retrieve Request
*BatchProcessingApi* | [**checkBatchStatusRequest**](docs/Api/BatchProcessingApi.md#checkbatchstatusrequest) | **POST** /v6/batch/status | Check Batch Status
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
*PaylinkApi* | [**tokenCancelRequest**](docs/Api/PaylinkApi.md#tokencancelrequest) | **PUT** /paylink/{token}/cancel | Cancel a Paylink Token
*PaylinkApi* | [**tokenChangesRequest**](docs/Api/PaylinkApi.md#tokenchangesrequest) | **POST** /paylink/token/changes | Paylink Token Audit
*PaylinkApi* | [**tokenCloseRequest**](docs/Api/PaylinkApi.md#tokencloserequest) | **PUT** /paylink/{token}/close | Close Paylink Token
*PaylinkApi* | [**tokenCreateBillPaymentRequest**](docs/Api/PaylinkApi.md#tokencreatebillpaymentrequest) | **POST** /paylink/bill-payment | Create Bill Payment Paylink Token
*PaylinkApi* | [**tokenCreateRequest**](docs/Api/PaylinkApi.md#tokencreaterequest) | **POST** /paylink/create | Create Paylink Token
*PaylinkApi* | [**tokenPurgeAttachmentsRequest**](docs/Api/PaylinkApi.md#tokenpurgeattachmentsrequest) | **PUT** /paylink/{token}/purge-attachments | Purges any attachments for a Paylink Token
*PaylinkApi* | [**tokenReconciledRequest**](docs/Api/PaylinkApi.md#tokenreconciledrequest) | **PUT** /paylink/{token}/reconciled | Reconcile Paylink Token
*PaylinkApi* | [**tokenReopenRequest**](docs/Api/PaylinkApi.md#tokenreopenrequest) | **PUT** /paylink/{token}/reopen | Reopen Paylink Token
*PaylinkApi* | [**tokenResendNotificationRequest**](docs/Api/PaylinkApi.md#tokenresendnotificationrequest) | **POST** /paylink/{token}/resend-notification | Resend a notification for Paylink Token
*PaylinkApi* | [**tokenStatusRequest**](docs/Api/PaylinkApi.md#tokenstatusrequest) | **GET** /paylink/{token}/status | Paylink Token Status
*ReportingApi* | [**batchedTransactionReportRequest**](docs/Api/ReportingApi.md#batchedtransactionreportrequest) | **POST** /v6/merchant-batch/{merchantid}/{batch_no}/transactions | Batch Transaction Report Request
*ReportingApi* | [**merchantBatchReportRequest**](docs/Api/ReportingApi.md#merchantbatchreportrequest) | **POST** /v6/merchant-batch/report | Merchant Batch Report Request
*ReportingApi* | [**merchantBatchRequest**](docs/Api/ReportingApi.md#merchantbatchrequest) | **GET** /v6/merchant-batch/{merchantid}/{batch_no} | Merchant Batch Request
*ReportingApi* | [**remittanceRangeReport**](docs/Api/ReportingApi.md#remittancerangereport) | **POST** /v6/remittance/report/{clientid} | Remittance Report Request
*ReportingApi* | [**remittanceReportRequest**](docs/Api/ReportingApi.md#remittancereportrequest) | **GET** /v6/remittance/report/{clientid}/{date} | Remittance Date Report Request

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
- [Batch](docs/Model/Batch.md)
- [BatchReportRequest](docs/Model/BatchReportRequest.md)
- [BatchReportResponseModel](docs/Model/BatchReportResponseModel.md)
- [BatchTransaction](docs/Model/BatchTransaction.md)
- [BatchTransactionReportRequest](docs/Model/BatchTransactionReportRequest.md)
- [BatchTransactionReportResponse](docs/Model/BatchTransactionReportResponse.md)
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
- [MerchantBatchReportRequest](docs/Model/MerchantBatchReportRequest.md)
- [MerchantBatchReportResponse](docs/Model/MerchantBatchReportResponse.md)
- [MerchantBatchResponse](docs/Model/MerchantBatchResponse.md)
- [NetSummaryResponse](docs/Model/NetSummaryResponse.md)
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
- [PaylinkResendNotificationRequest](docs/Model/PaylinkResendNotificationRequest.md)
- [PaylinkSMSNotificationPath](docs/Model/PaylinkSMSNotificationPath.md)
- [PaylinkStateEvent](docs/Model/PaylinkStateEvent.md)
- [PaylinkTokenCreated](docs/Model/PaylinkTokenCreated.md)
- [PaylinkTokenRequestModel](docs/Model/PaylinkTokenRequestModel.md)
- [PaylinkTokenStatus](docs/Model/PaylinkTokenStatus.md)
- [PaylinkTokenStatusChangeRequest](docs/Model/PaylinkTokenStatusChangeRequest.md)
- [PaylinkTokenStatusChangeResponse](docs/Model/PaylinkTokenStatusChangeResponse.md)
- [PaylinkUI](docs/Model/PaylinkUI.md)
- [PaymentIntent](docs/Model/PaymentIntent.md)
- [PaymentIntentReference](docs/Model/PaymentIntentReference.md)
- [Ping](docs/Model/Ping.md)
- [ProcessBatchRequest](docs/Model/ProcessBatchRequest.md)
- [ProcessBatchResponse](docs/Model/ProcessBatchResponse.md)
- [RefundRequest](docs/Model/RefundRequest.md)
- [RegisterCard](docs/Model/RegisterCard.md)
- [RemittanceData](docs/Model/RemittanceData.md)
- [RemittanceReportRequest](docs/Model/RemittanceReportRequest.md)
- [RemittanceReportResponse](docs/Model/RemittanceReportResponse.md)
- [RemittedClientData](docs/Model/RemittedClientData.md)
- [RequestChallenged](docs/Model/RequestChallenged.md)
- [RetrieveRequest](docs/Model/RetrieveRequest.md)
- [ThreeDSecure](docs/Model/ThreeDSecure.md)
- [TokenisationResponseModel](docs/Model/TokenisationResponseModel.md)
- [VoidRequest](docs/Model/VoidRequest.md)

## Authorization

Authentication schemes defined for the API:
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

- API version: `6.6.40`
    - Package version: `1.1.2`
    - Generator version: `7.5.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
