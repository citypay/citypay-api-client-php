# ChallengeModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acs_url** | **string** | A url to connect to for authentication. | [optional]
**authentication_result** | **string** | The result of authentication. |
**challenge_window_size** | **string** | A string representing the desired challenge window size. Acceptable values are: &#39;01&#39; - Dimensions: 250px width by 400px height. &#39;02&#39; - Dimensions: 390px width by 400px height. &#39;03&#39; - Dimensions: 500px width by 600px height. &#39;04&#39; - Dimensions: 600px width by 400px height. &#39;05&#39; - Fullscreen window (100% width and height). Any other value defaults to &#39;03&#39;, returning dimensions of 500px by 600px. | [optional]
**creq** | **string** | A challenge request packet to submit to the ACS URL. | [optional]
**three_ds_server_trans_id** | **string** | The 3DSS transaction id. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
