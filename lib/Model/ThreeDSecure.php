<?php
/**
 * ThreeDSecure
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
 * ThreeDSecure Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ThreeDSecure implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ThreeDSecure';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accept_headers' => 'string',
        'browser_color_depth' => 'string',
        'browser_ip' => 'string',
        'browser_java_enabled' => 'string',
        'browser_language' => 'string',
        'browser_screen_height' => 'string',
        'browser_screen_width' => 'string',
        'browser_tz' => 'string',
        'cp_bx' => 'string',
        'downgrade1' => 'bool',
        'merchant_termurl' => 'string',
        'tds_policy' => 'string',
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
        'browser_color_depth' => null,
        'browser_ip' => null,
        'browser_java_enabled' => null,
        'browser_language' => null,
        'browser_screen_height' => null,
        'browser_screen_width' => null,
        'browser_tz' => null,
        'cp_bx' => null,
        'downgrade1' => null,
        'merchant_termurl' => null,
        'tds_policy' => null,
        'user_agent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accept_headers' => false,
        'browser_color_depth' => false,
        'browser_ip' => false,
        'browser_java_enabled' => false,
        'browser_language' => false,
        'browser_screen_height' => false,
        'browser_screen_width' => false,
        'browser_tz' => false,
        'cp_bx' => false,
        'downgrade1' => false,
        'merchant_termurl' => false,
        'tds_policy' => false,
        'user_agent' => false
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
        'accept_headers' => 'accept_headers',
        'browser_color_depth' => 'browserColorDepth',
        'browser_ip' => 'browserIP',
        'browser_java_enabled' => 'browserJavaEnabled',
        'browser_language' => 'browserLanguage',
        'browser_screen_height' => 'browserScreenHeight',
        'browser_screen_width' => 'browserScreenWidth',
        'browser_tz' => 'browserTZ',
        'cp_bx' => 'cp_bx',
        'downgrade1' => 'downgrade1',
        'merchant_termurl' => 'merchant_termurl',
        'tds_policy' => 'tds_policy',
        'user_agent' => 'user_agent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_headers' => 'setAcceptHeaders',
        'browser_color_depth' => 'setBrowserColorDepth',
        'browser_ip' => 'setBrowserIp',
        'browser_java_enabled' => 'setBrowserJavaEnabled',
        'browser_language' => 'setBrowserLanguage',
        'browser_screen_height' => 'setBrowserScreenHeight',
        'browser_screen_width' => 'setBrowserScreenWidth',
        'browser_tz' => 'setBrowserTz',
        'cp_bx' => 'setCpBx',
        'downgrade1' => 'setDowngrade1',
        'merchant_termurl' => 'setMerchantTermurl',
        'tds_policy' => 'setTdsPolicy',
        'user_agent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_headers' => 'getAcceptHeaders',
        'browser_color_depth' => 'getBrowserColorDepth',
        'browser_ip' => 'getBrowserIp',
        'browser_java_enabled' => 'getBrowserJavaEnabled',
        'browser_language' => 'getBrowserLanguage',
        'browser_screen_height' => 'getBrowserScreenHeight',
        'browser_screen_width' => 'getBrowserScreenWidth',
        'browser_tz' => 'getBrowserTz',
        'cp_bx' => 'getCpBx',
        'downgrade1' => 'getDowngrade1',
        'merchant_termurl' => 'getMerchantTermurl',
        'tds_policy' => 'getTdsPolicy',
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
        $this->setIfExists('accept_headers', $data ?? [], null);
        $this->setIfExists('browser_color_depth', $data ?? [], null);
        $this->setIfExists('browser_ip', $data ?? [], null);
        $this->setIfExists('browser_java_enabled', $data ?? [], null);
        $this->setIfExists('browser_language', $data ?? [], null);
        $this->setIfExists('browser_screen_height', $data ?? [], null);
        $this->setIfExists('browser_screen_width', $data ?? [], null);
        $this->setIfExists('browser_tz', $data ?? [], null);
        $this->setIfExists('cp_bx', $data ?? [], null);
        $this->setIfExists('downgrade1', $data ?? [], null);
        $this->setIfExists('merchant_termurl', $data ?? [], null);
        $this->setIfExists('tds_policy', $data ?? [], null);
        $this->setIfExists('user_agent', $data ?? [], null);
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
     * @param string|null $accept_headers Required for 3DSv1. Optional if the `cp_bx` value is provided otherwise required for 3Dv2 processing operating in browser authentication mode.  The `cp_bx` value will override any value supplied to this field.  The content of the HTTP accept header as sent to the merchant from the cardholder's user agent.  This value will be validated by the ACS when the card holder authenticates themselves to verify that no intermediary is performing this action. Required for 3DSv1.
     *
     * @return self
     */
    public function setAcceptHeaders($accept_headers)
    {
        if (is_null($accept_headers)) {
            throw new \InvalidArgumentException('non-nullable accept_headers cannot be null');
        }
        $this->container['accept_headers'] = $accept_headers;

        return $this;
    }

    /**
     * Gets browser_color_depth
     *
     * @return string|null
     */
    public function getBrowserColorDepth()
    {
        return $this->container['browser_color_depth'];
    }

    /**
     * Sets browser_color_depth
     *
     * @param string|null $browser_color_depth BrowserColorDepth field used for 3DSv2 browser enablement. Recommendation is to use citypay.js and the `bx` function to gather this value.
     *
     * @return self
     */
    public function setBrowserColorDepth($browser_color_depth)
    {
        if (is_null($browser_color_depth)) {
            throw new \InvalidArgumentException('non-nullable browser_color_depth cannot be null');
        }
        $this->container['browser_color_depth'] = $browser_color_depth;

        return $this;
    }

    /**
     * Gets browser_ip
     *
     * @return string|null
     */
    public function getBrowserIp()
    {
        return $this->container['browser_ip'];
    }

    /**
     * Sets browser_ip
     *
     * @param string|null $browser_ip BrowserIP field used for 3DSv2 browser enablement. Recommendation is to use citypay.js and the `bx` function to gather this value.
     *
     * @return self
     */
    public function setBrowserIp($browser_ip)
    {
        if (is_null($browser_ip)) {
            throw new \InvalidArgumentException('non-nullable browser_ip cannot be null');
        }
        $this->container['browser_ip'] = $browser_ip;

        return $this;
    }

    /**
     * Gets browser_java_enabled
     *
     * @return string|null
     */
    public function getBrowserJavaEnabled()
    {
        return $this->container['browser_java_enabled'];
    }

    /**
     * Sets browser_java_enabled
     *
     * @param string|null $browser_java_enabled BrowserJavaEnabled field used for 3DSv2 browser enablement. Recommendation is to use citypay.js and the `bx` function to gather this value.
     *
     * @return self
     */
    public function setBrowserJavaEnabled($browser_java_enabled)
    {
        if (is_null($browser_java_enabled)) {
            throw new \InvalidArgumentException('non-nullable browser_java_enabled cannot be null');
        }
        $this->container['browser_java_enabled'] = $browser_java_enabled;

        return $this;
    }

    /**
     * Gets browser_language
     *
     * @return string|null
     */
    public function getBrowserLanguage()
    {
        return $this->container['browser_language'];
    }

    /**
     * Sets browser_language
     *
     * @param string|null $browser_language BrowserLanguage field used for 3DSv2 browser enablement. Recommendation is to use citypay.js and the `bx` function to gather this value.
     *
     * @return self
     */
    public function setBrowserLanguage($browser_language)
    {
        if (is_null($browser_language)) {
            throw new \InvalidArgumentException('non-nullable browser_language cannot be null');
        }
        $this->container['browser_language'] = $browser_language;

        return $this;
    }

    /**
     * Gets browser_screen_height
     *
     * @return string|null
     */
    public function getBrowserScreenHeight()
    {
        return $this->container['browser_screen_height'];
    }

    /**
     * Sets browser_screen_height
     *
     * @param string|null $browser_screen_height BrowserScreenHeight field used for 3DSv2 browser enablement. Recommendation is to use citypay.js and the `bx` function to gather this value.
     *
     * @return self
     */
    public function setBrowserScreenHeight($browser_screen_height)
    {
        if (is_null($browser_screen_height)) {
            throw new \InvalidArgumentException('non-nullable browser_screen_height cannot be null');
        }
        $this->container['browser_screen_height'] = $browser_screen_height;

        return $this;
    }

    /**
     * Gets browser_screen_width
     *
     * @return string|null
     */
    public function getBrowserScreenWidth()
    {
        return $this->container['browser_screen_width'];
    }

    /**
     * Sets browser_screen_width
     *
     * @param string|null $browser_screen_width BrowserScreenWidth field used for 3DSv2 browser enablement. Recommendation is to use citypay.js and the `bx` function to gather this value.
     *
     * @return self
     */
    public function setBrowserScreenWidth($browser_screen_width)
    {
        if (is_null($browser_screen_width)) {
            throw new \InvalidArgumentException('non-nullable browser_screen_width cannot be null');
        }
        $this->container['browser_screen_width'] = $browser_screen_width;

        return $this;
    }

    /**
     * Gets browser_tz
     *
     * @return string|null
     */
    public function getBrowserTz()
    {
        return $this->container['browser_tz'];
    }

    /**
     * Sets browser_tz
     *
     * @param string|null $browser_tz BrowserTZ offset field used for 3DSv2 browser enablement. Recommendation is to use citypay.js and the `bx` function to gather this value.
     *
     * @return self
     */
    public function setBrowserTz($browser_tz)
    {
        if (is_null($browser_tz)) {
            throw new \InvalidArgumentException('non-nullable browser_tz cannot be null');
        }
        $this->container['browser_tz'] = $browser_tz;

        return $this;
    }

    /**
     * Gets cp_bx
     *
     * @return string|null
     */
    public function getCpBx()
    {
        return $this->container['cp_bx'];
    }

    /**
     * Sets cp_bx
     *
     * @param string|null $cp_bx Required for 3DSv2.  Browser extension value produced by the citypay.js `bx` function. See [https://sandbox.citypay.com/3dsv2/bx](https://sandbox.citypay.com/3dsv2/bx) for  details.
     *
     * @return self
     */
    public function setCpBx($cp_bx)
    {
        if (is_null($cp_bx)) {
            throw new \InvalidArgumentException('non-nullable cp_bx cannot be null');
        }
        $this->container['cp_bx'] = $cp_bx;

        return $this;
    }

    /**
     * Gets downgrade1
     *
     * @return bool|null
     */
    public function getDowngrade1()
    {
        return $this->container['downgrade1'];
    }

    /**
     * Sets downgrade1
     *
     * @param bool|null $downgrade1 Where a merchant is configured for 3DSv2, setting this option will attempt to downgrade the transaction to  3DSv1.
     *
     * @return self
     */
    public function setDowngrade1($downgrade1)
    {
        if (is_null($downgrade1)) {
            throw new \InvalidArgumentException('non-nullable downgrade1 cannot be null');
        }
        $this->container['downgrade1'] = $downgrade1;

        return $this;
    }

    /**
     * Gets merchant_termurl
     *
     * @return string|null
     */
    public function getMerchantTermurl()
    {
        return $this->container['merchant_termurl'];
    }

    /**
     * Sets merchant_termurl
     *
     * @param string|null $merchant_termurl A controller URL for 3D-Secure processing that any response from an authentication request or challenge request should be sent to.  The controller should forward on the response from the URL back via this API for subsequent processing.
     *
     * @return self
     */
    public function setMerchantTermurl($merchant_termurl)
    {
        if (is_null($merchant_termurl)) {
            throw new \InvalidArgumentException('non-nullable merchant_termurl cannot be null');
        }
        $this->container['merchant_termurl'] = $merchant_termurl;

        return $this;
    }

    /**
     * Gets tds_policy
     *
     * @return string|null
     */
    public function getTdsPolicy()
    {
        return $this->container['tds_policy'];
    }

    /**
     * Sets tds_policy
     *
     * @param string|null $tds_policy A policy value which determines whether ThreeDSecure is enforced or bypassed. Note that this will only work for e-commerce transactions and accounts that have 3DSecure enabled and fully registered with Visa, MasterCard or American Express. It is useful when transactions may be wanted to bypass processing rules.  Note that this may affect the liability shift of transactions and may occur a higher fee with the acquiring bank.  Values are   `0` for the default policy (default value if not supplied). Your default values are determined by your account manager on setup of the account.   `1` for an enforced policy. Transactions will be enabled for 3DS processing   `2` to bypass. Transactions that are bypassed will switch off 3DS processing.
     *
     * @return self
     */
    public function setTdsPolicy($tds_policy)
    {
        if (is_null($tds_policy)) {
            throw new \InvalidArgumentException('non-nullable tds_policy cannot be null');
        }
        $this->container['tds_policy'] = $tds_policy;

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
     * @param string|null $user_agent Required for 3DSv1.  Optional if the `cp_bx` value is provided otherwise required 3Dv2 processing operating in browser authentication mode.  The `cp_bx` value will override any value supplied to this field.  The content of the HTTP user-agent header as sent to the merchant from the cardholder's user agent.  This value will be validated by the ACS when the card holder authenticates themselves to verify that no intermediary is performing this action. Required for 3DSv1.
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        if (is_null($user_agent)) {
            throw new \InvalidArgumentException('non-nullable user_agent cannot be null');
        }
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


