# # PaylinkAttachmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | base64 encoding of the file if less than 32kb in size. | [optional]
**filename** | **string** | The name of the attachment normally taken from the filename. You should not include the filename path as appropriate. |
**mime_type** | **string** | The mime type of the attachment as defined in [RFC 9110](https://www.rfc-editor.org/rfc/rfc9110.html). Currently only &#x60;application/pdf&#x60; is supported. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
