# # AuthReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | The amount of the transaction in decimal currency format. | [optional] 
**amount_value** | **int** | The amount of the transaction in integer/request format. | [optional] 
**atrn** | **string** | A reference number provided by the acquiring services. | [optional] 
**authcode** | **string** | The authorisation code of the transaction returned by the acquirer or card issuer. | [optional] 
**batchno** | **string** | A batch number which the transaction has been end of day batched towards. | [optional] 
**currency** | **string** | The currency of the transaction in ISO 4217 code format. | [optional] 
**datetime** | [**\DateTime**](\DateTime.md) | The date and time of the transaction. | [optional] 
**identifier** | **string** | The identifier of the transaction used to process the transaction. | [optional] 
**maskedpan** | **string** | A masking of the card number which was used to process the tranasction. | [optional] 
**merchantid** | **int** | The merchant id of the transaction result. | [optional] 
**result** | **string** | The result of the transaction. | [optional] 
**trans_status** | **string** | The current status of the transaction through it&#39;s lifecycle. | [optional] 
**trans_type** | **string** | The type of transaction that was processed. | [optional] 
**transno** | **int** | The transaction number of the transaction. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


