# CityPay\PaymentIntentApi

All URIs are relative to https://api.citypay.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentIntent()**](PaymentIntentApi.md#createPaymentIntent) | **POST** /v6/intent/create | Create a Payment Intent |
| [**getPaymentIntent()**](PaymentIntentApi.md#getPaymentIntent) | **POST** /v6/intent/retrieve | Retrieves a Payment Intent |


## `createPaymentIntent()`

```php
createPaymentIntent($payment_intent_request_model): \CityPay\Model\PaymentIntentReference
```

Create a Payment Intent

This endpoint initiates the creation of a payment intent, which is a precursor to processing a payment. A payment intent
captures the details of a prospective payment transaction, including the payment amount, currency, and associated
billing and shipping information.


### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\PaymentIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_request_model = new \CityPay\Model\PaymentIntentRequestModel(); // \CityPay\Model\PaymentIntentRequestModel

try {
    $result = $apiInstance->createPaymentIntent($payment_intent_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->createPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_intent_request_model** | [**\CityPay\Model\PaymentIntentRequestModel**](../Model/PaymentIntentRequestModel.md)|  | |

### Return type

[**\CityPay\Model\PaymentIntentReference**](../Model/PaymentIntentReference.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentIntent()`

```php
getPaymentIntent($find_payment_intent_request): \CityPay\Model\PaymentIntentResponseModel
```

Retrieves a Payment Intent

Obtains a payment intent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\PaymentIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$find_payment_intent_request = new \CityPay\Model\FindPaymentIntentRequest(); // \CityPay\Model\FindPaymentIntentRequest

try {
    $result = $apiInstance->getPaymentIntent($find_payment_intent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->getPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **find_payment_intent_request** | [**\CityPay\Model\FindPaymentIntentRequest**](../Model/FindPaymentIntentRequest.md)|  | |

### Return type

[**\CityPay\Model\PaymentIntentResponseModel**](../Model/PaymentIntentResponseModel.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
