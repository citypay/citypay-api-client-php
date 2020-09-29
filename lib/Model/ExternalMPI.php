<?php
/**
 * ExternalMPI
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
 * ExternalMPI Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExternalMPI implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalMPI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authen_result' => 'string',
        'cavv' => 'string',
        'eci' => 'int',
        'enrolled' => 'string',
        'xid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'authen_result' => null,
        'cavv' => null,
        'eci' => 'int32',
        'enrolled' => null,
        'xid' => null
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
        'authen_result' => 'authen_result',
        'cavv' => 'cavv',
        'eci' => 'eci',
        'enrolled' => 'enrolled',
        'xid' => 'xid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authen_result' => 'setAuthenResult',
        'cavv' => 'setCavv',
        'eci' => 'setEci',
        'enrolled' => 'setEnrolled',
        'xid' => 'setXid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authen_result' => 'getAuthenResult',
        'cavv' => 'getCavv',
        'eci' => 'getEci',
        'enrolled' => 'getEnrolled',
        'xid' => 'getXid'
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
        $this->container['authen_result'] = isset($data['authen_result']) ? $data['authen_result'] : null;
        $this->container['cavv'] = isset($data['cavv']) ? $data['cavv'] : null;
        $this->container['eci'] = isset($data['eci']) ? $data['eci'] : null;
        $this->container['enrolled'] = isset($data['enrolled']) ? $data['enrolled'] : null;
        $this->container['xid'] = isset($data['xid']) ? $data['xid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['authen_result']) && (mb_strlen($this->container['authen_result']) > 1)) {
            $invalidProperties[] = "invalid value for 'authen_result', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['cavv']) && (mb_strlen($this->container['cavv']) > 20)) {
            $invalidProperties[] = "invalid value for 'cavv', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['enrolled']) && (mb_strlen($this->container['enrolled']) > 1)) {
            $invalidProperties[] = "invalid value for 'enrolled', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['xid']) && (mb_strlen($this->container['xid']) > 20)) {
            $invalidProperties[] = "invalid value for 'xid', the character length must be smaller than or equal to 20.";
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
     * Gets authen_result
     *
     * @return string|null
     */
    public function getAuthenResult()
    {
        return $this->container['authen_result'];
    }

    /**
     * Sets authen_result
     *
     * @param string|null $authen_result The authentication result available from the MPI.
     *
     * @return $this
     */
    public function setAuthenResult($authen_result)
    {
        if (!is_null($authen_result) && (mb_strlen($authen_result) > 1)) {
            throw new \InvalidArgumentException('invalid length for $authen_result when calling ExternalMPI., must be smaller than or equal to 1.');
        }

        $this->container['authen_result'] = $authen_result;

        return $this;
    }

    /**
     * Gets cavv
     *
     * @return string|null
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     *
     * @param string|null $cavv A value determining the cardholder verification value supplied by the card scheme.
     *
     * @return $this
     */
    public function setCavv($cavv)
    {
        if (!is_null($cavv) && (mb_strlen($cavv) > 20)) {
            throw new \InvalidArgumentException('invalid length for $cavv when calling ExternalMPI., must be smaller than or equal to 20.');
        }

        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets eci
     *
     * @return int|null
     */
    public function getEci()
    {
        return $this->container['eci'];
    }

    /**
     * Sets eci
     *
     * @param int|null $eci The obtained e-commerce indicator from the MPI.
     *
     * @return $this
     */
    public function setEci($eci)
    {
        $this->container['eci'] = $eci;

        return $this;
    }

    /**
     * Gets enrolled
     *
     * @return string|null
     */
    public function getEnrolled()
    {
        return $this->container['enrolled'];
    }

    /**
     * Sets enrolled
     *
     * @param string|null $enrolled A value determining whether the card holder was enrolled.
     *
     * @return $this
     */
    public function setEnrolled($enrolled)
    {
        if (!is_null($enrolled) && (mb_strlen($enrolled) > 1)) {
            throw new \InvalidArgumentException('invalid length for $enrolled when calling ExternalMPI., must be smaller than or equal to 1.');
        }

        $this->container['enrolled'] = $enrolled;

        return $this;
    }

    /**
     * Gets xid
     *
     * @return string|null
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     *
     * @param string|null $xid The XID used for processing with the MPI.
     *
     * @return $this
     */
    public function setXid($xid)
    {
        if (!is_null($xid) && (mb_strlen($xid) > 20)) {
            throw new \InvalidArgumentException('invalid length for $xid when calling ExternalMPI., must be smaller than or equal to 20.');
        }

        $this->container['xid'] = $xid;

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

