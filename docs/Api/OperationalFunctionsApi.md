# CityPay\OperationalFunctionsApi

All URIs are relative to https://api.citypay.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aclCheckRequest()**](OperationalFunctionsApi.md#aclCheckRequest) | **POST** /v6/acl/check | ACL Check Request |
| [**domainKeyCheckRequest()**](OperationalFunctionsApi.md#domainKeyCheckRequest) | **POST** /dk/check | Domain Key Check Request |
| [**domainKeyGenRequest()**](OperationalFunctionsApi.md#domainKeyGenRequest) | **POST** /dk/gen | Domain Key Generation Request |
| [**listMerchantsRequest()**](OperationalFunctionsApi.md#listMerchantsRequest) | **GET** /v6/merchants/{clientid} | List Merchants Request |
| [**pingRequest()**](OperationalFunctionsApi.md#pingRequest) | **POST** /v6/ping | Ping Request |


## `aclCheckRequest()`

```php
aclCheckRequest($acl_check_request): \CityPay\Model\AclCheckResponseModel
```

ACL Check Request

Allows the checking of IP addresses against configured ACLs. Requests can perform a lookup of addresses in subnets and services such as AWS or Azure to check that those addresses are listed in the ACLs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\OperationalFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$acl_check_request = new \CityPay\Model\AclCheckRequest(); // \CityPay\Model\AclCheckRequest

try {
    $result = $apiInstance->aclCheckRequest($acl_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationalFunctionsApi->aclCheckRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acl_check_request** | [**\CityPay\Model\AclCheckRequest**](../Model/AclCheckRequest.md)|  | |

### Return type

[**\CityPay\Model\AclCheckResponseModel**](../Model/AclCheckResponseModel.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainKeyCheckRequest()`

```php
domainKeyCheckRequest($domain_key_check_request): \CityPay\Model\DomainKeyResponse
```

Domain Key Check Request

Checks the contents of a `domain key`. Can be used for operational processes to ensure that the properties of a  domain key meet their expectations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\OperationalFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_key_check_request = new \CityPay\Model\DomainKeyCheckRequest(); // \CityPay\Model\DomainKeyCheckRequest

try {
    $result = $apiInstance->domainKeyCheckRequest($domain_key_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationalFunctionsApi->domainKeyCheckRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_key_check_request** | [**\CityPay\Model\DomainKeyCheckRequest**](../Model/DomainKeyCheckRequest.md)|  | |

### Return type

[**\CityPay\Model\DomainKeyResponse**](../Model/DomainKeyResponse.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainKeyGenRequest()`

```php
domainKeyGenRequest($domain_key_request): \CityPay\Model\DomainKeyResponse
```

Domain Key Generation Request

Generates a domain key based on the permissions of the calling `api-key`. Domain keys can be used in _Direct Post_ and `XHR` calls to the API services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\OperationalFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_key_request = new \CityPay\Model\DomainKeyRequest(); // \CityPay\Model\DomainKeyRequest

try {
    $result = $apiInstance->domainKeyGenRequest($domain_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationalFunctionsApi->domainKeyGenRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_key_request** | [**\CityPay\Model\DomainKeyRequest**](../Model/DomainKeyRequest.md)|  | |

### Return type

[**\CityPay\Model\DomainKeyResponse**](../Model/DomainKeyResponse.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMerchantsRequest()`

```php
listMerchantsRequest($clientid): \CityPay\Model\ListMerchantsResponse
```

List Merchants Request

An operational request to list current merchants for a client.  ### Sorting  Sorting can be performed by include a query parameter i.e. `/merchants/?sort=merchantid`  Fields that can be sorted are `merchantid` or `name`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\OperationalFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientid = 'clientid_example'; // string | The client id to return merchants for, specifying \"default\" will use the value in your api key.

try {
    $result = $apiInstance->listMerchantsRequest($clientid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationalFunctionsApi->listMerchantsRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientid** | **string**| The client id to return merchants for, specifying \&quot;default\&quot; will use the value in your api key. | |

### Return type

[**\CityPay\Model\ListMerchantsResponse**](../Model/ListMerchantsResponse.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pingRequest()`

```php
pingRequest($ping): \CityPay\Model\Acknowledgement
```

Ping Request

A ping request which performs a connection and authentication test to the CityPay API server. The request will return a standard Acknowledgement with a response code `044` to signify a successful ping.  The ping call is useful to confirm that you will be able to access  the API from behind any firewalls and that the permission model is granting access from your source.

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


$apiInstance = new CityPay\Api\OperationalFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ping = new \CityPay\Model\Ping(); // \CityPay\Model\Ping

try {
    $result = $apiInstance->pingRequest($ping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationalFunctionsApi->pingRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ping** | [**\CityPay\Model\Ping**](../Model/Ping.md)|  | |

### Return type

[**\CityPay\Model\Acknowledgement**](../Model/Acknowledgement.md)

### Authorization

[cp-domain-key](../../README.md#cp-domain-key), [cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `text/xml`
- **Accept**: `application/x-www-form-urlencoded`, `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
