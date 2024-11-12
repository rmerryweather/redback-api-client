# Swagger\Client\AliveApi

All URIs are relative to *https://api.redbacktech.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aliveGet**](AliveApi.md#aliveget) | **GET** /Api/v2/Alive | Returns \&quot;OK\&quot;.

# **aliveGet**
> string aliveGet()

Returns \"OK\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AliveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->aliveGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliveApi->aliveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

