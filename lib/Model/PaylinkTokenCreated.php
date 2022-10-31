<?php
/**
 * PaylinkTokenCreated
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
 * This CityPay API is a HTTP RESTful payment API used for direct server to server transactional processing. It provides a number of payment mechanisms including: Internet, MOTO, Continuous Authority transaction processing, 3-D Secure decision handling using RFA Secure, Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids and Completion processing. The API is also capable of tokinsed payments using Card Holder Accounts.  ## Compliance and Security Your application will need to adhere to PCI-DSS standards to operate safely and to meet requirements set out by  Visa and MasterCard and the PCI Security Standards Council. These include  * Data must be collected using TLS version 1.2 using [strong cryptography](#enabled-tls-ciphers). We will not accept calls to our API at   lower grade encryption levels. We regularly scan our TLS endpoints for vulnerabilities and perform TLS assessments   as part of our compliance program. * The application must not store sensitive card holder data (CHD) such as the card security code (CSC) or   primary access number (PAN) * The application must not display the full card number on receipts, it is recommended to mask the PAN   and show the last 4 digits. The API will return this for you for ease of receipt creation * If you are developing a website, you will be required to perform regular scans on the network where you host the   application to meet your compliance obligations * You will be required to be PCI Compliant and the application must adhere to the security standard. Further information   is available from [https://www.pcisecuritystandards.org/](https://www.pcisecuritystandards.org/) * The API verifies that the request is for a valid account and originates from a trusted source using the remote IP   address. Our application firewalls analyse data that may be an attempt to break a large number of security common   security vulnerabilities.
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
 * PaylinkTokenCreated Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaylinkTokenCreated implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaylinkTokenCreated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachments' => '\CityPay\Model\PaylinkAttachmentResult',
        'bps' => 'string',
        'date_created' => '\DateTime',
        'errors' => '\CityPay\Model\PaylinkErrorCode[]',
        'id' => 'string',
        'identifier' => 'string',
        'mode' => 'string',
        'qr_code' => 'string',
        'result' => 'int',
        'server_version' => 'string',
        'source' => 'string',
        'token' => 'string',
        'url' => 'string',
        'usc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachments' => null,
        'bps' => null,
        'date_created' => 'date-time',
        'errors' => null,
        'id' => null,
        'identifier' => null,
        'mode' => null,
        'qr_code' => null,
        'result' => 'int32',
        'server_version' => null,
        'source' => 'ipv4',
        'token' => null,
        'url' => null,
        'usc' => null
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
        'attachments' => 'attachments',
        'bps' => 'bps',
        'date_created' => 'date_created',
        'errors' => 'errors',
        'id' => 'id',
        'identifier' => 'identifier',
        'mode' => 'mode',
        'qr_code' => 'qr_code',
        'result' => 'result',
        'server_version' => 'server_version',
        'source' => 'source',
        'token' => 'token',
        'url' => 'url',
        'usc' => 'usc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
        'bps' => 'setBps',
        'date_created' => 'setDateCreated',
        'errors' => 'setErrors',
        'id' => 'setId',
        'identifier' => 'setIdentifier',
        'mode' => 'setMode',
        'qr_code' => 'setQrCode',
        'result' => 'setResult',
        'server_version' => 'setServerVersion',
        'source' => 'setSource',
        'token' => 'setToken',
        'url' => 'setUrl',
        'usc' => 'setUsc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
        'bps' => 'getBps',
        'date_created' => 'getDateCreated',
        'errors' => 'getErrors',
        'id' => 'getId',
        'identifier' => 'getIdentifier',
        'mode' => 'getMode',
        'qr_code' => 'getQrCode',
        'result' => 'getResult',
        'server_version' => 'getServerVersion',
        'source' => 'getSource',
        'token' => 'getToken',
        'url' => 'getUrl',
        'usc' => 'getUsc'
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
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['bps'] = $data['bps'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['qr_code'] = $data['qr_code'] ?? null;
        $this->container['result'] = $data['result'] ?? null;
        $this->container['server_version'] = $data['server_version'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['usc'] = $data['usc'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
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
     * Gets attachments
     *
     * @return \CityPay\Model\PaylinkAttachmentResult|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \CityPay\Model\PaylinkAttachmentResult|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets bps
     *
     * @return string|null
     */
    public function getBps()
    {
        return $this->container['bps'];
    }

    /**
     * Sets bps
     *
     * @param string|null $bps true if BPS has been enabled on this token.
     *
     * @return self
     */
    public function setBps($bps)
    {
        $this->container['bps'] = $bps;

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
     * @param \DateTime|null $date_created Date and time the token was generated.
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \CityPay\Model\PaylinkErrorCode[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \CityPay\Model\PaylinkErrorCode[]|null $errors errors
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id A unique id of the request.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier The identifier as presented in the TokenRequest.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode Determines whether the token is `live` or `test`.
     *
     * @return self
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets qr_code
     *
     * @return string|null
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param string|null $qr_code A URL of a qrcode which can be used to refer to the token URL.
     *
     * @return self
     */
    public function setQrCode($qr_code)
    {
        $this->container['qr_code'] = $qr_code;

        return $this;
    }

    /**
     * Gets result
     *
     * @return int
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param int $result The result field contains the result for the Paylink Token Request. 0 - indicates that an error was encountered while creating the token. 1 - which indicates that a Token was successfully created.
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets server_version
     *
     * @return string|null
     */
    public function getServerVersion()
    {
        return $this->container['server_version'];
    }

    /**
     * Sets server_version
     *
     * @param string|null $server_version the version of the server performing the call.
     *
     * @return self
     */
    public function setServerVersion($server_version)
    {
        $this->container['server_version'] = $server_version;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source The incoming IP address of the call.
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token A token generated for the request used to refer to the transaction in consequential calls.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The Paylink token URL used to checkout by the card holder.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets usc
     *
     * @return string|null
     */
    public function getUsc()
    {
        return $this->container['usc'];
    }

    /**
     * Sets usc
     *
     * @param string|null $usc A UrlShortCode (USC) used for short links.
     *
     * @return self
     */
    public function setUsc($usc)
    {
        $this->container['usc'] = $usc;

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


