# # CheckoutContextCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | The shopper or merchant country used for wallet configuration. Defaults from merchant acquiring data when omitted. | [optional]
**currency** | **string** | The currency expected for wallet and element configuration. Defaults to the merchant currency when omitted. | [optional]
**merchantid** | **int** | The merchant account to bind to the checkout context. |
**origin** | **string** | The browser origin that will use the checkout context. |
**requested_capabilities** | **string[]** |  | [optional]
**ttl** | **int** | Requested context lifetime in seconds. Defaults to the profile value and is capped by the profile maximum. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
