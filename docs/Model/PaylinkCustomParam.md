# # PaylinkCustomParam

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_mode** | **string** | The type of entry mode. A value of &#39;pre&#39; will pre-render the custom parameter before the payment screen. Any other value will result in the custom parameter being displayed on the payment screen. | [optional]
**field_type** | **string** | the type of html5 field, defaults to &#39;text&#39;. Other options are &#39;dob&#39; for a date of birth series of select list entry. | [optional]
**group** | **string** | a group the parameter is linked with, allows for grouping with a title. | [optional]
**label** | **string** | a label to show alongside the input. | [optional]
**locked** | **bool** | whether the parameter is locked from entry. | [optional]
**name** | **string** | the name of the custom parameter used to converse with the submitter. |
**order** | **int** | an index order for the parameter. | [optional]
**pattern** | **string** | a regex pattern to validate the custom parameter with. | [optional]
**placeholder** | **string** | a placehold value to display in the input. | [optional]
**required** | **bool** | whether the field is required. | [optional]
**value** | **string** | a default value for the field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
