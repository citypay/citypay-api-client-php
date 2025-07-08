# # PaymentIntentResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustments** | [**\CityPay\Model\Adjustments**](Adjustments.md) |  | [optional]
**amount** | **int** | An amount of the intent. | [optional]
**created** | **\DateTime** | A date time of when the intent was created. | [optional]
**currency** | **string** | The currency of the intent. | [optional]
**due** | **\DateTime** | A due date of the intent. | [optional]
**expires** | **\DateTime** | An expiration date of the intent. | [optional]
**external_ref** | **string** | An external reference of the intent. | [optional]
**external_ref_source** | **string** | An external reference source of the intent. | [optional]
**identifier** | **string** | An identifier of the intent. |
**intent_status** | **string** | A status of the intent such as &#x60;unknown&#x60;, &#x60;open&#x60;, &#x60;requires_payment_method&#x60;, &#x60;requires_confirmation&#x60;, &#x60;requires_confirmation&#x60;, &#x60;requires_action&#x60;, &#x60;processing&#x60;, &#x60;succeeded&#x60;, &#x60;cancelled&#x60;, &#x60;requires_capture&#x60;, &#x60;failed&#x60;, &#x60;expired&#x60;, &#x60;requires_refund&#x60;, &#x60;refunded&#x60;. | [optional]
**merchantid** | **int** | The merchant id of the intent. |
**payment_type** | **string** | A type of the intent such as &#x60;None&#x60;, &#x60;Single&#x60;, &#x60;Subscription&#x60;. | [optional]
**payment_intent_id** | **string** | The id of the intent. |
**transactions** | [**\CityPay\Model\AuthReference**](AuthReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
