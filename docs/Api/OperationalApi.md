# CityPay\OperationalApi

All URIs are relative to https://api.citypay.com/v6.

Method | HTTP request | Description
------------- | ------------- | -------------
[**aclCheckRequest()**](OperationalApi.md#aclCheckRequest) | **POST** /acl/check | ACL Check Request
[**listMerchantsRequest()**](OperationalApi.md#listMerchantsRequest) | **GET** /merchants/{clientid} | List Merchants Request
[**pingRequest()**](OperationalApi.md#pingRequest) | **POST** /ping | Ping Request


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


$apiInstance = new CityPay\Api\OperationalApi(
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
    echo 'Exception when calling OperationalApi->aclCheckRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acl_check_request** | [**\CityPay\Model\AclCheckRequest**](../Model/AclCheckRequest.md)|  |

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


$apiInstance = new CityPay\Api\OperationalApi(
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
    echo 'Exception when calling OperationalApi->listMerchantsRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientid** | **string**| The client id to return merchants for, specifying \&quot;default\&quot; will use the value in your api key. |

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


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\OperationalApi(
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
    echo 'Exception when calling OperationalApi->pingRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ping** | [**\CityPay\Model\Ping**](../Model/Ping.md)|  |

### Return type

[**\CityPay\Model\Acknowledgement**](../Model/Acknowledgement.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
