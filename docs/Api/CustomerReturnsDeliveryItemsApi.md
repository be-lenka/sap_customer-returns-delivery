# BeLenka\SAP\CustomerReturnsDelivery\CustomerReturnsDeliveryItemsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURNS_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet()**](CustomerReturnsDeliveryItemsApi.md#aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentItem | Reads items of specific customer returns delivery header. |
| [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete()**](CustomerReturnsDeliveryItemsApi.md#aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete) | **DELETE** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Deletes customer returns delivery items. |
| [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet()**](CustomerReturnsDeliveryItemsApi.md#aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Reads customer returns delivery items. |
| [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch()**](CustomerReturnsDeliveryItemsApi.md#aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch) | **PATCH** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Updates customer returns delivery items. |
| [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet()**](CustomerReturnsDeliveryItemsApi.md#aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DocumentFlow | Reads document flows of specific customer returns delivery item. |
| [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet()**](CustomerReturnsDeliveryItemsApi.md#aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_SerialDeliveryItem | Reads maintenance item object lists of specific customer returns delivery item. |
| [**aReturnsDeliveryItemGet()**](CustomerReturnsDeliveryItemsApi.md#aReturnsDeliveryItemGet) | **GET** /A_ReturnsDeliveryItem | Reads customer returns delivery items. |
| [**createBatchSplitItemPost()**](CustomerReturnsDeliveryItemsApi.md#createBatchSplitItemPost) | **POST** /CreateBatchSplitItem | Creates an additional batch split item for an customer returns delivery item. |


## `aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet()`

```php
aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet($delivery_document, $top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper1
```

Reads items of specific customer returns delivery header.

Reads all items of a specific customer returns delivery header. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$search = 'search_example'; // string | Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet($delivery_document, $top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryItemsApi->aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **search** | **string**| Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete()`

```php
aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete($delivery_document, $delivery_document_item)
```

Deletes customer returns delivery items.

Deletes customer returns delivery items using the delivery document number and the delivery document item number.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item

try {
    $apiInstance->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete($delivery_document, $delivery_document_item);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryItemsApi->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet()`

```php
aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet($delivery_document, $delivery_document_item, $select, $expand): \BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryItemType
```

Reads customer returns delivery items.

Reads all customer returns delivery items. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryItemsApi(
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
    $result = $apiInstance->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet($delivery_document, $delivery_document_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryItemsApi->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryItemType**](../Model/AReturnsDeliveryItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch()`

```php
aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch($delivery_document, $delivery_document_item, $modified_a_returns_delivery_item_type)
```

Updates customer returns delivery items.

Updates customer returns delivery items using the delivery document and the delivery document item.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$modified_a_returns_delivery_item_type = new \BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryItemType(); // \BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryItemType | New property values

try {
    $apiInstance->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch($delivery_document, $delivery_document_item, $modified_a_returns_delivery_item_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryItemsApi->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **modified_a_returns_delivery_item_type** | [**\BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryItemType**](../Model/ModifiedAReturnsDeliveryItemType.md)| New property values | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet()`

```php
aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet($delivery_document, $delivery_document_item, $filter, $inlinecount, $select): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper3
```

Reads document flows of specific customer returns delivery item.

Reads all document flows of a specific customer returns delivery item.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet($delivery_document, $delivery_document_item, $filter, $inlinecount, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryItemsApi->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryItemsApi(
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
    echo 'Exception when calling CustomerReturnsDeliveryItemsApi->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet: ', $e->getMessage(), PHP_EOL;
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

## `aReturnsDeliveryItemGet()`

```php
aReturnsDeliveryItemGet($top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper1
```

Reads customer returns delivery items.

Reads all customer returns delivery items. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$search = 'search_example'; // string | Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aReturnsDeliveryItemGet($top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryItemsApi->aReturnsDeliveryItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **search** | **string**| Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBatchSplitItemPost()`

```php
createBatchSplitItemPost($delivery_quantity_unit, $delivery_document_item, $delivery_document, $batch, $actual_delivery_quantity, $shelf_life_expiration_date, $manufacture_date, $pick_quantity_in_sales_uom): \BeLenka\SAP\CustomerReturnsDelivery\Model\CreatedDeliveryItem
```

Creates an additional batch split item for an customer returns delivery item.

Creates an additional batch split item for the specified customer returns delivery item and optionally sets the delivery quantity and batch-related fields.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_quantity_unit = 'delivery_quantity_unit_example'; // string | Value needs to be enclosed in single quotes
$delivery_document_item = 'delivery_document_item_example'; // string | Value needs to be enclosed in single quotes
$delivery_document = 'delivery_document_example'; // string | Value needs to be enclosed in single quotes
$batch = 'batch_example'; // string | Value needs to be enclosed in single quotes
$actual_delivery_quantity = 0M; // string | Value needs to be suffixed with `M`
$shelf_life_expiration_date = 'shelf_life_expiration_date_example'; // string | Time Stamp   (Value needs to be enclosed in single quotes and prefixed with `datetime`, e.g. `datetime'2017-12-31T00:00'`)
$manufacture_date = 'manufacture_date_example'; // string | Time Stamp   (Value needs to be enclosed in single quotes and prefixed with `datetime`, e.g. `datetime'2017-12-31T00:00'`)
$pick_quantity_in_sales_uom = 0M; // string | Value needs to be suffixed with `M`

try {
    $result = $apiInstance->createBatchSplitItemPost($delivery_quantity_unit, $delivery_document_item, $delivery_document, $batch, $actual_delivery_quantity, $shelf_life_expiration_date, $manufacture_date, $pick_quantity_in_sales_uom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryItemsApi->createBatchSplitItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_quantity_unit** | **string**| Value needs to be enclosed in single quotes | |
| **delivery_document_item** | **string**| Value needs to be enclosed in single quotes | |
| **delivery_document** | **string**| Value needs to be enclosed in single quotes | |
| **batch** | **string**| Value needs to be enclosed in single quotes | |
| **actual_delivery_quantity** | **string**| Value needs to be suffixed with &#x60;M&#x60; | |
| **shelf_life_expiration_date** | **string**| Time Stamp   (Value needs to be enclosed in single quotes and prefixed with &#x60;datetime&#x60;, e.g. &#x60;datetime&#39;2017-12-31T00:00&#39;&#x60;) | [optional] |
| **manufacture_date** | **string**| Time Stamp   (Value needs to be enclosed in single quotes and prefixed with &#x60;datetime&#x60;, e.g. &#x60;datetime&#39;2017-12-31T00:00&#39;&#x60;) | [optional] |
| **pick_quantity_in_sales_uom** | **string**| Value needs to be suffixed with &#x60;M&#x60; | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\CreatedDeliveryItem**](../Model/CreatedDeliveryItem.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
