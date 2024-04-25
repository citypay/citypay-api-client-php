<?php
/**
 * ContactDetails
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
 * ContactDetails Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'area' => 'string',
        'company' => 'string',
        'country' => 'string',
        'email' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'mobile_no' => 'string',
        'postcode' => 'string',
        'telephone_no' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'area' => null,
        'company' => null,
        'country' => null,
        'email' => null,
        'firstname' => null,
        'lastname' => null,
        'mobile_no' => null,
        'postcode' => null,
        'telephone_no' => null,
        'title' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address1' => false,
        'address2' => false,
        'address3' => false,
        'area' => false,
        'company' => false,
        'country' => false,
        'email' => false,
        'firstname' => false,
        'lastname' => false,
        'mobile_no' => false,
        'postcode' => false,
        'telephone_no' => false,
        'title' => false
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
        'address1' => 'address1',
        'address2' => 'address2',
        'address3' => 'address3',
        'area' => 'area',
        'company' => 'company',
        'country' => 'country',
        'email' => 'email',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'mobile_no' => 'mobile_no',
        'postcode' => 'postcode',
        'telephone_no' => 'telephone_no',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'area' => 'setArea',
        'company' => 'setCompany',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'mobile_no' => 'setMobileNo',
        'postcode' => 'setPostcode',
        'telephone_no' => 'setTelephoneNo',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'area' => 'getArea',
        'company' => 'getCompany',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'mobile_no' => 'getMobileNo',
        'postcode' => 'getPostcode',
        'telephone_no' => 'getTelephoneNo',
        'title' => 'getTitle'
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
        $this->setIfExists('address1', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('address3', $data ?? [], null);
        $this->setIfExists('area', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('mobile_no', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('telephone_no', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
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

        if (!is_null($this->container['address1']) && (mb_strlen($this->container['address1']) > 50)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) > 50)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address3']) && (mb_strlen($this->container['address3']) > 50)) {
            $invalidProperties[] = "invalid value for 'address3', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['area']) && (mb_strlen($this->container['area']) > 50)) {
            $invalidProperties[] = "invalid value for 'area', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 50)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['mobile_no']) && (mb_strlen($this->container['mobile_no']) > 20)) {
            $invalidProperties[] = "invalid value for 'mobile_no', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['postcode']) && (mb_strlen($this->container['postcode']) > 16)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['telephone_no']) && (mb_strlen($this->container['telephone_no']) > 20)) {
            $invalidProperties[] = "invalid value for 'telephone_no', the character length must be smaller than or equal to 20.";
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
     * Gets address1
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string|null $address1 The first line of the address for the card holder.
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        if (is_null($address1)) {
            throw new \InvalidArgumentException('non-nullable address1 cannot be null');
        }
        if ((mb_strlen($address1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling ContactDetails., must be smaller than or equal to 50.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 The second line of the address for the card holder.
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }
        if ((mb_strlen($address2) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling ContactDetails., must be smaller than or equal to 50.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets address3
     *
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->container['address3'];
    }

    /**
     * Sets address3
     *
     * @param string|null $address3 The third line of the address for the card holder.
     *
     * @return self
     */
    public function setAddress3($address3)
    {
        if (is_null($address3)) {
            throw new \InvalidArgumentException('non-nullable address3 cannot be null');
        }
        if ((mb_strlen($address3) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address3 when calling ContactDetails., must be smaller than or equal to 50.');
        }

        $this->container['address3'] = $address3;

        return $this;
    }

    /**
     * Gets area
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param string|null $area The area such as city, department, parish for the card holder.
     *
     * @return self
     */
    public function setArea($area)
    {
        if (is_null($area)) {
            throw new \InvalidArgumentException('non-nullable area cannot be null');
        }
        if ((mb_strlen($area) > 50)) {
            throw new \InvalidArgumentException('invalid length for $area when calling ContactDetails., must be smaller than or equal to 50.');
        }

        $this->container['area'] = $area;

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
     * @param string|null $company The company name for the card holder if the contact is a corporate contact.
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        if ((mb_strlen($company) > 50)) {
            throw new \InvalidArgumentException('invalid length for $company when calling ContactDetails., must be smaller than or equal to 50.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The country code in ISO 3166 format. The country value may be used for fraud analysis and for   acceptance of the transaction.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ContactDetails., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ContactDetails., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

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
     * @param string|null $email An email address for the card holder which may be used for correspondence.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ContactDetails., must be smaller than or equal to 254.');
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
     * @param string|null $firstname The first name  of the card holder.
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        if (is_null($firstname)) {
            throw new \InvalidArgumentException('non-nullable firstname cannot be null');
        }
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
        if (is_null($lastname)) {
            throw new \InvalidArgumentException('non-nullable lastname cannot be null');
        }
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
     * @param string|null $mobile_no A mobile number for the card holder the mobile number is often required by delivery companies to ensure they are able to be in contact when required.
     *
     * @return self
     */
    public function setMobileNo($mobile_no)
    {
        if (is_null($mobile_no)) {
            throw new \InvalidArgumentException('non-nullable mobile_no cannot be null');
        }
        if ((mb_strlen($mobile_no) > 20)) {
            throw new \InvalidArgumentException('invalid length for $mobile_no when calling ContactDetails., must be smaller than or equal to 20.');
        }

        $this->container['mobile_no'] = $mobile_no;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode The postcode or zip code of the address which may be used for fraud analysis.
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            throw new \InvalidArgumentException('non-nullable postcode cannot be null');
        }
        if ((mb_strlen($postcode) > 16)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling ContactDetails., must be smaller than or equal to 16.');
        }

        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets telephone_no
     *
     * @return string|null
     */
    public function getTelephoneNo()
    {
        return $this->container['telephone_no'];
    }

    /**
     * Sets telephone_no
     *
     * @param string|null $telephone_no A telephone number for the card holder.
     *
     * @return self
     */
    public function setTelephoneNo($telephone_no)
    {
        if (is_null($telephone_no)) {
            throw new \InvalidArgumentException('non-nullable telephone_no cannot be null');
        }
        if ((mb_strlen($telephone_no) > 20)) {
            throw new \InvalidArgumentException('invalid length for $telephone_no when calling ContactDetails., must be smaller than or equal to 20.');
        }

        $this->container['telephone_no'] = $telephone_no;

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
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

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


