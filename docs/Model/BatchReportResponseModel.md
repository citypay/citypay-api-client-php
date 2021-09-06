# # BatchReportResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The batch account id that the batch was processed with. |
**amount** | **int** | The total amount that the batch contains. |
**batch_date** | [**\DateTime**](\DateTime.md) | The date and time of the batch in ISO-8601 format. |
**batch_id** | **int** | The batch id specified in the batch processing request. |
**batch_status** | **string** | The status of the batch. Possible values are. |
**transactions** | [**\CityPay\Model\BatchTransactionResultModel[]**](BatchTransactionResultModel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
