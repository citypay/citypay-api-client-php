# # PaylinkBillPaymentTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addressee** | **string** | Who the bill payment request intended for. This should be a readable name such as a person or company. | [optional]
**attachments** | [**\CityPay\Model\PaylinkAttachmentRequest[]**](PaylinkAttachmentRequest.md) |  | [optional]
**descriptor** | **string** | A descriptor for the bill payment used to describe what the payment request is for for instance \&quot;Invoice\&quot;.  The descriptor can be used as descriptive text on emails or the payment page. For instance an invoice may have a button saying \&quot;View Invoice\&quot; or an email may say \&quot;to pay your Invoice online\&quot;. | [optional]
**due** | **\DateTime** | A date that the invoice is due. This can be displayed on the payment page. | [optional]
**email_notification_path** | [**\CityPay\Model\PaylinkEmailNotificationPath**](PaylinkEmailNotificationPath.md) |  | [optional]
**memo** | **string** | A memo that can be added to the payment page and email to provide to the customer. | [optional]
**request** | [**\CityPay\Model\PaylinkTokenRequestModel**](PaylinkTokenRequestModel.md) |  |
**sms_notification_path** | [**\CityPay\Model\PaylinkSMSNotificationPath**](PaylinkSMSNotificationPath.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
