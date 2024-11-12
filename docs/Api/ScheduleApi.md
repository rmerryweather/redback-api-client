# Swagger\Client\ScheduleApi

All URIs are relative to *https://api.redbacktech.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**scheduleCancelSchedule**](ScheduleApi.md#schedulecancelschedule) | **DELETE** /Api/v2/Schedule/By/Site/{siteId}/{scheduleId} | Deletes a schedule
[**scheduleCancelScheduleByNmi**](ScheduleApi.md#schedulecancelschedulebynmi) | **DELETE** /Api/v2/Schedule/By/Nmi/{nmi}/{scheduleId} | Deletes a schedule
[**scheduleCancelScheduleForSerialNumber**](ScheduleApi.md#schedulecancelscheduleforserialnumber) | **DELETE** /Api/v2/Schedule/By/SerialNumber/{serialNumber}/{scheduleId} | Deletes a schedule
[**scheduleCreateSchedule**](ScheduleApi.md#schedulecreateschedule) | **POST** /Api/v2/Schedule/Create | Creates a new schedule for a site
[**scheduleCreateScheduleByNmi**](ScheduleApi.md#schedulecreateschedulebynmi) | **POST** /Api/v2/Schedule/Create/By/Nmi | Creates a new schedule for a site
[**scheduleCreateScheduleBySerialNumber**](ScheduleApi.md#schedulecreateschedulebyserialnumber) | **POST** /Api/v2/Schedule/Create/By/SerialNumber | Creates a new schedule for a serial number
[**scheduleGetSchedulesByNmi**](ScheduleApi.md#schedulegetschedulesbynmi) | **GET** /Api/v2/Schedule/By/Nmi/{nmi} | Lists all schedules for a site
[**scheduleGetSchedulesBySerialNumber**](ScheduleApi.md#schedulegetschedulesbyserialnumber) | **GET** /Api/v2/Schedule/By/SerialNumber/{serialNumber} | Lists all schedules for an inverter
[**scheduleGetSchedulesBySite**](ScheduleApi.md#schedulegetschedulesbysite) | **GET** /Api/v2/Schedule/By/Site/{siteId} | Lists all schedules for a site
[**scheduleGetSingleScheduleInfo**](ScheduleApi.md#schedulegetsinglescheduleinfo) | **GET** /Api/v2/Schedule/By/Site/{siteId}/{scheduleId} | Gets information about a specific schedule for a site
[**scheduleGetSingleScheduleInfoByNmi**](ScheduleApi.md#schedulegetsinglescheduleinfobynmi) | **GET** /Api/v2/Schedule/By/Nmi/{nmi}/{scheduleId} | Gets information about a specific schedule for a site
[**scheduleGetSingleScheduleInfoBySerialNumber**](ScheduleApi.md#schedulegetsinglescheduleinfobyserialnumber) | **GET** /Api/v2/Schedule/By/SerialNumber/{serialNumber}/{scheduleId} | Gets information about a specific schedule for an inverter

# **scheduleCancelSchedule**
> \Swagger\Client\Model\ResultSingleOfBoolean scheduleCancelSchedule($site_id, $schedule_id)

Deletes a schedule

The true return value is only provided so there is a data field, in case of an error the normal error response will be provided. It is possible to delete a schedule that was not created by you in the case that it negatively interacts, however we ask that you only delete other's schedules that will have an effect on your event. Some examples of schedules you may encounter that you did not create are schedules created by Redback for ongoing maintenance and care.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | The site
$schedule_id = "schedule_id_example"; // string | The schedule

try {
    $result = $apiInstance->scheduleCancelSchedule($site_id, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleCancelSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The site |
 **schedule_id** | **string**| The schedule |

### Return type

[**\Swagger\Client\Model\ResultSingleOfBoolean**](../Model/ResultSingleOfBoolean.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCancelScheduleByNmi**
> \Swagger\Client\Model\ResultSingleOfBoolean scheduleCancelScheduleByNmi($nmi, $schedule_id)

Deletes a schedule

The true return value is only provided so there is a data field, in case of an error the normal error response will be provided. It is possible to delete a schedule that was not created by you in the case that it negatively interacts, however we ask that you only delete other's schedules that will have an effect on your event. Some examples of schedules you may encounter that you did not create are schedules created by Redback for ongoing maintenance and care.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier
$schedule_id = "schedule_id_example"; // string | The schedule

try {
    $result = $apiInstance->scheduleCancelScheduleByNmi($nmi, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleCancelScheduleByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |
 **schedule_id** | **string**| The schedule |

### Return type

[**\Swagger\Client\Model\ResultSingleOfBoolean**](../Model/ResultSingleOfBoolean.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCancelScheduleForSerialNumber**
> \Swagger\Client\Model\ResultSingleOfBoolean scheduleCancelScheduleForSerialNumber($serial_number, $schedule_id)

Deletes a schedule

The true return value is only provided so there is a data field, in case of an error the normal error response will be provided. It is possible to delete a schedule that was not created by you in the case that it negatively interacts, however we ask that you only delete other's schedules that will have an effect on your event. Some examples of schedules you may encounter that you did not create are schedules created by Redback for ongoing maintenance and care.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number
$schedule_id = "schedule_id_example"; // string | The schedule

try {
    $result = $apiInstance->scheduleCancelScheduleForSerialNumber($serial_number, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleCancelScheduleForSerialNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |
 **schedule_id** | **string**| The schedule |

### Return type

[**\Swagger\Client\Model\ResultSingleOfBoolean**](../Model/ResultSingleOfBoolean.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCreateSchedule**
> \Swagger\Client\Model\ResultSingleOfCreateScheduleResponseDto scheduleCreateSchedule($body)

Creates a new schedule for a site

Supported power modes:  ChargeBattery, DischargeBattery, Auto, ImportPower, ExportPower, Conserve, Offgrid, Hibernate, BuyPower, SellPower, ForceChargeBattery, ForceDischargeBattery.  The argument to the desired power mode is not validated on creation and may be rejected by the inverter when the schedule starts. On schedule commencement, a power value for a mode is rejected only if it is not supported by the current hardware and software setup. A supported value that the inverter cannot comply with at the time is accepted.  For example: On schedule commencement, an SH system will reject Charge Battery @ 10000W but it will accept Charge Battery @ 1000W even when the battery is full (but it will not be charged as it is full).   For sites with multiple inverters the schedule is created for the 'original' first inverter on the site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateScheduleRequestDto(); // \Swagger\Client\Model\CreateScheduleRequestDto | Request data

try {
    $result = $apiInstance->scheduleCreateSchedule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleCreateSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateScheduleRequestDto**](../Model/CreateScheduleRequestDto.md)| Request data |

### Return type

[**\Swagger\Client\Model\ResultSingleOfCreateScheduleResponseDto**](../Model/ResultSingleOfCreateScheduleResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCreateScheduleByNmi**
> \Swagger\Client\Model\ResultSingleOfCreateScheduleResponseDto scheduleCreateScheduleByNmi($body)

Creates a new schedule for a site

Supported power modes:  ChargeBattery, DischargeBattery, Auto, ImportPower, ExportPower, Conserve, Offgrid, Hibernate, BuyPower, SellPower, ForceChargeBattery, ForceDischargeBattery.  The argument to the desired power mode is not validated on creation and may be rejected by the inverter when the schedule starts. On schedule commencement, a power value for a mode is rejected only if it is not supported by the current hardware and software setup. A supported value that the inverter cannot comply with at the time is accepted.  For example: On schedule commencement, an SH system will reject Charge Battery @ 10000W but it will accept Charge Battery @ 1000W even when the battery is full (but it will not be charged as it is full).   For sites with multiple inverters the schedule is created for the 'original' first inverter on the site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateScheduleRequestDtoByNmi(); // \Swagger\Client\Model\CreateScheduleRequestDtoByNmi | Request data

try {
    $result = $apiInstance->scheduleCreateScheduleByNmi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleCreateScheduleByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateScheduleRequestDtoByNmi**](../Model/CreateScheduleRequestDtoByNmi.md)| Request data |

### Return type

[**\Swagger\Client\Model\ResultSingleOfCreateScheduleResponseDto**](../Model/ResultSingleOfCreateScheduleResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCreateScheduleBySerialNumber**
> \Swagger\Client\Model\ResultSingleOfCreateScheduleResponseDto scheduleCreateScheduleBySerialNumber($body)

Creates a new schedule for a serial number

Supported power modes:  ChargeBattery, DischargeBattery, Auto, ImportPower, ExportPower, Conserve, Offgrid, Hibernate, BuyPower, SellPower, ForceChargeBattery, ForceDischargeBattery.  The argument to the desired power mode is not validated on creation and may be rejected by the inverter when the schedule starts. On schedule commencement, a power value for a mode is rejected only if it is not supported by the current hardware and software setup. A supported value that the inverter cannot comply with at the time is accepted.  For example: On schedule commencement, an SH system will reject Charge Battery @ 10000W but it will accept Charge Battery @ 1000W even when the battery is full (but it will not be charged as it is full).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateScheduleRequestBySerialNumberDto(); // \Swagger\Client\Model\CreateScheduleRequestBySerialNumberDto | Request data

try {
    $result = $apiInstance->scheduleCreateScheduleBySerialNumber($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleCreateScheduleBySerialNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateScheduleRequestBySerialNumberDto**](../Model/CreateScheduleRequestBySerialNumberDto.md)| Request data |

### Return type

[**\Swagger\Client\Model\ResultSingleOfCreateScheduleResponseDto**](../Model/ResultSingleOfCreateScheduleResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetSchedulesByNmi**
> \Swagger\Client\Model\ResultSingleOfListSchedulesResponseWithNmiDto scheduleGetSchedulesByNmi($nmi, $include_stale)

Lists all schedules for a site

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier
$include_stale = true; // bool | If true then schedules in the past are returned. Please note that stale schedules are automatically removed without notice and even with this flag set the returned set is not a full recod of past schedules.

try {
    $result = $apiInstance->scheduleGetSchedulesByNmi($nmi, $include_stale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetSchedulesByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |
 **include_stale** | **bool**| If true then schedules in the past are returned. Please note that stale schedules are automatically removed without notice and even with this flag set the returned set is not a full recod of past schedules. | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleOfListSchedulesResponseWithNmiDto**](../Model/ResultSingleOfListSchedulesResponseWithNmiDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetSchedulesBySerialNumber**
> \Swagger\Client\Model\ResultSingleOfSchedulesBySerialNumberDto scheduleGetSchedulesBySerialNumber($serial_number, $include_stale)

Lists all schedules for an inverter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number
$include_stale = true; // bool | If true then schedules in the past are returned. Please note that stale schedules are automatically removed without notice and even with this flag set the returned set is not a full recod of past schedules.

try {
    $result = $apiInstance->scheduleGetSchedulesBySerialNumber($serial_number, $include_stale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetSchedulesBySerialNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |
 **include_stale** | **bool**| If true then schedules in the past are returned. Please note that stale schedules are automatically removed without notice and even with this flag set the returned set is not a full recod of past schedules. | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleOfSchedulesBySerialNumberDto**](../Model/ResultSingleOfSchedulesBySerialNumberDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetSchedulesBySite**
> \Swagger\Client\Model\ResultSingleOfListSchedulesResponseDto scheduleGetSchedulesBySite($site_id, $include_stale)

Lists all schedules for a site

For sites with multiple inverters data for the 'original' first inverter on the site is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | The site
$include_stale = true; // bool | If true then schedules in the past are returned. Please note that stale schedules are automatically removed without notice and even with this flag set the returned set is not a full recod of past schedules.

try {
    $result = $apiInstance->scheduleGetSchedulesBySite($site_id, $include_stale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetSchedulesBySite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The site |
 **include_stale** | **bool**| If true then schedules in the past are returned. Please note that stale schedules are automatically removed without notice and even with this flag set the returned set is not a full recod of past schedules. | [optional]

### Return type

[**\Swagger\Client\Model\ResultSingleOfListSchedulesResponseDto**](../Model/ResultSingleOfListSchedulesResponseDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetSingleScheduleInfo**
> \Swagger\Client\Model\ResultSingleOfScheduleDto scheduleGetSingleScheduleInfo($site_id, $schedule_id)

Gets information about a specific schedule for a site

This provides no more information than listing all schedules, and is only provided for completeness.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | Id of the site
$schedule_id = "schedule_id_example"; // string | The scedule

try {
    $result = $apiInstance->scheduleGetSingleScheduleInfo($site_id, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetSingleScheduleInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Id of the site |
 **schedule_id** | **string**| The scedule |

### Return type

[**\Swagger\Client\Model\ResultSingleOfScheduleDto**](../Model/ResultSingleOfScheduleDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetSingleScheduleInfoByNmi**
> \Swagger\Client\Model\ResultSingleOfScheduleWithNmiDto scheduleGetSingleScheduleInfoByNmi($nmi, $schedule_id)

Gets information about a specific schedule for a site

This provides no more information than listing all schedules, and is only provided for completeness.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nmi = "nmi_example"; // string | National Metering Identifier
$schedule_id = "schedule_id_example"; // string | The schedule

try {
    $result = $apiInstance->scheduleGetSingleScheduleInfoByNmi($nmi, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetSingleScheduleInfoByNmi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nmi** | **string**| National Metering Identifier |
 **schedule_id** | **string**| The schedule |

### Return type

[**\Swagger\Client\Model\ResultSingleOfScheduleWithNmiDto**](../Model/ResultSingleOfScheduleWithNmiDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetSingleScheduleInfoBySerialNumber**
> \Swagger\Client\Model\ResultSingleOfScheduleSnDto scheduleGetSingleScheduleInfoBySerialNumber($serial_number, $schedule_id)

Gets information about a specific schedule for an inverter

This provides no more information than listing all schedules, and is only provided for completeness.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serial_number = "serial_number_example"; // string | Serial number
$schedule_id = "schedule_id_example"; // string | The schedule

try {
    $result = $apiInstance->scheduleGetSingleScheduleInfoBySerialNumber($serial_number, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetSingleScheduleInfoBySerialNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number** | **string**| Serial number |
 **schedule_id** | **string**| The schedule |

### Return type

[**\Swagger\Client\Model\ResultSingleOfScheduleSnDto**](../Model/ResultSingleOfScheduleSnDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

