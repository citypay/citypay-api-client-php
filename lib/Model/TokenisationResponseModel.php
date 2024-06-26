<?php
/**
 * TokenisationResponseModel
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
 * TokenisationResponseModel Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TokenisationResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TokenisationResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authen_result' => 'string',
        'bin_commercial' => 'bool',
        'bin_debit' => 'bool',
        'bin_description' => 'string',
        'eci' => 'string',
        'identifier' => 'string',
        'maskedpan' => 'string',
        'scheme' => 'string',
        'sig_id' => 'string',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authen_result' => null,
        'bin_commercial' => null,
        'bin_debit' => null,
        'bin_description' => null,
        'eci' => null,
        'identifier' => null,
        'maskedpan' => null,
        'scheme' => null,
        'sig_id' => null,
        'token' => 'base58'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'authen_result' => false,
        'bin_commercial' => false,
        'bin_debit' => false,
        'bin_description' => false,
        'eci' => false,
        'identifier' => false,
        'maskedpan' => false,
        'scheme' => false,
        'sig_id' => false,
        'token' => false
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
        'authen_result' => 'authen_result',
        'bin_commercial' => 'bin_commercial',
        'bin_debit' => 'bin_debit',
        'bin_description' => 'bin_description',
        'eci' => 'eci',
        'identifier' => 'identifier',
        'maskedpan' => 'maskedpan',
        'scheme' => 'scheme',
        'sig_id' => 'sig_id',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authen_result' => 'setAuthenResult',
        'bin_commercial' => 'setBinCommercial',
        'bin_debit' => 'setBinDebit',
        'bin_description' => 'setBinDescription',
        'eci' => 'setEci',
        'identifier' => 'setIdentifier',
        'maskedpan' => 'setMaskedpan',
        'scheme' => 'setScheme',
        'sig_id' => 'setSigId',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authen_result' => 'getAuthenResult',
        'bin_commercial' => 'getBinCommercial',
        'bin_debit' => 'getBinDebit',
        'bin_description' => 'getBinDescription',
        'eci' => 'getEci',
        'identifier' => 'getIdentifier',
        'maskedpan' => 'getMaskedpan',
        'scheme' => 'getScheme',
        'sig_id' => 'getSigId',
        'token' => 'getToken'
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
        $this->setIfExists('authen_result', $data ?? [], null);
        $this->setIfExists('bin_commercial', $data ?? [], null);
        $this->setIfExists('bin_debit', $data ?? [], null);
        $this->setIfExists('bin_description', $data ?? [], null);
        $this->setIfExists('eci', $data ?? [], null);
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('maskedpan', $data ?? [], null);
        $this->setIfExists('scheme', $data ?? [], null);
        $this->setIfExists('sig_id', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
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

        if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) > 50)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) < 4)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 4.";
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
     * @param string|null $authen_result The result of any authentication using 3d_secure authorisation against ecommerce transactions. Values are:  <table> <tr> <th>Value</th> <th>Description</th> </tr> <tr> <td>Y</td> <td>Authentication Successful. The Cardholder's password was successfully validated.</td> </tr> <tr> <td>N</td> <td>Authentication Failed. Customer failed or cancelled authentication, transaction denied.</td> </tr> <tr> <td>A</td> <td>Attempts Processing Performed Authentication could not be completed but a proof of authentication attempt (CAVV) was generated.</td> </tr> <tr> <td>U</td> <td>Authentication Could Not Be Performed Authentication could not be completed, due to technical or other problem.</td> </tr> </table>
     *
     * @return self
     */
    public function setAuthenResult($authen_result)
    {
        if (is_null($authen_result)) {
            throw new \InvalidArgumentException('non-nullable authen_result cannot be null');
        }
        $this->container['authen_result'] = $authen_result;

        return $this;
    }

    /**
     * Gets bin_commercial
     *
     * @return bool|null
     */
    public function getBinCommercial()
    {
        return $this->container['bin_commercial'];
    }

    /**
     * Sets bin_commercial
     *
     * @param bool|null $bin_commercial Determines whether the bin range was found to be a commercial or business card.
     *
     * @return self
     */
    public function setBinCommercial($bin_commercial)
    {
        if (is_null($bin_commercial)) {
            throw new \InvalidArgumentException('non-nullable bin_commercial cannot be null');
        }
        $this->container['bin_commercial'] = $bin_commercial;

        return $this;
    }

    /**
     * Gets bin_debit
     *
     * @return bool|null
     */
    public function getBinDebit()
    {
        return $this->container['bin_debit'];
    }

    /**
     * Sets bin_debit
     *
     * @param bool|null $bin_debit Determines whether the bin range was found to be a debit card. If false the card was considered as a credit card.
     *
     * @return self
     */
    public function setBinDebit($bin_debit)
    {
        if (is_null($bin_debit)) {
            throw new \InvalidArgumentException('non-nullable bin_debit cannot be null');
        }
        $this->container['bin_debit'] = $bin_debit;

        return $this;
    }

    /**
     * Gets bin_description
     *
     * @return string|null
     */
    public function getBinDescription()
    {
        return $this->container['bin_description'];
    }

    /**
     * Sets bin_description
     *
     * @param string|null $bin_description A description of the bin range found for the card.
     *
     * @return self
     */
    public function setBinDescription($bin_description)
    {
        if (is_null($bin_description)) {
            throw new \InvalidArgumentException('non-nullable bin_description cannot be null');
        }
        $this->container['bin_description'] = $bin_description;

        return $this;
    }

    /**
     * Gets eci
     *
     * @return string|null
     */
    public function getEci()
    {
        return $this->container['eci'];
    }

    /**
     * Sets eci
     *
     * @param string|null $eci An Electronic Commerce Indicator (ECI) used to identify the result of authentication using 3DSecure.
     *
     * @return self
     */
    public function setEci($eci)
    {
        if (is_null($eci)) {
            throw new \InvalidArgumentException('non-nullable eci cannot be null');
        }
        $this->container['eci'] = $eci;

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
     * @param string|null $identifier The identifier provided within the request.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if (is_null($identifier)) {
            throw new \InvalidArgumentException('non-nullable identifier cannot be null');
        }
        if ((mb_strlen($identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling TokenisationResponseModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($identifier) < 4)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling TokenisationResponseModel., must be bigger than or equal to 4.');
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
     * @param string|null $maskedpan A masked value of the card number used for processing displaying limited values that can be used on a receipt.
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
     * Gets scheme
     *
     * @return string|null
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string|null $scheme The name of the card scheme of the transaction that processed the transaction such as Visa or MasterCard.
     *
     * @return self
     */
    public function setScheme($scheme)
    {
        if (is_null($scheme)) {
            throw new \InvalidArgumentException('non-nullable scheme cannot be null');
        }
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets sig_id
     *
     * @return string|null
     */
    public function getSigId()
    {
        return $this->container['sig_id'];
    }

    /**
     * Sets sig_id
     *
     * @param string|null $sig_id A Base58 encoded SHA-256 digest generated from the token value Base58 decoded and appended with the nonce value UTF-8 decoded.
     *
     * @return self
     */
    public function setSigId($sig_id)
    {
        if (is_null($sig_id)) {
            throw new \InvalidArgumentException('non-nullable sig_id cannot be null');
        }
        $this->container['sig_id'] = $sig_id;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token The token used for presentment to authorisation later in the processing flow.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

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


