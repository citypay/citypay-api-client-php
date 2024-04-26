# CityPay\ReportingApi

All URIs are relative to https://api.citypay.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchedTransactionReportRequest()**](ReportingApi.md#batchedTransactionReportRequest) | **POST** /v6/merchant-batch/{merchantid}/{batch_no}/transactions | Batch Transaction Report Request |
| [**merchantBatchReportRequest()**](ReportingApi.md#merchantBatchReportRequest) | **POST** /v6/merchant-batch/report | Merchant Batch Report Request |
| [**merchantBatchRequest()**](ReportingApi.md#merchantBatchRequest) | **GET** /v6/merchant-batch/{merchantid}/{batch_no} | Merchant Batch Request |
| [**remittanceRangeReport()**](ReportingApi.md#remittanceRangeReport) | **POST** /v6/remittance/report/{clientid} | Remittance Report Request |
| [**remittanceReportRequest()**](ReportingApi.md#remittanceReportRequest) | **GET** /v6/remittance/report/{clientid}/{date} | Remittance Date Report Request |


## `batchedTransactionReportRequest()`

```php
batchedTransactionReportRequest($merchantid, $batch_no, $batch_transaction_report_request): \CityPay\Model\BatchTransactionReportResponse
```

Batch Transaction Report Request

Retrieves transactions available on a given batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantid = 56; // int | A merchant ID (MID) for which data is requested. This field allows for filtering of the request by a specific merchant account.
$batch_no = 'batch_no_example'; // string | The batch number that is being requested.
$batch_transaction_report_request = new \CityPay\Model\BatchTransactionReportRequest(); // \CityPay\Model\BatchTransactionReportRequest

try {
    $result = $apiInstance->batchedTransactionReportRequest($merchantid, $batch_no, $batch_transaction_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->batchedTransactionReportRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantid** | **int**| A merchant ID (MID) for which data is requested. This field allows for filtering of the request by a specific merchant account. | |
| **batch_no** | **string**| The batch number that is being requested. | |
| **batch_transaction_report_request** | [**\CityPay\Model\BatchTransactionReportRequest**](../Model/BatchTransactionReportRequest.md)|  | |

### Return type

[**\CityPay\Model\BatchTransactionReportResponse**](../Model/BatchTransactionReportResponse.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `merchantBatchReportRequest()`

```php
merchantBatchReportRequest($merchant_batch_report_request): \CityPay\Model\MerchantBatchReportResponse
```

Merchant Batch Report Request

Retrieves a report of merchant batches within a specified date range.  Batches, which aggregate daily processing activities, are typically generated at `00:00` each day.  These batches play a crucial role in the settlement of funds by summarising daily transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_batch_report_request = new \CityPay\Model\MerchantBatchReportRequest(); // \CityPay\Model\MerchantBatchReportRequest

try {
    $result = $apiInstance->merchantBatchReportRequest($merchant_batch_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->merchantBatchReportRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_batch_report_request** | [**\CityPay\Model\MerchantBatchReportRequest**](../Model/MerchantBatchReportRequest.md)|  | |

### Return type

[**\CityPay\Model\MerchantBatchReportResponse**](../Model/MerchantBatchReportResponse.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `merchantBatchRequest()`

```php
merchantBatchRequest($merchantid, $batch_no): \CityPay\Model\MerchantBatchResponse
```

Merchant Batch Request

Retrieves a report of merchant a merchant batch for a specified batch number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantid = 56; // int | A merchant ID (MID) for which data is requested. This field allows for filtering of the request by a specific merchant account.
$batch_no = 'batch_no_example'; // string | The batch number that is being requested.

try {
    $result = $apiInstance->merchantBatchRequest($merchantid, $batch_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->merchantBatchRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantid** | **int**| A merchant ID (MID) for which data is requested. This field allows for filtering of the request by a specific merchant account. | |
| **batch_no** | **string**| The batch number that is being requested. | |

### Return type

[**\CityPay\Model\MerchantBatchResponse**](../Model/MerchantBatchResponse.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remittanceRangeReport()`

```php
remittanceRangeReport($clientid, $remittance_report_request): \CityPay\Model\RemittanceReportResponse
```

Remittance Report Request

Fetches remittance reports for financial transactions within a specified date range, covering all client-related activities. This report consolidates all batches disbursed to a client, with each remittance summarising the aggregation of batches leading up to settlement. Additionally, the net remittance amount presented in the final settlement will reflect any deductions made by the acquirer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientid = 'clientid_example'; // string | A client Id for which data is requested.
$remittance_report_request = new \CityPay\Model\RemittanceReportRequest(); // \CityPay\Model\RemittanceReportRequest

try {
    $result = $apiInstance->remittanceRangeReport($clientid, $remittance_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->remittanceRangeReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientid** | **string**| A client Id for which data is requested. | |
| **remittance_report_request** | [**\CityPay\Model\RemittanceReportRequest**](../Model/RemittanceReportRequest.md)|  | |

### Return type

[**\CityPay\Model\RemittanceReportResponse**](../Model/RemittanceReportResponse.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remittanceReportRequest()`

```php
remittanceReportRequest($clientid, $date): \CityPay\Model\RemittedClientData
```

Remittance Date Report Request

Fetches remittance reports for financial transactions for a given date,  covering all client-related activities. This report consolidates all batches disbursed to a  client, with each remittance summarising the aggregation of batches leading up to settlement.  Additionally, the net remittance amount presented in the final settlement will reflect any  deductions made by the acquirer.  The process also supports the notion of *today* deferring the date to today's date or *latest* reflecting the latest remittance date available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientid = 'clientid_example'; // string | A client Id for which data is requested.
$date = 'date_example'; // string | Date (YYYY-MM-DD) to filter the request for.

try {
    $result = $apiInstance->remittanceReportRequest($clientid, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->remittanceReportRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientid** | **string**| A client Id for which data is requested. | |
| **date** | **string**| Date (YYYY-MM-DD) to filter the request for. | |

### Return type

[**\CityPay\Model\RemittedClientData**](../Model/RemittedClientData.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
