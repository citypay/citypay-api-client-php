# CardTokenisationResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cp_card_token** | **string** | The tokenised card value. The token is encrypted with integrity checks and scoped to a client id only allowing for the card value to be used.  The value may be used up and until the expiry date of the card. |
**last4digits** | **string** | The last 4 digits of the card. | [optional]
**scheme** | **string** | The card scheme of the card. | [optional]
**scheme_logo** | **string** | The url of the logo card scheme of the card. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
