<?php
/**
 * RefundRequest
 *
 * PHP version 7.1
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
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * RefundRequest Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RefundRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'identifier' => 'string',
        'merchantid' => 'int',
        'refund_ref' => 'int',
        'trans_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => 'int32',
        'identifier' => null,
        'merchantid' => 'int32',
        'refund_ref' => 'int32',
        'trans_info' => null
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
        'amount' => 'amount',
        'identifier' => 'identifier',
        'merchantid' => 'merchantid',
        'refund_ref' => 'refund_ref',
        'trans_info' => 'trans_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'identifier' => 'setIdentifier',
        'merchantid' => 'setMerchantid',
        'refund_ref' => 'setRefundRef',
        'trans_info' => 'setTransInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'identifier' => 'getIdentifier',
        'merchantid' => 'getMerchantid',
        'refund_ref' => 'getRefundRef',
        'trans_info' => 'getTransInfo'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['merchantid'] = isset($data['merchantid']) ? $data['merchantid'] : null;
        $this->container['refund_ref'] = isset($data['refund_ref']) ? $data['refund_ref'] : null;
        $this->container['trans_info'] = isset($data['trans_info']) ? $data['trans_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ((mb_strlen($this->container['identifier']) > 50)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['identifier']) < 4)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['merchantid'] === null) {
            $invalidProperties[] = "'merchantid' can't be null";
        }
        if ($this->container['refund_ref'] === null) {
            $invalidProperties[] = "'refund_ref' can't be null";
        }
        if (!is_null($this->container['trans_info']) && (mb_strlen($this->container['trans_info']) > 50)) {
            $invalidProperties[] = "invalid value for 'trans_info', the character length must be smaller than or equal to 50.";
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The amount to refund in the lowest unit of currency with a variable length to a maximum of 12 digits. The amount should be the total amount required to refund for the transaction up to the original processed amount. No decimal points are to be included and no divisional characters such as 1,024. For example with GBP £1,021.95 the amount value is 102195.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier The identifier of the refund to process. The value should be a valid reference and may be used to perform  post processing actions and to aid in reconciliation of transactions.  The value should be a valid printable string with ASCII character ranges from 0x32 to 0x127.  The identifier is recommended to be distinct for each transaction such as a [random unique identifier](https://en.wikipedia.org/wiki/Universally_unique_identifier) this will aid in ensuring each transaction is identifiable.  When transactions are processed they are also checked for duplicate requests. Changing the identifier on a subsequent request will ensure that a transaction is considered as different.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if ((mb_strlen($identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling RefundRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($identifier) < 4)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling RefundRequest., must be bigger than or equal to 4.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets merchantid
     *
     * @return int
     */
    public function getMerchantid()
    {
        return $this->container['merchantid'];
    }

    /**
     * Sets merchantid
     *
     * @param int $merchantid Identifies the merchant account to perform the refund for.
     *
     * @return $this
     */
    public function setMerchantid($merchantid)
    {
        $this->container['merchantid'] = $merchantid;

        return $this;
    }

    /**
     * Gets refund_ref
     *
     * @return int
     */
    public function getRefundRef()
    {
        return $this->container['refund_ref'];
    }

    /**
     * Sets refund_ref
     *
     * @param int $refund_ref A reference to the original transaction number that is wanting to be refunded. The original  transaction must be on the same merchant id, previously authorised.
     *
     * @return $this
     */
    public function setRefundRef($refund_ref)
    {
        $this->container['refund_ref'] = $refund_ref;

        return $this;
    }

    /**
     * Gets trans_info
     *
     * @return string|null
     */
    public function getTransInfo()
    {
        return $this->container['trans_info'];
    }

    /**
     * Sets trans_info
     *
     * @param string|null $trans_info Further information that can be added to the transaction will display in reporting. Can be used for flexible values such as operator id.
     *
     * @return $this
     */
    public function setTransInfo($trans_info)
    {
        if (!is_null($trans_info) && (mb_strlen($trans_info) > 50)) {
            throw new \InvalidArgumentException('invalid length for $trans_info when calling RefundRequest., must be smaller than or equal to 50.');
        }

        $this->container['trans_info'] = $trans_info;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


