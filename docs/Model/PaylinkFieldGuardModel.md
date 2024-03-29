# # PaylinkFieldGuardModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field_type** | **string** | A type of HTML element that should be displayed such as text, password, url. Any HTML5 input type value may be supplied.  If a value of &#x60;date&#x60; is supplied the value format should be an ISO format YYYY-MM-DD format date i.e. 2024-03-01 If a value of &#x60;datetime-local&#x60; is supplied, the value format should be an ISO format YYYY-MM-DDTHH:mm i.e. 2024-06-01T19:30. | [optional]
**label** | **string** | A label for the field guard to display on the authentication page. | [optional]
**maxlen** | **int** | A maximum length of any value supplied in the field guard form. Used for validating entry. | [optional]
**minlen** | **int** | A minimum length of any value supplied in the field guard form. Used for validating entry. | [optional]
**name** | **string** | A field name which is used to refer to a field which is guarded. | [optional]
**regex** | **string** | A JavaScript regular expression value which can be used to validate the data provided in the field guard entry form. Used for validating entry. | [optional]
**value** | **string** | A value directly associated with the field guard. Any value provided at this level will be considered as sensitive and not logged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
