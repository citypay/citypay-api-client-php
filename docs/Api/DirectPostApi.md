# CityPay\DirectPostApi

All URIs are relative to https://api.citypay.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**directCResAuthRequest()**](DirectPostApi.md#directCResAuthRequest) | **POST** /direct/cres/auth/{uuid} | Handles a CRes response from ACS, returning back the result of authorisation |
| [**directCResTokeniseRequest()**](DirectPostApi.md#directCResTokeniseRequest) | **POST** /direct/cres/tokenise/{uuid} | Handles a CRes response from ACS, returning back a token for future authorisation |
| [**directPostAuthRequest()**](DirectPostApi.md#directPostAuthRequest) | **POST** /direct/auth | Direct Post Auth Request |
| [**directPostTokeniseRequest()**](DirectPostApi.md#directPostTokeniseRequest) | **POST** /direct/tokenise | Direct Post Tokenise Request |
| [**tokenRequest()**](DirectPostApi.md#tokenRequest) | **POST** /direct/token | Direct Post Token Request |


## `directCResAuthRequest()`

```php
directCResAuthRequest($uuid, $cres, $three_ds_session_data): \CityPay\Model\AuthResponse
```

Handles a CRes response from ACS, returning back the result of authorisation

Used to post from an ACS during a ThreeDSecure direct flow process. The endpoint requires a valid `threeDSSessionData` value which defines the unique transaction through its workflow. This endpoint may be used by merchants wishing to perform a `Direct Post` integration who wish to handle the challenge flow themselves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new CityPay\Api\DirectPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | An identifier used to track the CReq/CRes cycle.
$cres = 'cres_example'; // string | The CRES from the ACS.
$three_ds_session_data = 'three_ds_session_data_example'; // string | The session data from the ACS.

try {
    $result = $apiInstance->directCResAuthRequest($uuid, $cres, $three_ds_session_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectPostApi->directCResAuthRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| An identifier used to track the CReq/CRes cycle. | |
| **cres** | **string**| The CRES from the ACS. | [optional] |
| **three_ds_session_data** | **string**| The session data from the ACS. | [optional] |

### Return type

[**\CityPay\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directCResTokeniseRequest()`

```php
directCResTokeniseRequest($uuid, $cres, $three_ds_session_data): \CityPay\Model\TokenisationResponseModel
```

Handles a CRes response from ACS, returning back a token for future authorisation

Used to post from an ACS during a ThreeDSecure direct flow process. The endpoint requires a valid `threeDSSessionData` value which defines the unique transaction through its workflow. This endpoint may be used by merchants wishing to perform a `Direct Post` integration who wish to handle the challenge flow themselves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new CityPay\Api\DirectPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | An identifier used to track the CReq/CRes cycle.
$cres = 'cres_example'; // string | The CRES from the ACS.
$three_ds_session_data = 'three_ds_session_data_example'; // string | The session data from the ACS.

try {
    $result = $apiInstance->directCResTokeniseRequest($uuid, $cres, $three_ds_session_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectPostApi->directCResTokeniseRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| An identifier used to track the CReq/CRes cycle. | |
| **cres** | **string**| The CRES from the ACS. | [optional] |
| **three_ds_session_data** | **string**| The session data from the ACS. | [optional] |

### Return type

[**\CityPay\Model\TokenisationResponseModel**](../Model/TokenisationResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directPostAuthRequest()`

```php
directPostAuthRequest($direct_post_request): \CityPay\Model\AuthResponse
```

Direct Post Auth Request

Used to initiate a direct post request transaction flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-domain-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-domain-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-domain-key', 'Bearer');

// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\DirectPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_post_request = new \CityPay\Model\DirectPostRequest(); // \CityPay\Model\DirectPostRequest

try {
    $result = $apiInstance->directPostAuthRequest($direct_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectPostApi->directPostAuthRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **direct_post_request** | [**\CityPay\Model\DirectPostRequest**](../Model/DirectPostRequest.md)|  | |

### Return type

[**\CityPay\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

[cp-domain-key](../../README.md#cp-domain-key), [cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `text/xml`
- **Accept**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directPostTokeniseRequest()`

```php
directPostTokeniseRequest($direct_post_request): \CityPay\Model\AuthResponse
```

Direct Post Tokenise Request

Used to initiate a direct post request transaction flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-domain-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-domain-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-domain-key', 'Bearer');

// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\DirectPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_post_request = new \CityPay\Model\DirectPostRequest(); // \CityPay\Model\DirectPostRequest

try {
    $result = $apiInstance->directPostTokeniseRequest($direct_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectPostApi->directPostTokeniseRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **direct_post_request** | [**\CityPay\Model\DirectPostRequest**](../Model/DirectPostRequest.md)|  | |

### Return type

[**\CityPay\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

[cp-domain-key](../../README.md#cp-domain-key), [cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `text/xml`
- **Accept**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenRequest()`

```php
tokenRequest($direct_token_auth_request): \CityPay\Model\AuthResponse
```

Direct Post Token Request

Perform a request for authorisation for a previously generated token. This flow will return an authorisation response stating that the transaction was approved or declined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-domain-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-domain-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-domain-key', 'Bearer');

// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\DirectPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_token_auth_request = new \CityPay\Model\DirectTokenAuthRequest(); // \CityPay\Model\DirectTokenAuthRequest

try {
    $result = $apiInstance->tokenRequest($direct_token_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectPostApi->tokenRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **direct_token_auth_request** | [**\CityPay\Model\DirectTokenAuthRequest**](../Model/DirectTokenAuthRequest.md)|  | |

### Return type

[**\CityPay\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

[cp-domain-key](../../README.md#cp-domain-key), [cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `text/xml`
- **Accept**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
