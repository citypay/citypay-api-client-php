<?php
/**
 * RegisterCard
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CityPay Payment API
 *
 * This CityPay API is an HTTP RESTful payment API used for direct server to server transactional processing. It provides a number of payment mechanisms including: Internet, MOTO, Continuous Authority transaction processing, 3-D Secure decision handling using RFA Secure, Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids and Completion processing. The API is also capable of tokenized payments using cardholder Accounts.  ## Compliance and Security Your application will need to adhere to PCI-DSS standards to operate safely and to meet requirements set out by  Visa and MasterCard and the PCI Security Standards Council. These include  * Data must be collected using TLS version 1.2 using [strong cryptography](https://citypay.github.io/api-docs/payment-api/#enabled-tls-ciphers). We will not accept calls to our API at   lower grade encryption levels. We regularly scan our TLS endpoints for vulnerabilities and perform TLS assessments   as part of our compliance program. * The application must not store sensitive cardholder data (CHD) such as the card security code (CSC) or   primary access number (PAN) * The application must not display the full card number on receipts, it is recommended to mask the PAN   and show the last 4 digits. The API will return this for you for ease of receipt creation * If you are developing a website, you will be required to perform regular scans on the network where you host the   application to meet your compliance obligations * You will be required to be PCI Compliant and the application must adhere to the security standard. Further information   is available from [https://www.pcisecuritystandards.org/](https://www.pcisecuritystandards.org/) * The API verifies that the request is for a valid account and originates from a trusted source using the remote IP   address. Our application firewalls analyse data that may be an attempt to break a large number of security common   security vulnerabilities.
 *
 * Contact: support@citypay.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CityPay\Model;

use \ArrayAccess;
use \CityPay\ObjectSerializer;

/**
 * RegisterCard Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RegisterCard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RegisterCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cardnumber' => 'string',
        'default' => 'bool',
        'expmonth' => 'int',
        'expyear' => 'int',
        'name_on_card' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cardnumber' => null,
        'default' => null,
        'expmonth' => 'int32',
        'expyear' => 'int32',
        'name_on_card' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cardnumber' => false,
        'default' => false,
        'expmonth' => false,
        'expyear' => false,
        'name_on_card' => false
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
        'cardnumber' => 'cardnumber',
        'default' => 'default',
        'expmonth' => 'expmonth',
        'expyear' => 'expyear',
        'name_on_card' => 'name_on_card'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cardnumber' => 'setCardnumber',
        'default' => 'setDefault',
        'expmonth' => 'setExpmonth',
        'expyear' => 'setExpyear',
        'name_on_card' => 'setNameOnCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cardnumber' => 'getCardnumber',
        'default' => 'getDefault',
        'expmonth' => 'getExpmonth',
        'expyear' => 'getExpyear',
        'name_on_card' => 'getNameOnCard'
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
        $this->setIfExists('cardnumber', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('expmonth', $data ?? [], null);
        $this->setIfExists('expyear', $data ?? [], null);
        $this->setIfExists('name_on_card', $data ?? [], null);
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

        if ($this->container['cardnumber'] === null) {
            $invalidProperties[] = "'cardnumber' can't be null";
        }
        if ((mb_strlen($this->container['cardnumber']) > 22)) {
            $invalidProperties[] = "invalid value for 'cardnumber', the character length must be smaller than or equal to 22.";
        }

        if ((mb_strlen($this->container['cardnumber']) < 12)) {
            $invalidProperties[] = "invalid value for 'cardnumber', the character length must be bigger than or equal to 12.";
        }

        if ($this->container['expmonth'] === null) {
            $invalidProperties[] = "'expmonth' can't be null";
        }
        if (($this->container['expmonth'] > 12)) {
            $invalidProperties[] = "invalid value for 'expmonth', must be smaller than or equal to 12.";
        }

        if (($this->container['expmonth'] < 1)) {
            $invalidProperties[] = "invalid value for 'expmonth', must be bigger than or equal to 1.";
        }

        if ($this->container['expyear'] === null) {
            $invalidProperties[] = "'expyear' can't be null";
        }
        if (($this->container['expyear'] > 2100)) {
            $invalidProperties[] = "invalid value for 'expyear', must be smaller than or equal to 2100.";
        }

        if (($this->container['expyear'] < 2000)) {
            $invalidProperties[] = "invalid value for 'expyear', must be bigger than or equal to 2000.";
        }

        if (!is_null($this->container['name_on_card']) && (mb_strlen($this->container['name_on_card']) > 45)) {
            $invalidProperties[] = "invalid value for 'name_on_card', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['name_on_card']) && (mb_strlen($this->container['name_on_card']) < 2)) {
            $invalidProperties[] = "invalid value for 'name_on_card', the character length must be bigger than or equal to 2.";
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
     * Gets cardnumber
     *
     * @return string
     */
    public function getCardnumber()
    {
        return $this->container['cardnumber'];
    }

    /**
     * Sets cardnumber
     *
     * @param string $cardnumber The primary number of the card.
     *
     * @return self
     */
    public function setCardnumber($cardnumber)
    {
        if (is_null($cardnumber)) {
            throw new \InvalidArgumentException('non-nullable cardnumber cannot be null');
        }
        if ((mb_strlen($cardnumber) > 22)) {
            throw new \InvalidArgumentException('invalid length for $cardnumber when calling RegisterCard., must be smaller than or equal to 22.');
        }
        if ((mb_strlen($cardnumber) < 12)) {
            throw new \InvalidArgumentException('invalid length for $cardnumber when calling RegisterCard., must be bigger than or equal to 12.');
        }

        $this->container['cardnumber'] = $cardnumber;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default Determines whether the card should be the new default card.
     *
     * @return self
     */
    public function setDefault($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets expmonth
     *
     * @return int
     */
    public function getExpmonth()
    {
        return $this->container['expmonth'];
    }

    /**
     * Sets expmonth
     *
     * @param int $expmonth The expiry month of the card.
     *
     * @return self
     */
    public function setExpmonth($expmonth)
    {
        if (is_null($expmonth)) {
            throw new \InvalidArgumentException('non-nullable expmonth cannot be null');
        }

        if (($expmonth > 12)) {
            throw new \InvalidArgumentException('invalid value for $expmonth when calling RegisterCard., must be smaller than or equal to 12.');
        }
        if (($expmonth < 1)) {
            throw new \InvalidArgumentException('invalid value for $expmonth when calling RegisterCard., must be bigger than or equal to 1.');
        }

        $this->container['expmonth'] = $expmonth;

        return $this;
    }

    /**
     * Gets expyear
     *
     * @return int
     */
    public function getExpyear()
    {
        return $this->container['expyear'];
    }

    /**
     * Sets expyear
     *
     * @param int $expyear The expiry year of the card.
     *
     * @return self
     */
    public function setExpyear($expyear)
    {
        if (is_null($expyear)) {
            throw new \InvalidArgumentException('non-nullable expyear cannot be null');
        }

        if (($expyear > 2100)) {
            throw new \InvalidArgumentException('invalid value for $expyear when calling RegisterCard., must be smaller than or equal to 2100.');
        }
        if (($expyear < 2000)) {
            throw new \InvalidArgumentException('invalid value for $expyear when calling RegisterCard., must be bigger than or equal to 2000.');
        }

        $this->container['expyear'] = $expyear;

        return $this;
    }

    /**
     * Gets name_on_card
     *
     * @return string|null
     */
    public function getNameOnCard()
    {
        return $this->container['name_on_card'];
    }

    /**
     * Sets name_on_card
     *
     * @param string|null $name_on_card The card holder name as it appears on the card. The value is required if the account is to be used for 3dsv2 processing, otherwise it is optional.
     *
     * @return self
     */
    public function setNameOnCard($name_on_card)
    {
        if (is_null($name_on_card)) {
            throw new \InvalidArgumentException('non-nullable name_on_card cannot be null');
        }
        if ((mb_strlen($name_on_card) > 45)) {
            throw new \InvalidArgumentException('invalid length for $name_on_card when calling RegisterCard., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($name_on_card) < 2)) {
            throw new \InvalidArgumentException('invalid length for $name_on_card when calling RegisterCard., must be bigger than or equal to 2.');
        }

        $this->container['name_on_card'] = $name_on_card;

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


