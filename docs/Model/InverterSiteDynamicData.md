# InverterSiteDynamicData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp_utc** | [**\DateTime**](\DateTime.md) | Gets the timestamp of the data in ISO 8601 format. | 
**site_id** | **string** | Site Id | [optional] 
**phases** | [**\Swagger\Client\Model\Phase[]**](Phase.md) | Gets phase information | [optional] 
**frequency_instantaneous_hz** | **float** | Gets frequency | [optional] 
**battery_so_c_instantaneous0to1** | **float** | Gets Battery state of charge as a value between 0 an 1 | [optional] 
**pv_power_instantaneousk_w** | **float** | Gets power from PV | [optional] 
**inverter_temperature_c** | **float** | Gets inverter&#x27;s temperature in degrees Celsius | [optional] 
**battery_power_negative_is_chargingk_w** | **float** | Gets Battery power with negative meaning charging. Unit: Kilowatt | [optional] 
**pv_all_time_energyk_wh** | **float** | Gets total energy from PV. Unit: Kilowatt-hour Normally this value always grows, but this is not guaranteed. The value may be reset and the client code must be able to deal with this. | [optional] 
**export_all_time_energyk_wh** | **float** | Gets total energy to grid. Unit: Kilowatt-hour Normally this value always grows, but this is not guaranteed. The value may be reset and the client code must be able to deal with this. | [optional] 
**import_all_time_energyk_wh** | **float** | Gets total energy from grid. Unit: Kilowatt-hour Normally this value always grows, but this is not guaranteed. The value may be reset and the client code must be able to deal with this. | [optional] 
**load_all_time_energyk_wh** | **float** | Gets cumulative total load. Unit: Kilowatt-hour Normally this value always grows, but this is not guaranteed. The value may be reset and the client code must be able to deal with this. | [optional] 
**status** | **AllOfInverterSiteDynamicDataStatus** | Site status | 
**inverters** | [**\Swagger\Client\Model\InverterSiteDynamicDataSingleInverter[]**](InverterSiteDynamicDataSingleInverter.md) | Inverters | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

