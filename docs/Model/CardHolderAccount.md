# # CardHolderAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The account id of the card holder account provided by the merchant which uniquely identifies the account. |
**cards** | [**\CityPay\Model\Card[]**](Card.md) |  | [optional]
**contact** | [**\CityPay\Model\ContactDetails**](ContactDetails.md) |  |
**date_created** | [**\DateTime**](\DateTime.md) | The date and time the account was created. | [optional]
**default_card_id** | **string** | The id of the default card. | [optional]
**default_card_index** | **int** | The index in the array of the default card. | [optional]
**last_modified** | **\DateTime** | The date and time the account was last modified. | [optional]
**status** | **string** | Defines the status of the account for processing valid values are   - ACTIVE for active accounts that are able to process   - DISABLED for accounts that are currently disabled for processing. | [optional]
**unique_id** | **string** | A unique id of the card holder account which uniquely identifies the stored account. This value is not searchable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
