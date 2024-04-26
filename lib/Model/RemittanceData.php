<?php
/**
 * RemittanceData
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
 * Welcome to the CityPay API, a robust HTTP API payment solution designed for seamless server-to-server  transactional processing. Our API facilitates a wide array of payment operations, catering to diverse business needs.  Whether you're integrating Internet payments, handling Mail Order/Telephone Order (MOTO) transactions, managing  Subscriptions with Recurring and Continuous Authority payments, or navigating the complexities of 3-D Secure  authentication, our API is equipped to support your requirements. Additionally, we offer functionalities for  Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids, and Completion processing, alongside the capability  for tokenised payments.  ## Compliance and Security Overview <aside class=\"notice\">   Ensuring the security of payment transactions and compliance with industry standards is paramount. Our API is    designed with stringent security measures and compliance protocols to safeguard sensitive information and meet    the rigorous requirements of Visa, MasterCard, and the PCI Security Standards Council. </aside>  ### Key Compliance and Security Measures  * **TLS Encryption**: All data transmissions must utilise TLS version 1.2 or higher, employing [strong cryptography](#enabled-tls-ciphers). Our infrastructure strictly enforces this requirement to maintain the integrity and confidentiality of data in transit. We conduct regular scans and assessments of our TLS endpoints to identify and mitigate vulnerabilities. * **Data Storage Prohibitions**: Storing sensitive cardholder data (CHD), such as the card security code (CSC) or primary account number (PAN), is strictly prohibited. Our API is designed to minimize your exposure to sensitive data, thereby reducing your compliance burden. * **Data Masking**: For consumer protection and compliance, full card numbers must not be displayed on receipts or any customer-facing materials. Our API automatically masks PANs, displaying only the last four digits to facilitate safe receipt generation. * **Network Scans**: If your application is web-based, regular scans of your hosting environment are mandatory to identify and rectify potential vulnerabilities. This proactive measure is crucial for maintaining a secure and compliant online presence. * **PCI Compliance**: Adherence to PCI DSS standards is not optional; it's a requirement for operating securely and legally in the payments ecosystem. For detailed information on compliance requirements and resources, please visit the PCI Security Standards Council website [https://www.pcisecuritystandards.org/](https://www.pcisecuritystandards.org/). * **Request Validation**: Our API includes mechanisms to verify the legitimacy of each request, ensuring it pertains to a valid account and originates from a trusted source. We leverage remote IP address verification alongside sophisticated application firewall technologies to thwart a wide array of common security threats.  ## Getting Started Before integrating with the CityPay API, ensure your application and development practices align with the outlined compliance and security measures. This preparatory step is crucial for a smooth integration process and the long-term success of your payment processing operations.  For further details on API endpoints, request/response formats, and code examples, proceed to the subsequent sections of our documentation. Our aim is to provide you with all the necessary tools and information to integrate our payment processing capabilities seamlessly into your application.  Thank you for choosing CityPay API. We look forward to supporting your payment processing needs with our secure, compliant, and versatile API solution.
 *
 * Contact: support@citypay.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
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
 * RemittanceData Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RemittanceData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemittanceData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_created' => '\DateTime',
        'net_amount' => 'int',
        'refund_amount' => 'int',
        'refund_count' => 'int',
        'sales_amount' => 'int',
        'sales_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_created' => 'date-time',
        'net_amount' => 'int32',
        'refund_amount' => 'int32',
        'refund_count' => 'int32',
        'sales_amount' => 'int32',
        'sales_count' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date_created' => false,
        'net_amount' => false,
        'refund_amount' => false,
        'refund_count' => false,
        'sales_amount' => false,
        'sales_count' => false
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
        'date_created' => 'date_created',
        'net_amount' => 'net_amount',
        'refund_amount' => 'refund_amount',
        'refund_count' => 'refund_count',
        'sales_amount' => 'sales_amount',
        'sales_count' => 'sales_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_created' => 'setDateCreated',
        'net_amount' => 'setNetAmount',
        'refund_amount' => 'setRefundAmount',
        'refund_count' => 'setRefundCount',
        'sales_amount' => 'setSalesAmount',
        'sales_count' => 'setSalesCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_created' => 'getDateCreated',
        'net_amount' => 'getNetAmount',
        'refund_amount' => 'getRefundAmount',
        'refund_count' => 'getRefundCount',
        'sales_amount' => 'getSalesAmount',
        'sales_count' => 'getSalesCount'
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
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('net_amount', $data ?? [], null);
        $this->setIfExists('refund_amount', $data ?? [], null);
        $this->setIfExists('refund_count', $data ?? [], null);
        $this->setIfExists('sales_amount', $data ?? [], null);
        $this->setIfExists('sales_count', $data ?? [], null);
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

        if (!is_null($this->container['net_amount']) && ($this->container['net_amount'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'net_amount', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['net_amount']) && ($this->container['net_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'net_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['refund_amount']) && ($this->container['refund_amount'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'refund_amount', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['refund_amount']) && ($this->container['refund_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'refund_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['refund_count']) && ($this->container['refund_count'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'refund_count', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['refund_count']) && ($this->container['refund_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'refund_count', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sales_amount']) && ($this->container['sales_amount'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'sales_amount', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['sales_amount']) && ($this->container['sales_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'sales_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sales_count']) && ($this->container['sales_count'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'sales_count', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['sales_count']) && ($this->container['sales_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'sales_count', must be bigger than or equal to 0.";
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
     * @param \DateTime|null $date_created Represents the date and time when the remittance was processed. This timestamp follows the ISO 8601 format for datetime representation.
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        if (is_null($date_created)) {
            throw new \InvalidArgumentException('non-nullable date_created cannot be null');
        }
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return int|null
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param int|null $net_amount Represents the net amount after accounting for refunds. This is calculated as SalesAmount - RefundAmount and expressed in the smallest currency unit.
     *
     * @return self
     */
    public function setNetAmount($net_amount)
    {
        if (is_null($net_amount)) {
            throw new \InvalidArgumentException('non-nullable net_amount cannot be null');
        }

        if (($net_amount > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $net_amount when calling RemittanceData., must be smaller than or equal to 999999999.');
        }
        if (($net_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $net_amount when calling RemittanceData., must be bigger than or equal to 0.');
        }

        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return int|null
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param int|null $refund_amount The total amount refunded to customers.
     *
     * @return self
     */
    public function setRefundAmount($refund_amount)
    {
        if (is_null($refund_amount)) {
            throw new \InvalidArgumentException('non-nullable refund_amount cannot be null');
        }

        if (($refund_amount > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $refund_amount when calling RemittanceData., must be smaller than or equal to 999999999.');
        }
        if (($refund_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $refund_amount when calling RemittanceData., must be bigger than or equal to 0.');
        }

        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets refund_count
     *
     * @return int|null
     */
    public function getRefundCount()
    {
        return $this->container['refund_count'];
    }

    /**
     * Sets refund_count
     *
     * @param int|null $refund_count The total number of refund transactions processed. This figure helps in understanding the frequency of refunds relative to sales.
     *
     * @return self
     */
    public function setRefundCount($refund_count)
    {
        if (is_null($refund_count)) {
            throw new \InvalidArgumentException('non-nullable refund_count cannot be null');
        }

        if (($refund_count > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $refund_count when calling RemittanceData., must be smaller than or equal to 999999999.');
        }
        if (($refund_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $refund_count when calling RemittanceData., must be bigger than or equal to 0.');
        }

        $this->container['refund_count'] = $refund_count;

        return $this;
    }

    /**
     * Gets sales_amount
     *
     * @return int|null
     */
    public function getSalesAmount()
    {
        return $this->container['sales_amount'];
    }

    /**
     * Sets sales_amount
     *
     * @param int|null $sales_amount The total monetary amount of sales transactions.
     *
     * @return self
     */
    public function setSalesAmount($sales_amount)
    {
        if (is_null($sales_amount)) {
            throw new \InvalidArgumentException('non-nullable sales_amount cannot be null');
        }

        if (($sales_amount > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $sales_amount when calling RemittanceData., must be smaller than or equal to 999999999.');
        }
        if (($sales_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $sales_amount when calling RemittanceData., must be bigger than or equal to 0.');
        }

        $this->container['sales_amount'] = $sales_amount;

        return $this;
    }

    /**
     * Gets sales_count
     *
     * @return int|null
     */
    public function getSalesCount()
    {
        return $this->container['sales_count'];
    }

    /**
     * Sets sales_count
     *
     * @param int|null $sales_count Indicates the total number of sales transactions that occurred. This count provides insight into the volume of sales.
     *
     * @return self
     */
    public function setSalesCount($sales_count)
    {
        if (is_null($sales_count)) {
            throw new \InvalidArgumentException('non-nullable sales_count cannot be null');
        }

        if (($sales_count > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $sales_count when calling RemittanceData., must be smaller than or equal to 999999999.');
        }
        if (($sales_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $sales_count when calling RemittanceData., must be bigger than or equal to 0.');
        }

        $this->container['sales_count'] = $sales_count;

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


