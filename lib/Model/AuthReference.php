<?php
/**
 * AuthReference
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
 * AuthReference Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuthReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

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
        'amount' => 'string',
        'amount_value' => 'int',
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'amount_value' => 'int32',
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'amount_value' => false,
        'atrn' => false,
        'authcode' => false,
        'batchno' => false,
        'currency' => false,
        'datetime' => false,
        'identifier' => false,
        'maskedpan' => false,
        'merchantid' => false,
        'result' => false,
        'trans_status' => false,
        'trans_type' => false,
        'transno' => false
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('amount_value', $data ?? [], null);
        $this->setIfExists('atrn', $data ?? [], null);
        $this->setIfExists('authcode', $data ?? [], null);
        $this->setIfExists('batchno', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('datetime', $data ?? [], null);
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('maskedpan', $data ?? [], null);
        $this->setIfExists('merchantid', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('trans_status', $data ?? [], null);
        $this->setIfExists('trans_type', $data ?? [], null);
        $this->setIfExists('transno', $data ?? [], null);
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

        if (!is_null($this->container['amount']) && (mb_strlen($this->container['amount']) > 10)) {
            $invalidProperties[] = "invalid value for 'amount', the character length must be smaller than or equal to 10.";
        }

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
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount The amount of the transaction in decimal currency format.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        if ((mb_strlen($amount) > 10)) {
            throw new \InvalidArgumentException('invalid length for $amount when calling AuthReference., must be smaller than or equal to 10.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_value
     *
     * @return int|null
     */
    public function getAmountValue()
    {
        return $this->container['amount_value'];
    }

    /**
     * Sets amount_value
     *
     * @param int|null $amount_value The amount of the transaction in integer/request format.
     *
     * @return self
     */
    public function setAmountValue($amount_value)
    {
        if (is_null($amount_value)) {
            throw new \InvalidArgumentException('non-nullable amount_value cannot be null');
        }


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
     * @return self
     */
    public function setAtrn($atrn)
    {
        if (is_null($atrn)) {
            throw new \InvalidArgumentException('non-nullable atrn cannot be null');
        }
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
     * @return self
     */
    public function setAuthcode($authcode)
    {
        if (is_null($authcode)) {
            throw new \InvalidArgumentException('non-nullable authcode cannot be null');
        }
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
     * @return self
     */
    public function setBatchno($batchno)
    {
        if (is_null($batchno)) {
            throw new \InvalidArgumentException('non-nullable batchno cannot be null');
        }
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
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling AuthReference., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($currency) < 3)) {
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
     * @return self
     */
    public function setDatetime($datetime)
    {
        if (is_null($datetime)) {
            throw new \InvalidArgumentException('non-nullable datetime cannot be null');
        }
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
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if (is_null($identifier)) {
            throw new \InvalidArgumentException('non-nullable identifier cannot be null');
        }
        if ((mb_strlen($identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling AuthReference., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($identifier) < 4)) {
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
     * @return self
     */
    public function setMaskedpan($maskedpan)
    {
        if (is_null($maskedpan)) {
            throw new \InvalidArgumentException('non-nullable maskedpan cannot be null');
        }
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
     * @return self
     */
    public function setMerchantid($merchantid)
    {
        if (is_null($merchantid)) {
            throw new \InvalidArgumentException('non-nullable merchantid cannot be null');
        }
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
     * @return self
     */
    public function setResult($result)
    {
        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }
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
     * @return self
     */
    public function setTransStatus($trans_status)
    {
        if (is_null($trans_status)) {
            throw new \InvalidArgumentException('non-nullable trans_status cannot be null');
        }
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
     * @return self
     */
    public function setTransType($trans_type)
    {
        if (is_null($trans_type)) {
            throw new \InvalidArgumentException('non-nullable trans_type cannot be null');
        }
        if ((mb_strlen($trans_type) > 1)) {
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
     * @return self
     */
    public function setTransno($transno)
    {
        if (is_null($transno)) {
            throw new \InvalidArgumentException('non-nullable transno cannot be null');
        }
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


