# CreateOperatingEnvelopeWithGroupRequestDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Event Id. It may be shared between operating envelopes.   Maximum length: 128 characters. | [optional] 
**start_at_utc** | [**\DateTime**](\DateTime.md) | Start | [optional] 
**end_at_utc** | [**\DateTime**](\DateTime.md) | End | [optional] 
**max_import_power_w** | **int** | Max Import Power W | [optional] 
**max_export_power_w** | **int** | Max Export Power W | [optional] 
**max_discharge_power_w** | **int** | Max Discharge Power in W | [optional] 
**max_charge_power_w** | **int** | Max Charge Power in W | [optional] 
**max_generation_power_va** | **int** | Max Generation Power in VA | [optional] 
**group** | **string** | Group | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

