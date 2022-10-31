<?php
/**
 * PaylinkCardHolder
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
 * PaylinkCardHolder Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaylinkCardHolder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaylinkCardHolder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accept_headers' => 'string',
        'address' => '\CityPay\Model\PaylinkAddress',
        'company' => 'string',
        'email' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'mobile_no' => 'string',
        'remote_addr' => 'string',
        'title' => 'string',
        'user_agent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accept_headers' => null,
        'address' => null,
        'company' => null,
        'email' => null,
        'firstname' => null,
        'lastname' => null,
        'mobile_no' => null,
        'remote_addr' => null,
        'title' => null,
        'user_agent' => null
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
        'accept_headers' => 'accept_headers',
        'address' => 'address',
        'company' => 'company',
        'email' => 'email',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'mobile_no' => 'mobile_no',
        'remote_addr' => 'remote_addr',
        'title' => 'title',
        'user_agent' => 'user_agent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_headers' => 'setAcceptHeaders',
        'address' => 'setAddress',
        'company' => 'setCompany',
        'email' => 'setEmail',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'mobile_no' => 'setMobileNo',
        'remote_addr' => 'setRemoteAddr',
        'title' => 'setTitle',
        'user_agent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_headers' => 'getAcceptHeaders',
        'address' => 'getAddress',
        'company' => 'getCompany',
        'email' => 'getEmail',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'mobile_no' => 'getMobileNo',
        'remote_addr' => 'getRemoteAddr',
        'title' => 'getTitle',
        'user_agent' => 'getUserAgent'
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
        $this->container['accept_headers'] = $data['accept_headers'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['firstname'] = $data['firstname'] ?? null;
        $this->container['lastname'] = $data['lastname'] ?? null;
        $this->container['mobile_no'] = $data['mobile_no'] ?? null;
        $this->container['remote_addr'] = $data['remote_addr'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 50)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['mobile_no']) && (mb_strlen($this->container['mobile_no']) > 20)) {
            $invalidProperties[] = "invalid value for 'mobile_no', the character length must be smaller than or equal to 20.";
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
     * Gets accept_headers
     *
     * @return string|null
     */
    public function getAcceptHeaders()
    {
        return $this->container['accept_headers'];
    }

    /**
     * Sets accept_headers
     *
     * @param string|null $accept_headers The accept headers string generated by the Customer Browser. This field may be used to lock the payment process to the customer's browser. If the customer were to attempt to use a different browser an error will be generated.
     *
     * @return self
     */
    public function setAcceptHeaders($accept_headers)
    {
        $this->container['accept_headers'] = $accept_headers;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \CityPay\Model\PaylinkAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \CityPay\Model\PaylinkAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company The company name for the card holder.
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (!is_null($company) && (mb_strlen($company) > 50)) {
            throw new \InvalidArgumentException('invalid length for $company when calling PaylinkCardHolder., must be smaller than or equal to 50.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The cardholder's email address. This field can be used to send a receipt to the payment cardholder. If this value is not supplied, no email will be sent.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PaylinkCardHolder., must be smaller than or equal to 254.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname The first name of the card holder.
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname The last name or surname of the card holder.
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets mobile_no
     *
     * @return string|null
     */
    public function getMobileNo()
    {
        return $this->container['mobile_no'];
    }

    /**
     * Sets mobile_no
     *
     * @param string|null $mobile_no The mobile number of the cardholder. This can be used for data collection via the Paylink Payment Form or to send an SMS on completion of a transaction. This feature is a licensable option and is not configured by default.
     *
     * @return self
     */
    public function setMobileNo($mobile_no)
    {
        if (!is_null($mobile_no) && (mb_strlen($mobile_no) > 20)) {
            throw new \InvalidArgumentException('invalid length for $mobile_no when calling PaylinkCardHolder., must be smaller than or equal to 20.');
        }

        $this->container['mobile_no'] = $mobile_no;

        return $this;
    }

    /**
     * Gets remote_addr
     *
     * @return string|null
     */
    public function getRemoteAddr()
    {
        return $this->container['remote_addr'];
    }

    /**
     * Sets remote_addr
     *
     * @param string|null $remote_addr Specifies the remote IP address of the customer's browser. This field may be used to lock the payment form to the customer's IP address. Should the address change or a malicious third party attempted to hijack the transaction, an error will be generated.
     *
     * @return self
     */
    public function setRemoteAddr($remote_addr)
    {
        $this->container['remote_addr'] = $remote_addr;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title A title for the card holder such as Mr, Mrs, Ms, M. Mme. etc.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent Specifies the user agent string of the Customer Browser. This field may be used to lock the payment form to the browser. Should a different user agent attempt to process the transaction or a malicious third party attempted to hijack the transaction, an error is generated.
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

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


