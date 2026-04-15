# CityPay\PaymentIntentApi

All URIs are relative to https://api.citypay.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachTokenRequest()**](PaymentIntentApi.md#attachTokenRequest) | **POST** /v6/intent/attach | Attach a request to a Payment Intent |
| [**authorisePaymentIntent()**](PaymentIntentApi.md#authorisePaymentIntent) | **POST** /v6/intent/authorise | Authorise a Payment Intent |
| [**cancelPaymentIntent()**](PaymentIntentApi.md#cancelPaymentIntent) | **POST** /v6/intent/cancel | Cancel a Payment Intent |
| [**confirmChallengeIntent()**](PaymentIntentApi.md#confirmChallengeIntent) | **POST** /v6/intent/confirm-challenge | Confirms a challenge response with an aim to transition the payment intent ready for authorisation |
| [**confirmIntent()**](PaymentIntentApi.md#confirmIntent) | **POST** /v6/intent/confirm | Confirm a lock in consent to an intent for payment. Performs and initialises a 3-D secure authentication with an aim to transition the payment intent ready for authorisation |
| [**createPaymentIntent()**](PaymentIntentApi.md#createPaymentIntent) | **POST** /v6/intent/create | Create a Payment Intent |
| [**getPaymentIntent()**](PaymentIntentApi.md#getPaymentIntent) | **POST** /v6/intent/retrieve | Retrieves a Payment Intent |
| [**updatePaymentIntent()**](PaymentIntentApi.md#updatePaymentIntent) | **POST** /v6/intent/update | Update a Payment Intent |
| [**verifyIntentAuthorised()**](PaymentIntentApi.md#verifyIntentAuthorised) | **GET** /v6/intent/verify-auth | Retrieves the successfully authorisation for a payment intent |


## `attachTokenRequest()`

```php
attachTokenRequest($attach_token_request): \CityPay\Model\PaymentIntentReference
```

Attach a request to a Payment Intent

This endpoint allows a client to securely attach a previously tokenised card or vaulted payment method to a Payment Intent.
It validates the token, ensures client ownership, and associates the tokenised payment method with the intent for subsequent authorisation or confirmation steps.
This endpoint supports session-token–based authentication and is typically used in multi-step payment flows.


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
$attach_token_request = new \CityPay\Model\AttachTokenRequest(); // \CityPay\Model\AttachTokenRequest

try {
    $result = $apiInstance->attachTokenRequest($attach_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->attachTokenRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attach_token_request** | [**\CityPay\Model\AttachTokenRequest**](../Model/AttachTokenRequest.md)|  | |

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

## `authorisePaymentIntent()`

```php
authorisePaymentIntent($authorise_payment_intent_request_model): \CityPay\Model\AuthResponse
```

Authorise a Payment Intent

Request authorisation on an existing payment intent, ensuring that the intent is valid, correctly associated with the 
merchant, and ready for processing. It performs the necessary checks, prepares the underlying transaction request, 
and returns the outcome of the authorisation attempt, whether newly processed or already completed. Designed as part 
of the intent-based payment flow, it offers a clean, predictable mechanism for merchants to trigger authorisation at 
the appropriate stage without exposing internal processing details.


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
$authorise_payment_intent_request_model = new \CityPay\Model\AuthorisePaymentIntentRequestModel(); // \CityPay\Model\AuthorisePaymentIntentRequestModel

try {
    $result = $apiInstance->authorisePaymentIntent($authorise_payment_intent_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->authorisePaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorise_payment_intent_request_model** | [**\CityPay\Model\AuthorisePaymentIntentRequestModel**](../Model/AuthorisePaymentIntentRequestModel.md)|  | |

### Return type

[**\CityPay\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelPaymentIntent()`

```php
cancelPaymentIntent($cancel_payment_intent_request_model)
```

Cancel a Payment Intent

Cancels an existing Payment Intent. On success, the intent transitions to
the `cancelled` state.


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
$cancel_payment_intent_request_model = new \CityPay\Model\CancelPaymentIntentRequestModel(); // \CityPay\Model\CancelPaymentIntentRequestModel

try {
    $apiInstance->cancelPaymentIntent($cancel_payment_intent_request_model);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->cancelPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancel_payment_intent_request_model** | [**\CityPay\Model\CancelPaymentIntentRequestModel**](../Model/CancelPaymentIntentRequestModel.md)|  | |

### Return type

void (empty response body)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmChallengeIntent()`

```php
confirmChallengeIntent($confirm_challenged_intent_request): \CityPay\Model\ConfirmPaymentIntentResponseModel
```

Confirms a challenge response with an aim to transition the payment intent ready for authorisation

Used in payment element flows to confirm a challenge.

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
$confirm_challenged_intent_request = new \CityPay\Model\ConfirmChallengedIntentRequest(); // \CityPay\Model\ConfirmChallengedIntentRequest

try {
    $result = $apiInstance->confirmChallengeIntent($confirm_challenged_intent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->confirmChallengeIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **confirm_challenged_intent_request** | [**\CityPay\Model\ConfirmChallengedIntentRequest**](../Model/ConfirmChallengedIntentRequest.md)|  | |

### Return type

[**\CityPay\Model\ConfirmPaymentIntentResponseModel**](../Model/ConfirmPaymentIntentResponseModel.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmIntent()`

```php
confirmIntent($confirm_payment_intent_request): \CityPay\Model\ConfirmPaymentIntentResponseModel
```

Confirm a lock in consent to an intent for payment. Performs and initialises a 3-D secure authentication with an aim to transition the payment intent ready for authorisation

Confirms a payment intent and initiates/handles 3-D Secure (3DS) authentication for the attached payment method.

### Preconditions & validations
- Payment Intent exists, belongs to the merchant/client, and is confirmable.
- A vaulted payment method is attached, ACTIVE, owned by the same client, and successfully detokenised.
- Merchant and acquirer dataset resolved; 3DS service reachable.
- 3DS browser/requestor model present (request is rejected if missing).

### Typical client flow
1.Attach token to the intent (/v6/intent/attach).
2.Call ConfirmIntent with 3DS browser data.
3.If requires_customer_authentication: render challenge using acs_url + creq.
4.If requires_authorisation: call your Authorise endpoint.
5.If requires_payment_method: collect a new card/token and re-attach.


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
$confirm_payment_intent_request = new \CityPay\Model\ConfirmPaymentIntentRequest(); // \CityPay\Model\ConfirmPaymentIntentRequest

try {
    $result = $apiInstance->confirmIntent($confirm_payment_intent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->confirmIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **confirm_payment_intent_request** | [**\CityPay\Model\ConfirmPaymentIntentRequest**](../Model/ConfirmPaymentIntentRequest.md)|  | |

### Return type

[**\CityPay\Model\ConfirmPaymentIntentResponseModel**](../Model/ConfirmPaymentIntentResponseModel.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `updatePaymentIntent()`

```php
updatePaymentIntent($update_payment_intent_request): \CityPay\Model\Acknowledgement
```

Update a Payment Intent

`UpdatePaymentIntent` handles authenticated requests to update an existing payment intent by looking up the intent from its ID, verifying that
it exists and is still in a state that allows modification, and then applying any provided changes to the amount,
billing contact, and shipping contact. 

If the request is valid, it saves the updated intent and returns a simple success
acknowledgment; if the intent is missing, invalid, or no longer editable, the update is rejected with an appropriate
error.


### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CityPay\Api\PaymentIntentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_payment_intent_request = new \CityPay\Model\UpdatePaymentIntentRequest(); // \CityPay\Model\UpdatePaymentIntentRequest

try {
    $result = $apiInstance->updatePaymentIntent($update_payment_intent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->updatePaymentIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_payment_intent_request** | [**\CityPay\Model\UpdatePaymentIntentRequest**](../Model/UpdatePaymentIntentRequest.md)|  | |

### Return type

[**\CityPay\Model\Acknowledgement**](../Model/Acknowledgement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/xml`
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyIntentAuthorised()`

```php
verifyIntentAuthorised(): \CityPay\Model\AuthReference
```

Retrieves the successfully authorisation for a payment intent

Verifies whether a payment intent has been successfully authorised and, if so, returns the single accepted authorisation associated with that intent.

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

try {
    $result = $apiInstance->verifyIntentAuthorised();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentApi->verifyIntentAuthorised: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CityPay\Model\AuthReference**](../Model/AuthReference.md)

### Authorization

[cp-api-key](../../README.md#cp-api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
