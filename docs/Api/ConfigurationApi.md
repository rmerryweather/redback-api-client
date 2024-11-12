# Swagger\Client\ConfigurationApi

All URIs are relative to *https://api.redbacktech.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationGetConfiguration**](ConfigurationApi.md#configurationgetconfiguration) | **GET** /Api/v2/Configuration/{siteId}/Configuration | Gets configuration data for a site.
[**configurationGetConfigurationByNmi**](ConfigurationApi.md#configurationgetconfigurationbynmi) | **GET** /Api/v2/Configuration/{nmi}/ConfigurationByNmi | Gets configuration data for a site.
[**configurationGetConfigurationByNmi2**](ConfigurationApi.md#configurationgetconfigurationbynmi2) | **POST** /Api/v2/Configuration/Multiple/ConfigurationByNmi | Gets configuration data.
[**configurationGetConfigurationBySerialNumber**](ConfigurationApi.md#configurationgetconfigurationbyserialnumber) | **GET** /Api/v2/Configuration/Configuration/BySerialNumber/{serialNumber} | Gets configuration data got an inverter.
[**configurationGetConfigurationBySerialNumberMultiple**](ConfigurationApi.md#configurationgetconfigurationbyserialnumbermultiple) | **POST** /Api/v2/Configuration/Multiple/BySerialNumber/Configuration | Gets configuration data.
[**configurationGetConfigurationMultiple**](ConfigurationApi.md#configurationgetconfigurationmultiple) | **POST** /Api/v2/Configuration/Multiple/Configuration | Gets configuration data.

# **configurationGetConfiguration**
> \Swagger\Client\Model\ResultSingleOfInverterConfiguration configurationGetConfiguration($site_id)

Gets configuration data for a site.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | Id of the site

try {
    $result = $apiInstance->configurationGetConfiguration($site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Id of the site |

### Return type

[**\Swagger\Client\Model\ResultSingleOfInverterConfiguration**](../Model/ResultSingleOfInverterConfiguration.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfigurationByNmi**
> \Swagger\Client\Model\ResultSingleOfInverterConfiguration configurationGetConfigurationByNmi($nmi)

Gets configuration data for a site.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier

try {
    $result = $apiInstance->configurationGetConfigurationByNmi($nmi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfigurationByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |

### Return type

[**\Swagger\Client\Model\ResultSingleOfInverterConfiguration**](../Model/ResultSingleOfInverterConfiguration.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfigurationByNmi2**
> \Swagger\Client\Model\ResultMultipleOfResultMultipleElementOfInverterConfiguration configurationGetConfigurationByNmi2($body)

Gets configuration data.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | National Metering Identifiers

try {
    $result = $apiInstance->configurationGetConfigurationByNmi2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfigurationByNmi2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| National Metering Identifiers |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfResultMultipleElementOfInverterConfiguration**](../Model/ResultMultipleOfResultMultipleElementOfInverterConfiguration.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfigurationBySerialNumber**
> \Swagger\Client\Model\ResultSingleOfInverterConfiguration configurationGetConfigurationBySerialNumber($serial_number)

Gets configuration data got an inverter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number

try {
    $result = $apiInstance->configurationGetConfigurationBySerialNumber($serial_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfigurationBySerialNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |

### Return type

[**\Swagger\Client\Model\ResultSingleOfInverterConfiguration**](../Model/ResultSingleOfInverterConfiguration.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfigurationBySerialNumberMultiple**
> \Swagger\Client\Model\ResultMultipleOfResultMultipleElementOfInverterConfiguration configurationGetConfigurationBySerialNumberMultiple($body)

Gets configuration data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | Serial numbers

try {
    $result = $apiInstance->configurationGetConfigurationBySerialNumberMultiple($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfigurationBySerialNumberMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| Serial numbers |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfResultMultipleElementOfInverterConfiguration**](../Model/ResultMultipleOfResultMultipleElementOfInverterConfiguration.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfigurationMultiple**
> \Swagger\Client\Model\ResultMultipleOfResultMultipleElementOfInverterConfiguration configurationGetConfigurationMultiple($body)

Gets configuration data.

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | Site ids

try {
    $result = $apiInstance->configurationGetConfigurationMultiple($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGetConfigurationMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)| Site ids |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfResultMultipleElementOfInverterConfiguration**](../Model/ResultMultipleOfResultMultipleElementOfInverterConfiguration.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

