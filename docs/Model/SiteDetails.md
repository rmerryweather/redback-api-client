# SiteDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**generation_hard_limit_va** | **float** | Gets generation hard limit. Unit: volt amps | [optional] 
**generation_soft_limit_va** | **float** | Gets generation soft limit. Unit: volt amps | [optional] 
**export_hard_limitk_w** | **float** | Gets export hard limit. Unit: kilowatt | [optional] 
**export_hard_limit_w** | **float** | [Deprecated] Gets export hard limit. Despite the name the unit is kilowatt. ExportHardLimitkW | [optional] 
**export_soft_limitk_w** | **float** | Gets export soft limit. Unit: kilowatt | [optional] 
**export_soft_limit_w** | **float** | [Deprecated] Gets export soft limit. Despite the name the unit is kilowatt. ExportSoftLimitkW | [optional] 
**site_export_limitk_w** | **float** | Gets site export limit. Unit: kilowatt | [optional] 
**battery_max_charge_powerk_w** | **float** | Gets the static &#x27;nominal&#x27; maximum charge power theoretically supported by the site&#x27;s inverter and batteries. The actual \&quot;at this point in time\&quot; value may be lower. Unit: kilowatt | [optional] 
**battery_max_discharge_powerk_w** | **float** | Gets the static &#x27;nominal&#x27; maximum discharge power theoretically supported by the site&#x27;s inverter and batteries. The actual \&quot;at this point in time\&quot; value may be lower. Unit: kilowatt | [optional] 
**battery_capacityk_wh** | **float** | Gets the size of the batteries.  Unit: kilowatthour | [optional] 
**usable_battery_capacityk_wh** | **float** | Gets the usable static nominal energy of the batteries. It is BatteryCapacitykWh x (1 - Nominal Min SoC). The actual \&quot;at this point in time\&quot; value may be lower and will be affected by the current SoC and by the &#x27;reserve&#x27; Min SoC, which is usually higher than Battery Nominal Min SoC Unit: kilowatthour | [optional] 
**panel_model** | **string** | Gets the manufacturer and model of the panels | [optional] 
**panel_sizek_w** | **float** | Gets the total PV size. Unit: kilowatt | [optional] 
**system_type** | **string** | Gets System type | [optional] 
**inverter_max_export_powerk_w** | **float** | Gets the static &#x27;nominal&#x27; maximum export power. The actual \&quot;at this point in time\&quot; value may be lower, affected, for example by site export limit. Unit: kilowatt | [optional] 
**inverter_max_import_powerk_w** | **float** | Gets the static &#x27;nominal&#x27; maximum input power. The actual \&quot;at this point in time\&quot; value may be lower. Unit: kilowatt | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

