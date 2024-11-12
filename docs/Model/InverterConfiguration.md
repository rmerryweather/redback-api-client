# InverterConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**site_id** | **string** | Site id | [optional] 
**nmi** | **string** | National Metering Identifier | [optional] 
**serial_number** | **string** | Serial Number | [optional] 
**generation_hard_limit_va** | **float** | Gets generation hard limit. Unit: volt amps | [optional] 
**generation_soft_limit_va** | **float** | Gets generation soft limit. Unit: volt amps | [optional] 
**export_hard_limitk_w** | **float** | Gets export hard limit. Unit: kilowatt | [optional] 
**export_soft_limitk_w** | **float** | Gets export soft limit. Unit: kilowatt | [optional] 
**site_export_limitk_w** | **float** | Gets site export limit. Unit: kilowatt | [optional] 
**battery_max_charge_powerk_w** | **float** | Gets the static &#x27;nominal&#x27; maximum charge power theoretically supported by the site&#x27;s inverter and batteries. The actual \&quot;at this point in time\&quot; value may be lower. Unit: kilowatt | [optional] 
**battery_max_discharge_powerk_w** | **float** | Gets the static &#x27;nominal&#x27; maximum discharge power theoretically supported by the site&#x27;s inverter and batteries. The actual \&quot;at this point in time\&quot; value may be lower. Unit: kilowatt | [optional] 
**battery_capacityk_wh** | **float** | Gets the size of the batteries.  Unit: kilowatthour | [optional] 
**usable_battery_capacityk_wh** | **float** | Gets the usable static nominal energy of the batteries. It is BatteryCapacitykWh x (1 - Nominal Min SoC). The actual \&quot;at this point in time\&quot; value may be lower and will be affected by the current SoC and by the &#x27;reserve&#x27; Min SoC, which is usually higher than Battery Nominal Min SoC Unit: kilowatthour | [optional] 
**system_type** | **string** | Gets System type | [optional] 
**inverter_max_export_powerk_w** | **float** | Gets the static &#x27;nominal&#x27; maximum export power. The actual \&quot;at this point in time\&quot; value may be lower, affected, for example by site export limit. Unit: kilowatt | [optional] 
**inverter_max_import_powerk_w** | **float** | Gets the static &#x27;nominal&#x27; maximum input power. The actual \&quot;at this point in time\&quot; value may be lower. Unit: kilowatt | [optional] 
**min_so_c0to1** | **float** | Gets the current &#x27;reserve&#x27; minimum SoC Unit: no unit, 0 to 1 | [optional] 
**min_offgrid_so_c0to1** | **float** | Gets the current &#x27;reserve&#x27; minimum offgrid SoC Unit: no unit, 0 to 1 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

