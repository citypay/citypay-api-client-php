# # RequestChallenged

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acs_url** | **string** | The url of the Access Control Server (ACS) to forward the user to. | [optional]
**creq** | **string** | The challenge request data which is encoded for usage by the ACS. | [optional]
**merchantid** | **int** | The merchant id that processed this transaction. | [optional]
**threedserver_trans_id** | **string** | The 3DSv2 trans id reference for the challenge process. May be used to create the ThreeDSSessionData value to send to the ACS. | [optional]
**transno** | **int** | The transaction number for the challenge, ordered incrementally from 1 for every merchant_id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
