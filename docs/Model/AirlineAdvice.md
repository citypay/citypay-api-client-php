# # AirlineAdvice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_name** | **string** | The name of the airline carrier that generated the tickets for airline travel. |
**conjunction_ticket_indicator** | **bool** | true if a conjunction ticket (with additional coupons) was issued for an itinerary with more than four segments. Defaults to false. | [optional]
**eticket_indicator** | **bool** | The Electronic Ticket Indicator, a code that indicates if an electronic ticket was issued.  Defaults to true. | [optional]
**no_air_segments** | **int** | A value that indicates the number of air travel segments included on this ticket.  Valid entries include the numerals “0” through “4”. Required only if the transaction type is TKT or EXC. | [optional]
**number_in_party** | **int** | The number of people in the party. |
**original_ticket_no** | **string** | Required if transaction type is EXC. | [optional]
**passenger_name** | **string** | The name of the passenger when the traveller is not the card member that purchased the ticket. Required only if the transaction type is TKT or EXC. | [optional]
**segment1** | [**\CityPay\Model\AirlineSegment**](AirlineSegment.md) |  |
**segment2** | [**\CityPay\Model\AirlineSegment**](AirlineSegment.md) |  | [optional]
**segment3** | [**\CityPay\Model\AirlineSegment**](AirlineSegment.md) |  | [optional]
**segment4** | [**\CityPay\Model\AirlineSegment**](AirlineSegment.md) |  | [optional]
**ticket_issue_city** | **string** | The name of the city town or village where the transaction took place. |
**ticket_issue_date** | [**\DateTime**](\DateTime.md) | The date the ticket was issued in ISO Date format (yyyy-MM-dd). |
**ticket_issue_name** | **string** | The name of the agency generating the ticket. |
**ticket_no** | **string** | This must be a valid ticket number, i.e. numeric (the first 3 digits must represent the valid IATA plate carrier code). The final check digit should be validated prior to submission. On credit charges, this field should contain the number of the original ticket, and not of a replacement. |
**transaction_type** | **string** | This field contains the Transaction Type code assigned to this transaction. Valid codes include:   - &#x60;TKT&#x60; &#x3D; Ticket Purchase   - &#x60;REF&#x60; &#x3D; Refund   - &#x60;EXC&#x60; &#x3D; Exchange Ticket   - &#x60;MSC&#x60; &#x3D; Miscellaneous (non-Ticket Purchase- and non-Exchange Ticket-related transactions only). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
