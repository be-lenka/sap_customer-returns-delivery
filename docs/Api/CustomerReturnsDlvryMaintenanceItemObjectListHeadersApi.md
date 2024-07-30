# BeLenka\SAP\CustomerReturnsDelivery\CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURNS_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet()**](CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi.md#aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_SerialDeliveryItem | Reads maintenance item object lists of specific customer returns delivery item. |
| [**aReturnsDeliverySrlNmbrMaintenanceItemObjectListToMaintenanceItemObjectGet()**](CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi.md#aReturnsDeliverySrlNmbrMaintenanceItemObjectListToMaintenanceItemObjectGet) | **GET** /A_ReturnsDeliverySrlNmbr({MaintenanceItemObjectList})/to_MaintenanceItemObject | Reads maintenance item objects of specific customer returns delivery maintenance item object list. |


## `aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet()`

```php
aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet($delivery_document, $delivery_document_item, $select, $expand): \BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliverySrlNmbrType
```

Reads maintenance item object lists of specific customer returns delivery item.

Reads all maintenance item object lists of a specific customer returns delivery item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\CustomerReturnsDelivery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\CustomerReturnsDelivery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet($delivery_document, $delivery_document_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliverySrlNmbrType**](../Model/AReturnsDeliverySrlNmbrType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliverySrlNmbrMaintenanceItemObjectListToMaintenanceItemObjectGet()`

```php
aReturnsDeliverySrlNmbrMaintenanceItemObjectListToMaintenanceItemObjectGet($maintenance_item_object_list, $filter, $inlinecount, $select): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper4
```

Reads maintenance item objects of specific customer returns delivery maintenance item object list.

Reads all maintenance item objects of a specific customer returns delivery maintenance item object list including, for example, the serial numbers. You can narrow down the result by specifying filter conditions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\CustomerReturnsDelivery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\CustomerReturnsDelivery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maintenance_item_object_list = 42; // string | Object list
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aReturnsDeliverySrlNmbrMaintenanceItemObjectListToMaintenanceItemObjectGet($maintenance_item_object_list, $filter, $inlinecount, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi->aReturnsDeliverySrlNmbrMaintenanceItemObjectListToMaintenanceItemObjectGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **maintenance_item_object_list** | **string**| Object list | |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper4**](../Model/Wrapper4.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
