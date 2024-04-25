# # PaylinkTokenCreated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\CityPay\Model\PaylinkAttachmentResult**](PaylinkAttachmentResult.md) |  | [optional]
**bps** | **string** | true if BPS has been enabled on this token. | [optional]
**date_created** | **\DateTime** | Date and time the token was generated. | [optional]
**errors** | [**\CityPay\Model\PaylinkErrorCode[]**](PaylinkErrorCode.md) |  | [optional]
**id** | **string** | A unique id of the request. |
**identifier** | **string** | The identifier as presented in the TokenRequest. | [optional]
**mode** | **string** | Determines whether the token is &#x60;live&#x60; or &#x60;test&#x60;. | [optional]
**qrcode** | **string** | A URL of a qrcode which can be used to refer to the token URL. | [optional]
**result** | **int** | The result field contains the result for the Paylink Token Request. 0 - indicates that an error was encountered while creating the token. 1 - which indicates that a Token was successfully created. |
**server_version** | **string** | the version of the server performing the call. | [optional]
**source** | **string** | The incoming IP address of the call. | [optional]
**token** | **string** | A token generated for the request used to refer to the transaction in consequential calls. |
**url** | **string** | The Paylink token URL used to checkout by the card holder. | [optional]
**usc** | **string** | A UrlShortCode (USC) used for short links. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
