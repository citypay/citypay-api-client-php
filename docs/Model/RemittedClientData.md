# # RemittedClientData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batches** | [**\CityPay\Model\MerchantBatchResponse[]**](MerchantBatchResponse.md) |  |
**clientid** | **string** | The client id that the remittance data is for. | [optional]
**date** | **\DateTime** | The date of the remittance. | [optional]
**date_created** | **\DateTime** | The date time that the remittance was created. | [optional]
**net_amount** | **int** | Represents the net amount after accounting for refunds. This is calculated as SalesAmount - RefundAmount and expressed in the smallest currency unit. | [optional]
**processed_amount** | **int** | The total monetary amount processed consisting of sale and refund transactions. | [optional]
**processed_count** | **int** | Indicates the total number of sales and refund transactions that occurred. This count provides insight into the volume of processing. | [optional]
**refund_amount** | **int** | The total amount refunded to customers. | [optional]
**refund_count** | **int** | The total number of refund transactions processed. This figure helps in understanding the frequency of refunds relative to sales. | [optional]
**remittances** | [**\CityPay\Model\RemittanceData[]**](RemittanceData.md) |  |
**sales_amount** | **int** | The total monetary amount of sales transactions. | [optional]
**sales_count** | **int** | Indicates the total number of sales transactions that occurred. This count provides insight into the volume of sales. | [optional]
**settlement_implementation** | **string** | The name of the implementation. | [optional]
**uuid** | **string** | The uuid of the settlement file processed on. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
