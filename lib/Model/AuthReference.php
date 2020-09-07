<?php
/**
 * AuthReference
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
 * AuthReference Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'amount_value' => 'string',
        'atrn' => 'string',
        'authcode' => 'string',
        'batchno' => 'string',
        'currency' => 'string',
        'datetime' => '\DateTime',
        'identifier' => 'string',
        'maskedpan' => 'string',
        'merchantid' => 'int',
        'result' => 'string',
        'trans_status' => 'string',
        'trans_type' => 'string',
        'transno' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => 'int32',
        'amount_value' => null,
        'atrn' => null,
        'authcode' => null,
        'batchno' => null,
        'currency' => null,
        'datetime' => 'date-time',
        'identifier' => null,
        'maskedpan' => null,
        'merchantid' => 'int32',
        'result' => null,
        'trans_status' => null,
        'trans_type' => null,
        'transno' => 'int32'
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
        'amount_value' => 'amount_value',
        'atrn' => 'atrn',
        'authcode' => 'authcode',
        'batchno' => 'batchno',
        'currency' => 'currency',
        'datetime' => 'datetime',
        'identifier' => 'identifier',
        'maskedpan' => 'maskedpan',
        'merchantid' => 'merchantid',
        'result' => 'result',
        'trans_status' => 'trans_status',
        'trans_type' => 'trans_type',
        'transno' => 'transno'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'amount_value' => 'setAmountValue',
        'atrn' => 'setAtrn',
        'authcode' => 'setAuthcode',
        'batchno' => 'setBatchno',
        'currency' => 'setCurrency',
        'datetime' => 'setDatetime',
        'identifier' => 'setIdentifier',
        'maskedpan' => 'setMaskedpan',
        'merchantid' => 'setMerchantid',
        'result' => 'setResult',
        'trans_status' => 'setTransStatus',
        'trans_type' => 'setTransType',
        'transno' => 'setTransno'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'amount_value' => 'getAmountValue',
        'atrn' => 'getAtrn',
        'authcode' => 'getAuthcode',
        'batchno' => 'getBatchno',
        'currency' => 'getCurrency',
        'datetime' => 'getDatetime',
        'identifier' => 'getIdentifier',
        'maskedpan' => 'getMaskedpan',
        'merchantid' => 'getMerchantid',
        'result' => 'getResult',
        'trans_status' => 'getTransStatus',
        'trans_type' => 'getTransType',
        'transno' => 'getTransno'
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
        $this->container['amount_value'] = isset($data['amount_value']) ? $data['amount_value'] : null;
        $this->container['atrn'] = isset($data['atrn']) ? $data['atrn'] : null;
        $this->container['authcode'] = isset($data['authcode']) ? $data['authcode'] : null;
        $this->container['batchno'] = isset($data['batchno']) ? $data['batchno'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['datetime'] = isset($data['datetime']) ? $data['datetime'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['maskedpan'] = isset($data['maskedpan']) ? $data['maskedpan'] : null;
        $this->container['merchantid'] = isset($data['merchantid']) ? $data['merchantid'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['trans_status'] = isset($data['trans_status']) ? $data['trans_status'] : null;
        $this->container['trans_type'] = isset($data['trans_type']) ? $data['trans_type'] : null;
        $this->container['transno'] = isset($data['transno']) ? $data['transno'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) > 50)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) < 4)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['trans_type']) && (mb_strlen($this->container['trans_type']) > 1)) {
            $invalidProperties[] = "invalid value for 'trans_type', the character length must be smaller than or equal to 1.";
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
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The amount of the transaction in decimal currency format.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_value
     *
     * @return string|null
     */
    public function getAmountValue()
    {
        return $this->container['amount_value'];
    }

    /**
     * Sets amount_value
     *
     * @param string|null $amount_value The amount of the transaction in integer/request format.
     *
     * @return $this
     */
    public function setAmountValue($amount_value)
    {
        $this->container['amount_value'] = $amount_value;

        return $this;
    }

    /**
     * Gets atrn
     *
     * @return string|null
     */
    public function getAtrn()
    {
        return $this->container['atrn'];
    }

    /**
     * Sets atrn
     *
     * @param string|null $atrn A reference number provided by the acquiring services.
     *
     * @return $this
     */
    public function setAtrn($atrn)
    {
        $this->container['atrn'] = $atrn;

        return $this;
    }

    /**
     * Gets authcode
     *
     * @return string|null
     */
    public function getAuthcode()
    {
        return $this->container['authcode'];
    }

    /**
     * Sets authcode
     *
     * @param string|null $authcode The authorisation code of the transaction returned by the acquirer or card issuer.
     *
     * @return $this
     */
    public function setAuthcode($authcode)
    {
        $this->container['authcode'] = $authcode;

        return $this;
    }

    /**
     * Gets batchno
     *
     * @return string|null
     */
    public function getBatchno()
    {
        return $this->container['batchno'];
    }

    /**
     * Sets batchno
     *
     * @param string|null $batchno A batch number which the transaction has been end of day batched towards.
     *
     * @return $this
     */
    public function setBatchno($batchno)
    {
        $this->container['batchno'] = $batchno;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency of the transaction in ISO 4217 code format.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling AuthReference., must be smaller than or equal to 3.');
        }
        if (!is_null($currency) && (mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling AuthReference., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets datetime
     *
     * @return \DateTime|null
     */
    public function getDatetime()
    {
        return $this->container['datetime'];
    }

    /**
     * Sets datetime
     *
     * @param \DateTime|null $datetime The date and time of the transaction.
     *
     * @return $this
     */
    public function setDatetime($datetime)
    {
        $this->container['datetime'] = $datetime;

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
     * @param string|null $identifier The identifier of the transaction used to process the transaction.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if (!is_null($identifier) && (mb_strlen($identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling AuthReference., must be smaller than or equal to 50.');
        }
        if (!is_null($identifier) && (mb_strlen($identifier) < 4)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling AuthReference., must be bigger than or equal to 4.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets maskedpan
     *
     * @return string|null
     */
    public function getMaskedpan()
    {
        return $this->container['maskedpan'];
    }

    /**
     * Sets maskedpan
     *
     * @param string|null $maskedpan A masking of the card number which was used to process the tranasction.
     *
     * @return $this
     */
    public function setMaskedpan($maskedpan)
    {
        $this->container['maskedpan'] = $maskedpan;

        return $this;
    }

    /**
     * Gets merchantid
     *
     * @return int|null
     */
    public function getMerchantid()
    {
        return $this->container['merchantid'];
    }

    /**
     * Sets merchantid
     *
     * @param int|null $merchantid The merchant id of the transaction result.
     *
     * @return $this
     */
    public function setMerchantid($merchantid)
    {
        $this->container['merchantid'] = $merchantid;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string|null $result The result of the transaction.
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets trans_status
     *
     * @return string|null
     */
    public function getTransStatus()
    {
        return $this->container['trans_status'];
    }

    /**
     * Sets trans_status
     *
     * @param string|null $trans_status The current status of the transaction through it's lifecycle.
     *
     * @return $this
     */
    public function setTransStatus($trans_status)
    {
        $this->container['trans_status'] = $trans_status;

        return $this;
    }

    /**
     * Gets trans_type
     *
     * @return string|null
     */
    public function getTransType()
    {
        return $this->container['trans_type'];
    }

    /**
     * Sets trans_type
     *
     * @param string|null $trans_type The type of transaction that was processed.
     *
     * @return $this
     */
    public function setTransType($trans_type)
    {
        if (!is_null($trans_type) && (mb_strlen($trans_type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $trans_type when calling AuthReference., must be smaller than or equal to 1.');
        }

        $this->container['trans_type'] = $trans_type;

        return $this;
    }

    /**
     * Gets transno
     *
     * @return int|null
     */
    public function getTransno()
    {
        return $this->container['transno'];
    }

    /**
     * Sets transno
     *
     * @param int|null $transno The transaction number of the transaction.
     *
     * @return $this
     */
    public function setTransno($transno)
    {
        $this->container['transno'] = $transno;

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


