# Swagger\Client\SiteApi

All URIs are relative to *https://api.redbacktech.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**siteGetSiteId**](SiteApi.md#sitegetsiteid) | **GET** /Api/v2/Site/SiteId/By/SerialNumber/{serialNumber} | Gets site id
[**siteGetSiteIdByNmi**](SiteApi.md#sitegetsiteidbynmi) | **GET** /Api/v2/Site/SiteId/By/Nmi/{nmi} | Gets site id

# **siteGetSiteId**
> \Swagger\Client\Model\ResultSingleOfString siteGetSiteId($serial_number)

Gets site id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number

try {
    $result = $apiInstance->siteGetSiteId($serial_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetSiteId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |

### Return type

[**\Swagger\Client\Model\ResultSingleOfString**](../Model/ResultSingleOfString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetSiteIdByNmi**
> \Swagger\Client\Model\ResultSingleOfString siteGetSiteIdByNmi($nmi)

Gets site id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier

try {
    $result = $apiInstance->siteGetSiteIdByNmi($nmi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetSiteIdByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |

### Return type

[**\Swagger\Client\Model\ResultSingleOfString**](../Model/ResultSingleOfString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

