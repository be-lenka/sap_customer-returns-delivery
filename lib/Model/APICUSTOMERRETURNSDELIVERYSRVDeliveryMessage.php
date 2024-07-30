<?php
/**
 * APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage
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
 * APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturnsDelivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_CUSTOMER_RETURNS_DELIVERY_SRV.DeliveryMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collective_processing' => 'string',
        'delivery_document' => 'string',
        'delivery_document_item' => 'string',
        'schedule_line' => 'string',
        'collective_processing_msg_counter' => 'string',
        'system_message_identification' => 'string',
        'system_message_number' => 'string',
        'system_message_type' => 'string',
        'system_message_variable1' => 'string',
        'system_message_variable2' => 'string',
        'system_message_variable3' => 'string',
        'system_message_variable4' => 'string',
        'collective_processing_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'collective_processing' => null,
        'delivery_document' => null,
        'delivery_document_item' => null,
        'schedule_line' => null,
        'collective_processing_msg_counter' => null,
        'system_message_identification' => null,
        'system_message_number' => null,
        'system_message_type' => null,
        'system_message_variable1' => null,
        'system_message_variable2' => null,
        'system_message_variable3' => null,
        'system_message_variable4' => null,
        'collective_processing_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'collective_processing' => true,
		'delivery_document' => true,
		'delivery_document_item' => true,
		'schedule_line' => true,
		'collective_processing_msg_counter' => true,
		'system_message_identification' => true,
		'system_message_number' => true,
		'system_message_type' => true,
		'system_message_variable1' => true,
		'system_message_variable2' => true,
		'system_message_variable3' => true,
		'system_message_variable4' => true,
		'collective_processing_type' => true
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
        'collective_processing' => 'CollectiveProcessing',
        'delivery_document' => 'DeliveryDocument',
        'delivery_document_item' => 'DeliveryDocumentItem',
        'schedule_line' => 'ScheduleLine',
        'collective_processing_msg_counter' => 'CollectiveProcessingMsgCounter',
        'system_message_identification' => 'SystemMessageIdentification',
        'system_message_number' => 'SystemMessageNumber',
        'system_message_type' => 'SystemMessageType',
        'system_message_variable1' => 'SystemMessageVariable1',
        'system_message_variable2' => 'SystemMessageVariable2',
        'system_message_variable3' => 'SystemMessageVariable3',
        'system_message_variable4' => 'SystemMessageVariable4',
        'collective_processing_type' => 'CollectiveProcessingType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collective_processing' => 'setCollectiveProcessing',
        'delivery_document' => 'setDeliveryDocument',
        'delivery_document_item' => 'setDeliveryDocumentItem',
        'schedule_line' => 'setScheduleLine',
        'collective_processing_msg_counter' => 'setCollectiveProcessingMsgCounter',
        'system_message_identification' => 'setSystemMessageIdentification',
        'system_message_number' => 'setSystemMessageNumber',
        'system_message_type' => 'setSystemMessageType',
        'system_message_variable1' => 'setSystemMessageVariable1',
        'system_message_variable2' => 'setSystemMessageVariable2',
        'system_message_variable3' => 'setSystemMessageVariable3',
        'system_message_variable4' => 'setSystemMessageVariable4',
        'collective_processing_type' => 'setCollectiveProcessingType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collective_processing' => 'getCollectiveProcessing',
        'delivery_document' => 'getDeliveryDocument',
        'delivery_document_item' => 'getDeliveryDocumentItem',
        'schedule_line' => 'getScheduleLine',
        'collective_processing_msg_counter' => 'getCollectiveProcessingMsgCounter',
        'system_message_identification' => 'getSystemMessageIdentification',
        'system_message_number' => 'getSystemMessageNumber',
        'system_message_type' => 'getSystemMessageType',
        'system_message_variable1' => 'getSystemMessageVariable1',
        'system_message_variable2' => 'getSystemMessageVariable2',
        'system_message_variable3' => 'getSystemMessageVariable3',
        'system_message_variable4' => 'getSystemMessageVariable4',
        'collective_processing_type' => 'getCollectiveProcessingType'
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
        $this->setIfExists('collective_processing', $data ?? [], null);
        $this->setIfExists('delivery_document', $data ?? [], null);
        $this->setIfExists('delivery_document_item', $data ?? [], null);
        $this->setIfExists('schedule_line', $data ?? [], null);
        $this->setIfExists('collective_processing_msg_counter', $data ?? [], null);
        $this->setIfExists('system_message_identification', $data ?? [], null);
        $this->setIfExists('system_message_number', $data ?? [], null);
        $this->setIfExists('system_message_type', $data ?? [], null);
        $this->setIfExists('system_message_variable1', $data ?? [], null);
        $this->setIfExists('system_message_variable2', $data ?? [], null);
        $this->setIfExists('system_message_variable3', $data ?? [], null);
        $this->setIfExists('system_message_variable4', $data ?? [], null);
        $this->setIfExists('collective_processing_type', $data ?? [], null);
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

        if (!is_null($this->container['collective_processing']) && (mb_strlen($this->container['collective_processing']) > 10)) {
            $invalidProperties[] = "invalid value for 'collective_processing', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['delivery_document']) && (mb_strlen($this->container['delivery_document']) > 10)) {
            $invalidProperties[] = "invalid value for 'delivery_document', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['delivery_document_item']) && (mb_strlen($this->container['delivery_document_item']) > 6)) {
            $invalidProperties[] = "invalid value for 'delivery_document_item', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['schedule_line']) && (mb_strlen($this->container['schedule_line']) > 4)) {
            $invalidProperties[] = "invalid value for 'schedule_line', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['collective_processing_msg_counter']) && (mb_strlen($this->container['collective_processing_msg_counter']) > 2)) {
            $invalidProperties[] = "invalid value for 'collective_processing_msg_counter', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['system_message_identification']) && (mb_strlen($this->container['system_message_identification']) > 20)) {
            $invalidProperties[] = "invalid value for 'system_message_identification', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['system_message_number']) && (mb_strlen($this->container['system_message_number']) > 3)) {
            $invalidProperties[] = "invalid value for 'system_message_number', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['system_message_type']) && (mb_strlen($this->container['system_message_type']) > 1)) {
            $invalidProperties[] = "invalid value for 'system_message_type', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['system_message_variable1']) && (mb_strlen($this->container['system_message_variable1']) > 50)) {
            $invalidProperties[] = "invalid value for 'system_message_variable1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['system_message_variable2']) && (mb_strlen($this->container['system_message_variable2']) > 50)) {
            $invalidProperties[] = "invalid value for 'system_message_variable2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['system_message_variable3']) && (mb_strlen($this->container['system_message_variable3']) > 50)) {
            $invalidProperties[] = "invalid value for 'system_message_variable3', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['system_message_variable4']) && (mb_strlen($this->container['system_message_variable4']) > 50)) {
            $invalidProperties[] = "invalid value for 'system_message_variable4', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['collective_processing_type']) && (mb_strlen($this->container['collective_processing_type']) > 1)) {
            $invalidProperties[] = "invalid value for 'collective_processing_type', the character length must be smaller than or equal to 1.";
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
     * Gets collective_processing
     *
     * @return string|null
     */
    public function getCollectiveProcessing()
    {
        return $this->container['collective_processing'];
    }

    /**
     * Sets collective_processing
     *
     * @param string|null $collective_processing collective_processing
     *
     * @return self
     */
    public function setCollectiveProcessing($collective_processing)
    {
        if (is_null($collective_processing)) {
            array_push($this->openAPINullablesSetToNull, 'collective_processing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('collective_processing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($collective_processing) && (mb_strlen($collective_processing) > 10)) {
            throw new \InvalidArgumentException('invalid length for $collective_processing when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 10.');
        }

        $this->container['collective_processing'] = $collective_processing;

        return $this;
    }

    /**
     * Gets delivery_document
     *
     * @return string|null
     */
    public function getDeliveryDocument()
    {
        return $this->container['delivery_document'];
    }

    /**
     * Sets delivery_document
     *
     * @param string|null $delivery_document delivery_document
     *
     * @return self
     */
    public function setDeliveryDocument($delivery_document)
    {
        if (is_null($delivery_document)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_document');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_document', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($delivery_document) && (mb_strlen($delivery_document) > 10)) {
            throw new \InvalidArgumentException('invalid length for $delivery_document when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 10.');
        }

        $this->container['delivery_document'] = $delivery_document;

        return $this;
    }

    /**
     * Gets delivery_document_item
     *
     * @return string|null
     */
    public function getDeliveryDocumentItem()
    {
        return $this->container['delivery_document_item'];
    }

    /**
     * Sets delivery_document_item
     *
     * @param string|null $delivery_document_item delivery_document_item
     *
     * @return self
     */
    public function setDeliveryDocumentItem($delivery_document_item)
    {
        if (is_null($delivery_document_item)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_document_item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_document_item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($delivery_document_item) && (mb_strlen($delivery_document_item) > 6)) {
            throw new \InvalidArgumentException('invalid length for $delivery_document_item when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 6.');
        }

        $this->container['delivery_document_item'] = $delivery_document_item;

        return $this;
    }

    /**
     * Gets schedule_line
     *
     * @return string|null
     */
    public function getScheduleLine()
    {
        return $this->container['schedule_line'];
    }

    /**
     * Sets schedule_line
     *
     * @param string|null $schedule_line schedule_line
     *
     * @return self
     */
    public function setScheduleLine($schedule_line)
    {
        if (is_null($schedule_line)) {
            array_push($this->openAPINullablesSetToNull, 'schedule_line');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('schedule_line', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($schedule_line) && (mb_strlen($schedule_line) > 4)) {
            throw new \InvalidArgumentException('invalid length for $schedule_line when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 4.');
        }

        $this->container['schedule_line'] = $schedule_line;

        return $this;
    }

    /**
     * Gets collective_processing_msg_counter
     *
     * @return string|null
     */
    public function getCollectiveProcessingMsgCounter()
    {
        return $this->container['collective_processing_msg_counter'];
    }

    /**
     * Sets collective_processing_msg_counter
     *
     * @param string|null $collective_processing_msg_counter collective_processing_msg_counter
     *
     * @return self
     */
    public function setCollectiveProcessingMsgCounter($collective_processing_msg_counter)
    {
        if (is_null($collective_processing_msg_counter)) {
            array_push($this->openAPINullablesSetToNull, 'collective_processing_msg_counter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('collective_processing_msg_counter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($collective_processing_msg_counter) && (mb_strlen($collective_processing_msg_counter) > 2)) {
            throw new \InvalidArgumentException('invalid length for $collective_processing_msg_counter when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 2.');
        }

        $this->container['collective_processing_msg_counter'] = $collective_processing_msg_counter;

        return $this;
    }

    /**
     * Gets system_message_identification
     *
     * @return string|null
     */
    public function getSystemMessageIdentification()
    {
        return $this->container['system_message_identification'];
    }

    /**
     * Sets system_message_identification
     *
     * @param string|null $system_message_identification system_message_identification
     *
     * @return self
     */
    public function setSystemMessageIdentification($system_message_identification)
    {
        if (is_null($system_message_identification)) {
            array_push($this->openAPINullablesSetToNull, 'system_message_identification');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('system_message_identification', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($system_message_identification) && (mb_strlen($system_message_identification) > 20)) {
            throw new \InvalidArgumentException('invalid length for $system_message_identification when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 20.');
        }

        $this->container['system_message_identification'] = $system_message_identification;

        return $this;
    }

    /**
     * Gets system_message_number
     *
     * @return string|null
     */
    public function getSystemMessageNumber()
    {
        return $this->container['system_message_number'];
    }

    /**
     * Sets system_message_number
     *
     * @param string|null $system_message_number system_message_number
     *
     * @return self
     */
    public function setSystemMessageNumber($system_message_number)
    {
        if (is_null($system_message_number)) {
            array_push($this->openAPINullablesSetToNull, 'system_message_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('system_message_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($system_message_number) && (mb_strlen($system_message_number) > 3)) {
            throw new \InvalidArgumentException('invalid length for $system_message_number when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 3.');
        }

        $this->container['system_message_number'] = $system_message_number;

        return $this;
    }

    /**
     * Gets system_message_type
     *
     * @return string|null
     */
    public function getSystemMessageType()
    {
        return $this->container['system_message_type'];
    }

    /**
     * Sets system_message_type
     *
     * @param string|null $system_message_type system_message_type
     *
     * @return self
     */
    public function setSystemMessageType($system_message_type)
    {
        if (is_null($system_message_type)) {
            array_push($this->openAPINullablesSetToNull, 'system_message_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('system_message_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($system_message_type) && (mb_strlen($system_message_type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $system_message_type when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 1.');
        }

        $this->container['system_message_type'] = $system_message_type;

        return $this;
    }

    /**
     * Gets system_message_variable1
     *
     * @return string|null
     */
    public function getSystemMessageVariable1()
    {
        return $this->container['system_message_variable1'];
    }

    /**
     * Sets system_message_variable1
     *
     * @param string|null $system_message_variable1 system_message_variable1
     *
     * @return self
     */
    public function setSystemMessageVariable1($system_message_variable1)
    {
        if (is_null($system_message_variable1)) {
            array_push($this->openAPINullablesSetToNull, 'system_message_variable1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('system_message_variable1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($system_message_variable1) && (mb_strlen($system_message_variable1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $system_message_variable1 when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 50.');
        }

        $this->container['system_message_variable1'] = $system_message_variable1;

        return $this;
    }

    /**
     * Gets system_message_variable2
     *
     * @return string|null
     */
    public function getSystemMessageVariable2()
    {
        return $this->container['system_message_variable2'];
    }

    /**
     * Sets system_message_variable2
     *
     * @param string|null $system_message_variable2 system_message_variable2
     *
     * @return self
     */
    public function setSystemMessageVariable2($system_message_variable2)
    {
        if (is_null($system_message_variable2)) {
            array_push($this->openAPINullablesSetToNull, 'system_message_variable2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('system_message_variable2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($system_message_variable2) && (mb_strlen($system_message_variable2) > 50)) {
            throw new \InvalidArgumentException('invalid length for $system_message_variable2 when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 50.');
        }

        $this->container['system_message_variable2'] = $system_message_variable2;

        return $this;
    }

    /**
     * Gets system_message_variable3
     *
     * @return string|null
     */
    public function getSystemMessageVariable3()
    {
        return $this->container['system_message_variable3'];
    }

    /**
     * Sets system_message_variable3
     *
     * @param string|null $system_message_variable3 system_message_variable3
     *
     * @return self
     */
    public function setSystemMessageVariable3($system_message_variable3)
    {
        if (is_null($system_message_variable3)) {
            array_push($this->openAPINullablesSetToNull, 'system_message_variable3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('system_message_variable3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($system_message_variable3) && (mb_strlen($system_message_variable3) > 50)) {
            throw new \InvalidArgumentException('invalid length for $system_message_variable3 when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 50.');
        }

        $this->container['system_message_variable3'] = $system_message_variable3;

        return $this;
    }

    /**
     * Gets system_message_variable4
     *
     * @return string|null
     */
    public function getSystemMessageVariable4()
    {
        return $this->container['system_message_variable4'];
    }

    /**
     * Sets system_message_variable4
     *
     * @param string|null $system_message_variable4 system_message_variable4
     *
     * @return self
     */
    public function setSystemMessageVariable4($system_message_variable4)
    {
        if (is_null($system_message_variable4)) {
            array_push($this->openAPINullablesSetToNull, 'system_message_variable4');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('system_message_variable4', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($system_message_variable4) && (mb_strlen($system_message_variable4) > 50)) {
            throw new \InvalidArgumentException('invalid length for $system_message_variable4 when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 50.');
        }

        $this->container['system_message_variable4'] = $system_message_variable4;

        return $this;
    }

    /**
     * Gets collective_processing_type
     *
     * @return string|null
     */
    public function getCollectiveProcessingType()
    {
        return $this->container['collective_processing_type'];
    }

    /**
     * Sets collective_processing_type
     *
     * @param string|null $collective_processing_type collective_processing_type
     *
     * @return self
     */
    public function setCollectiveProcessingType($collective_processing_type)
    {
        if (is_null($collective_processing_type)) {
            array_push($this->openAPINullablesSetToNull, 'collective_processing_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('collective_processing_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($collective_processing_type) && (mb_strlen($collective_processing_type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $collective_processing_type when calling APICUSTOMERRETURNSDELIVERYSRVDeliveryMessage., must be smaller than or equal to 1.');
        }

        $this->container['collective_processing_type'] = $collective_processing_type;

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


