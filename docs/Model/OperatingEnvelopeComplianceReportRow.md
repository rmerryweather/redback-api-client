# OperatingEnvelopeComplianceReportRow

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nmi** | **string** | NMI | [optional] 
**site_id** | **string** | Site Id | [optional] 
**site_power_w** | **int** | Grid power in watts. Import is negative. | [optional] 
**last_connection_utc** | [**\DateTime**](\DateTime.md) | Timestamp of the latest received telemetry in UTC. | [optional] 
**address_line_one** | **string** | Address | [optional] 
**address_line_two** | **string** | Address | [optional] 
**state** | **string** | Address | [optional] 
**post_code** | **string** | Address | [optional] 
**suburb** | **string** | Address | [optional] 
**site_export_limit_enabled** | **bool** | True if the site has a functional export limit. The limit may be a static site export limit or come from a currently active dynamic operating envelope. | [optional] 
**site_export_limit_w** | **int** | Value of the functional site export limit. The limit may be a static site export limit or come from a currently active dynamic operating envelope. | [optional] 
**is_disconnected** | **string** | \&quot;Unknown\&quot; if system if offline. \&quot;Yes\&quot; when absolute grid power is less than 400W; \&quot;No\&quot; otherwise. | [optional] 
**is_online** | **string** | \&quot;Yes\&quot; if latest received telemetry is not older than 10 minutes old, \&quot;Unknown\&quot; otherwise. | [optional] 
**generation_status** | **string** | \&quot;Unknown\&quot; if system if offline. \&quot;ZeroExport\&quot; if current functional site export limit is enabled and its value is less than 50, otherwise \&quot;Connected\&quot;. | [optional] 
**comment** | **string** | Comment | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

