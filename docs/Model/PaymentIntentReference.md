# PaymentIntentReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_schemes** | **int** | The card schemes available for the MID associated with this intent. | [optional]
**context** | [**\CityPay\Model\PaymentIntentSessionContext**](PaymentIntentSessionContext.md) |  | [optional]
**exp** | **int** | The expiry date as a UTC value of the session token. | [optional]
**licenced_services** | **int** | The payment services available for the MID associated with this intent. | [optional]
**opaque_key** | **string** | A random per-intent secret that binds to the session token. Used internally for verification. Must not be persisted or logged. |
**payment_intent_id** | **string** | The unique identifier of the payment intent (e.g. pi_342318746218974623). Used to reference this payment throughout its lifecycle. |
**session_token** | **string** | A signed, short-lived token (client secret) used by the frontend SDK for authorised actions (e.g. tokenisation, confirm). Should be sent as a Bearer token in headers. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
