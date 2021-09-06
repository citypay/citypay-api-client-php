<?php
/**
 * CardHolderAccount
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CityPay Payment API
 *
 * This CityPay API is a HTTP RESTful payment API used for direct server to server transactional processing. It provides a number of payment mechanisms including: Internet, MOTO, Continuous Authority transaction processing, 3-D Secure decision handling using RFA Secure, Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids and Completion processing. The API is also capable of tokinsed payments using Card Holder Accounts.  ## Compliance and Security <aside class=\"notice\">   Before we begin a reminder that your application will need to adhere to PCI-DSS standards to operate safely   and to meet requirements set out by Visa and MasterCard and the PCI Security Standards Council including: </aside>  * Data must be collected using TLS version 1.2 using [strong cryptography](#enabled-tls-ciphers). We will not accept calls to our API at   lower grade encryption levels. We regularly scan our TLS endpoints for vulnerabilities and perform TLS assessments   as part of our compliance program. * The application must not store sensitive card holder data (CHD) such as the card security code (CSC) or   primary access number (PAN) * The application must not display the full card number on receipts, it is recommended to mask the PAN   and show the last 4 digits. The API will return this for you for ease of receipt creation * If you are developing a website, you will be required to perform regular scans on the network where you host the   application to meet your compliance obligations * You will be required to be PCI Compliant and the application must adhere to the security standard. Further information   is available from [https://www.pcisecuritystandards.org/](https://www.pcisecuritystandards.org/) * The API verifies that the request is for a valid account and originates from a trusted source using the remote IP   address. Our application firewalls analyse data that may be an attempt to break a large number of security common   security vulnerabilities.
 *
 * Contact: support@citypay.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
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
 * CardHolderAccount Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CardHolderAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardHolderAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'cards' => '\CityPay\Model\Card[]',
        'contact' => '\CityPay\Model\ContactDetails',
        'date_created' => '\DateTime',
        'default_card_id' => 'string',
        'default_card_index' => 'int',
        'last_modified' => '\DateTime',
        'status' => 'string',
        'unique_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'cards' => null,
        'contact' => null,
        'date_created' => 'date-time',
        'default_card_id' => null,
        'default_card_index' => 'int32',
        'last_modified' => null,
        'status' => null,
        'unique_id' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account_id' => 'account_id',
        'cards' => 'cards',
        'contact' => 'contact',
        'date_created' => 'date_created',
        'default_card_id' => 'default_card_id',
        'default_card_index' => 'default_card_index',
        'last_modified' => 'last_modified',
        'status' => 'status',
        'unique_id' => 'unique_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'cards' => 'setCards',
        'contact' => 'setContact',
        'date_created' => 'setDateCreated',
        'default_card_id' => 'setDefaultCardId',
        'default_card_index' => 'setDefaultCardIndex',
        'last_modified' => 'setLastModified',
        'status' => 'setStatus',
        'unique_id' => 'setUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'cards' => 'getCards',
        'contact' => 'getContact',
        'date_created' => 'getDateCreated',
        'default_card_id' => 'getDefaultCardId',
        'default_card_index' => 'getDefaultCardIndex',
        'last_modified' => 'getLastModified',
        'status' => 'getStatus',
        'unique_id' => 'getUniqueId'
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
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['cards'] = $data['cards'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['default_card_id'] = $data['default_card_id'] ?? null;
        $this->container['default_card_index'] = $data['default_card_index'] ?? null;
        $this->container['last_modified'] = $data['last_modified'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['unique_id'] = $data['unique_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ((mb_strlen($this->container['account_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['account_id']) < 5)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id The account id of the card holder account provided by the merchant which uniquely identifies the account.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if ((mb_strlen($account_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling CardHolderAccount., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($account_id) < 5)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling CardHolderAccount., must be bigger than or equal to 5.');
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets cards
     *
     * @return \CityPay\Model\Card[]|null
     */
    public function getCards()
    {
        return $this->container['cards'];
    }

    /**
     * Sets cards
     *
     * @param \CityPay\Model\Card[]|null $cards cards
     *
     * @return self
     */
    public function setCards($cards)
    {
        $this->container['cards'] = $cards;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \CityPay\Model\ContactDetails
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \CityPay\Model\ContactDetails $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime|null $date_created The date and time the account was created.
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets default_card_id
     *
     * @return string|null
     */
    public function getDefaultCardId()
    {
        return $this->container['default_card_id'];
    }

    /**
     * Sets default_card_id
     *
     * @param string|null $default_card_id The id of the default card.
     *
     * @return self
     */
    public function setDefaultCardId($default_card_id)
    {
        $this->container['default_card_id'] = $default_card_id;

        return $this;
    }

    /**
     * Gets default_card_index
     *
     * @return int|null
     */
    public function getDefaultCardIndex()
    {
        return $this->container['default_card_index'];
    }

    /**
     * Sets default_card_index
     *
     * @param int|null $default_card_index The index in the array of the default card.
     *
     * @return self
     */
    public function setDefaultCardIndex($default_card_index)
    {
        $this->container['default_card_index'] = $default_card_index;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime|null
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime|null $last_modified The date and time the account was last modified.
     *
     * @return self
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Defines the status of the account for processing valid values are   - ACTIVE for active accounts that are able to process   - DISABLED for accounts that are currently disabled for processing.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets unique_id
     *
     * @return string|null
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string|null $unique_id A unique id of the card holder account which uniquely identifies the stored account. This value is not searchable.
     *
     * @return self
     */
    public function setUniqueId($unique_id)
    {
        $this->container['unique_id'] = $unique_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


