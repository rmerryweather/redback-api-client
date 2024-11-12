# InverterSiteStaticData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Gets the id of the node. This value is contextual, i.e. for a site it&#x27;s SiteId | [optional] 
**type** | **string** | Gets the type of the node | [optional] 
**dynamic_data_metadata** | [**map[string,\Swagger\Client\Model\EnergyValueMetadata]**](EnergyValueMetadata.md) | Gets metadata about the dynamic data | [optional] 
**timestamp_utc** | [**\DateTime**](\DateTime.md) | Gets timestamp of the static portion of the datain ISO 8601 format. | 
**location** | **AllOfInverterSiteStaticDataLocation** | Location | [optional] 
**technology_provider** | **string** | Technology Provider | [optional] 
**remote_access_connection** | **AllOfInverterSiteStaticDataRemoteAccessConnection** | Gets data about comms | [optional] 
**approved_capacity_w** | **int** | Approved Capacity W | [optional] 
**solar_retailer** | **AllOfInverterSiteStaticDataSolarRetailer** | Solar Retailer | [optional] 
**site_details** | **AllOfInverterSiteStaticDataSiteDetails** | Site details | [optional] 
**commissioning_date** | **string** | Gets the commisioning date as yyyy-MM-dd | [optional] 
**nmi** | **string** | National Meter Identifier | [optional] 
**latest_dynamic_data_utc** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent dynamic data | [optional] 
**status** | **AllOfInverterSiteStaticDataStatus** | System Status | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

