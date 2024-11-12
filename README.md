# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v2
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen
For more information, please visit [https://www.redbacktech.com](https://www.redbacktech.com)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.redbacktech.com/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AliveApi* | [**aliveGet**](docs/Api/AliveApi.md#aliveget) | **GET** /Api/v2/Alive | Returns \&quot;OK\&quot;.
*ConfigurationApi* | [**configurationGetConfiguration**](docs/Api/ConfigurationApi.md#configurationgetconfiguration) | **GET** /Api/v2/Configuration/{siteId}/Configuration | Gets configuration data for a site.
*ConfigurationApi* | [**configurationGetConfigurationByNmi**](docs/Api/ConfigurationApi.md#configurationgetconfigurationbynmi) | **GET** /Api/v2/Configuration/{nmi}/ConfigurationByNmi | Gets configuration data for a site.
*ConfigurationApi* | [**configurationGetConfigurationByNmi2**](docs/Api/ConfigurationApi.md#configurationgetconfigurationbynmi2) | **POST** /Api/v2/Configuration/Multiple/ConfigurationByNmi | Gets configuration data.
*ConfigurationApi* | [**configurationGetConfigurationBySerialNumber**](docs/Api/ConfigurationApi.md#configurationgetconfigurationbyserialnumber) | **GET** /Api/v2/Configuration/Configuration/BySerialNumber/{serialNumber} | Gets configuration data got an inverter.
*ConfigurationApi* | [**configurationGetConfigurationBySerialNumberMultiple**](docs/Api/ConfigurationApi.md#configurationgetconfigurationbyserialnumbermultiple) | **POST** /Api/v2/Configuration/Multiple/BySerialNumber/Configuration | Gets configuration data.
*ConfigurationApi* | [**configurationGetConfigurationMultiple**](docs/Api/ConfigurationApi.md#configurationgetconfigurationmultiple) | **POST** /Api/v2/Configuration/Multiple/Configuration | Gets configuration data.
*EnergyDataApi* | [**energyDataGet**](docs/Api/EnergyDataApi.md#energydataget) | **GET** /Api/v2/EnergyData | Gets available sites.
*EnergyDataApi* | [**energyDataGetDynamic20**](docs/Api/EnergyDataApi.md#energydatagetdynamic20) | **GET** /Api/v2/EnergyData/{siteId}/Dynamic | Gets dynamic data for a site.
*EnergyDataApi* | [**energyDataGetDynamicAt20**](docs/Api/EnergyDataApi.md#energydatagetdynamicat20) | **GET** /Api/v2/EnergyData/{siteId}/Dynamic/At/{timestamp} | Gets dynamic data for a site at a timestamp.
*EnergyDataApi* | [**energyDataGetDynamicAtByNmi20**](docs/Api/EnergyDataApi.md#energydatagetdynamicatbynmi20) | **GET** /Api/v2/EnergyData/{nmi}/DynamicByNmi/At/{timestamp} | Gets dynamic data for a site at a timestamp.
*EnergyDataApi* | [**energyDataGetDynamicAtBySerialNumber20**](docs/Api/EnergyDataApi.md#energydatagetdynamicatbyserialnumber20) | **GET** /Api/v2/EnergyData/{serialNumber}/Dynamic/BySerialNumber/At/{timestamp} | Gets dynamic data for an inverter at a timestamp.
*EnergyDataApi* | [**energyDataGetDynamicBetween20**](docs/Api/EnergyDataApi.md#energydatagetdynamicbetween20) | **GET** /Api/v2/EnergyData/{siteId}/Dynamic/From/{starttimestamp}/To/{endtimestamp} | Gets dynamic data records between timestamps.
*EnergyDataApi* | [**energyDataGetDynamicBetweenByNmi20**](docs/Api/EnergyDataApi.md#energydatagetdynamicbetweenbynmi20) | **GET** /Api/v2/EnergyData/{nmi}/DynamicByNmi/From/{starttimestamp}/To/{endtimestamp} | Gets dynamic data records between timestamps.
*EnergyDataApi* | [**energyDataGetDynamicBetweenBySerialNumber20**](docs/Api/EnergyDataApi.md#energydatagetdynamicbetweenbyserialnumber20) | **GET** /Api/v2/EnergyData/{serialNumber}/Dynamic/BySerialNumber/From/{starttimestamp}/To/{endtimestamp} | Gets dynamic data records for an inverter between timestamps.
*EnergyDataApi* | [**energyDataGetDynamicByNmi20**](docs/Api/EnergyDataApi.md#energydatagetdynamicbynmi20) | **GET** /Api/v2/EnergyData/{nmi}/DynamicByNmi | Gets dynamic data for a site.
*EnergyDataApi* | [**energyDataGetDynamicByNmi202**](docs/Api/EnergyDataApi.md#energydatagetdynamicbynmi202) | **POST** /Api/v2/EnergyData/Multiple/DynamicByNmi | Gets dynamic data for multiple sites. Maximum 100 per request.
*EnergyDataApi* | [**energyDataGetDynamicBySerialNumber20**](docs/Api/EnergyDataApi.md#energydatagetdynamicbyserialnumber20) | **GET** /Api/v2/EnergyData/Dynamic/BySerialNumber/{serialNumber} | Gets dynamic data for a serialNumber.
*EnergyDataApi* | [**energyDataGetDynamicInPeriod20**](docs/Api/EnergyDataApi.md#energydatagetdynamicinperiod20) | **GET** /Api/v2/EnergyData/{siteId}/Dynamic/PeriodBeforeUtc/{timestamp}/{periodInMinutes} | Gets dynamic data records for a site before a timestamp.
*EnergyDataApi* | [**energyDataGetDynamicInPeriodByNmi20**](docs/Api/EnergyDataApi.md#energydatagetdynamicinperiodbynmi20) | **GET** /Api/v2/EnergyData/{nmi}/Dynamic/PeriodBeforeUtcByNmi/{timestamp}/{periodInMinutes} | Gets dynamic data records before a timestamp.
*EnergyDataApi* | [**energyDataGetDynamicInPeriodBySerialNumber20**](docs/Api/EnergyDataApi.md#energydatagetdynamicinperiodbyserialnumber20) | **GET** /Api/v2/EnergyData/{serialNumber}/Dynamic/BySerialNumber/PeriodBeforeUtc/{timestamp}/{periodInMinutes} | Gets dynamic data records before a timestamp.
*EnergyDataApi* | [**energyDataGetDynamicLatestBeforeByNmi20**](docs/Api/EnergyDataApi.md#energydatagetdynamiclatestbeforebynmi20) | **GET** /Api/v2/EnergyData/{nmi}/Dynamic/LatestBeforeUtcByNmi/{timestamp}/{periodInMinutes} | Gets latest dynamic data for a site before given timestamp.
*EnergyDataApi* | [**energyDataGetDynamicLatestBeforeBySerialNumber20**](docs/Api/EnergyDataApi.md#energydatagetdynamiclatestbeforebyserialnumber20) | **GET** /Api/v2/EnergyData/{serialNumber}/Dynamic/BySerialNumber/LatestBeforeUtc/{timestamp}/{periodInMinutes} | Gets latest dynamic data for an inverter before given timestamp.
*EnergyDataApi* | [**energyDataGetDynamicMultiple20**](docs/Api/EnergyDataApi.md#energydatagetdynamicmultiple20) | **POST** /Api/v2/EnergyData/Multiple/Dynamic | Gets dynamic data for multiple sites. Maximum 100 per request.
*EnergyDataApi* | [**energyDataGetDynamicMultipleBySerialNumber20**](docs/Api/EnergyDataApi.md#energydatagetdynamicmultiplebyserialnumber20) | **POST** /Api/v2/EnergyData/Multiple/BySerialNumber/Dynamic | Gets dynamic data for multiple serial numbers. Maximum 100 per request.
*EnergyDataApi* | [**energyDataGetStatic**](docs/Api/EnergyDataApi.md#energydatagetstatic) | **GET** /Api/v2/EnergyData/{siteId}/Static | Gets static data for a site.
*EnergyDataApi* | [**energyDataGetStaticByNmi**](docs/Api/EnergyDataApi.md#energydatagetstaticbynmi) | **GET** /Api/v2/EnergyData/{nmi}/StaticByNmi | Gets static data for a site.
*EnergyDataApi* | [**energyDataGetStaticBySerialNumber**](docs/Api/EnergyDataApi.md#energydatagetstaticbyserialnumber) | **GET** /Api/v2/EnergyData/Static/BySerialNumber/{serialNumber} | Gets static data for an inverter.
*EnergyDataApi* | [**energyDataGetWithLayout**](docs/Api/EnergyDataApi.md#energydatagetwithlayout) | **GET** /Api/v2/EnergyData/With/Nodes | Gets available sites.
*ExampleApi* | [**exampleBadRequestExample**](docs/Api/ExampleApi.md#examplebadrequestexample) | **GET** /Api/v2/Example/BadRequest | Generates an example BadRequest response
*ExampleApi* | [**exampleBadRequestExample2**](docs/Api/ExampleApi.md#examplebadrequestexample2) | **GET** /Api/v2/Example/Error/400 | Generates an example BadRequest response
*ExampleApi* | [**exampleGetVersion20**](docs/Api/ExampleApi.md#examplegetversion20) | **GET** /Api/v2/Example/Version | Generates an example InternalServerError response
*ExampleApi* | [**exampleInternalServerErrorExample**](docs/Api/ExampleApi.md#exampleinternalservererrorexample) | **GET** /Api/v2/Example/InternalServerError | Generates an example InternalServerError response
*ExampleApi* | [**exampleInternalServerErrorExample2**](docs/Api/ExampleApi.md#exampleinternalservererrorexample2) | **GET** /Api/v2/Example/Error/500 | Generates an example InternalServerError response
*InverterApi* | [**inverterRegister**](docs/Api/InverterApi.md#inverterregister) | **POST** /Api/v2/Inverter/Register | Registers an inverter.
*InverterApi* | [**inverterSetNmi**](docs/Api/InverterApi.md#invertersetnmi) | **POST** /Api/v2/Inverter/{serialNumber}/Nmi | Set the NMI for an inverter that was initially commissioned without one.
*OperatingEnvelopeApi* | [**operatingEnvelopeCreate**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopecreate) | **POST** /Api/v2/OperatingEnvelope/Create/By/Site | Creates a new operating envelope for a site
*OperatingEnvelopeApi* | [**operatingEnvelopeCreateByGroup**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopecreatebygroup) | **POST** /Api/v2/OperatingEnvelope/Add/By/Group | Creates a new operating envelope for a group
*OperatingEnvelopeApi* | [**operatingEnvelopeCreateByNmi**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopecreatebynmi) | **POST** /Api/v2/OperatingEnvelope/Create/By/Nmi | Creates a new operating envelope for a site
*OperatingEnvelopeApi* | [**operatingEnvelopeCreateMultiple**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopecreatemultiple) | **POST** /Api/v2/OperatingEnvelope/Create/Multiple/By/Site | Creates operating envelopes.  Returns 200 OK even if some or all results have errors
*OperatingEnvelopeApi* | [**operatingEnvelopeCreateMultipleByNmi**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopecreatemultiplebynmi) | **POST** /Api/v2/OperatingEnvelope/Create/Multiple/By/Nmi | Creates new operating envelopes.  Returns 200 OK even if some or all results have errors
*OperatingEnvelopeApi* | [**operatingEnvelopeDeleteOperatingEnvelope**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopedeleteoperatingenvelope) | **DELETE** /Api/v2/OperatingEnvelope/By/EventId/{eventId} | Deletes an operating envelope
*OperatingEnvelopeApi* | [**operatingEnvelopeDeleteOperatingEnvelope2**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopedeleteoperatingenvelope2) | **DELETE** /Api/v2/OperatingEnvelope/All | Deletes all operating envelopes
*OperatingEnvelopeApi* | [**operatingEnvelopeGetByEventId**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopegetbyeventid) | **GET** /Api/v2/OperatingEnvelope/By/EventId/{eventId} | Lists operating envelopes with a provided eventId.
*OperatingEnvelopeApi* | [**operatingEnvelopeGetByGroup**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopegetbygroup) | **GET** /Api/v2/OperatingEnvelope/By/Group/{group} | Lists operating envelopes for a group
*OperatingEnvelopeApi* | [**operatingEnvelopeGetByNmi**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopegetbynmi) | **GET** /Api/v2/OperatingEnvelope/By/Nmi/{nmi} | Lists operating envelopes for a site
*OperatingEnvelopeApi* | [**operatingEnvelopeGetBySite**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopegetbysite) | **GET** /Api/v2/OperatingEnvelope/By/Site/{siteId} | Lists operating envelopes for a site
*OperatingEnvelopeApi* | [**operatingEnvelopeGetReport**](docs/Api/OperatingEnvelopeApi.md#operatingenvelopegetreport) | **GET** /Api/v2/OperatingEnvelope/ComplianceReport/{reportid} | Gets compliance report metadata. For field definitions please OperatingEnvelopeComplianceReportRow model.
*OperatingEnvelopeApi* | [**operatingEnvelopeRequestReport**](docs/Api/OperatingEnvelopeApi.md#operatingenveloperequestreport) | **POST** /Api/v2/OperatingEnvelope/RequestComplianceReport/By/Group/{group} | Requests a compliance report. For field definitions please OperatingEnvelopeComplianceReportRow model.
*ScheduleApi* | [**scheduleCancelSchedule**](docs/Api/ScheduleApi.md#schedulecancelschedule) | **DELETE** /Api/v2/Schedule/By/Site/{siteId}/{scheduleId} | Deletes a schedule
*ScheduleApi* | [**scheduleCancelScheduleByNmi**](docs/Api/ScheduleApi.md#schedulecancelschedulebynmi) | **DELETE** /Api/v2/Schedule/By/Nmi/{nmi}/{scheduleId} | Deletes a schedule
*ScheduleApi* | [**scheduleCancelScheduleForSerialNumber**](docs/Api/ScheduleApi.md#schedulecancelscheduleforserialnumber) | **DELETE** /Api/v2/Schedule/By/SerialNumber/{serialNumber}/{scheduleId} | Deletes a schedule
*ScheduleApi* | [**scheduleCreateSchedule**](docs/Api/ScheduleApi.md#schedulecreateschedule) | **POST** /Api/v2/Schedule/Create | Creates a new schedule for a site
*ScheduleApi* | [**scheduleCreateScheduleByNmi**](docs/Api/ScheduleApi.md#schedulecreateschedulebynmi) | **POST** /Api/v2/Schedule/Create/By/Nmi | Creates a new schedule for a site
*ScheduleApi* | [**scheduleCreateScheduleBySerialNumber**](docs/Api/ScheduleApi.md#schedulecreateschedulebyserialnumber) | **POST** /Api/v2/Schedule/Create/By/SerialNumber | Creates a new schedule for a serial number
*ScheduleApi* | [**scheduleGetSchedulesByNmi**](docs/Api/ScheduleApi.md#schedulegetschedulesbynmi) | **GET** /Api/v2/Schedule/By/Nmi/{nmi} | Lists all schedules for a site
*ScheduleApi* | [**scheduleGetSchedulesBySerialNumber**](docs/Api/ScheduleApi.md#schedulegetschedulesbyserialnumber) | **GET** /Api/v2/Schedule/By/SerialNumber/{serialNumber} | Lists all schedules for an inverter
*ScheduleApi* | [**scheduleGetSchedulesBySite**](docs/Api/ScheduleApi.md#schedulegetschedulesbysite) | **GET** /Api/v2/Schedule/By/Site/{siteId} | Lists all schedules for a site
*ScheduleApi* | [**scheduleGetSingleScheduleInfo**](docs/Api/ScheduleApi.md#schedulegetsinglescheduleinfo) | **GET** /Api/v2/Schedule/By/Site/{siteId}/{scheduleId} | Gets information about a specific schedule for a site
*ScheduleApi* | [**scheduleGetSingleScheduleInfoByNmi**](docs/Api/ScheduleApi.md#schedulegetsinglescheduleinfobynmi) | **GET** /Api/v2/Schedule/By/Nmi/{nmi}/{scheduleId} | Gets information about a specific schedule for a site
*ScheduleApi* | [**scheduleGetSingleScheduleInfoBySerialNumber**](docs/Api/ScheduleApi.md#schedulegetsinglescheduleinfobyserialnumber) | **GET** /Api/v2/Schedule/By/SerialNumber/{serialNumber}/{scheduleId} | Gets information about a specific schedule for an inverter
*SiteApi* | [**siteGetSiteId**](docs/Api/SiteApi.md#sitegetsiteid) | **GET** /Api/v2/Site/SiteId/By/SerialNumber/{serialNumber} | Gets site id
*SiteApi* | [**siteGetSiteIdByNmi**](docs/Api/SiteApi.md#sitegetsiteidbynmi) | **GET** /Api/v2/Site/SiteId/By/Nmi/{nmi} | Gets site id

## Documentation For Models

 - [AllOfCreateScheduleRequestBySerialNumberDtoDesiredMode](docs/Model/AllOfCreateScheduleRequestBySerialNumberDtoDesiredMode.md)
 - [AllOfCreateScheduleRequestDtoByNmiDesiredMode](docs/Model/AllOfCreateScheduleRequestDtoByNmiDesiredMode.md)
 - [AllOfCreateScheduleRequestDtoDesiredMode](docs/Model/AllOfCreateScheduleRequestDtoDesiredMode.md)
 - [AllOfDailyScheduleDtoDaysActive](docs/Model/AllOfDailyScheduleDtoDaysActive.md)
 - [AllOfDailyScheduleDtoDesiredMode](docs/Model/AllOfDailyScheduleDtoDesiredMode.md)
 - [AllOfDailyScheduleSnDtoDaysActive](docs/Model/AllOfDailyScheduleSnDtoDaysActive.md)
 - [AllOfDailyScheduleSnDtoDesiredMode](docs/Model/AllOfDailyScheduleSnDtoDesiredMode.md)
 - [AllOfDailyScheduleWithNmiDtoDaysActive](docs/Model/AllOfDailyScheduleWithNmiDtoDaysActive.md)
 - [AllOfDailyScheduleWithNmiDtoDesiredMode](docs/Model/AllOfDailyScheduleWithNmiDtoDesiredMode.md)
 - [AllOfInverterSiteDynamicDataSingleInverterPowerMode](docs/Model/AllOfInverterSiteDynamicDataSingleInverterPowerMode.md)
 - [AllOfInverterSiteDynamicDataStatus](docs/Model/AllOfInverterSiteDynamicDataStatus.md)
 - [AllOfInverterSiteStaticDataLocation](docs/Model/AllOfInverterSiteStaticDataLocation.md)
 - [AllOfInverterSiteStaticDataRemoteAccessConnection](docs/Model/AllOfInverterSiteStaticDataRemoteAccessConnection.md)
 - [AllOfInverterSiteStaticDataSiteDetails](docs/Model/AllOfInverterSiteStaticDataSiteDetails.md)
 - [AllOfInverterSiteStaticDataSolarRetailer](docs/Model/AllOfInverterSiteStaticDataSolarRetailer.md)
 - [AllOfInverterSiteStaticDataStatus](docs/Model/AllOfInverterSiteStaticDataStatus.md)
 - [AllOfOperatingEnvelopeReportDtoColumnDefinitions](docs/Model/AllOfOperatingEnvelopeReportDtoColumnDefinitions.md)
 - [AllOfOperatingEnvelopeReportDtoStatus](docs/Model/AllOfOperatingEnvelopeReportDtoStatus.md)
 - [AllOfPhaseId](docs/Model/AllOfPhaseId.md)
 - [AllOfRedbackPowerModeDto2InverterMode](docs/Model/AllOfRedbackPowerModeDto2InverterMode.md)
 - [AllOfRedbackPowerModeDtoInverterMode](docs/Model/AllOfRedbackPowerModeDtoInverterMode.md)
 - [AllOfRegisterInverterPanelConfigurationDtoPanelDirection](docs/Model/AllOfRegisterInverterPanelConfigurationDtoPanelDirection.md)
 - [AllOfRegisterInverterRequestDtoAddress](docs/Model/AllOfRegisterInverterRequestDtoAddress.md)
 - [AllOfRegisterInverterRequestDtoIdentity](docs/Model/AllOfRegisterInverterRequestDtoIdentity.md)
 - [AllOfRegisterInverterRequestDtoSolarInformation](docs/Model/AllOfRegisterInverterRequestDtoSolarInformation.md)
 - [AllOfResultMultipleElementOfInverterConfigurationData](docs/Model/AllOfResultMultipleElementOfInverterConfigurationData.md)
 - [AllOfResultSingleOfCreateOperatingEnvelopeResponseDtoData](docs/Model/AllOfResultSingleOfCreateOperatingEnvelopeResponseDtoData.md)
 - [AllOfResultSingleOfCreateScheduleResponseDtoData](docs/Model/AllOfResultSingleOfCreateScheduleResponseDtoData.md)
 - [AllOfResultSingleOfInverterConfigurationData](docs/Model/AllOfResultSingleOfInverterConfigurationData.md)
 - [AllOfResultSingleOfInverterSiteDynamicDataData](docs/Model/AllOfResultSingleOfInverterSiteDynamicDataData.md)
 - [AllOfResultSingleOfListSchedulesResponseDtoData](docs/Model/AllOfResultSingleOfListSchedulesResponseDtoData.md)
 - [AllOfResultSingleOfListSchedulesResponseWithNmiDtoData](docs/Model/AllOfResultSingleOfListSchedulesResponseWithNmiDtoData.md)
 - [AllOfResultSingleOfOperatingEnvelopeReportDtoData](docs/Model/AllOfResultSingleOfOperatingEnvelopeReportDtoData.md)
 - [AllOfResultSingleOfRegisterInverterResponseDtoData](docs/Model/AllOfResultSingleOfRegisterInverterResponseDtoData.md)
 - [AllOfResultSingleOfScheduleDtoData](docs/Model/AllOfResultSingleOfScheduleDtoData.md)
 - [AllOfResultSingleOfScheduleSnDtoData](docs/Model/AllOfResultSingleOfScheduleSnDtoData.md)
 - [AllOfResultSingleOfScheduleWithNmiDtoData](docs/Model/AllOfResultSingleOfScheduleWithNmiDtoData.md)
 - [AllOfResultSingleOfSchedulesBySerialNumberDtoData](docs/Model/AllOfResultSingleOfSchedulesBySerialNumberDtoData.md)
 - [AllOfResultSingleOfStaticOnlyViewData](docs/Model/AllOfResultSingleOfStaticOnlyViewData.md)
 - [AllOfResultSingleWithTimeTravelOfInverterSiteDynamicDataData](docs/Model/AllOfResultSingleWithTimeTravelOfInverterSiteDynamicDataData.md)
 - [AllOfResultSingleWithTimeTravelOfInverterSiteDynamicDataMetadata](docs/Model/AllOfResultSingleWithTimeTravelOfInverterSiteDynamicDataMetadata.md)
 - [AllOfScheduleDtoDesiredMode](docs/Model/AllOfScheduleDtoDesiredMode.md)
 - [AllOfScheduleSnDtoDesiredMode](docs/Model/AllOfScheduleSnDtoDesiredMode.md)
 - [AllOfScheduleWithNmiDtoDesiredMode](docs/Model/AllOfScheduleWithNmiDtoDesiredMode.md)
 - [AllOfStaticOnlyViewStaticData](docs/Model/AllOfStaticOnlyViewStaticData.md)
 - [CreateOperatingEnvelopeResponseDto](docs/Model/CreateOperatingEnvelopeResponseDto.md)
 - [CreateOperatingEnvelopeWithGroupRequestDto](docs/Model/CreateOperatingEnvelopeWithGroupRequestDto.md)
 - [CreateOperatingEnvelopeWithNmiRequestDto](docs/Model/CreateOperatingEnvelopeWithNmiRequestDto.md)
 - [CreateOperatingEnvelopeWithSiteIdRequestDto](docs/Model/CreateOperatingEnvelopeWithSiteIdRequestDto.md)
 - [CreateScheduleRequestBySerialNumberDto](docs/Model/CreateScheduleRequestBySerialNumberDto.md)
 - [CreateScheduleRequestDto](docs/Model/CreateScheduleRequestDto.md)
 - [CreateScheduleRequestDtoByNmi](docs/Model/CreateScheduleRequestDtoByNmi.md)
 - [CreateScheduleResponseDto](docs/Model/CreateScheduleResponseDto.md)
 - [DailyScheduleDto](docs/Model/DailyScheduleDto.md)
 - [DailyScheduleSnDto](docs/Model/DailyScheduleSnDto.md)
 - [DailyScheduleWithNmiDto](docs/Model/DailyScheduleWithNmiDto.md)
 - [EnergyNodeSimple](docs/Model/EnergyNodeSimple.md)
 - [EnergyNodeStaticData](docs/Model/EnergyNodeStaticData.md)
 - [EnergyValueMetadata](docs/Model/EnergyValueMetadata.md)
 - [GetOperatingEnvelopeDto](docs/Model/GetOperatingEnvelopeDto.md)
 - [HouseNodeStaticData](docs/Model/HouseNodeStaticData.md)
 - [InverterConfiguration](docs/Model/InverterConfiguration.md)
 - [InverterModeValuePublic](docs/Model/InverterModeValuePublic.md)
 - [InverterNodeStaticData](docs/Model/InverterNodeStaticData.md)
 - [InverterSiteDynamicData](docs/Model/InverterSiteDynamicData.md)
 - [InverterSiteDynamicDataSingleInverter](docs/Model/InverterSiteDynamicDataSingleInverter.md)
 - [InverterSiteStaticData](docs/Model/InverterSiteStaticData.md)
 - [JobRunStatus](docs/Model/JobRunStatus.md)
 - [ListSchedulesResponseDto](docs/Model/ListSchedulesResponseDto.md)
 - [ListSchedulesResponseWithNmiDto](docs/Model/ListSchedulesResponseWithNmiDto.md)
 - [Location](docs/Model/Location.md)
 - [OperatingEnvelopeComplianceReportRow](docs/Model/OperatingEnvelopeComplianceReportRow.md)
 - [OperatingEnvelopeReportDto](docs/Model/OperatingEnvelopeReportDto.md)
 - [OperatingEnvelopeStatus](docs/Model/OperatingEnvelopeStatus.md)
 - [PanelDirection](docs/Model/PanelDirection.md)
 - [Phase](docs/Model/Phase.md)
 - [PhaseId](docs/Model/PhaseId.md)
 - [RedbackPowerModeDto](docs/Model/RedbackPowerModeDto.md)
 - [RedbackPowerModeDto2](docs/Model/RedbackPowerModeDto2.md)
 - [RegisterInverterAddressDto](docs/Model/RegisterInverterAddressDto.md)
 - [RegisterInverterOwnerDto](docs/Model/RegisterInverterOwnerDto.md)
 - [RegisterInverterPanelConfigurationDto](docs/Model/RegisterInverterPanelConfigurationDto.md)
 - [RegisterInverterRequestDto](docs/Model/RegisterInverterRequestDto.md)
 - [RegisterInverterResponseDto](docs/Model/RegisterInverterResponseDto.md)
 - [RegisterInverterSolarDto](docs/Model/RegisterInverterSolarDto.md)
 - [RemoteAccessConnection](docs/Model/RemoteAccessConnection.md)
 - [ResultMultipleElementOfInverterConfiguration](docs/Model/ResultMultipleElementOfInverterConfiguration.md)
 - [ResultMultipleOfCreateOperatingEnvelopeResponseDto](docs/Model/ResultMultipleOfCreateOperatingEnvelopeResponseDto.md)
 - [ResultMultipleOfGetOperatingEnvelopeDto](docs/Model/ResultMultipleOfGetOperatingEnvelopeDto.md)
 - [ResultMultipleOfInverterSiteDynamicData](docs/Model/ResultMultipleOfInverterSiteDynamicData.md)
 - [ResultMultipleOfResultMultipleElementOfInverterConfiguration](docs/Model/ResultMultipleOfResultMultipleElementOfInverterConfiguration.md)
 - [ResultPagedOfEnergyNodeSimple](docs/Model/ResultPagedOfEnergyNodeSimple.md)
 - [ResultPagedOfString](docs/Model/ResultPagedOfString.md)
 - [ResultSingleOfBoolean](docs/Model/ResultSingleOfBoolean.md)
 - [ResultSingleOfCreateOperatingEnvelopeResponseDto](docs/Model/ResultSingleOfCreateOperatingEnvelopeResponseDto.md)
 - [ResultSingleOfCreateScheduleResponseDto](docs/Model/ResultSingleOfCreateScheduleResponseDto.md)
 - [ResultSingleOfDecimal](docs/Model/ResultSingleOfDecimal.md)
 - [ResultSingleOfInverterConfiguration](docs/Model/ResultSingleOfInverterConfiguration.md)
 - [ResultSingleOfInverterSiteDynamicData](docs/Model/ResultSingleOfInverterSiteDynamicData.md)
 - [ResultSingleOfListSchedulesResponseDto](docs/Model/ResultSingleOfListSchedulesResponseDto.md)
 - [ResultSingleOfListSchedulesResponseWithNmiDto](docs/Model/ResultSingleOfListSchedulesResponseWithNmiDto.md)
 - [ResultSingleOfOperatingEnvelopeReportDto](docs/Model/ResultSingleOfOperatingEnvelopeReportDto.md)
 - [ResultSingleOfRegisterInverterResponseDto](docs/Model/ResultSingleOfRegisterInverterResponseDto.md)
 - [ResultSingleOfScheduleDto](docs/Model/ResultSingleOfScheduleDto.md)
 - [ResultSingleOfScheduleSnDto](docs/Model/ResultSingleOfScheduleSnDto.md)
 - [ResultSingleOfScheduleWithNmiDto](docs/Model/ResultSingleOfScheduleWithNmiDto.md)
 - [ResultSingleOfSchedulesBySerialNumberDto](docs/Model/ResultSingleOfSchedulesBySerialNumberDto.md)
 - [ResultSingleOfStaticOnlyView](docs/Model/ResultSingleOfStaticOnlyView.md)
 - [ResultSingleOfString](docs/Model/ResultSingleOfString.md)
 - [ResultSingleWithTimeTravelOfInverterSiteDynamicData](docs/Model/ResultSingleWithTimeTravelOfInverterSiteDynamicData.md)
 - [ScheduleDays](docs/Model/ScheduleDays.md)
 - [ScheduleDto](docs/Model/ScheduleDto.md)
 - [ScheduleSnDto](docs/Model/ScheduleSnDto.md)
 - [ScheduleWithNmiDto](docs/Model/ScheduleWithNmiDto.md)
 - [SchedulesBySerialNumberDto](docs/Model/SchedulesBySerialNumberDto.md)
 - [SiteDetails](docs/Model/SiteDetails.md)
 - [SiteStatus](docs/Model/SiteStatus.md)
 - [SolarRetailer](docs/Model/SolarRetailer.md)
 - [StaticOnlyView](docs/Model/StaticOnlyView.md)
 - [TimeTravelMetadata](docs/Model/TimeTravelMetadata.md)

## Documentation For Authorization


## Bearer

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 


## Author

ITOps@redbacktech.com

