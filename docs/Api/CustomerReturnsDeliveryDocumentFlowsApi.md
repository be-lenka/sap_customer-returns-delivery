# BeLenka\SAP\CustomerReturnsDelivery\CustomerReturnsDeliveryDocumentFlowsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURNS_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryGet()**](CustomerReturnsDeliveryDocumentFlowsApi.md#aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryGet) | **GET** /A_ReturnsDeliveryDocFlow(PrecedingDocument&#x3D;&#39;{PrecedingDocument}&#39;,PrecedingDocumentItem&#x3D;&#39;{PrecedingDocumentItem}&#39;,SubsequentDocumentCategory&#x3D;&#39;{SubsequentDocumentCategory}&#39;) | Reads customer returns delivery document flows by key. |
| [**aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryPatch()**](CustomerReturnsDeliveryDocumentFlowsApi.md#aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryPatch) | **PATCH** /A_ReturnsDeliveryDocFlow(PrecedingDocument&#x3D;&#39;{PrecedingDocument}&#39;,PrecedingDocumentItem&#x3D;&#39;{PrecedingDocumentItem}&#39;,SubsequentDocumentCategory&#x3D;&#39;{SubsequentDocumentCategory}&#39;) | Updates customer returns delivery document flows. |
| [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet()**](CustomerReturnsDeliveryDocumentFlowsApi.md#aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DocumentFlow | Reads document flows of specific customer returns delivery item. |


## `aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryGet()`

```php
aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryGet($preceding_document, $preceding_document_item, $subsequent_document_category, $select): \BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryDocFlowType
```

Reads customer returns delivery document flows by key.

Reads customer returns delivery document flows using the delivery document (PrecedingDocument), the delivery document item (PrecedingDocumentItem) and the subsequent document category Q.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryDocumentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preceding_document = 'preceding_document_example'; // string | Preceding Doc.
$preceding_document_item = 'preceding_document_item_example'; // string | Preceding Item
$subsequent_document_category = 'subsequent_document_category_example'; // string | Subs.Doc.Categ.
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryGet($preceding_document, $preceding_document_item, $subsequent_document_category, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryDocumentFlowsApi->aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preceding_document** | **string**| Preceding Doc. | |
| **preceding_document_item** | **string**| Preceding Item | |
| **subsequent_document_category** | **string**| Subs.Doc.Categ. | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryDocFlowType**](../Model/AReturnsDeliveryDocFlowType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryPatch()`

```php
aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryPatch($preceding_document, $preceding_document_item, $subsequent_document_category, $modified_a_returns_delivery_doc_flow_type)
```

Updates customer returns delivery document flows.

Updates customer returns delivery document flows using the delivery document (PrecedingDocument), the delivery document item (PrecedingDocumentItem) and the subsequent document category Q.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryDocumentFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preceding_document = 'preceding_document_example'; // string | Preceding Doc.
$preceding_document_item = 'preceding_document_item_example'; // string | Preceding Item
$subsequent_document_category = 'subsequent_document_category_example'; // string | Subs.Doc.Categ.
$modified_a_returns_delivery_doc_flow_type = new \BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryDocFlowType(); // \BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryDocFlowType | New property values

try {
    $apiInstance->aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryPatch($preceding_document, $preceding_document_item, $subsequent_document_category, $modified_a_returns_delivery_doc_flow_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryDocumentFlowsApi->aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preceding_document** | **string**| Preceding Doc. | |
| **preceding_document_item** | **string**| Preceding Item | |
| **subsequent_document_category** | **string**| Subs.Doc.Categ. | |
| **modified_a_returns_delivery_doc_flow_type** | [**\BeLenka\SAP\CustomerReturnsDelivery\Model\ModifiedAReturnsDeliveryDocFlowType**](../Model/ModifiedAReturnsDeliveryDocFlowType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryDocumentFlowsApi(
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
    echo 'Exception when calling CustomerReturnsDeliveryDocumentFlowsApi->aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet: ', $e->getMessage(), PHP_EOL;
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
