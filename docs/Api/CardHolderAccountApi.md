# CityPay\CardHolderAccountApi

All URIs are relative to https://api.citypay.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountCardDeleteRequest()**](CardHolderAccountApi.md#accountCardDeleteRequest) | **DELETE** /v6/account/{accountid}/card/{cardId} | Card Deletion |
| [**accountCardRegisterRequest()**](CardHolderAccountApi.md#accountCardRegisterRequest) | **POST** /v6/account/{accountid}/register | Card Registration |
| [**accountCardStatusRequest()**](CardHolderAccountApi.md#accountCardStatusRequest) | **POST** /v6/account/{accountid}/card/{cardId}/status | Card Status |
| [**accountChangeContactRequest()**](CardHolderAccountApi.md#accountChangeContactRequest) | **POST** /v6/account/{accountid}/contact | Contact Details Update |
| [**accountCreate()**](CardHolderAccountApi.md#accountCreate) | **POST** /v6/account/create | Account Create |
| [**accountDeleteRequest()**](CardHolderAccountApi.md#accountDeleteRequest) | **DELETE** /v6/account/{accountid} | Account Deletion |
| [**accountExistsRequest()**](CardHolderAccountApi.md#accountExistsRequest) | **GET** /v6/account-exists/{accountid} | Account Exists |
| [**accountRetrieveRequest()**](CardHolderAccountApi.md#accountRetrieveRequest) | **GET** /v6/account/{accountid} | Account Retrieval |
| [**accountStatusRequest()**](CardHolderAccountApi.md#accountStatusRequest) | **POST** /v6/account/{accountid}/status | Account Status |
| [**chargeRequest()**](CardHolderAccountApi.md#chargeRequest) | **POST** /v6/charge | Charge |


## `accountCardDeleteRequest()`

```php
accountCardDeleteRequest($accountid, $card_id, $force): \CityPay\Model\Acknowledgement
```

Card Deletion

Deletes a card from the account. The card will be marked for deletion before a subsequent purge will clear the card permanently.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountid = 'accountid_example'; // string | The account id that refers to the customer's account no. This value will have been provided when setting up the card holder account.
$card_id = 'card_id_example'; // string | The id of the card that is presented by a call to retrieve a card holder account.
$force = True; // bool | Requests that the item is forced immediately.

try {
    $result = $apiInstance->accountCardDeleteRequest($accountid, $card_id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountCardDeleteRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountid** | **string**| The account id that refers to the customer&#39;s account no. This value will have been provided when setting up the card holder account. | |
| **card_id** | **string**| The id of the card that is presented by a call to retrieve a card holder account. | |
| **force** | **bool**| Requests that the item is forced immediately. | [optional] |

### Return type

[**\CityPay\Model\Acknowledgement**](../Model/Acknowledgement.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountCardRegisterRequest()`

```php
accountCardRegisterRequest($accountid, $register_card): \CityPay\Model\CardHolderAccount
```

Card Registration

Allows for a card to be registered for the account. The card will be added for future  processing and will be available as a tokenised value for future processing.  The card will be validated for  0. Being a valid card number (luhn check) 0. Having a valid expiry date 0. Being a valid bin value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountid = 'accountid_example'; // string | The account id that refers to the customer's account no. This value will have been provided when setting up the card holder account.
$register_card = new \CityPay\Model\RegisterCard(); // \CityPay\Model\RegisterCard

try {
    $result = $apiInstance->accountCardRegisterRequest($accountid, $register_card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountCardRegisterRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountid** | **string**| The account id that refers to the customer&#39;s account no. This value will have been provided when setting up the card holder account. | |
| **register_card** | [**\CityPay\Model\RegisterCard**](../Model/RegisterCard.md)|  | |

### Return type

[**\CityPay\Model\CardHolderAccount**](../Model/CardHolderAccount.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountCardStatusRequest()`

```php
accountCardStatusRequest($accountid, $card_id, $card_status): \CityPay\Model\Acknowledgement
```

Card Status

Updates the status of a card for processing. The following values are available  | Status | Description |  |--------|-------------| | Active | The card is active for processing and can be used for charging against with a valid token | | Inactive | The card is inactive for processing and cannot be used for processing, it will require reactivation before being used to charge | | Expired | The card has expired either due to the expiry date no longer being valid or due to a replacement card being issued |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountid = 'accountid_example'; // string | The account id that refers to the customer's account no. This value will have been provided when setting up the card holder account.
$card_id = 'card_id_example'; // string | The id of the card that is presented by a call to retrieve a card holder account.
$card_status = new \CityPay\Model\CardStatus(); // \CityPay\Model\CardStatus

try {
    $result = $apiInstance->accountCardStatusRequest($accountid, $card_id, $card_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountCardStatusRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountid** | **string**| The account id that refers to the customer&#39;s account no. This value will have been provided when setting up the card holder account. | |
| **card_id** | **string**| The id of the card that is presented by a call to retrieve a card holder account. | |
| **card_status** | [**\CityPay\Model\CardStatus**](../Model/CardStatus.md)|  | |

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

## `accountChangeContactRequest()`

```php
accountChangeContactRequest($accountid, $contact_details): \CityPay\Model\CardHolderAccount
```

Contact Details Update

Allows for the ability to change the contact details for an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountid = 'accountid_example'; // string | The account id that refers to the customer's account no. This value will have been provided when setting up the card holder account.
$contact_details = new \CityPay\Model\ContactDetails(); // \CityPay\Model\ContactDetails

try {
    $result = $apiInstance->accountChangeContactRequest($accountid, $contact_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountChangeContactRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountid** | **string**| The account id that refers to the customer&#39;s account no. This value will have been provided when setting up the card holder account. | |
| **contact_details** | [**\CityPay\Model\ContactDetails**](../Model/ContactDetails.md)|  | |

### Return type

[**\CityPay\Model\CardHolderAccount**](../Model/CardHolderAccount.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountCreate()`

```php
accountCreate($account_create): \CityPay\Model\CardHolderAccount
```

Account Create

Creates a new card holder account and initialises the account ready for adding cards.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_create = new \CityPay\Model\AccountCreate(); // \CityPay\Model\AccountCreate

try {
    $result = $apiInstance->accountCreate($account_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_create** | [**\CityPay\Model\AccountCreate**](../Model/AccountCreate.md)|  | |

### Return type

[**\CityPay\Model\CardHolderAccount**](../Model/CardHolderAccount.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountDeleteRequest()`

```php
accountDeleteRequest($accountid): \CityPay\Model\Acknowledgement
```

Account Deletion

Allows for the deletion of an account. The account will marked for deletion and subsequent purging. No further transactions will be alowed to be processed or actioned against this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountid = 'accountid_example'; // string | The account id that refers to the customer's account no. This value will have been provided when setting up the card holder account.

try {
    $result = $apiInstance->accountDeleteRequest($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountDeleteRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountid** | **string**| The account id that refers to the customer&#39;s account no. This value will have been provided when setting up the card holder account. | |

### Return type

[**\CityPay\Model\Acknowledgement**](../Model/Acknowledgement.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountExistsRequest()`

```php
accountExistsRequest($accountid): \CityPay\Model\Exists
```

Account Exists

Checks that an account exists and is active by providing the account id as a url parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountid = 'accountid_example'; // string | The account id that refers to the customer's account no. This value will have been provided when setting up the card holder account.

try {
    $result = $apiInstance->accountExistsRequest($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountExistsRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountid** | **string**| The account id that refers to the customer&#39;s account no. This value will have been provided when setting up the card holder account. | |

### Return type

[**\CityPay\Model\Exists**](../Model/Exists.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountRetrieveRequest()`

```php
accountRetrieveRequest($accountid): \CityPay\Model\CardHolderAccount
```

Account Retrieval

Allows for the retrieval of a card holder account for the given `id`. Should duplicate accounts exist for the same `id`, the first account created with that `id` will be returned.  The account can be used for tokenisation processing by listing all cards assigned to the account. The returned cards will include all `active`, `inactive` and `expired` cards. This can be used to  enable a card holder to view their wallet and make constructive choices on which card to use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountid = 'accountid_example'; // string | The account id that refers to the customer's account no. This value will have been provided when setting up the card holder account.

try {
    $result = $apiInstance->accountRetrieveRequest($accountid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountRetrieveRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountid** | **string**| The account id that refers to the customer&#39;s account no. This value will have been provided when setting up the card holder account. | |

### Return type

[**\CityPay\Model\CardHolderAccount**](../Model/CardHolderAccount.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountStatusRequest()`

```php
accountStatusRequest($accountid, $account_status): \CityPay\Model\Acknowledgement
```

Account Status

Updates the status of an account. An account can have the following statuses applied  | Status | Description | |--------|-------------| | Active | The account is active for processing | | Disabled | The account has been disabled and cannot be used for processing. The account will require reactivation to continue procesing |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountid = 'accountid_example'; // string | The account id that refers to the customer's account no. This value will have been provided when setting up the card holder account.
$account_status = new \CityPay\Model\AccountStatus(); // \CityPay\Model\AccountStatus

try {
    $result = $apiInstance->accountStatusRequest($accountid, $account_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->accountStatusRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountid** | **string**| The account id that refers to the customer&#39;s account no. This value will have been provided when setting up the card holder account. | |
| **account_status** | [**\CityPay\Model\AccountStatus**](../Model/AccountStatus.md)|  | |

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

## `chargeRequest()`

```php
chargeRequest($charge_request): \CityPay\Model\Decision
```

Charge

A charge process obtains an authorisation using a tokenised value which represents a stored card  on a card holder account.  A card must previously be registered by calling `/account-register-card` with the card details  or retrieved using `/account-retrieve`  Tokens are generated whenever a previously registered list of cards are retrieved. Each token has, by design a  relatively short time to live of 30 minutes. This is both to safe guard the merchant and card holder from  replay attacks. Tokens are also restricted to your account, preventing malicious actors from stealing details for use elsewhere.    If a token is reused after it has expired it will be rejected and a new token will be required.   Tokenisation can be used for   - repeat authorisations on a previously stored card - easy authorisations just requiring CSC values to be entered - can be used for credential on file style payments - can require full 3-D Secure authentication to retain the liability shift - wallet style usage    _Should an account be used with 3DSv2, the card holder name should also be stored alongside the card as this is a required field with both Visa and MasterCard for risk analysis._.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cp-api-key
$config = CityPay\Configuration::getDefaultConfiguration()->setApiKey('cp-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CityPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('cp-api-key', 'Bearer');


$apiInstance = new CityPay\Api\CardHolderAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_request = new \CityPay\Model\ChargeRequest(); // \CityPay\Model\ChargeRequest

try {
    $result = $apiInstance->chargeRequest($charge_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardHolderAccountApi->chargeRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **charge_request** | [**\CityPay\Model\ChargeRequest**](../Model/ChargeRequest.md)|  | |

### Return type

[**\CityPay\Model\Decision**](../Model/Decision.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
