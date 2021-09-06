# # AirlineSegment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arrival_location_code** | **string** | A standard airline routing code (airport code or location identifier) applicable to the arrival portion of this segment. |
**carrier_code** | **string** | This field contains the two character airline designator code (air carrier code or airline code) that corresponds to the airline carrier applicable for up to four flight segments of this trip itinerary. |
**class_service_code** | **string** | This field contains a code that corresponds to the fare class (A, B, C, D, Premium, Discounted, etc.) within the overall class of service (e.g., First Class, Business, Economy) applicable to this travel segment, as specified in the IATA Standard Code allocation table. |
**departure_date** | [**\DateTime**](\DateTime.md) | The Departure Date for the travel segment in ISO Date Format (yyyy-MM-dd). |
**departure_location_code** | **string** | A standard airline routing code (airport code or location identifier) applicable to the departure portion of this segment. | [optional]
**flight_number** | **string** | This field contains the carrier-assigned Flight Number for this travel segment. |
**segment_fare** | **int** | This field contains the total Fare for this travel segment. | [optional]
**stop_over_indicator** | **string** | O &#x3D; Stopover allowed, X &#x3D; Stopover not allowed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
