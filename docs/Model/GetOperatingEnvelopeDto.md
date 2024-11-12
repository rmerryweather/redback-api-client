# GetOperatingEnvelopeDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Event Id. | [optional] 
**nmi** | **string** | Nmi | [optional] 
**site_id** | **string** | Site Id | [optional] 
**start_at_utc** | [**\DateTime**](\DateTime.md) | Start | 
**end_at_utc** | [**\DateTime**](\DateTime.md) | End | 
**max_import_power_w** | **int** | Max Import Power W | [optional] 
**max_export_power_w** | **int** | Max Export Power W | [optional] 
**max_discharge_power_w** | **int** | Max Discharge Power in W | [optional] 
**max_charge_power_w** | **int** | Max Charge Power in W | [optional] 
**max_generation_power_va** | **int** | Max Generation Power in VA | [optional] 
**is_network_level** | **bool** | True if the operating envelope is scheduled by the energy network | 
**reported_start_utc** | [**\DateTime**](\DateTime.md) | Reported time of when the operating envelope was applied | [optional] 
**reported_finish_utc** | [**\DateTime**](\DateTime.md) | Time when the operating envelope stopped being applied | [optional] 
**status** | [**\Swagger\Client\Model\OperatingEnvelopeStatus**](OperatingEnvelopeStatus.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

