# Issue

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key. | [optional] 
**reference_num** | **string** | Reference number. | [optional] 
**members_id** | **string** | The primary key of the related *Merchant*. | 
**members_name** | **string** |  | [optional] 
**members_email** | **string** |  | [optional] 
**members_locations_id** | **string** | The primary key of the related *MerchantLocation*. | 
**members_locations_name** | **string** |  | [optional] 
**members_users_id** | **string** | The primary key of the related *MerchantUser*. | 
**members_users_name** | **string** |  | [optional] 
**members_users_email** | **string** |  | [optional] 
**type** | **string** | Type. | [optional] 
**category** | **string** | Category. | [optional] 
**details** | **string** | Details. | [optional] 
**status** | **string** | Status. | [optional] 
**job** | **string** | Job type. | [optional] 
**resolution** | **string** | Resolution type. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date created. | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | Date last updated. | [optional] 
**enroute_time** | [**\DateTime**](\DateTime.md) | Actual technician travel time. | [optional] 
**scheduled_time** | [**\DateTime**](\DateTime.md) | Date/time scheduled. | [optional] 
**arrival_time** | [**\DateTime**](\DateTime.md) | Technician arrival time. | [optional] 
**departure_time** | [**\DateTime**](\DateTime.md) | Technician departure time. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


