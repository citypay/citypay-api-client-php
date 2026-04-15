# ErrorResp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Error code. |
**message** | **string** | Human-friendly message. |
**retriable** | **string** | Whether the client may safely retry confirm(). If &#x60;true&#x60; - The merchant/customer can safely retry the same intent/card without user confusion or double-spend risk. If &#x60;false&#x60; retrying the same flow will almost certainly fail again; you need to pick a new card or start a new attempt. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
