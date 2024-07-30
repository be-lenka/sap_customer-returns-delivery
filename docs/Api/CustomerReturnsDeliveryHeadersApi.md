# BeLenka\SAP\CustomerReturnsDelivery\CustomerReturnsDeliveryHeadersApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURNS_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aReturnsDeliveryHeaderDeliveryDocumentDelete()**](CustomerReturnsDeliveryHeadersApi.md#aReturnsDeliveryHeaderDeliveryDocumentDelete) | **DELETE** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Deletes customer returns deliveries. |
| [**aReturnsDeliveryHeaderDeliveryDocumentGet()**](CustomerReturnsDeliveryHeadersApi.md#aReturnsDeliveryHeaderDeliveryDocumentGet) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Reads customer returns delivery headers. |
| [**aReturnsDeliveryHeaderDeliveryDocumentPatch()**](CustomerReturnsDeliveryHeadersApi.md#aReturnsDeliveryHeaderDeliveryDocumentPatch) | **PATCH** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Updates customer returns delivery headers. |
| [**aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet()**](CustomerReturnsDeliveryHeadersApi.md#aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentItem | Reads items of specific customer returns delivery header. |
| [**aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet()**](CustomerReturnsDeliveryHeadersApi.md#aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentPartner | Reads partners of specific customer returns delivery header. |
| [**aReturnsDeliveryHeaderGet()**](CustomerReturnsDeliveryHeadersApi.md#aReturnsDeliveryHeaderGet) | **GET** /A_ReturnsDeliveryHeader | Reads customer returns delivery headers. |
| [**aReturnsDeliveryHeaderPost()**](CustomerReturnsDeliveryHeadersApi.md#aReturnsDeliveryHeaderPost) | **POST** /A_ReturnsDeliveryHeader | Creates customer returns deliveries with reference to preceding document. |
| [**confirmPutawayAllItemsPost()**](CustomerReturnsDeliveryHeadersApi.md#confirmPutawayAllItemsPost) | **POST** /ConfirmPutawayAllItems | Confirms putaway quantity of customer returns delivery items. |
| [**confirmPutawayOneItemPost()**](CustomerReturnsDeliveryHeadersApi.md#confirmPutawayOneItemPost) | **POST** /ConfirmPutawayOneItem | Confirms putaway quantity of customer returns delivery item. |
| [**postGoodsReceiptPost()**](CustomerReturnsDeliveryHeadersApi.md#postGoodsReceiptPost) | **POST** /PostGoodsReceipt | Posts goods receipt for customer returns delivery. |
| [**putawayAllItemsPost()**](CustomerReturnsDeliveryHeadersApi.md#putawayAllItemsPost) | **POST** /PutawayAllItems | Takes over delivery quantity as putaway quantity for all customer returns delivery items. |
| [**putawayOneItemPost()**](CustomerReturnsDeliveryHeadersApi.md#putawayOneItemPost) | **POST** /PutawayOneItem | Takes over delivery quantity as putaway quantity for specified customer returns delivery item. |
| [**putawayOneItemWithBaseQuantityPost()**](CustomerReturnsDeliveryHeadersApi.md#putawayOneItemWithBaseQuantityPost) | **POST** /PutawayOneItemWithBaseQuantity | Sets putaway quantity and delivery quantity for customer returns delivery item. |
| [**putawayOneItemWithSalesQuantityPost()**](CustomerReturnsDeliveryHeadersApi.md#putawayOneItemWithSalesQuantityPost) | **POST** /PutawayOneItemWithSalesQuantity | Sets putaway quantity and delivery quantity for customer returns delivery item. |
| [**reverseGoodsReceiptPost()**](CustomerReturnsDeliveryHeadersApi.md#reverseGoodsReceiptPost) | **POST** /ReverseGoodsReceipt | Reverses goods receipt for customer returns delivery. |
| [**setPutawayQuantityWithBaseQuantityPost()**](CustomerReturnsDeliveryHeadersApi.md#setPutawayQuantityWithBaseQuantityPost) | **POST** /SetPutawayQuantityWithBaseQuantity | Sets putaway quantity in base unit of measure for delivery item. |


## `aReturnsDeliveryHeaderDeliveryDocumentDelete()`

```php
aReturnsDeliveryHeaderDeliveryDocumentDelete($delivery_document)
```

Deletes customer returns deliveries.

Deletes customer returns deliveries using the delivery document number.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery

try {
    $apiInstance->aReturnsDeliveryHeaderDeliveryDocumentDelete($delivery_document);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->aReturnsDeliveryHeaderDeliveryDocumentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |

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

## `aReturnsDeliveryHeaderDeliveryDocumentGet()`

```php
aReturnsDeliveryHeaderDeliveryDocumentGet($delivery_document, $select, $expand): \BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryHeaderType
```

Reads customer returns delivery headers.

Reads all customer returns delivery headers. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aReturnsDeliveryHeaderDeliveryDocumentGet($delivery_document, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->aReturnsDeliveryHeaderDeliveryDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryHeaderType**](../Model/AReturnsDeliveryHeaderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliveryHeaderDeliveryDocumentPatch()`

```php
aReturnsDeliveryHeaderDeliveryDocumentPatch($delivery_document, $modified_a_returns_delivery_header_type)
```

Updates customer returns delivery headers.

Updates customer returns delivery headers using the delivery document.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$modified_a_returns_delivery_header_type = new \BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryHeaderType(); // \BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryHeaderType | New property values

try {
    $apiInstance->aReturnsDeliveryHeaderDeliveryDocumentPatch($delivery_document, $modified_a_returns_delivery_header_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->aReturnsDeliveryHeaderDeliveryDocumentPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **modified_a_returns_delivery_header_type** | [**\BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryHeaderType**](../Model/ModifiedAReturnsDeliveryHeaderType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
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
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet: ', $e->getMessage(), PHP_EOL;
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

## `aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet()`

```php
aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet($delivery_document, $filter, $inlinecount, $select, $expand): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper2
```

Reads partners of specific customer returns delivery header.

Reads all partners of a specific customer returns delivery header. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet($delivery_document, $filter, $inlinecount, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper2**](../Model/Wrapper2.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliveryHeaderGet()`

```php
aReturnsDeliveryHeaderGet($top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper
```

Reads customer returns delivery headers.

Reads all customer returns delivery headers. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
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
    $result = $apiInstance->aReturnsDeliveryHeaderGet($top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->aReturnsDeliveryHeaderGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper**](../Model/Wrapper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliveryHeaderPost()`

```php
aReturnsDeliveryHeaderPost($apicustomerreturnsdeliverysrva_returns_delivery_header_type_create): \BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryHeaderType
```

Creates customer returns deliveries with reference to preceding document.

Creates customer returns deliveries with reference to a customer return.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apicustomerreturnsdeliverysrva_returns_delivery_header_type_create = new \BeLenka\SAP\CustomerReturnsDelivery\Model\APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreate(); // \BeLenka\SAP\CustomerReturnsDelivery\Model\APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreate | New entity

try {
    $result = $apiInstance->aReturnsDeliveryHeaderPost($apicustomerreturnsdeliverysrva_returns_delivery_header_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->aReturnsDeliveryHeaderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apicustomerreturnsdeliverysrva_returns_delivery_header_type_create** | [**\BeLenka\SAP\CustomerReturnsDelivery\Model\APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreate**](../Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryHeaderType**](../Model/AReturnsDeliveryHeaderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPutawayAllItemsPost()`

```php
confirmPutawayAllItemsPost($delivery_document): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6
```

Confirms putaway quantity of customer returns delivery items.

Confirms the putaway quantity of all customer returns delivery items.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->confirmPutawayAllItemsPost($delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->confirmPutawayAllItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPutawayOneItemPost()`

```php
confirmPutawayOneItemPost($delivery_document, $delivery_document_item): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6
```

Confirms putaway quantity of customer returns delivery item.

Confirms the putaway quantity of the specified customer returns delivery item.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->confirmPutawayOneItemPost($delivery_document, $delivery_document_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->confirmPutawayOneItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGoodsReceiptPost()`

```php
postGoodsReceiptPost($delivery_document, $actual_goods_movement_date): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6
```

Posts goods receipt for customer returns delivery.

Posts goods receipt for the customer returns delivery.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$actual_goods_movement_date = 'actual_goods_movement_date_example'; // string | Actual GI Date   (Value needs to be enclosed in single quotes and prefixed with `datetime`, e.g. `datetime'2017-12-31T00:00'`)

try {
    $result = $apiInstance->postGoodsReceiptPost($delivery_document, $actual_goods_movement_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->postGoodsReceiptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **actual_goods_movement_date** | **string**| Actual GI Date   (Value needs to be enclosed in single quotes and prefixed with &#x60;datetime&#x60;, e.g. &#x60;datetime&#39;2017-12-31T00:00&#39;&#x60;) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putawayAllItemsPost()`

```php
putawayAllItemsPost($delivery_document): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6
```

Takes over delivery quantity as putaway quantity for all customer returns delivery items.

Takes over the delivery quantity as the putaway quantity for all items of the customer returns delivery.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->putawayAllItemsPost($delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->putawayAllItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putawayOneItemPost()`

```php
putawayOneItemPost($delivery_document, $delivery_document_item): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6
```

Takes over delivery quantity as putaway quantity for specified customer returns delivery item.

Takes over the delivery quantity as the putaway quantity for the specified customer returns delivery item.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->putawayOneItemPost($delivery_document, $delivery_document_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->putawayOneItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putawayOneItemWithBaseQuantityPost()`

```php
putawayOneItemWithBaseQuantityPost($delivery_document, $base_unit, $actual_delivered_qty_in_base_unit, $delivery_document_item): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6
```

Sets putaway quantity and delivery quantity for customer returns delivery item.

Sets the same value for putaway quantity and delivery quantity in base unit of measure for the specified customer returns delivery item.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$base_unit = 'base_unit_example'; // string | Base Unit   (Value needs to be enclosed in single quotes)
$actual_delivered_qty_in_base_unit = 0M; // string | Qty (stckp.unt)   (Value needs to be suffixed with `M`)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->putawayOneItemWithBaseQuantityPost($delivery_document, $base_unit, $actual_delivered_qty_in_base_unit, $delivery_document_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->putawayOneItemWithBaseQuantityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **base_unit** | **string**| Base Unit   (Value needs to be enclosed in single quotes) | |
| **actual_delivered_qty_in_base_unit** | **string**| Qty (stckp.unt)   (Value needs to be suffixed with &#x60;M&#x60;) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putawayOneItemWithSalesQuantityPost()`

```php
putawayOneItemWithSalesQuantityPost($actual_delivery_quantity, $delivery_quantity_unit, $delivery_document_item, $delivery_document): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6
```

Sets putaway quantity and delivery quantity for customer returns delivery item.

Sets the same value for putaway quantity and delivery quantity in sales unit of measure for the specified customer returns delivery item.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actual_delivery_quantity = 0M; // string | Delivery qty   (Value needs to be suffixed with `M`)
$delivery_quantity_unit = 'delivery_quantity_unit_example'; // string | Sales Unit   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->putawayOneItemWithSalesQuantityPost($actual_delivery_quantity, $delivery_quantity_unit, $delivery_document_item, $delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->putawayOneItemWithSalesQuantityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **actual_delivery_quantity** | **string**| Delivery qty   (Value needs to be suffixed with &#x60;M&#x60;) | |
| **delivery_quantity_unit** | **string**| Sales Unit   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reverseGoodsReceiptPost()`

```php
reverseGoodsReceiptPost($actual_goods_movement_date, $delivery_document): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper5
```

Reverses goods receipt for customer returns delivery.

Reverses the goods receipt for the customer returns delivery.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actual_goods_movement_date = 'actual_goods_movement_date_example'; // string | Actual GI Date   (Value needs to be enclosed in single quotes and prefixed with `datetime`, e.g. `datetime'2017-12-31T00:00'`)
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->reverseGoodsReceiptPost($actual_goods_movement_date, $delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->reverseGoodsReceiptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **actual_goods_movement_date** | **string**| Actual GI Date   (Value needs to be enclosed in single quotes and prefixed with &#x60;datetime&#x60;, e.g. &#x60;datetime&#39;2017-12-31T00:00&#39;&#x60;) | |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper5**](../Model/Wrapper5.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPutawayQuantityWithBaseQuantityPost()`

```php
setPutawayQuantityWithBaseQuantityPost($delivery_document_item, $delivery_document, $base_unit, $actual_delivered_qty_in_base_unit): \BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6
```

Sets putaway quantity in base unit of measure for delivery item.

Sets the putaway quantity in base unit of measure of the specified delivery item.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$base_unit = 'base_unit_example'; // string | Base Unit   (Value needs to be enclosed in single quotes)
$actual_delivered_qty_in_base_unit = 0M; // string | Qty (stckp.unt)   (Value needs to be suffixed with `M`)

try {
    $result = $apiInstance->setPutawayQuantityWithBaseQuantityPost($delivery_document_item, $delivery_document, $base_unit, $actual_delivered_qty_in_base_unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryHeadersApi->setPutawayQuantityWithBaseQuantityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **base_unit** | **string**| Base Unit   (Value needs to be enclosed in single quotes) | |
| **actual_delivered_qty_in_base_unit** | **string**| Qty (stckp.unt)   (Value needs to be suffixed with &#x60;M&#x60;) | |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
