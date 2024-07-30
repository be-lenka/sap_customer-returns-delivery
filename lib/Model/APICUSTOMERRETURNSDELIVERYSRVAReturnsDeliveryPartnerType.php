<?php
/**
 * APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturnsDelivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Customer Returns Delivery (A2X)
 *
 * This synchronous inbound service enables you to read, create, update, and delete customer returns deliveries. It can be consumed in Fiori apps and on other user interfaces.
 *
 * The version of the OpenAPI document: 2.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\CustomerReturnsDelivery\Model;

use \ArrayAccess;
use \BeLenka\SAP\CustomerReturnsDelivery\ObjectSerializer;

/**
 * APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturnsDelivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_CUSTOMER_RETURNS_DELIVERY_SRV.A_ReturnsDeliveryPartnerType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_id' => 'string',
        'business_partner_address_uuid' => 'string',
        'ref_business_partner_address_uuid' => 'string',
        'contact_person' => 'string',
        'customer' => 'string',
        'partner_function' => 'string',
        'personnel' => 'string',
        'sd_document' => 'string',
        'sd_document_item' => 'string',
        'supplier' => 'string',
        'to_address' => '\BeLenka\SAP\CustomerReturnsDelivery\Model\APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryAddressType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_id' => null,
        'business_partner_address_uuid' => 'uuid',
        'ref_business_partner_address_uuid' => 'uuid',
        'contact_person' => null,
        'customer' => null,
        'partner_function' => null,
        'personnel' => null,
        'sd_document' => null,
        'sd_document_item' => null,
        'supplier' => null,
        'to_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address_id' => false,
		'business_partner_address_uuid' => false,
		'ref_business_partner_address_uuid' => false,
		'contact_person' => false,
		'customer' => false,
		'partner_function' => false,
		'personnel' => false,
		'sd_document' => false,
		'sd_document_item' => false,
		'supplier' => false,
		'to_address' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_id' => 'AddressID',
        'business_partner_address_uuid' => 'BusinessPartnerAddressUUID',
        'ref_business_partner_address_uuid' => 'RefBusinessPartnerAddressUUID',
        'contact_person' => 'ContactPerson',
        'customer' => 'Customer',
        'partner_function' => 'PartnerFunction',
        'personnel' => 'Personnel',
        'sd_document' => 'SDDocument',
        'sd_document_item' => 'SDDocumentItem',
        'supplier' => 'Supplier',
        'to_address' => 'to_Address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_id' => 'setAddressId',
        'business_partner_address_uuid' => 'setBusinessPartnerAddressUuid',
        'ref_business_partner_address_uuid' => 'setRefBusinessPartnerAddressUuid',
        'contact_person' => 'setContactPerson',
        'customer' => 'setCustomer',
        'partner_function' => 'setPartnerFunction',
        'personnel' => 'setPersonnel',
        'sd_document' => 'setSdDocument',
        'sd_document_item' => 'setSdDocumentItem',
        'supplier' => 'setSupplier',
        'to_address' => 'setToAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_id' => 'getAddressId',
        'business_partner_address_uuid' => 'getBusinessPartnerAddressUuid',
        'ref_business_partner_address_uuid' => 'getRefBusinessPartnerAddressUuid',
        'contact_person' => 'getContactPerson',
        'customer' => 'getCustomer',
        'partner_function' => 'getPartnerFunction',
        'personnel' => 'getPersonnel',
        'sd_document' => 'getSdDocument',
        'sd_document_item' => 'getSdDocumentItem',
        'supplier' => 'getSupplier',
        'to_address' => 'getToAddress'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('address_id', $data ?? [], null);
        $this->setIfExists('business_partner_address_uuid', $data ?? [], null);
        $this->setIfExists('ref_business_partner_address_uuid', $data ?? [], null);
        $this->setIfExists('contact_person', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('partner_function', $data ?? [], null);
        $this->setIfExists('personnel', $data ?? [], null);
        $this->setIfExists('sd_document', $data ?? [], null);
        $this->setIfExists('sd_document_item', $data ?? [], null);
        $this->setIfExists('supplier', $data ?? [], null);
        $this->setIfExists('to_address', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['address_id']) && (mb_strlen($this->container['address_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'address_id', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['contact_person']) && (mb_strlen($this->container['contact_person']) > 10)) {
            $invalidProperties[] = "invalid value for 'contact_person', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['customer']) && (mb_strlen($this->container['customer']) > 10)) {
            $invalidProperties[] = "invalid value for 'customer', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['partner_function']) && (mb_strlen($this->container['partner_function']) > 2)) {
            $invalidProperties[] = "invalid value for 'partner_function', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['personnel']) && (mb_strlen($this->container['personnel']) > 8)) {
            $invalidProperties[] = "invalid value for 'personnel', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['sd_document']) && (mb_strlen($this->container['sd_document']) > 10)) {
            $invalidProperties[] = "invalid value for 'sd_document', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['sd_document_item']) && (mb_strlen($this->container['sd_document_item']) > 6)) {
            $invalidProperties[] = "invalid value for 'sd_document_item', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['supplier']) && (mb_strlen($this->container['supplier']) > 10)) {
            $invalidProperties[] = "invalid value for 'supplier', the character length must be smaller than or equal to 10.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets address_id
     *
     * @return string|null
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param string|null $address_id address_id
     *
     * @return self
     */
    public function setAddressId($address_id)
    {
        if (is_null($address_id)) {
            throw new \InvalidArgumentException('non-nullable address_id cannot be null');
        }
        if ((mb_strlen($address_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $address_id when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType., must be smaller than or equal to 10.');
        }

        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets business_partner_address_uuid
     *
     * @return string|null
     */
    public function getBusinessPartnerAddressUuid()
    {
        return $this->container['business_partner_address_uuid'];
    }

    /**
     * Sets business_partner_address_uuid
     *
     * @param string|null $business_partner_address_uuid business_partner_address_uuid
     *
     * @return self
     */
    public function setBusinessPartnerAddressUuid($business_partner_address_uuid)
    {
        if (is_null($business_partner_address_uuid)) {
            throw new \InvalidArgumentException('non-nullable business_partner_address_uuid cannot be null');
        }
        $this->container['business_partner_address_uuid'] = $business_partner_address_uuid;

        return $this;
    }

    /**
     * Gets ref_business_partner_address_uuid
     *
     * @return string|null
     */
    public function getRefBusinessPartnerAddressUuid()
    {
        return $this->container['ref_business_partner_address_uuid'];
    }

    /**
     * Sets ref_business_partner_address_uuid
     *
     * @param string|null $ref_business_partner_address_uuid ref_business_partner_address_uuid
     *
     * @return self
     */
    public function setRefBusinessPartnerAddressUuid($ref_business_partner_address_uuid)
    {
        if (is_null($ref_business_partner_address_uuid)) {
            throw new \InvalidArgumentException('non-nullable ref_business_partner_address_uuid cannot be null');
        }
        $this->container['ref_business_partner_address_uuid'] = $ref_business_partner_address_uuid;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return string|null
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param string|null $contact_person contact_person
     *
     * @return self
     */
    public function setContactPerson($contact_person)
    {
        if (is_null($contact_person)) {
            throw new \InvalidArgumentException('non-nullable contact_person cannot be null');
        }
        if ((mb_strlen($contact_person) > 10)) {
            throw new \InvalidArgumentException('invalid length for $contact_person when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType., must be smaller than or equal to 10.');
        }

        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return string|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        if ((mb_strlen($customer) > 10)) {
            throw new \InvalidArgumentException('invalid length for $customer when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType., must be smaller than or equal to 10.');
        }

        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets partner_function
     *
     * @return string|null
     */
    public function getPartnerFunction()
    {
        return $this->container['partner_function'];
    }

    /**
     * Sets partner_function
     *
     * @param string|null $partner_function partner_function
     *
     * @return self
     */
    public function setPartnerFunction($partner_function)
    {
        if (is_null($partner_function)) {
            throw new \InvalidArgumentException('non-nullable partner_function cannot be null');
        }
        if ((mb_strlen($partner_function) > 2)) {
            throw new \InvalidArgumentException('invalid length for $partner_function when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType., must be smaller than or equal to 2.');
        }

        $this->container['partner_function'] = $partner_function;

        return $this;
    }

    /**
     * Gets personnel
     *
     * @return string|null
     */
    public function getPersonnel()
    {
        return $this->container['personnel'];
    }

    /**
     * Sets personnel
     *
     * @param string|null $personnel personnel
     *
     * @return self
     */
    public function setPersonnel($personnel)
    {
        if (is_null($personnel)) {
            throw new \InvalidArgumentException('non-nullable personnel cannot be null');
        }
        if ((mb_strlen($personnel) > 8)) {
            throw new \InvalidArgumentException('invalid length for $personnel when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType., must be smaller than or equal to 8.');
        }

        $this->container['personnel'] = $personnel;

        return $this;
    }

    /**
     * Gets sd_document
     *
     * @return string|null
     */
    public function getSdDocument()
    {
        return $this->container['sd_document'];
    }

    /**
     * Sets sd_document
     *
     * @param string|null $sd_document sd_document
     *
     * @return self
     */
    public function setSdDocument($sd_document)
    {
        if (is_null($sd_document)) {
            throw new \InvalidArgumentException('non-nullable sd_document cannot be null');
        }
        if ((mb_strlen($sd_document) > 10)) {
            throw new \InvalidArgumentException('invalid length for $sd_document when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType., must be smaller than or equal to 10.');
        }

        $this->container['sd_document'] = $sd_document;

        return $this;
    }

    /**
     * Gets sd_document_item
     *
     * @return string|null
     */
    public function getSdDocumentItem()
    {
        return $this->container['sd_document_item'];
    }

    /**
     * Sets sd_document_item
     *
     * @param string|null $sd_document_item sd_document_item
     *
     * @return self
     */
    public function setSdDocumentItem($sd_document_item)
    {
        if (is_null($sd_document_item)) {
            throw new \InvalidArgumentException('non-nullable sd_document_item cannot be null');
        }
        if ((mb_strlen($sd_document_item) > 6)) {
            throw new \InvalidArgumentException('invalid length for $sd_document_item when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType., must be smaller than or equal to 6.');
        }

        $this->container['sd_document_item'] = $sd_document_item;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return string|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param string|null $supplier supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        if (is_null($supplier)) {
            throw new \InvalidArgumentException('non-nullable supplier cannot be null');
        }
        if ((mb_strlen($supplier) > 10)) {
            throw new \InvalidArgumentException('invalid length for $supplier when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryPartnerType., must be smaller than or equal to 10.');
        }

        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets to_address
     *
     * @return \BeLenka\SAP\CustomerReturnsDelivery\Model\APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryAddressType|null
     */
    public function getToAddress()
    {
        return $this->container['to_address'];
    }

    /**
     * Sets to_address
     *
     * @param \BeLenka\SAP\CustomerReturnsDelivery\Model\APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryAddressType|null $to_address to_address
     *
     * @return self
     */
    public function setToAddress($to_address)
    {
        if (is_null($to_address)) {
            throw new \InvalidArgumentException('non-nullable to_address cannot be null');
        }
        $this->container['to_address'] = $to_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


