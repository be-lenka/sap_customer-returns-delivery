# OpenAPIClient-php

This synchronous inbound service enables you to read, create, update, and delete customer returns deliveries. It can be consumed in Fiori apps and on other user interfaces.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\CustomerReturnsDelivery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\CustomerReturnsDelivery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\CustomerReturnsDelivery\Api\BatchRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->batchPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchRequestsApi->batchPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://:/sap/opu/odata/sap/API_CUSTOMER_RETURNS_DELIVERY_SRV;v&#x3D;0002*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BatchRequestsApi* | [**batchPost**](docs/Api/BatchRequestsApi.md#batchpost) | **POST** /$batch | Send a group of requests
*CustomerReturnsDeliveryDocumentFlowsApi* | [**aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryGet**](docs/Api/CustomerReturnsDeliveryDocumentFlowsApi.md#areturnsdeliverydocflowprecedingdocumentprecedingdocumentprecedingdocumentitemprecedingdocumentitemsubsequentdocumentcategorysubsequentdocumentcategoryget) | **GET** /A_ReturnsDeliveryDocFlow(PrecedingDocument&#x3D;&#39;{PrecedingDocument}&#39;,PrecedingDocumentItem&#x3D;&#39;{PrecedingDocumentItem}&#39;,SubsequentDocumentCategory&#x3D;&#39;{SubsequentDocumentCategory}&#39;) | Reads customer returns delivery document flows by key.
*CustomerReturnsDeliveryDocumentFlowsApi* | [**aReturnsDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryPatch**](docs/Api/CustomerReturnsDeliveryDocumentFlowsApi.md#areturnsdeliverydocflowprecedingdocumentprecedingdocumentprecedingdocumentitemprecedingdocumentitemsubsequentdocumentcategorysubsequentdocumentcategorypatch) | **PATCH** /A_ReturnsDeliveryDocFlow(PrecedingDocument&#x3D;&#39;{PrecedingDocument}&#39;,PrecedingDocumentItem&#x3D;&#39;{PrecedingDocumentItem}&#39;,SubsequentDocumentCategory&#x3D;&#39;{SubsequentDocumentCategory}&#39;) | Updates customer returns delivery document flows.
*CustomerReturnsDeliveryDocumentFlowsApi* | [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet**](docs/Api/CustomerReturnsDeliveryDocumentFlowsApi.md#areturnsdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtodocumentflowget) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DocumentFlow | Reads document flows of specific customer returns delivery item.
*CustomerReturnsDeliveryHeadersApi* | [**aReturnsDeliveryHeaderDeliveryDocumentDelete**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#areturnsdeliveryheaderdeliverydocumentdelete) | **DELETE** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Deletes customer returns deliveries.
*CustomerReturnsDeliveryHeadersApi* | [**aReturnsDeliveryHeaderDeliveryDocumentGet**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#areturnsdeliveryheaderdeliverydocumentget) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Reads customer returns delivery headers.
*CustomerReturnsDeliveryHeadersApi* | [**aReturnsDeliveryHeaderDeliveryDocumentPatch**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#areturnsdeliveryheaderdeliverydocumentpatch) | **PATCH** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Updates customer returns delivery headers.
*CustomerReturnsDeliveryHeadersApi* | [**aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#areturnsdeliveryheaderdeliverydocumenttodeliverydocumentitemget) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentItem | Reads items of specific customer returns delivery header.
*CustomerReturnsDeliveryHeadersApi* | [**aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#areturnsdeliveryheaderdeliverydocumenttodeliverydocumentpartnerget) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentPartner | Reads partners of specific customer returns delivery header.
*CustomerReturnsDeliveryHeadersApi* | [**aReturnsDeliveryHeaderGet**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#areturnsdeliveryheaderget) | **GET** /A_ReturnsDeliveryHeader | Reads customer returns delivery headers.
*CustomerReturnsDeliveryHeadersApi* | [**aReturnsDeliveryHeaderPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#areturnsdeliveryheaderpost) | **POST** /A_ReturnsDeliveryHeader | Creates customer returns deliveries with reference to preceding document.
*CustomerReturnsDeliveryHeadersApi* | [**confirmPutawayAllItemsPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#confirmputawayallitemspost) | **POST** /ConfirmPutawayAllItems | Confirms putaway quantity of customer returns delivery items.
*CustomerReturnsDeliveryHeadersApi* | [**confirmPutawayOneItemPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#confirmputawayoneitempost) | **POST** /ConfirmPutawayOneItem | Confirms putaway quantity of customer returns delivery item.
*CustomerReturnsDeliveryHeadersApi* | [**postGoodsReceiptPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#postgoodsreceiptpost) | **POST** /PostGoodsReceipt | Posts goods receipt for customer returns delivery.
*CustomerReturnsDeliveryHeadersApi* | [**putawayAllItemsPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#putawayallitemspost) | **POST** /PutawayAllItems | Takes over delivery quantity as putaway quantity for all customer returns delivery items.
*CustomerReturnsDeliveryHeadersApi* | [**putawayOneItemPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#putawayoneitempost) | **POST** /PutawayOneItem | Takes over delivery quantity as putaway quantity for specified customer returns delivery item.
*CustomerReturnsDeliveryHeadersApi* | [**putawayOneItemWithBaseQuantityPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#putawayoneitemwithbasequantitypost) | **POST** /PutawayOneItemWithBaseQuantity | Sets putaway quantity and delivery quantity for customer returns delivery item.
*CustomerReturnsDeliveryHeadersApi* | [**putawayOneItemWithSalesQuantityPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#putawayoneitemwithsalesquantitypost) | **POST** /PutawayOneItemWithSalesQuantity | Sets putaway quantity and delivery quantity for customer returns delivery item.
*CustomerReturnsDeliveryHeadersApi* | [**reverseGoodsReceiptPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#reversegoodsreceiptpost) | **POST** /ReverseGoodsReceipt | Reverses goods receipt for customer returns delivery.
*CustomerReturnsDeliveryHeadersApi* | [**setPutawayQuantityWithBaseQuantityPost**](docs/Api/CustomerReturnsDeliveryHeadersApi.md#setputawayquantitywithbasequantitypost) | **POST** /SetPutawayQuantityWithBaseQuantity | Sets putaway quantity in base unit of measure for delivery item.
*CustomerReturnsDeliveryItemsApi* | [**aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet**](docs/Api/CustomerReturnsDeliveryItemsApi.md#areturnsdeliveryheaderdeliverydocumenttodeliverydocumentitemget) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentItem | Reads items of specific customer returns delivery header.
*CustomerReturnsDeliveryItemsApi* | [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete**](docs/Api/CustomerReturnsDeliveryItemsApi.md#areturnsdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemdelete) | **DELETE** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Deletes customer returns delivery items.
*CustomerReturnsDeliveryItemsApi* | [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet**](docs/Api/CustomerReturnsDeliveryItemsApi.md#areturnsdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemget) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Reads customer returns delivery items.
*CustomerReturnsDeliveryItemsApi* | [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch**](docs/Api/CustomerReturnsDeliveryItemsApi.md#areturnsdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitempatch) | **PATCH** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Updates customer returns delivery items.
*CustomerReturnsDeliveryItemsApi* | [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet**](docs/Api/CustomerReturnsDeliveryItemsApi.md#areturnsdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtodocumentflowget) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DocumentFlow | Reads document flows of specific customer returns delivery item.
*CustomerReturnsDeliveryItemsApi* | [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet**](docs/Api/CustomerReturnsDeliveryItemsApi.md#areturnsdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtoserialdeliveryitemget) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_SerialDeliveryItem | Reads maintenance item object lists of specific customer returns delivery item.
*CustomerReturnsDeliveryItemsApi* | [**aReturnsDeliveryItemGet**](docs/Api/CustomerReturnsDeliveryItemsApi.md#areturnsdeliveryitemget) | **GET** /A_ReturnsDeliveryItem | Reads customer returns delivery items.
*CustomerReturnsDeliveryItemsApi* | [**createBatchSplitItemPost**](docs/Api/CustomerReturnsDeliveryItemsApi.md#createbatchsplititempost) | **POST** /CreateBatchSplitItem | Creates an additional batch split item for an customer returns delivery item.
*CustomerReturnsDeliveryMaintenanceItemObjectListsApi* | [**aReturnsDeliverySrlNmbrMaintenanceItemObjectListToMaintenanceItemObjectGet**](docs/Api/CustomerReturnsDeliveryMaintenanceItemObjectListsApi.md#areturnsdeliverysrlnmbrmaintenanceitemobjectlisttomaintenanceitemobjectget) | **GET** /A_ReturnsDeliverySrlNmbr({MaintenanceItemObjectList})/to_MaintenanceItemObject | Reads maintenance item objects of specific customer returns delivery maintenance item object list.
*CustomerReturnsDeliveryPartnerAddressesApi* | [**aReturnsDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet**](docs/Api/CustomerReturnsDeliveryPartnerAddressesApi.md#areturnsdeliverypartnerpartnerfunctionpartnerfunctionsddocumentsddocumenttoaddressget) | **GET** /A_ReturnsDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address | Reads addresses of specific customer returns delivery partner.
*CustomerReturnsDeliveryPartnersApi* | [**aReturnsDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet**](docs/Api/CustomerReturnsDeliveryPartnersApi.md#areturnsdeliveryheaderdeliverydocumenttodeliverydocumentpartnerget) | **GET** /A_ReturnsDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentPartner | Reads partners of specific customer returns delivery header.
*CustomerReturnsDeliveryPartnersApi* | [**aReturnsDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet**](docs/Api/CustomerReturnsDeliveryPartnersApi.md#areturnsdeliverypartnerpartnerfunctionpartnerfunctionsddocumentsddocumenttoaddressget) | **GET** /A_ReturnsDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address | Reads addresses of specific customer returns delivery partner.
*CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi* | [**aReturnsDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet**](docs/Api/CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi.md#areturnsdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtoserialdeliveryitemget) | **GET** /A_ReturnsDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_SerialDeliveryItem | Reads maintenance item object lists of specific customer returns delivery item.
*CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi* | [**aReturnsDeliverySrlNmbrMaintenanceItemObjectListToMaintenanceItemObjectGet**](docs/Api/CustomerReturnsDlvryMaintenanceItemObjectListHeadersApi.md#areturnsdeliverysrlnmbrmaintenanceitemobjectlisttomaintenanceitemobjectget) | **GET** /A_ReturnsDeliverySrlNmbr({MaintenanceItemObjectList})/to_MaintenanceItemObject | Reads maintenance item objects of specific customer returns delivery maintenance item object list.

## Models

- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryAddressType](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryAddressType.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryDocFlowType](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryDocFlowType.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryDocFlowTypeCreate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryDocFlowTypeCreate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryDocFlowTypeUpdate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryDocFlowTypeUpdate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderType](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderType.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreateToDeliveryDocumentItem](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreateToDeliveryDocumentItem.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreateToDeliveryDocumentPartner](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeCreateToDeliveryDocumentPartner.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeToDeliveryDocumentItem](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeToDeliveryDocumentItem.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeToDeliveryDocumentPartner](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeToDeliveryDocumentPartner.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeUpdate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryHeaderTypeUpdate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemType](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemType.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeCreate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeCreate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeCreateToDocumentFlow](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeCreateToDocumentFlow.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeToDocumentFlow](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeToDocumentFlow.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeUpdate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeUpdate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryMaintObjType](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryMaintObjType.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryMaintObjTypeCreate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryMaintObjTypeCreate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerTypeCreate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerTypeCreate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliverySrlNmbrType](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliverySrlNmbrType.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliverySrlNmbrTypeCreate](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliverySrlNmbrTypeCreate.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliverySrlNmbrTypeCreateToMaintenanceItemObject](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliverySrlNmbrTypeCreateToMaintenanceItemObject.md)
- [APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliverySrlNmbrTypeToMaintenanceItemObject](docs/Model/APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliverySrlNmbrTypeToMaintenanceItemObject.md)
- [APICUSTOMERRETURNSDELIVERYSRVCreatedDeliveryItem](docs/Model/APICUSTOMERRETURNSDELIVERYSRVCreatedDeliveryItem.md)
- [APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage](docs/Model/APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage.md)
- [APICUSTOMERRETURNSDELIVERYSRVPutawayReport](docs/Model/APICUSTOMERRETURNSDELIVERYSRVPutawayReport.md)
- [AReturnsDeliveryAddressType](docs/Model/AReturnsDeliveryAddressType.md)
- [AReturnsDeliveryDocFlowType](docs/Model/AReturnsDeliveryDocFlowType.md)
- [AReturnsDeliveryHeaderType](docs/Model/AReturnsDeliveryHeaderType.md)
- [AReturnsDeliveryItemType](docs/Model/AReturnsDeliveryItemType.md)
- [AReturnsDeliverySrlNmbrType](docs/Model/AReturnsDeliverySrlNmbrType.md)
- [CollectionOfAReturnsDeliveryDocFlowType](docs/Model/CollectionOfAReturnsDeliveryDocFlowType.md)
- [CollectionOfAReturnsDeliveryHeaderType](docs/Model/CollectionOfAReturnsDeliveryHeaderType.md)
- [CollectionOfAReturnsDeliveryItemType](docs/Model/CollectionOfAReturnsDeliveryItemType.md)
- [CollectionOfAReturnsDeliveryMaintObjType](docs/Model/CollectionOfAReturnsDeliveryMaintObjType.md)
- [CollectionOfAReturnsDeliveryPartnerType](docs/Model/CollectionOfAReturnsDeliveryPartnerType.md)
- [CollectionOfDeliveryMessage](docs/Model/CollectionOfDeliveryMessage.md)
- [CollectionOfPutawayReport](docs/Model/CollectionOfPutawayReport.md)
- [CreatedDeliveryItem](docs/Model/CreatedDeliveryItem.md)
- [CreatedDeliveryItemD](docs/Model/CreatedDeliveryItemD.md)
- [Error](docs/Model/Error.md)
- [ErrorError](docs/Model/ErrorError.md)
- [ErrorErrorMessage](docs/Model/ErrorErrorMessage.md)
- [ModifiedAReturnsDeliveryDocFlowType](docs/Model/ModifiedAReturnsDeliveryDocFlowType.md)
- [ModifiedAReturnsDeliveryHeaderType](docs/Model/ModifiedAReturnsDeliveryHeaderType.md)
- [ModifiedAReturnsDeliveryItemType](docs/Model/ModifiedAReturnsDeliveryItemType.md)
- [Wrapper](docs/Model/Wrapper.md)
- [Wrapper1](docs/Model/Wrapper1.md)
- [Wrapper2](docs/Model/Wrapper2.md)
- [Wrapper3](docs/Model/Wrapper3.md)
- [Wrapper4](docs/Model/Wrapper4.md)
- [Wrapper5](docs/Model/Wrapper5.md)
- [Wrapper6](docs/Model/Wrapper6.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2Auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://{host}:{port}`
- **Scopes**: 
    - **API_CUSTOMER_RETURNS_DELIVERY_SRV_0002**: 

### BasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
