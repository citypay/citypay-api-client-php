# RecurringIntent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | The number of occurrences. Required for instalments and optional for subscriptions. | [optional]
**end_date** | **\DateTime** | The date on which the recurring agreement expires. Maps to &#x60;recurringExpiry&#x60;. | [optional]
**fixed_amount** | **bool** | Whether the amount is fixed across recurrences. Maps to &#x60;recurringInd.amountInd&#x60;. | [optional]
**fixed_schedule** | **bool** | Whether the recurrence schedule is fixed. Maps to &#x60;recurringInd.frequencyInd&#x60;. | [optional]
**interval_days** | **int** | The recurring interval in days. Maps to &#x60;recurringFrequency&#x60;. | [optional]
**next_date** | **\DateTime** | The next scheduled collection date. Maps to &#x60;recurringDate&#x60;. | [optional]
**recurring_amount** | **int** | An optional recurring amount in minor units, used when the schedule stores an explicit future amount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
