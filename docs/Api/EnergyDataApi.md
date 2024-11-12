# Swagger\Client\EnergyDataApi

All URIs are relative to *https://api.redbacktech.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**energyDataGet**](EnergyDataApi.md#energydataget) | **GET** /Api/v2/EnergyData | Gets available sites.
[**energyDataGetDynamic20**](EnergyDataApi.md#energydatagetdynamic20) | **GET** /Api/v2/EnergyData/{siteId}/Dynamic | Gets dynamic data for a site.
[**energyDataGetDynamicAt20**](EnergyDataApi.md#energydatagetdynamicat20) | **GET** /Api/v2/EnergyData/{siteId}/Dynamic/At/{timestamp} | Gets dynamic data for a site at a timestamp.
[**energyDataGetDynamicAtByNmi20**](EnergyDataApi.md#energydatagetdynamicatbynmi20) | **GET** /Api/v2/EnergyData/{nmi}/DynamicByNmi/At/{timestamp} | Gets dynamic data for a site at a timestamp.
[**energyDataGetDynamicAtBySerialNumber20**](EnergyDataApi.md#energydatagetdynamicatbyserialnumber20) | **GET** /Api/v2/EnergyData/{serialNumber}/Dynamic/BySerialNumber/At/{timestamp} | Gets dynamic data for an inverter at a timestamp.
[**energyDataGetDynamicBetween20**](EnergyDataApi.md#energydatagetdynamicbetween20) | **GET** /Api/v2/EnergyData/{siteId}/Dynamic/From/{starttimestamp}/To/{endtimestamp} | Gets dynamic data records between timestamps.
[**energyDataGetDynamicBetweenByNmi20**](EnergyDataApi.md#energydatagetdynamicbetweenbynmi20) | **GET** /Api/v2/EnergyData/{nmi}/DynamicByNmi/From/{starttimestamp}/To/{endtimestamp} | Gets dynamic data records between timestamps.
[**energyDataGetDynamicBetweenBySerialNumber20**](EnergyDataApi.md#energydatagetdynamicbetweenbyserialnumber20) | **GET** /Api/v2/EnergyData/{serialNumber}/Dynamic/BySerialNumber/From/{starttimestamp}/To/{endtimestamp} | Gets dynamic data records for an inverter between timestamps.
[**energyDataGetDynamicByNmi20**](EnergyDataApi.md#energydatagetdynamicbynmi20) | **GET** /Api/v2/EnergyData/{nmi}/DynamicByNmi | Gets dynamic data for a site.
[**energyDataGetDynamicByNmi202**](EnergyDataApi.md#energydatagetdynamicbynmi202) | **POST** /Api/v2/EnergyData/Multiple/DynamicByNmi | Gets dynamic data for multiple sites. Maximum 100 per request.
[**energyDataGetDynamicBySerialNumber20**](EnergyDataApi.md#energydatagetdynamicbyserialnumber20) | **GET** /Api/v2/EnergyData/Dynamic/BySerialNumber/{serialNumber} | Gets dynamic data for a serialNumber.
[**energyDataGetDynamicInPeriod20**](EnergyDataApi.md#energydatagetdynamicinperiod20) | **GET** /Api/v2/EnergyData/{siteId}/Dynamic/PeriodBeforeUtc/{timestamp}/{periodInMinutes} | Gets dynamic data records for a site before a timestamp.
[**energyDataGetDynamicInPeriodByNmi20**](EnergyDataApi.md#energydatagetdynamicinperiodbynmi20) | **GET** /Api/v2/EnergyData/{nmi}/Dynamic/PeriodBeforeUtcByNmi/{timestamp}/{periodInMinutes} | Gets dynamic data records before a timestamp.
[**energyDataGetDynamicInPeriodBySerialNumber20**](EnergyDataApi.md#energydatagetdynamicinperiodbyserialnumber20) | **GET** /Api/v2/EnergyData/{serialNumber}/Dynamic/BySerialNumber/PeriodBeforeUtc/{timestamp}/{periodInMinutes} | Gets dynamic data records before a timestamp.
[**energyDataGetDynamicLatestBeforeByNmi20**](EnergyDataApi.md#energydatagetdynamiclatestbeforebynmi20) | **GET** /Api/v2/EnergyData/{nmi}/Dynamic/LatestBeforeUtcByNmi/{timestamp}/{periodInMinutes} | Gets latest dynamic data for a site before given timestamp.
[**energyDataGetDynamicLatestBeforeBySerialNumber20**](EnergyDataApi.md#energydatagetdynamiclatestbeforebyserialnumber20) | **GET** /Api/v2/EnergyData/{serialNumber}/Dynamic/BySerialNumber/LatestBeforeUtc/{timestamp}/{periodInMinutes} | Gets latest dynamic data for an inverter before given timestamp.
[**energyDataGetDynamicMultiple20**](EnergyDataApi.md#energydatagetdynamicmultiple20) | **POST** /Api/v2/EnergyData/Multiple/Dynamic | Gets dynamic data for multiple sites. Maximum 100 per request.
[**energyDataGetDynamicMultipleBySerialNumber20**](EnergyDataApi.md#energydatagetdynamicmultiplebyserialnumber20) | **POST** /Api/v2/EnergyData/Multiple/BySerialNumber/Dynamic | Gets dynamic data for multiple serial numbers. Maximum 100 per request.
[**energyDataGetStatic**](EnergyDataApi.md#energydatagetstatic) | **GET** /Api/v2/EnergyData/{siteId}/Static | Gets static data for a site.
[**energyDataGetStaticByNmi**](EnergyDataApi.md#energydatagetstaticbynmi) | **GET** /Api/v2/EnergyData/{nmi}/StaticByNmi | Gets static data for a site.
[**energyDataGetStaticBySerialNumber**](EnergyDataApi.md#energydatagetstaticbyserialnumber) | **GET** /Api/v2/EnergyData/Static/BySerialNumber/{serialNumber} | Gets static data for an inverter.
[**energyDataGetWithLayout**](EnergyDataApi.md#energydatagetwithlayout) | **GET** /Api/v2/EnergyData/With/Nodes | Gets available sites.

# **energyDataGet**
> \Swagger\Client\Model\ResultPagedOfString energyDataGet($page, $page_size)

Gets available sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Zero based page id
$page_size = 100; // int | Size of the page. Max = 1000

try {
    $result = $apiInstance->energyDataGet($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Zero based page id | [optional] [default to 0]
 **page_size** | **int**| Size of the page. Max &#x3D; 1000 | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\ResultPagedOfString**](../Model/ResultPagedOfString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamic20**
> \Swagger\Client\Model\ResultSingleOfInverterSiteDynamicData energyDataGetDynamic20($site_id, $metadata)

Gets dynamic data for a site.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | Id of the site
$metadata = true; // bool | Whether to provide metadata

try {
    $result = $apiInstance->energyDataGetDynamic20($site_id, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamic20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Id of the site |
 **metadata** | **bool**| Whether to provide metadata | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleOfInverterSiteDynamicData**](../Model/ResultSingleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicAt20**
> \Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData energyDataGetDynamicAt20($site_id, $timestamp, $metadata)

Gets dynamic data for a site at a timestamp.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | Id of the site
$timestamp = "timestamp_example"; // string | Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$metadata = true; // bool | Whether to provide metadata

try {
    $result = $apiInstance->energyDataGetDynamicAt20($site_id, $timestamp, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicAt20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Id of the site |
 **timestamp** | **string**| Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **metadata** | **bool**| Whether to provide metadata | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData**](../Model/ResultSingleWithTimeTravelOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicAtByNmi20**
> \Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData energyDataGetDynamicAtByNmi20($nmi, $timestamp, $metadata)

Gets dynamic data for a site at a timestamp.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier
$timestamp = "timestamp_example"; // string | Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$metadata = true; // bool | Whether to provide metadata

try {
    $result = $apiInstance->energyDataGetDynamicAtByNmi20($nmi, $timestamp, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicAtByNmi20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |
 **timestamp** | **string**| Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **metadata** | **bool**| Whether to provide metadata | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData**](../Model/ResultSingleWithTimeTravelOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicAtBySerialNumber20**
> \Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData energyDataGetDynamicAtBySerialNumber20($serial_number, $timestamp, $metadata)

Gets dynamic data for an inverter at a timestamp.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number
$timestamp = "timestamp_example"; // string | Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$metadata = true; // bool | Whether to provide metadata

try {
    $result = $apiInstance->energyDataGetDynamicAtBySerialNumber20($serial_number, $timestamp, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicAtBySerialNumber20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |
 **timestamp** | **string**| Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **metadata** | **bool**| Whether to provide metadata | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData**](../Model/ResultSingleWithTimeTravelOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicBetween20**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicBetween20($site_id, $starttimestamp, $endtimestamp)

Gets dynamic data records between timestamps.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | Id of the site
$starttimestamp = "starttimestamp_example"; // string | Start Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$endtimestamp = "endtimestamp_example"; // string | End Utc timestamp in the 'yyyyMMddTHHmmssZ' format. Max difference is 60 minutes

try {
    $result = $apiInstance->energyDataGetDynamicBetween20($site_id, $starttimestamp, $endtimestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicBetween20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Id of the site |
 **starttimestamp** | **string**| Start Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **endtimestamp** | **string**| End Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format. Max difference is 60 minutes |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicBetweenByNmi20**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicBetweenByNmi20($nmi, $starttimestamp, $endtimestamp)

Gets dynamic data records between timestamps.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier
$starttimestamp = "starttimestamp_example"; // string | Start Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$endtimestamp = "endtimestamp_example"; // string | End Utc timestamp in the 'yyyyMMddTHHmmssZ' format. Max difference is 60 minutes

try {
    $result = $apiInstance->energyDataGetDynamicBetweenByNmi20($nmi, $starttimestamp, $endtimestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicBetweenByNmi20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |
 **starttimestamp** | **string**| Start Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **endtimestamp** | **string**| End Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format. Max difference is 60 minutes |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicBetweenBySerialNumber20**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicBetweenBySerialNumber20($serial_number, $starttimestamp, $endtimestamp)

Gets dynamic data records for an inverter between timestamps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number
$starttimestamp = "starttimestamp_example"; // string | Start Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$endtimestamp = "endtimestamp_example"; // string | End Utc timestamp in the 'yyyyMMddTHHmmssZ' format. Max difference is 60 minutes

try {
    $result = $apiInstance->energyDataGetDynamicBetweenBySerialNumber20($serial_number, $starttimestamp, $endtimestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicBetweenBySerialNumber20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |
 **starttimestamp** | **string**| Start Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **endtimestamp** | **string**| End Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format. Max difference is 60 minutes |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicByNmi20**
> \Swagger\Client\Model\ResultSingleOfInverterSiteDynamicData energyDataGetDynamicByNmi20($nmi, $metadata)

Gets dynamic data for a site.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier
$metadata = true; // bool | Whether to provide metadata

try {
    $result = $apiInstance->energyDataGetDynamicByNmi20($nmi, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicByNmi20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |
 **metadata** | **bool**| Whether to provide metadata | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleOfInverterSiteDynamicData**](../Model/ResultSingleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicByNmi202**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicByNmi202($body)

Gets dynamic data for multiple sites. Maximum 100 per request.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | NMIs of the sites

try {
    $result = $apiInstance->energyDataGetDynamicByNmi202($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicByNmi202: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| NMIs of the sites |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicBySerialNumber20**
> \Swagger\Client\Model\ResultSingleOfInverterSiteDynamicData energyDataGetDynamicBySerialNumber20($serial_number, $metadata)

Gets dynamic data for a serialNumber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number
$metadata = true; // bool | Whether to provide metadata

try {
    $result = $apiInstance->energyDataGetDynamicBySerialNumber20($serial_number, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicBySerialNumber20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |
 **metadata** | **bool**| Whether to provide metadata | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleOfInverterSiteDynamicData**](../Model/ResultSingleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicInPeriod20**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicInPeriod20($site_id, $timestamp, $period_in_minutes)

Gets dynamic data records for a site before a timestamp.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | Id of the site
$timestamp = "timestamp_example"; // string | Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$period_in_minutes = 56; // int | Period in minutes to scan, maximum is 60

try {
    $result = $apiInstance->energyDataGetDynamicInPeriod20($site_id, $timestamp, $period_in_minutes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicInPeriod20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Id of the site |
 **timestamp** | **string**| Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **period_in_minutes** | **int**| Period in minutes to scan, maximum is 60 |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicInPeriodByNmi20**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicInPeriodByNmi20($nmi, $timestamp, $period_in_minutes)

Gets dynamic data records before a timestamp.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier
$timestamp = "timestamp_example"; // string | Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$period_in_minutes = 56; // int | Period in minutes to scan, maximum is 60

try {
    $result = $apiInstance->energyDataGetDynamicInPeriodByNmi20($nmi, $timestamp, $period_in_minutes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicInPeriodByNmi20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |
 **timestamp** | **string**| Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **period_in_minutes** | **int**| Period in minutes to scan, maximum is 60 |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicInPeriodBySerialNumber20**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicInPeriodBySerialNumber20($serial_number, $timestamp, $period_in_minutes)

Gets dynamic data records before a timestamp.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number
$timestamp = "timestamp_example"; // string | Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$period_in_minutes = 56; // int | Period in minutes to scan, maximum is 60

try {
    $result = $apiInstance->energyDataGetDynamicInPeriodBySerialNumber20($serial_number, $timestamp, $period_in_minutes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicInPeriodBySerialNumber20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |
 **timestamp** | **string**| Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **period_in_minutes** | **int**| Period in minutes to scan, maximum is 60 |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicLatestBeforeByNmi20**
> \Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData energyDataGetDynamicLatestBeforeByNmi20($nmi, $timestamp, $period_in_minutes, $metadata)

Gets latest dynamic data for a site before given timestamp.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier
$timestamp = "timestamp_example"; // string | Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$period_in_minutes = 56; // int | Period in minutes to scan, maximum is 60
$metadata = true; // bool | Provide metadata or not

try {
    $result = $apiInstance->energyDataGetDynamicLatestBeforeByNmi20($nmi, $timestamp, $period_in_minutes, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicLatestBeforeByNmi20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |
 **timestamp** | **string**| Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **period_in_minutes** | **int**| Period in minutes to scan, maximum is 60 |
 **metadata** | **bool**| Provide metadata or not | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData**](../Model/ResultSingleWithTimeTravelOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicLatestBeforeBySerialNumber20**
> \Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData energyDataGetDynamicLatestBeforeBySerialNumber20($serial_number, $timestamp, $period_in_minutes, $metadata)

Gets latest dynamic data for an inverter before given timestamp.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number
$timestamp = "timestamp_example"; // string | Utc timestamp in the 'yyyyMMddTHHmmssZ' format
$period_in_minutes = 56; // int | Period in minutes to scan, maximum is 60
$metadata = true; // bool | Provide metadata or not

try {
    $result = $apiInstance->energyDataGetDynamicLatestBeforeBySerialNumber20($serial_number, $timestamp, $period_in_minutes, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicLatestBeforeBySerialNumber20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |
 **timestamp** | **string**| Utc timestamp in the &#x27;yyyyMMddTHHmmssZ&#x27; format |
 **period_in_minutes** | **int**| Period in minutes to scan, maximum is 60 |
 **metadata** | **bool**| Provide metadata or not | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleWithTimeTravelOfInverterSiteDynamicData**](../Model/ResultSingleWithTimeTravelOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicMultiple20**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicMultiple20($body)

Gets dynamic data for multiple sites. Maximum 100 per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | Ids of the sites

try {
    $result = $apiInstance->energyDataGetDynamicMultiple20($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicMultiple20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| Ids of the sites |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetDynamicMultipleBySerialNumber20**
> \Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData energyDataGetDynamicMultipleBySerialNumber20($body)

Gets dynamic data for multiple serial numbers. Maximum 100 per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | Serial numbers

try {
    $result = $apiInstance->energyDataGetDynamicMultipleBySerialNumber20($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetDynamicMultipleBySerialNumber20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| Serial numbers |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfInverterSiteDynamicData**](../Model/ResultMultipleOfInverterSiteDynamicData.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetStatic**
> \Swagger\Client\Model\ResultSingleOfStaticOnlyView energyDataGetStatic($site_id)

Gets static data for a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | Id of the site

try {
    $result = $apiInstance->energyDataGetStatic($site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetStatic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Id of the site |

### Return type

[**\Swagger\Client\Model\ResultSingleOfStaticOnlyView**](../Model/ResultSingleOfStaticOnlyView.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetStaticByNmi**
> \Swagger\Client\Model\ResultSingleOfStaticOnlyView energyDataGetStaticByNmi($nmi)

Gets static data for a site.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier

try {
    $result = $apiInstance->energyDataGetStaticByNmi($nmi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetStaticByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |

### Return type

[**\Swagger\Client\Model\ResultSingleOfStaticOnlyView**](../Model/ResultSingleOfStaticOnlyView.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetStaticBySerialNumber**
> \Swagger\Client\Model\ResultSingleOfStaticOnlyView energyDataGetStaticBySerialNumber($serial_number)

Gets static data for an inverter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number

try {
    $result = $apiInstance->energyDataGetStaticBySerialNumber($serial_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetStaticBySerialNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |

### Return type

[**\Swagger\Client\Model\ResultSingleOfStaticOnlyView**](../Model/ResultSingleOfStaticOnlyView.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **energyDataGetWithLayout**
> \Swagger\Client\Model\ResultPagedOfEnergyNodeSimple energyDataGetWithLayout($page, $page_size)

Gets available sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EnergyDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | Zero based page id
$page_size = 100; // int | Size of the page. Max = 1000

try {
    $result = $apiInstance->energyDataGetWithLayout($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnergyDataApi->energyDataGetWithLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Zero based page id | [optional] [default to 0]
 **page_size** | **int**| Size of the page. Max &#x3D; 1000 | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\ResultPagedOfEnergyNodeSimple**](../Model/ResultPagedOfEnergyNodeSimple.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

