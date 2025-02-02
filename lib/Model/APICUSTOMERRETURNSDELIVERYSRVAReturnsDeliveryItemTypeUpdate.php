<?php
/**
 * APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeUpdate
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
 * APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturnsDelivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_CUSTOMER_RETURNS_DELIVERY_SRV.A_ReturnsDeliveryItemType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actual_delivery_quantity' => 'float',
        'batch' => 'string',
        'manufacture_date' => 'string',
        'shelf_life_expiration_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actual_delivery_quantity' => 'decimal',
        'batch' => null,
        'manufacture_date' => null,
        'shelf_life_expiration_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'actual_delivery_quantity' => true,
		'batch' => true,
		'manufacture_date' => true,
		'shelf_life_expiration_date' => true
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
        'actual_delivery_quantity' => 'ActualDeliveryQuantity',
        'batch' => 'Batch',
        'manufacture_date' => 'ManufactureDate',
        'shelf_life_expiration_date' => 'ShelfLifeExpirationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actual_delivery_quantity' => 'setActualDeliveryQuantity',
        'batch' => 'setBatch',
        'manufacture_date' => 'setManufactureDate',
        'shelf_life_expiration_date' => 'setShelfLifeExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actual_delivery_quantity' => 'getActualDeliveryQuantity',
        'batch' => 'getBatch',
        'manufacture_date' => 'getManufactureDate',
        'shelf_life_expiration_date' => 'getShelfLifeExpirationDate'
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
        $this->setIfExists('actual_delivery_quantity', $data ?? [], null);
        $this->setIfExists('batch', $data ?? [], null);
        $this->setIfExists('manufacture_date', $data ?? [], null);
        $this->setIfExists('shelf_life_expiration_date', $data ?? [], null);
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

        if (!is_null($this->container['batch']) && (mb_strlen($this->container['batch']) > 10)) {
            $invalidProperties[] = "invalid value for 'batch', the character length must be smaller than or equal to 10.";
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
     * Gets actual_delivery_quantity
     *
     * @return float|null
     */
    public function getActualDeliveryQuantity()
    {
        return $this->container['actual_delivery_quantity'];
    }

    /**
     * Sets actual_delivery_quantity
     *
     * @param float|null $actual_delivery_quantity actual_delivery_quantity
     *
     * @return self
     */
    public function setActualDeliveryQuantity($actual_delivery_quantity)
    {
        if (is_null($actual_delivery_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'actual_delivery_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('actual_delivery_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['actual_delivery_quantity'] = $actual_delivery_quantity;

        return $this;
    }

    /**
     * Gets batch
     *
     * @return string|null
     */
    public function getBatch()
    {
        return $this->container['batch'];
    }

    /**
     * Sets batch
     *
     * @param string|null $batch batch
     *
     * @return self
     */
    public function setBatch($batch)
    {
        if (is_null($batch)) {
            array_push($this->openAPINullablesSetToNull, 'batch');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('batch', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($batch) && (mb_strlen($batch) > 10)) {
            throw new \InvalidArgumentException('invalid length for $batch when calling APICUSTOMERRETURNSDELIVERYSRVAReturnsDeliveryItemTypeUpdate., must be smaller than or equal to 10.');
        }

        $this->container['batch'] = $batch;

        return $this;
    }

    /**
     * Gets manufacture_date
     *
     * @return string|null
     */
    public function getManufactureDate()
    {
        return $this->container['manufacture_date'];
    }

    /**
     * Sets manufacture_date
     *
     * @param string|null $manufacture_date manufacture_date
     *
     * @return self
     */
    public function setManufactureDate($manufacture_date)
    {
        if (is_null($manufacture_date)) {
            array_push($this->openAPINullablesSetToNull, 'manufacture_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manufacture_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manufacture_date'] = $manufacture_date;

        return $this;
    }

    /**
     * Gets shelf_life_expiration_date
     *
     * @return string|null
     */
    public function getShelfLifeExpirationDate()
    {
        return $this->container['shelf_life_expiration_date'];
    }

    /**
     * Sets shelf_life_expiration_date
     *
     * @param string|null $shelf_life_expiration_date shelf_life_expiration_date
     *
     * @return self
     */
    public function setShelfLifeExpirationDate($shelf_life_expiration_date)
    {
        if (is_null($shelf_life_expiration_date)) {
            array_push($this->openAPINullablesSetToNull, 'shelf_life_expiration_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shelf_life_expiration_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shelf_life_expiration_date'] = $shelf_life_expiration_date;

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


