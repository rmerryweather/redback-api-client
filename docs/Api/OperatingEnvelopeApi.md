# Swagger\Client\OperatingEnvelopeApi

All URIs are relative to *https://api.redbacktech.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**operatingEnvelopeCreate**](OperatingEnvelopeApi.md#operatingenvelopecreate) | **POST** /Api/v2/OperatingEnvelope/Create/By/Site | Creates a new operating envelope for a site
[**operatingEnvelopeCreateByGroup**](OperatingEnvelopeApi.md#operatingenvelopecreatebygroup) | **POST** /Api/v2/OperatingEnvelope/Add/By/Group | Creates a new operating envelope for a group
[**operatingEnvelopeCreateByNmi**](OperatingEnvelopeApi.md#operatingenvelopecreatebynmi) | **POST** /Api/v2/OperatingEnvelope/Create/By/Nmi | Creates a new operating envelope for a site
[**operatingEnvelopeCreateMultiple**](OperatingEnvelopeApi.md#operatingenvelopecreatemultiple) | **POST** /Api/v2/OperatingEnvelope/Create/Multiple/By/Site | Creates operating envelopes.  Returns 200 OK even if some or all results have errors
[**operatingEnvelopeCreateMultipleByNmi**](OperatingEnvelopeApi.md#operatingenvelopecreatemultiplebynmi) | **POST** /Api/v2/OperatingEnvelope/Create/Multiple/By/Nmi | Creates new operating envelopes.  Returns 200 OK even if some or all results have errors
[**operatingEnvelopeDeleteOperatingEnvelope**](OperatingEnvelopeApi.md#operatingenvelopedeleteoperatingenvelope) | **DELETE** /Api/v2/OperatingEnvelope/By/EventId/{eventId} | Deletes an operating envelope
[**operatingEnvelopeDeleteOperatingEnvelope2**](OperatingEnvelopeApi.md#operatingenvelopedeleteoperatingenvelope2) | **DELETE** /Api/v2/OperatingEnvelope/All | Deletes all operating envelopes
[**operatingEnvelopeGetByEventId**](OperatingEnvelopeApi.md#operatingenvelopegetbyeventid) | **GET** /Api/v2/OperatingEnvelope/By/EventId/{eventId} | Lists operating envelopes with a provided eventId.
[**operatingEnvelopeGetByGroup**](OperatingEnvelopeApi.md#operatingenvelopegetbygroup) | **GET** /Api/v2/OperatingEnvelope/By/Group/{group} | Lists operating envelopes for a group
[**operatingEnvelopeGetByNmi**](OperatingEnvelopeApi.md#operatingenvelopegetbynmi) | **GET** /Api/v2/OperatingEnvelope/By/Nmi/{nmi} | Lists operating envelopes for a site
[**operatingEnvelopeGetBySite**](OperatingEnvelopeApi.md#operatingenvelopegetbysite) | **GET** /Api/v2/OperatingEnvelope/By/Site/{siteId} | Lists operating envelopes for a site
[**operatingEnvelopeGetReport**](OperatingEnvelopeApi.md#operatingenvelopegetreport) | **GET** /Api/v2/OperatingEnvelope/ComplianceReport/{reportid} | Gets compliance report metadata. For field definitions please OperatingEnvelopeComplianceReportRow model.
[**operatingEnvelopeRequestReport**](OperatingEnvelopeApi.md#operatingenveloperequestreport) | **POST** /Api/v2/OperatingEnvelope/RequestComplianceReport/By/Group/{group} | Requests a compliance report. For field definitions please OperatingEnvelopeComplianceReportRow model.

# **operatingEnvelopeCreate**
> \Swagger\Client\Model\ResultSingleOfCreateOperatingEnvelopeResponseDto operatingEnvelopeCreate($body)

Creates a new operating envelope for a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateOperatingEnvelopeWithSiteIdRequestDto(); // \Swagger\Client\Model\CreateOperatingEnvelopeWithSiteIdRequestDto | Request data

try {
    $result = $apiInstance->operatingEnvelopeCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOperatingEnvelopeWithSiteIdRequestDto**](../Model/CreateOperatingEnvelopeWithSiteIdRequestDto.md)| Request data |

### Return type

[**\Swagger\Client\Model\ResultSingleOfCreateOperatingEnvelopeResponseDto**](../Model/ResultSingleOfCreateOperatingEnvelopeResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeCreateByGroup**
> \Swagger\Client\Model\ResultSingleOfCreateOperatingEnvelopeResponseDto operatingEnvelopeCreateByGroup($body)

Creates a new operating envelope for a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateOperatingEnvelopeWithGroupRequestDto(); // \Swagger\Client\Model\CreateOperatingEnvelopeWithGroupRequestDto | Request data

try {
    $result = $apiInstance->operatingEnvelopeCreateByGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeCreateByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOperatingEnvelopeWithGroupRequestDto**](../Model/CreateOperatingEnvelopeWithGroupRequestDto.md)| Request data |

### Return type

[**\Swagger\Client\Model\ResultSingleOfCreateOperatingEnvelopeResponseDto**](../Model/ResultSingleOfCreateOperatingEnvelopeResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeCreateByNmi**
> \Swagger\Client\Model\ResultSingleOfCreateOperatingEnvelopeResponseDto operatingEnvelopeCreateByNmi($body)

Creates a new operating envelope for a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateOperatingEnvelopeWithNmiRequestDto(); // \Swagger\Client\Model\CreateOperatingEnvelopeWithNmiRequestDto | Request data

try {
    $result = $apiInstance->operatingEnvelopeCreateByNmi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeCreateByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOperatingEnvelopeWithNmiRequestDto**](../Model/CreateOperatingEnvelopeWithNmiRequestDto.md)| Request data |

### Return type

[**\Swagger\Client\Model\ResultSingleOfCreateOperatingEnvelopeResponseDto**](../Model/ResultSingleOfCreateOperatingEnvelopeResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeCreateMultiple**
> \Swagger\Client\Model\ResultMultipleOfCreateOperatingEnvelopeResponseDto operatingEnvelopeCreateMultiple($body)

Creates operating envelopes.  Returns 200 OK even if some or all results have errors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CreateOperatingEnvelopeWithSiteIdRequestDto()); // \Swagger\Client\Model\CreateOperatingEnvelopeWithSiteIdRequestDto[] | Request data

try {
    $result = $apiInstance->operatingEnvelopeCreateMultiple($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeCreateMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOperatingEnvelopeWithSiteIdRequestDto[]**](../Model/CreateOperatingEnvelopeWithSiteIdRequestDto.md)| Request data |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfCreateOperatingEnvelopeResponseDto**](../Model/ResultMultipleOfCreateOperatingEnvelopeResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeCreateMultipleByNmi**
> \Swagger\Client\Model\ResultMultipleOfCreateOperatingEnvelopeResponseDto operatingEnvelopeCreateMultipleByNmi($body)

Creates new operating envelopes.  Returns 200 OK even if some or all results have errors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CreateOperatingEnvelopeWithNmiRequestDto()); // \Swagger\Client\Model\CreateOperatingEnvelopeWithNmiRequestDto[] | Request data

try {
    $result = $apiInstance->operatingEnvelopeCreateMultipleByNmi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeCreateMultipleByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOperatingEnvelopeWithNmiRequestDto[]**](../Model/CreateOperatingEnvelopeWithNmiRequestDto.md)| Request data |

### Return type

[**\Swagger\Client\Model\ResultMultipleOfCreateOperatingEnvelopeResponseDto**](../Model/ResultMultipleOfCreateOperatingEnvelopeResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeDeleteOperatingEnvelope**
> \Swagger\Client\Model\ResultSingleOfBoolean operatingEnvelopeDeleteOperatingEnvelope($event_id)

Deletes an operating envelope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = "event_id_example"; // string | Event Id

try {
    $result = $apiInstance->operatingEnvelopeDeleteOperatingEnvelope($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeDeleteOperatingEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | **string**| Event Id |

### Return type

[**\Swagger\Client\Model\ResultSingleOfBoolean**](../Model/ResultSingleOfBoolean.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeDeleteOperatingEnvelope2**
> \Swagger\Client\Model\ResultSingleOfBoolean operatingEnvelopeDeleteOperatingEnvelope2()

Deletes all operating envelopes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->operatingEnvelopeDeleteOperatingEnvelope2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeDeleteOperatingEnvelope2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResultSingleOfBoolean**](../Model/ResultSingleOfBoolean.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeGetByEventId**
> \Swagger\Client\Model\ResultMultipleOfGetOperatingEnvelopeDto operatingEnvelopeGetByEventId($event_id, $past_hours)

Lists operating envelopes with a provided eventId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = "event_id_example"; // string | Event Id
$past_hours = 56; // int | Number of hours in the past to include. If not provided, only envelopes finishing in the future are included. Envelopes ending more than 7 days ago are not returned.

try {
    $result = $apiInstance->operatingEnvelopeGetByEventId($event_id, $past_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeGetByEventId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | **string**| Event Id |
 **past_hours** | **int**| Number of hours in the past to include. If not provided, only envelopes finishing in the future are included. Envelopes ending more than 7 days ago are not returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResultMultipleOfGetOperatingEnvelopeDto**](../Model/ResultMultipleOfGetOperatingEnvelopeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeGetByGroup**
> \Swagger\Client\Model\ResultMultipleOfGetOperatingEnvelopeDto operatingEnvelopeGetByGroup($group, $past_hours)

Lists operating envelopes for a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | The group
$past_hours = 56; // int | Number of hours in the past to include. If not provided, only envelopes finishing in the future are included. Envelopes ending more than 7 days ago are not returned.

try {
    $result = $apiInstance->operatingEnvelopeGetByGroup($group, $past_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeGetByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The group |
 **past_hours** | **int**| Number of hours in the past to include. If not provided, only envelopes finishing in the future are included. Envelopes ending more than 7 days ago are not returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResultMultipleOfGetOperatingEnvelopeDto**](../Model/ResultMultipleOfGetOperatingEnvelopeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeGetByNmi**
> \Swagger\Client\Model\ResultMultipleOfGetOperatingEnvelopeDto operatingEnvelopeGetByNmi($nmi, $past_hours)

Lists operating envelopes for a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | The site
$past_hours = 56; // int | Number of hours in the past to include. If not provided, only envelopes finishing in the future are included. Envelopes ending more than 7 days ago are not returned.

try {
    $result = $apiInstance->operatingEnvelopeGetByNmi($nmi, $past_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeGetByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| The site |
 **past_hours** | **int**| Number of hours in the past to include. If not provided, only envelopes finishing in the future are included. Envelopes ending more than 7 days ago are not returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResultMultipleOfGetOperatingEnvelopeDto**](../Model/ResultMultipleOfGetOperatingEnvelopeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeGetBySite**
> \Swagger\Client\Model\ResultMultipleOfGetOperatingEnvelopeDto operatingEnvelopeGetBySite($site_id, $past_hours)

Lists operating envelopes for a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | The site
$past_hours = 56; // int | Number of hours in the past to include. If not provided, only envelopes finishing in the future are included. Envelopes ending more than 7 days ago are not returned.

try {
    $result = $apiInstance->operatingEnvelopeGetBySite($site_id, $past_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeGetBySite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The site |
 **past_hours** | **int**| Number of hours in the past to include. If not provided, only envelopes finishing in the future are included. Envelopes ending more than 7 days ago are not returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResultMultipleOfGetOperatingEnvelopeDto**](../Model/ResultMultipleOfGetOperatingEnvelopeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeGetReport**
> \Swagger\Client\Model\ResultSingleOfOperatingEnvelopeReportDto operatingEnvelopeGetReport($reportid)

Gets compliance report metadata. For field definitions please OperatingEnvelopeComplianceReportRow model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportid = "reportid_example"; // string | Report Id

try {
    $result = $apiInstance->operatingEnvelopeGetReport($reportid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeGetReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportid** | **string**| Report Id |

### Return type

[**\Swagger\Client\Model\ResultSingleOfOperatingEnvelopeReportDto**](../Model/ResultSingleOfOperatingEnvelopeReportDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatingEnvelopeRequestReport**
> \Swagger\Client\Model\ResultSingleOfOperatingEnvelopeReportDto operatingEnvelopeRequestReport($group)

Requests a compliance report. For field definitions please OperatingEnvelopeComplianceReportRow model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OperatingEnvelopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | Group to use

try {
    $result = $apiInstance->operatingEnvelopeRequestReport($group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatingEnvelopeApi->operatingEnvelopeRequestReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Group to use |

### Return type

[**\Swagger\Client\Model\ResultSingleOfOperatingEnvelopeReportDto**](../Model/ResultSingleOfOperatingEnvelopeReportDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

