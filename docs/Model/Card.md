# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bin_commercial** | **bool** | Defines whether the card is a commercial card. | [optional]
**bin_corporate** | **bool** | Defines whether the card is a corporate business card. | [optional]
**bin_country_issued** | **string** | The determined country where the card was issued. | [optional]
**bin_credit** | **bool** | Defines whether the card is a credit card. | [optional]
**bin_currency** | **string** | The default currency determined for the card. | [optional]
**bin_debit** | **bool** | Defines whether the card is a debit card. | [optional]
**bin_description** | **string** | A description of the bin on the card to identify what type of product the card is. | [optional]
**bin_eu** | **bool** | Defines whether the card is regulated within the EU. | [optional]
**card_id** | **string** | The id of the card that is returned. Should be used for referencing the card when perform any changes. | [optional]
**card_status** | **string** | The status of the card such, valid values are   - ACTIVE the card is active for processing   - INACTIVE the card is not active for processing   - EXPIRED for cards that have passed their expiry date. | [optional]
**date_created** | [**\DateTime**](\DateTime.md) | The date time of when the card was created. | [optional]
**default** | **bool** | Determines if the card is the default card for the account and should be regarded as the first option to be used for processing. | [optional]
**expmonth** | **int** | The expiry month of the card. | [optional]
**expyear** | **int** | The expiry year of the card. | [optional]
**label** | **string** | A label which identifies this card. | [optional]
**label2** | **string** | A label which also provides the expiry date of the card. | [optional]
**last4digits** | **string** | The last 4 digits of the card to aid in identification. | [optional]
**scheme** | **string** | The scheme that issued the card. | [optional]
**token** | **string** | A token that can be used to process against the card. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
