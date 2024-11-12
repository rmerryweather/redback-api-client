# Swagger\Client\ExampleApi

All URIs are relative to *https://api.redbacktech.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exampleBadRequestExample**](ExampleApi.md#examplebadrequestexample) | **GET** /Api/v2/Example/BadRequest | Generates an example BadRequest response
[**exampleBadRequestExample2**](ExampleApi.md#examplebadrequestexample2) | **GET** /Api/v2/Example/Error/400 | Generates an example BadRequest response
[**exampleGetVersion20**](ExampleApi.md#examplegetversion20) | **GET** /Api/v2/Example/Version | Generates an example InternalServerError response
[**exampleInternalServerErrorExample**](ExampleApi.md#exampleinternalservererrorexample) | **GET** /Api/v2/Example/InternalServerError | Generates an example InternalServerError response
[**exampleInternalServerErrorExample2**](ExampleApi.md#exampleinternalservererrorexample2) | **GET** /Api/v2/Example/Error/500 | Generates an example InternalServerError response

# **exampleBadRequestExample**
> \Swagger\Client\Model\ResultSingleOfString exampleBadRequestExample()

Generates an example BadRequest response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExampleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exampleBadRequestExample();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleApi->exampleBadRequestExample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResultSingleOfString**](../Model/ResultSingleOfString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exampleBadRequestExample2**
> \Swagger\Client\Model\ResultSingleOfString exampleBadRequestExample2()

Generates an example BadRequest response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExampleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exampleBadRequestExample2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleApi->exampleBadRequestExample2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResultSingleOfString**](../Model/ResultSingleOfString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exampleGetVersion20**
> \Swagger\Client\Model\ResultSingleOfDecimal exampleGetVersion20()

Generates an example InternalServerError response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExampleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exampleGetVersion20();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleApi->exampleGetVersion20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResultSingleOfDecimal**](../Model/ResultSingleOfDecimal.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exampleInternalServerErrorExample**
> \Swagger\Client\Model\ResultSingleOfString exampleInternalServerErrorExample()

Generates an example InternalServerError response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExampleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exampleInternalServerErrorExample();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleApi->exampleInternalServerErrorExample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResultSingleOfString**](../Model/ResultSingleOfString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exampleInternalServerErrorExample2**
> \Swagger\Client\Model\ResultSingleOfString exampleInternalServerErrorExample2()

Generates an example InternalServerError response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ExampleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->exampleInternalServerErrorExample2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleApi->exampleInternalServerErrorExample2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResultSingleOfString**](../Model/ResultSingleOfString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

