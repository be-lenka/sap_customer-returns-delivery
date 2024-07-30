# BeLenka\SAP\CustomerReturnsDelivery\CustomerReturnsDeliveryPartnerAddressesApi

All URIs are relative to https://:/sap/opu/odata/sap/API_CUSTOMER_RETURNS_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aReturnsDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet()**](CustomerReturnsDeliveryPartnerAddressesApi.md#aReturnsDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet) | **GET** /A_ReturnsDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address | Reads addresses of specific customer returns delivery partner. |


## `aReturnsDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet()`

```php
aReturnsDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet($partner_function, $sd_document, $select): \BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryAddressType
```

Reads addresses of specific customer returns delivery partner.

Reads all addresses of a specific customer returns delivery partner. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\CustomerReturnsDeliveryPartnerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_function = 'partner_function_example'; // string | Partner Functn
$sd_document = 'sd_document_example'; // string | SD Document
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aReturnsDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet($partner_function, $sd_document, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsDeliveryPartnerAddressesApi->aReturnsDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **partner_function** | **string**| Partner Functn | |
| **sd_document** | **string**| SD Document | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\CustomerReturnsDelivery\Model\AReturnsDeliveryAddressType**](../Model/AReturnsDeliveryAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
