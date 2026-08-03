# # CheckoutContextReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**capabilities** | [**\CityPay\Model\CheckoutContextCapabilities**](CheckoutContextCapabilities.md) |  | [optional]
**card_schemes** | **int** | The card schemes available for the MID associated with this checkout context. | [optional]
**checkout_context_id** | **string** | The opaque identifier for the checkout context. |
**country** | **string** | The country included in wallet configuration. |
**currency** | **string** | The currency included in wallet configuration. |
**exp** | **int** | The checkout context expiry as a UTC epoch millisecond value. |
**licenced_services** | **int** | The payment services available for the MID associated with this checkout context. | [optional]
**merchantid** | **int** | The merchant account bound to the checkout context. |
**opaque_key** | **string** | A random context secret bound to the signed session token. |
**origin** | **string** | The browser origin bound to the checkout context. |
**public_key** | **string** | The public key derived from the authenticated CityPay licence key. |
**session_token** | **string** | A signed token that authorises frontend SDK operations for this checkout context. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
