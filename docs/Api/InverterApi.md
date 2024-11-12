# Swagger\Client\InverterApi

All URIs are relative to *https://api.redbacktech.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inverterRegister**](InverterApi.md#inverterregister) | **POST** /Api/v2/Inverter/Register | Registers an inverter.
[**inverterSetNmi**](InverterApi.md#invertersetnmi) | **POST** /Api/v2/Inverter/{serialNumber}/Nmi | Set the NMI for an inverter that was initially commissioned without one.

# **inverterRegister**
> \Swagger\Client\Model\ResultSingleOfRegisterInverterResponseDto inverterRegister($body)

Registers an inverter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InverterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RegisterInverterRequestDto(); // \Swagger\Client\Model\RegisterInverterRequestDto | Registration dto

try {
    $result = $apiInstance->inverterRegister($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InverterApi->inverterRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RegisterInverterRequestDto**](../Model/RegisterInverterRequestDto.md)| Registration dto |

### Return type

[**\Swagger\Client\Model\ResultSingleOfRegisterInverterResponseDto**](../Model/ResultSingleOfRegisterInverterResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inverterSetNmi**
> inverterSetNmi($serial_number, $nmi)

Set the NMI for an inverter that was initially commissioned without one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InverterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial Number
$nmi = "nmi_example"; // string | NMI

try {
    $apiInstance->inverterSetNmi($serial_number, $nmi);
} catch (Exception $e) {
    echo 'Exception when calling InverterApi->inverterSetNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial Number |
 **nmi** | **string**| NMI | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

