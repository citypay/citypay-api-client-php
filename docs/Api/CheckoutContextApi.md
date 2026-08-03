# CityPay\CheckoutContextApi

All URIs are relative to https://api.citypay.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCheckoutContext()**](CheckoutContextApi.md#createCheckoutContext) | **POST** /v6/checkout/context/create | Create a Checkout Context |
| [**exchangeCheckoutContext()**](CheckoutContextApi.md#exchangeCheckoutContext) | **POST** /v6/checkout/context/exchange | Exchange a Checkout Context |


## `createCheckoutContext()`

```php
createCheckoutContext($checkout_context_create_request): \CityPay\Model\CheckoutContextReference
```

Create a Checkout Context

Create a Checkout Context to initialise CityPay Elements and Express payment buttons before a shopper commits to pay. The context is bound to a merchant and browser origin, returns the card and wallet capabilities available for that merchant, and can later be exchanged server-side for a Payment Intent when the merchant submits the final purchase details.


### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CheckoutContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_context_create_request = new \CityPay\Model\CheckoutContextCreateRequest(); // \CityPay\Model\CheckoutContextCreateRequest

try {
    $result = $apiInstance->createCheckoutContext($checkout_context_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutContextApi->createCheckoutContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_context_create_request** | [**\CityPay\Model\CheckoutContextCreateRequest**](../Model/CheckoutContextCreateRequest.md)|  | |

### Return type

[**\CityPay\Model\CheckoutContextReference**](../Model/CheckoutContextReference.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exchangeCheckoutContext()`

```php
exchangeCheckoutContext($checkout_context_exchange_request): \CityPay\Model\PaymentIntentReference
```

Exchange a Checkout Context

Exchange a previously created Checkout Context for a real Payment Intent when the shopper commits to pay. The merchant server submits the signed context credentials together with the final authoritative payment details, and CityPay validates the context origin before returning the standard Payment Intent reference used by the existing Elements flow.


### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CheckoutContextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_context_exchange_request = new \CityPay\Model\CheckoutContextExchangeRequest(); // \CityPay\Model\CheckoutContextExchangeRequest

try {
    $result = $apiInstance->exchangeCheckoutContext($checkout_context_exchange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutContextApi->exchangeCheckoutContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_context_exchange_request** | [**\CityPay\Model\CheckoutContextExchangeRequest**](../Model/CheckoutContextExchangeRequest.md)|  | |

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
